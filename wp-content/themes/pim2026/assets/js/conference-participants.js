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
  var sortOrder = document.getElementById('cpSortOrder');

  if (!grid || !searchInput || !institutionFilter || !sortOrder) {
    return;
  }

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

  function renderParticipants(data) {
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
        '<img src="' +
        escapeHtml(photo) +
        '" alt="' +
        escapeHtml(p.name) +
        '" loading="lazy" ' +
        'onerror="this.onerror=null;this.src=\'' +
        avatarUrl(p.name).replace(/'/g, "\\'") +
        "';\">" +
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
  }

  function handleFilterChange() {
    var searchTerm = searchInput.value.toLowerCase();
    var instTerm = institutionFilter.value;
    var sortTerm = sortOrder.value;

    var filtered = participants.filter(function (p) {
      var matchesSearch =
        p.name.toLowerCase().indexOf(searchTerm) !== -1 ||
        p.title.toLowerCase().indexOf(searchTerm) !== -1 ||
        p.institution.toLowerCase().indexOf(searchTerm) !== -1;
      var matchesInst = instTerm === 'all' || p.institution === instTerm;
      return matchesSearch && matchesInst;
    });

    if (sortTerm === 'name-asc') {
      filtered.sort(function (a, b) {
        return a.name.localeCompare(b.name);
      });
    } else if (sortTerm === 'name-desc') {
      filtered.sort(function (a, b) {
        return b.name.localeCompare(a.name);
      });
    } else if (sortTerm === 'inst-asc') {
      filtered.sort(function (a, b) {
        return (
          a.institution.localeCompare(b.institution) ||
          a.name.localeCompare(b.name)
        );
      });
    }

    renderParticipants(filtered);
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

    renderParticipants(participants);
    searchInput.addEventListener('input', handleFilterChange);
    institutionFilter.addEventListener('change', handleFilterChange);
    sortOrder.addEventListener('change', handleFilterChange);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
