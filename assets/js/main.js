/**
 * HI-GLOSS DESIGN — landing interactions.
 */

document.documentElement.classList.add('hg-js');

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    const header = document.querySelector('.hg-header');
    const navToggle = document.getElementById('hgNavToggle');
    const navMenu = document.getElementById('hgNavMenu');

    /* Sticky glass header */
    function updateHeader() {
        if (header) {
            header.classList.toggle('scrolled', window.scrollY > 24);
        }
    }

    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });

    /* Accessible mobile navigation */
    function setMenuState(open) {
        if (!navToggle || !navMenu) return;
        navToggle.setAttribute('aria-expanded', String(open));
        navToggle.setAttribute('aria-label', open ? 'Zamknij menu' : 'Otwórz menu');
        navMenu.classList.toggle('active', open);
        document.body.classList.toggle('menu-open', open);
    }

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function () {
            setMenuState(navToggle.getAttribute('aria-expanded') !== 'true');
        });

        navMenu.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                setMenuState(false);
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && navToggle.getAttribute('aria-expanded') === 'true') {
                setMenuState(false);
                navToggle.focus();
            }
        });

        window.addEventListener('resize', function () {
            if (window.innerWidth > 980) setMenuState(false);
        });
    }

    /* Progressive section reveal */
    const revealItems = document.querySelectorAll('.hg-reveal');
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

        revealItems.forEach(function (item) {
            revealObserver.observe(item);
        });
    } else {
        revealItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
    }

    /* Highlight the current one-page section in desktop navigation */
    const sectionLinks = Array.from(document.querySelectorAll('.hg-nav-link[href*="#"]'));
    const trackedSections = sectionLinks.map(function (link) {
        const hash = link.getAttribute('href').split('#')[1];
        return hash ? document.getElementById(hash) : null;
    }).filter(Boolean);

    if ('IntersectionObserver' in window && trackedSections.length) {
        const sectionObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                sectionLinks.forEach(function (link) {
                    link.classList.toggle('is-active', link.getAttribute('href').endsWith('#' + entry.target.id));
                });
            });
        }, { rootMargin: '-25% 0px -65% 0px', threshold: 0 });

        trackedSections.forEach(function (section) {
            sectionObserver.observe(section);
        });
    }

    /* Keep the FAQ concise: opening one item closes its siblings. */
    document.querySelectorAll('.hg-accordion details').forEach(function (item) {
        item.addEventListener('toggle', function () {
            if (!item.open) return;
            item.parentElement.querySelectorAll('details[open]').forEach(function (other) {
                if (other !== item) other.open = false;
            });
        });
    });

    /* AJAX quote form */
    const quoteForm = document.getElementById('hgQuoteForm');
    const formStatus = document.getElementById('hgFormStatus');

    function showFormStatus(message, type) {
        if (!formStatus) return;
        formStatus.textContent = message;
        formStatus.className = 'hg-form-status is-visible ' + (type === 'success' ? 'is-success' : 'is-error');
    }

    if (quoteForm) {
        quoteForm.querySelectorAll('[required]').forEach(function (field) {
            field.addEventListener('input', function () {
                field.removeAttribute('aria-invalid');
            });
            field.addEventListener('change', function () {
                field.removeAttribute('aria-invalid');
            });
        });

        quoteForm.addEventListener('submit', async function (event) {
            event.preventDefault();

            if (!quoteForm.checkValidity()) {
                quoteForm.querySelectorAll(':invalid').forEach(function (field) {
                    field.setAttribute('aria-invalid', 'true');
                });
                quoteForm.reportValidity();
                showFormStatus('Uzupełnij wymagane pola i zaznacz zgodę na kontakt.', 'error');
                return;
            }

            if (typeof higlossData === 'undefined' || !higlossData.ajaxurl) {
                showFormStatus('Formularz jest chwilowo niedostępny. Zadzwoń pod numer 605 088 065.', 'error');
                return;
            }

            const submitButton = quoteForm.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;
            const data = new FormData(quoteForm);
            data.append('action', 'higloss_quote');
            data.append('nonce', higlossData.nonce);
            data.append('vehicle', '');
            data.append('finish', '');

            submitButton.disabled = true;
            submitButton.textContent = 'Wysyłanie…';
            if (formStatus) formStatus.className = 'hg-form-status';

            try {
                const response = await fetch(higlossData.ajaxurl, {
                    method: 'POST',
                    credentials: 'same-origin',
                    body: data,
                });
                const result = await response.json();

                if (!response.ok || !result.success) {
                    throw new Error(result.data && result.data.message ? result.data.message : 'Nie udało się wysłać formularza.');
                }

                showFormStatus(result.data.message, 'success');
                quoteForm.reset();
            } catch (error) {
                showFormStatus(error.message || 'Wystąpił błąd. Spróbuj ponownie lub zadzwoń pod numer 605 088 065.', 'error');
            } finally {
                submitButton.disabled = false;
                submitButton.innerHTML = originalButtonText;
            }
        });
    }

    /* Legacy before/after slider support for older templates. */
    const sliderBox = document.getElementById('hgBeforeAfterSlider');
    if (sliderBox) {
        const afterLayer = sliderBox.querySelector('.hg-slider-after');
        const handle = sliderBox.querySelector('.hg-slider-handle');
        let isDragging = false;

        function updateSliderPosition(clientX) {
            const rect = sliderBox.getBoundingClientRect();
            const position = Math.min(Math.max(clientX - rect.left, 0), rect.width);
            const percentage = (position / rect.width) * 100;
            afterLayer.style.width = percentage + '%';
            handle.style.left = percentage + '%';
        }

        sliderBox.addEventListener('pointerdown', function (event) {
            isDragging = true;
            sliderBox.setPointerCapture(event.pointerId);
            updateSliderPosition(event.clientX);
        });
        sliderBox.addEventListener('pointermove', function (event) {
            if (isDragging) updateSliderPosition(event.clientX);
        });
        sliderBox.addEventListener('pointerup', function () {
            isDragging = false;
        });
        sliderBox.addEventListener('pointercancel', function () {
            isDragging = false;
        });
    }
});
