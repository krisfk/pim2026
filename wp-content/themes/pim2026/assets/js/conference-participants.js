(function () {
  'use strict';

  var config = window.pimConferenceParticipants;
  var dataEl = document.getElementById('cpParticipantsData');
  if ((!config || !Array.isArray(config.participants)) && dataEl) {
    try {
      config = JSON.parse(dataEl.textContent);
    } catch (e) {
      config = null;
    }
  }
  if (!config || !Array.isArray(config.participants)) {
    return;
  }

  var participants = config.participants;
  var avatarBase = config.avatarBase || '';

  var grid = document.getElementById('cpParticipantGrid');
  var searchInput = document.getElementById('cpSearchInput');
  var institutionFilter = document.getElementById('cpInstitutionFilter');
  var regionFilter = document.getElementById('cpRegionFilter');
  var sortOrder = document.getElementById('cpSortOrder');

  if (!grid || !searchInput || !institutionFilter || !regionFilter || !sortOrder) {
    return;
  }

  var filteredList = participants.slice();

  function escapeHtml(str) {
    return String(str)
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;');
  }

  function avatarUrl(name) {
    return (
      avatarBase +
      encodeURIComponent(name) +
      '&background=f4f4f4&color=300353&size=400'
    );
  }

  function markPhotoFrameLoaded(img) {
    var frame = img.closest('.photo-frame');
    if (frame) {
      frame.classList.add('is-loaded');
    }
  }

  function initParticipantPhotoFrames(root) {
    var photos = (root || grid).querySelectorAll('.cp-participant-photo');
    photos.forEach(function (img) {
      if (img.complete && img.naturalWidth > 0) {
        markPhotoFrameLoaded(img);
      } else {
        img.addEventListener('load', function onPhotoLoad() {
          markPhotoFrameLoaded(img);
          img.removeEventListener('load', onPhotoLoad);
        });
      }
    });
  }

  function renderParticipantCards(data) {
    grid.innerHTML = '';

    if (data.length === 0) {
      grid.innerHTML =
        '<div class="cp-empty">No delegates found matching your criteria.</div>';
      return;
    }

    data.forEach(function (p) {
      var card = document.createElement('div');
      card.className = 'participant-card';
      var photo = p.photo || avatarUrl(p.name);
      card.innerHTML =
        '<div class="photo-frame">' +
        '<img class="cp-participant-photo" src="' +
        escapeHtml(photo) +
        '" alt="' +
        escapeHtml(p.name) +
        '" width="480" height="480" loading="lazy" decoding="async" ' +
        'onerror="this.onerror=null;this.src=\'' +
        avatarUrl(p.name).replace(/'/g, "\\'") +
        '\';this.closest(\'.photo-frame\').classList.add(\'is-loaded\');">' +
        '</div>' +
        '<div class="info-content">' +
        '<div class="p-name">' +
        escapeHtml(p.name) +
        '</div>' +
        '<div class="p-title">' +
        escapeHtml(p.title) +
        '</div>' +
        '<div class="p-divider"></div>' +
        '<div class="p-institution">' +
        escapeHtml(p.institution) +
        '</div>' +
        '<div class="p-region">' +
        escapeHtml(p.region) +
        '</div>' +
        '</div>';
      grid.appendChild(card);
    });

    initParticipantPhotoFrames(grid);
  }

  function renderCurrentView() {
    renderParticipantCards(filteredList);
  }

  function handleFilterChange() {
    var searchTerm = searchInput.value.toLowerCase();
    var instTerm = institutionFilter.value;
    var regionTerm = regionFilter.value;
    var sortTerm = sortOrder.value;

    filteredList = participants.filter(function (p) {
      var region = (p.region || '').toLowerCase();
      var matchesSearch =
        p.name.toLowerCase().indexOf(searchTerm) !== -1 ||
        p.title.toLowerCase().indexOf(searchTerm) !== -1 ||
        p.institution.toLowerCase().indexOf(searchTerm) !== -1 ||
        region.indexOf(searchTerm) !== -1;
      var matchesInst = instTerm === 'all' || p.institution === instTerm;
      var matchesRegion =
        regionTerm === 'all' || (p.region || '') === regionTerm;
      return matchesSearch && matchesInst && matchesRegion;
    });

    if (sortTerm === 'name-asc') {
      filteredList.sort(function (a, b) {
        return a.name.localeCompare(b.name);
      });
    } else if (sortTerm === 'name-desc') {
      filteredList.sort(function (a, b) {
        return b.name.localeCompare(a.name);
      });
    } else if (sortTerm === 'inst-asc') {
      filteredList.sort(function (a, b) {
        return (
          a.institution.localeCompare(b.institution) ||
          a.name.localeCompare(b.name)
        );
      });
    }

    renderCurrentView();
  }

  function init() {
    var institutions = [];
    participants.forEach(function (p) {
      if (institutions.indexOf(p.institution) === -1) {
        institutions.push(p.institution);
      }
    });
    institutions.sort(function (a, b) {
      return a.localeCompare(b);
    });

    institutions.forEach(function (inst) {
      var opt = document.createElement('option');
      opt.value = inst;
      opt.textContent = inst;
      institutionFilter.appendChild(opt);
    });

    var regions = [];
    participants.forEach(function (p) {
      var region = (p.region || '').trim();
      if (region && regions.indexOf(region) === -1) {
        regions.push(region);
      }
    });
    regions.sort(function (a, b) {
      return a.localeCompare(b);
    });

    regions.forEach(function (region) {
      var opt = document.createElement('option');
      opt.value = region;
      opt.textContent = region;
      regionFilter.appendChild(opt);
    });

    searchInput.addEventListener('input', handleFilterChange);
    institutionFilter.addEventListener('change', handleFilterChange);
    regionFilter.addEventListener('change', handleFilterChange);
    sortOrder.addEventListener('change', handleFilterChange);

    handleFilterChange();
    initParticipantPhotoFrames(grid);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
