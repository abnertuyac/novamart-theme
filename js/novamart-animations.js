(function () {
  'use strict';

  /* ── Intersection Observer ── */
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('nm-in');
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  function observe(el) { observer.observe(el); }

  /* ── Assign animation classes to Elementor widgets ── */
  function setupWidgets() {
    document.querySelectorAll('.elementor-section').forEach(function (section) {
      // Detect columns inside this section
      var cols = section.querySelectorAll(
        ':scope > .elementor-container > .elementor-row > .elementor-column, ' +
        ':scope > .elementor-container > .elementor-column'
      );

      if (cols.length > 1) {
        // Multi-column → stagger each column
        cols.forEach(function (col, colIdx) {
          col.querySelectorAll('.elementor-widget').forEach(function (w) {
            w.classList.add('nm-animate');
            w.style.setProperty('--nm-delay', (colIdx * 0.13) + 's');
            observe(w);
          });
        });
      } else {
        // Single column → stagger widgets one by one
        section.querySelectorAll('.elementor-widget').forEach(function (w, i) {
          w.classList.add('nm-animate');
          w.style.setProperty('--nm-delay', Math.min(i * 0.09, 0.36) + 's');
          observe(w);
        });
      }
    });
  }

  /* ── Hero: load animation (already in viewport, no observer needed) ── */
  function setupHero() {
    var heroWidgets = document.querySelectorAll(
      '.elementor-section:first-of-type .elementor-widget'
    );
    heroWidgets.forEach(function (w, i) {
      w.classList.add('nm-hero-in');
      w.style.animationDelay = (i * 0.15) + 's';
    });
  }

  /* ── Floating icon in promo banner ── */
  function setupPromoFloat() {
    var promoIcon = document.querySelector('.promo-icon');
    if (promoIcon) promoIcon.classList.add('nm-float');
  }

  /* ── Counter: trigger Elementor's own counter when in view ── */
  function setupCounters() {
    document.querySelectorAll('.elementor-counter-number').forEach(function (el) {
      el.closest('.elementor-widget') &&
        el.closest('.elementor-widget').classList.add('nm-counter-wrap');
    });
  }

  /* ── Button pulse on hover via class (CSS handles it) ── */
  function setupButtons() {
    document.querySelectorAll('.elementor-button').forEach(function (btn) {
      btn.classList.add('nm-btn-pulse');
    });
  }

  /* ── Typing effect for hero heading ── */
  function setupHeroHighlight() {
    var heroSpan = document.querySelector(
      '.elementor-section:first-of-type .elementor-heading-title span'
    );
    if (heroSpan) heroSpan.classList.add('nm-highlight-text');
  }

  /* ── Scroll to top button ── */
  function setupScrollTop() {
    var btn = document.createElement('button');
    btn.id = 'nm-scroll-top';
    btn.setAttribute('aria-label', 'Back to top');
    btn.innerHTML = '<i class="fa fa-chevron-up"></i>';
    document.body.appendChild(btn);

    window.addEventListener('scroll', function () {
      if (window.scrollY > 400) {
        btn.classList.add('nm-visible');
      } else {
        btn.classList.remove('nm-visible');
      }
    }, { passive: true });

    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ── Init ── */
  function init() {
    setupHero();
    setupWidgets();
    setupPromoFloat();
    setupCounters();
    setupButtons();
    setupHeroHighlight();
    setupScrollTop();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
