#!/usr/bin/env python3
"""Regenerate theme inc/conference-participants.json from delegation-list.xlsx + photo files."""

import json
import re
import unicodedata
import zipfile
import xml.etree.ElementTree as ET
from pathlib import Path

ROOT = Path(__file__).resolve().parent
JSON_OUT = ROOT.parent / "wp-content/themes/pim2026/inc/conference-participants.json"


def to_ascii_folder(name: str) -> str:
    n = unicodedata.normalize("NFKD", name)
    n = n.encode("ascii", "ignore").decode("ascii")
    return n.replace("&", "and").strip()


def norm_key(s: str) -> str:
    s = (s or "").replace("\xa0", " ").strip().lower()
    s = unicodedata.normalize("NFKD", s)
    s = s.encode("ascii", "ignore").decode("ascii")
    return re.sub(r"\s+", " ", s)


MANUAL_PHOTOS = {
    norm_key("Luisa Bastos Longo"): ("FGV-EAESP, Sao Paulo School of Business Administration", "19_luisa-longo.jpg"),
    norm_key("Julia von Maltzan Pacheco"): ("FGV-EAESP, Sao Paulo School of Business Administration", "162_juliavon-maltzan-pacheco.jpg"),
    norm_key("Başak Yalman"): ("Koc University", "164_basak-yalman.jpg"),
    norm_key("Christy Poon"): ("CUHK Business School", "christy-poon.png"),
}


def parse_xlsx(path: Path):
    with zipfile.ZipFile(path) as z:
        ss = ET.fromstring(z.read("xl/sharedStrings.xml"))
        strings = []
        for si in ss:
            texts = []
            for t in si.iter("{http://schemas.openxmlformats.org/spreadsheetml/2006/main}t"):
                if t.text:
                    texts.append(t.text)
            strings.append("".join(texts))
        sheet = ET.fromstring(z.read("xl/worksheets/sheet1.xml"))
        rows = []
        for row in sheet.iter("{http://schemas.openxmlformats.org/spreadsheetml/2006/main}row"):
            cells = []
            for c in row:
                t = c.get("t")
                v = c.find("{http://schemas.openxmlformats.org/spreadsheetml/2006/main}v")
                if v is None or v.text is None:
                    cells.append("")
                elif t == "s":
                    cells.append(strings[int(v.text)])
                else:
                    cells.append(v.text)
            rows.append(cells)
    header_idx = next(i for i, r in enumerate(rows) if r and r[0] == "Name")
    people = []
    for r in rows[header_idx + 1 :]:
        if len(r) < 4 or not r[0].strip():
            continue
        inst = r[1].replace("\n(in alphabetical order)", "").replace("\xa0", " ").strip()
        people.append(
            {
                "name": r[0].strip(),
                "institution": inst,
                "title": r[2].strip(),
                "region": r[3].strip(),
            }
        )
    return people


def photo_name_from_file(fname: str) -> str:
    base = Path(fname).stem
    name_part = base.split("_", 1)[1] if "_" in base else base
    return re.sub(r"^(Prof\.|Dr\.?)\s*", "", name_part, flags=re.I).strip()


def tokens(s: str) -> set[str]:
    s = norm_key(s)
    return set(re.sub(r"[^a-z0-9\s]", " ", s).split())


def main():
    people = parse_xlsx(ROOT / "delegation-list.xlsx")
    folders = {to_ascii_folder(f.name): f for f in ROOT.iterdir() if f.is_dir()}
    out = []

    for p in people:
        inst_folder = None
        folder = None
        for fn, fp in folders.items():
            if norm_key(fn) == norm_key(p["institution"]) or norm_key(p["institution"]).startswith(norm_key(fn)):
                folder = fp
                inst_folder = fn
                break
            if norm_key(p["institution"]) in norm_key(fn) or norm_key(fn) in norm_key(p["institution"]):
                folder = fp
                inst_folder = fn
                break

        photo = ""
        manual = MANUAL_PHOTOS.get(norm_key(p["name"]))
        if manual:
            inst_folder, fname = manual
            candidate = ROOT / inst_folder / fname
            if candidate.is_file():
                photo = f"photo-booklet/{inst_folder}/{fname}"
        elif folder:
            files = [
                f
                for f in folder.iterdir()
                if f.suffix.lower() in (".jpg", ".jpeg", ".png", ".gif", ".webp") and not f.name.startswith(".")
            ]
            pt = tokens(p["name"])
            best = None
            best_score = 0
            for f in files:
                score = len(pt & tokens(photo_name_from_file(f.name)))
                if score > best_score:
                    best_score = score
                    best = f
            if best_score >= 1 and best:
                photo = f"photo-booklet/{inst_folder}/{best.name}"

        out.append({**p, "photo": photo})

    JSON_OUT.write_text(json.dumps(out, ensure_ascii=True, indent=2) + "\n")
    missing = [x["name"] for x in out if not x["photo"]]
    print(f"Wrote {len(out)} participants to {JSON_OUT}")
    if missing:
        print("Missing photos:", ", ".join(missing))


if __name__ == "__main__":
    main()
