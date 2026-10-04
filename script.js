const header = document.querySelector('.site-header');
const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.site-nav a');
const faqItems = document.querySelectorAll('.faq-item');
const heroLines = document.querySelectorAll('.hero-copy h1 .hero-line');
const heroSlideshow = document.querySelector('.hero-slideshow');
const heroSlides = Array.from(document.querySelectorAll('.hero-slide'));
const heroSlideDots = Array.from(document.querySelectorAll('.hero-slide-dot'));
const cookieBanner = document.querySelector('.cookie-banner');
const cookieAcceptButton = document.querySelector('.cookie-accept');
const cookieDeclineButton = document.querySelector('.cookie-decline');
const scrollTopButton = document.querySelector('.scroll-top-button');
const siteFooter = document.querySelector('.site-footer');
const consultationForm = document.querySelector('.consultation-form');
const consultationStatus = document.querySelector('.consultation-status');
const reduceMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
const mobileCopyQuery = window.matchMedia('(max-width: 520px)');
let lastScrollY = window.scrollY;
let heroSlideIndex = 0;
let heroSlideIntervalId = 0;

const responsiveCopyTargets = Array.from(document.querySelectorAll('[data-mobile-text]'));

const syncResponsiveCopy = () => {
  responsiveCopyTargets.forEach((target) => {
    if (!target.dataset.desktopText) {
      target.dataset.desktopText = target.textContent.replace(/\s+/g, ' ').trim();
    }

    target.textContent = mobileCopyQuery.matches
      ? target.dataset.mobileText
      : target.dataset.desktopText;
  });
};

if (responsiveCopyTargets.length) {
  syncResponsiveCopy();
  mobileCopyQuery.addEventListener('change', syncResponsiveCopy);
}

const syncScrollDirection = () => {
  const nextScrollY = window.scrollY;
  const isScrollingUp = nextScrollY < lastScrollY;
  const isScrollingDown = nextScrollY > lastScrollY + 2;

  document.body.classList.toggle('is-scrolling-up', isScrollingUp);
  document.body.classList.toggle('is-scrolling-down', isScrollingDown);

   if (scrollTopButton) {
    scrollTopButton.classList.toggle('is-visible', nextScrollY > 540);
  }

  if (siteFooter) {
    const footerTop = siteFooter.getBoundingClientRect().top;
    document.body.classList.toggle('footer-in-view', footerTop < window.innerHeight - 40);
  }

  lastScrollY = nextScrollY;
};

syncScrollDirection();
window.addEventListener('scroll', syncScrollDirection, { passive: true });

if (header) {
  const syncHeaderState = () => {
    header.classList.toggle('is-scrolled', window.scrollY > 16);
  };

  syncHeaderState();
  window.addEventListener('scroll', syncHeaderState, { passive: true });
}

heroLines.forEach((line, lineIndex) => {
  if (line.querySelector('.hero-word')) {
    return;
  }

  const sourceText = (line.dataset.heroText || line.textContent)
    .replace(/^_+/, '')
    .replace(/\s+/g, ' ')
    .trim();
  const words = sourceText.split(/\s+/);
  line.textContent = '';

  words.forEach((word, wordIndex) => {
    const wordSpan = document.createElement('span');
    wordSpan.className = 'hero-word';
    wordSpan.textContent = word;
    line.appendChild(wordSpan);

    if (reduceMotionQuery.matches) {
      wordSpan.classList.add('is-visible');
    } else {
      const delay = 140 + lineIndex * 260 + wordIndex * 85;
      window.setTimeout(() => {
        wordSpan.classList.add('is-visible');
      }, delay);
    }

    if (wordIndex < words.length - 1) {
      line.appendChild(document.createTextNode(' '));
    }
  });
});

if (heroSlides.length) {
  const setHeroSlide = (nextIndex) => {
    heroSlideIndex = (nextIndex + heroSlides.length) % heroSlides.length;

    heroSlides.forEach((slide, index) => {
      const isActive = index === heroSlideIndex;
      slide.classList.toggle('is-active', isActive);
      slide.setAttribute('aria-hidden', String(!isActive));
    });

    heroSlideDots.forEach((dot, index) => {
      const isActive = index === heroSlideIndex;
      dot.classList.toggle('is-active', isActive);
      dot.setAttribute('aria-selected', String(isActive));
    });
  };

  const stopHeroSlideshow = () => {
    if (heroSlideIntervalId) {
      window.clearInterval(heroSlideIntervalId);
      heroSlideIntervalId = 0;
    }
  };

  const startHeroSlideshow = () => {
    stopHeroSlideshow();

    if (reduceMotionQuery.matches || heroSlides.length < 2) {
      return;
    }

    heroSlideIntervalId = window.setInterval(() => {
      setHeroSlide(heroSlideIndex + 1);
    }, 5500);
  };

  setHeroSlide(0);

  heroSlideDots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      setHeroSlide(index);
      startHeroSlideshow();
    });
  });

  if (heroSlideshow) {
    heroSlideshow.addEventListener('mouseenter', stopHeroSlideshow);
    heroSlideshow.addEventListener('mouseleave', startHeroSlideshow);
    heroSlideshow.addEventListener('focusin', stopHeroSlideshow);
    heroSlideshow.addEventListener('focusout', (event) => {
      if (!heroSlideshow.contains(event.relatedTarget)) {
        startHeroSlideshow();
      }
    });
  }

  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      stopHeroSlideshow();
      return;
    }

    startHeroSlideshow();
  });

  startHeroSlideshow();
}

const revealTargets = Array.from(document.querySelectorAll(
  '.section-heading, .problem-brief, .solution-copy, .countries-copy, .section-testimonials .section-heading, .section-proof .section-heading, .section-faq .section-heading, .consultation-content-form, .about-hero-copy, .section-about-story .section-heading, .section-about-values .section-heading, .section-about-capabilities .section-heading, .section-about-proof .section-heading, .section-about-contact .about-cta > div'
));

if ('IntersectionObserver' in window && revealTargets.length && !reduceMotionQuery.matches) {
  const revealObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        var t = entry.target;
        t.classList.add('is-visible');
        observer.unobserve(t);
        t.addEventListener('transitionend', function() {
          t.style.transitionDelay = '';
        }, { once: true });
      });
    },
    {
      threshold: 0.18,
      rootMargin: '0px 0px -10% 0px',
    }
  );

  revealTargets.forEach((target, index) => {
    target.classList.add('reveal-on-scroll');
    target.style.transitionDelay = `${Math.min(index % 3, 2) * 80}ms`;
    revealObserver.observe(target);
  });
} else {
  revealTargets.forEach((target) => {
    target.classList.add('is-visible');
  });
}

if (navToggle && header) {
  const syncNavState = (isOpen) => {
    header.classList.toggle('nav-open', isOpen);
    document.body.classList.toggle('nav-modal-open', isOpen);
    navToggle.setAttribute('aria-expanded', String(isOpen));
    navToggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
  };

  syncNavState(false);

  navToggle.addEventListener('click', () => {
    syncNavState(!header.classList.contains('nav-open'));
  });

  navLinks.forEach((link) => {
    link.addEventListener('click', () => {
      syncNavState(false);
    });
  });
}

faqItems.forEach((item) => {
  const trigger = item.querySelector('.faq-trigger');

  if (!trigger) {
    return;
  }

  trigger.addEventListener('click', () => {
    const isActive = item.classList.contains('active');

    faqItems.forEach((faqItem) => {
      faqItem.classList.remove('active');
      const faqTrigger = faqItem.querySelector('.faq-trigger');
      if (faqTrigger) {
        faqTrigger.setAttribute('aria-expanded', 'false');
      }
    });

    if (!isActive) {
      item.classList.add('active');
      trigger.setAttribute('aria-expanded', 'true');
    }
  });
});

if (cookieBanner && cookieAcceptButton && cookieDeclineButton) {
  const cookiePreference = window.localStorage.getItem('stulovax-cookie-consent');

  if (cookiePreference) {
    cookieBanner.classList.add('is-hidden');
  }

  const setCookiePreference = (value) => {
    window.localStorage.setItem('stulovax-cookie-consent', value);
    cookieBanner.classList.add('is-hidden');
  };

  cookieAcceptButton.addEventListener('click', () => {
    setCookiePreference('accepted');
  });

  cookieDeclineButton.addEventListener('click', () => {
    setCookiePreference('declined');
  });
}

if (scrollTopButton) {
  scrollTopButton.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: reduceMotionQuery.matches ? 'auto' : 'smooth',
    });
  });
}

if (consultationForm && consultationStatus && window.location.protocol === 'file:') {
  consultationForm.addEventListener('submit', (event) => {
    event.preventDefault();

    if (!consultationForm.reportValidity()) {
      consultationStatus.textContent = 'Please complete the required form fields before continuing.';
      consultationStatus.classList.add('is-visible', 'is-error');
      consultationStatus.classList.remove('is-success');
      return;
    }

    const successRedirect = consultationForm.querySelector('input[name="success_redirect"]')?.value || 'https://calendly.com/stulovax';

    consultationStatus.textContent = '';
    consultationStatus.classList.remove('is-visible', 'is-success', 'is-error');

    window.setTimeout(() => {
      window.open(successRedirect, '_blank', 'noopener');
    }, 260);
  });
}

if (consultationStatus) {
  const consultationState = new URLSearchParams(window.location.search).get('consultation');
  const consultationMessages = {
    error: 'We could not send your details just now. Please try again or contact Stulovax on WhatsApp.',
    missing: 'Please complete the required form fields before continuing to the calendar.',
    invalid: 'Please enter a valid email address so Stulovax can reply to you.',
  };

  if (consultationState && consultationMessages[consultationState]) {
    consultationStatus.textContent = consultationMessages[consultationState];
    consultationStatus.classList.add('is-visible', 'is-error');
  }
}

// ── AE-style scroll-triggered entrance animations ──────────────────
(function initSectionAnimations() {
  if (!('IntersectionObserver' in window) || reduceMotionQuery.matches) return;

  function tag(selector, dir, stagger) {
    document.querySelectorAll(selector).forEach(function(el, i) {
      if (el.classList.contains('reveal-on-scroll')) return; // already handled
      el.classList.add('sx-hide', 'sx-' + dir);
      if (stagger) el.style.transitionDelay = (i * 110) + 'ms';
    });
  }

  // ── Directional panels (slide from side) ──
  tag('.problem-visual',      'right');
  tag('.solution-visual',     'left');
  tag('.ceo-compare',         'left');
  tag('.ceo-visual',          'right');
  tag('.countries-visual',    'left');
  tag('.proof-visual',        'right');
  tag('.proof-copy',          'left');
  tag('.faq-visual',          'right');

  // ── Scale-in elements ──
  tag('.consultation-card',   'scale');
  tag('.metrics-panel',       'scale');

  // ── Staggered card grids ──
  tag('.problem-summary',     'up', true);
  tag('.service-card',        'up', true);
  tag('.service-offer-card',  'up', true);
  tag('.compare-column',      'up', true);
  tag('.quote-card',          'up', true);
  tag('.faq-item',            'up', true);
  tag('.signal-card',         'up', true);
  tag('.proof-badge',         'scale', true);
  tag('.timeline-step',       'up', true);
  tag('.benefit-card',        'up', true);
  tag('.country-card',        'up', true);

  var sxObs = new IntersectionObserver(function(entries, obs) {
    entries.forEach(function(entry) {
      if (!entry.isIntersecting) return;
      var el = entry.target;
      // Add will-change only just before animating, not upfront for all elements
      el.style.willChange = 'opacity, transform';
      el.classList.add('sx-show');
      obs.unobserve(el);
      // Clean up: remove animation classes + inline styles after transition ends
      el.addEventListener('transitionend', function cleanup() {
        el.classList.remove('sx-hide', 'sx-show');
        el.style.transitionDelay = '';
        el.style.willChange = '';
        el.removeEventListener('transitionend', cleanup);
      }, { once: true });
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -48px 0px' });

  document.querySelectorAll('.sx-hide').forEach(function(el) {
    sxObs.observe(el);
  });
}());

