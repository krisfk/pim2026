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
  var perPage = parseInt(config.perPage, 10) || 10;

  var grid = document.getElementById('cpParticipantGrid');
  var pagination = document.getElementById('cpPagination');
  var searchInput = document.getElementById('cpSearchInput');
  var institutionFilter = document.getElementById('cpInstitutionFilter');
  var sortOrder = document.getElementById('cpSortOrder');

  if (!grid || !searchInput || !institutionFilter || !sortOrder || !pagination) {
    return;
  }

  var currentPage = 1;
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

  function renderParticipantCards(data) {
    grid.innerHTML = '';

    if (data.length === 0) {
      grid.innerHTML =
        '<div class="cp-empty">No delegates found matching your criteria.</div>';
      pagination.innerHTML = '';
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

  function getPageWindow(page, totalPages, windowSize) {
    windowSize = windowSize || 5;
    if (totalPages <= windowSize) {
      var all = [];
      for (var n = 1; n <= totalPages; n++) {
        all.push(n);
      }
      return all;
    }
    var start = Math.max(1, page - Math.floor(windowSize / 2));
    var end = start + windowSize - 1;
    if (end > totalPages) {
      end = totalPages;
      start = end - windowSize + 1;
    }
    var pages = [];
    for (var i = start; i <= end; i++) {
      pages.push(i);
    }
    return pages;
  }

  function renderPagination(totalItems, page) {
    var totalPages = Math.max(1, Math.ceil(totalItems / perPage));
    if (page > totalPages) {
      page = totalPages;
    }
    if (page < 1) {
      page = 1;
    }
    currentPage = page;

    if (totalItems === 0) {
      pagination.innerHTML = '';
      return;
    }

    var pageNumbers = getPageWindow(page, totalPages, 5);
    var html = '<div class="cp-pagination-controls">';

    html +=
      '<button type="button" class="cp-page-btn cp-page-nav" data-page="prev" ' +
      (page <= 1 ? 'disabled' : '') +
      '><span class="cp-page-icon" aria-hidden="true">&lt;</span> Back</button>';

    pageNumbers.forEach(function (num) {
      html +=
        '<button type="button" class="cp-page-btn cp-page-num' +
        (num === page ? ' is-active' : '') +
        '" data-page="' +
        num +
        '">' +
        num +
        '</button>';
    });

    html +=
      '<button type="button" class="cp-page-btn cp-page-nav" data-page="next" ' +
      (page >= totalPages ? 'disabled' : '') +
      '>Next <span class="cp-page-icon" aria-hidden="true">&gt;</span></button></div>';

    pagination.innerHTML = html;
  }

  function renderCurrentView() {
    var total = filteredList.length;
    var totalPages = Math.max(1, Math.ceil(total / perPage));
    if (currentPage > totalPages) {
      currentPage = totalPages;
    }
    var start = (currentPage - 1) * perPage;
    var pageItems = filteredList.slice(start, start + perPage);
    renderParticipantCards(pageItems);
    renderPagination(total, currentPage);
  }

  function handleFilterChange() {
    var searchTerm = searchInput.value.toLowerCase();
    var instTerm = institutionFilter.value;
    var sortTerm = sortOrder.value;

    filteredList = participants.filter(function (p) {
      var matchesSearch =
        p.name.toLowerCase().indexOf(searchTerm) !== -1 ||
        p.title.toLowerCase().indexOf(searchTerm) !== -1 ||
        p.institution.toLowerCase().indexOf(searchTerm) !== -1;
      var matchesInst = instTerm === 'all' || p.institution === instTerm;
      return matchesSearch && matchesInst;
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

    currentPage = 1;
    renderCurrentView();
  }

  function handlePaginationClick(event) {
    var btn = event.target.closest('[data-page]');
    if (!btn || btn.disabled) {
      return;
    }
    var action = btn.getAttribute('data-page');
    var totalPages = Math.max(1, Math.ceil(filteredList.length / perPage));

    if (action === 'prev') {
      currentPage = Math.max(1, currentPage - 1);
    } else if (action === 'next') {
      currentPage = Math.min(totalPages, currentPage + 1);
    } else {
      currentPage = parseInt(action, 10) || 1;
    }

    renderCurrentView();
    grid.scrollIntoView({ behavior: 'smooth', block: 'start' });
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

    pagination.addEventListener('click', handlePaginationClick);
    searchInput.addEventListener('input', handleFilterChange);
    institutionFilter.addEventListener('change', handleFilterChange);
    sortOrder.addEventListener('change', handleFilterChange);

    handleFilterChange();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
