/**
 * HI-GLOSS DESIGN — landing interactions & advanced gallery features.
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

    /* ==========================================
       Custom styled dropdowns for the quote form
       (native <select> stays as the data source)
       ========================================== */
    function initCustomSelects() {
        document.querySelectorAll('.hg-quote-form select').forEach(function (select) {
            if (select.dataset.hgSelectReady) return;
            select.dataset.hgSelectReady = '1';
            select.classList.add('hg-select-source');

            const options = Array.prototype.slice.call(select.options);
            const placeholderOption = options.find(function (o) { return o.value === ''; });
            const placeholder = placeholderOption ? placeholderOption.textContent.trim() : 'Wybierz…';
            const labelText = select.closest('label') ? select.closest('label').querySelector('span') : null;

            const wrap = document.createElement('div');
            wrap.className = 'hg-select';
            wrap.innerHTML =
                '<button type="button" class="hg-select-toggle" aria-haspopup="listbox" aria-expanded="false">' +
                    '<span class="hg-select-value"></span>' +
                    '<svg class="hg-select-chevron" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="m5.5 9 6.5 6.5L18.5 9"/></svg>' +
                '</button>' +
                '<ul class="hg-select-list" role="listbox" tabindex="-1"></ul>';
            if (labelText) {
                wrap.querySelector('.hg-select-toggle').setAttribute('aria-label', labelText.textContent.trim());
            }
            select.after(wrap);

            const toggle = wrap.querySelector('.hg-select-toggle');
            const valueEl = wrap.querySelector('.hg-select-value');
            const list = wrap.querySelector('.hg-select-list');
            const optionEls = [];

            options.forEach(function (option) {
                if (option.value === '') return;
                const li = document.createElement('li');
                li.className = 'hg-select-option';
                li.setAttribute('role', 'option');
                li.setAttribute('aria-selected', 'false');
                li.dataset.value = option.value;
                li.textContent = option.textContent.trim();
                list.appendChild(li);
                optionEls.push(li);
            });

            let isOpen = false;
            let activeIndex = -1;
            let typeahead = '';
            let typeaheadTimer = null;

            function syncUI() {
                const current = select.value;
                const selected = select.options[select.selectedIndex];
                valueEl.textContent = current && selected ? selected.textContent.trim() : placeholder;
                wrap.classList.toggle('is-placeholder', !current);
                optionEls.forEach(function (li) {
                    li.setAttribute('aria-selected', li.dataset.value === current ? 'true' : 'false');
                });
            }

            function setActive(index) {
                activeIndex = Math.max(-1, Math.min(optionEls.length - 1, index));
                optionEls.forEach(function (el, i) {
                    el.classList.toggle('is-active', i === activeIndex);
                });
                if (activeIndex >= 0) {
                    optionEls[activeIndex].scrollIntoView({ block: 'nearest' });
                }
            }

            function open() {
                if (isOpen) return;
                isOpen = true;
                wrap.classList.add('is-open');
                toggle.setAttribute('aria-expanded', 'true');
                const selectedIndex = optionEls.findIndex(function (el) {
                    return el.getAttribute('aria-selected') === 'true';
                });
                setActive(selectedIndex >= 0 ? selectedIndex : (activeIndex >= 0 ? activeIndex : 0));
            }

            function close(refocus) {
                if (!isOpen) return;
                isOpen = false;
                wrap.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                if (refocus) toggle.focus();
            }

            function commit(el) {
                select.value = el.dataset.value;
                select.dispatchEvent(new Event('change', { bubbles: true }));
                select.removeAttribute('aria-invalid');
                toggle.classList.remove('is-invalid');
                syncUI();
                close(true);
            }

            toggle.addEventListener('click', function () {
                isOpen ? close() : open();
            });

            optionEls.forEach(function (li, i) {
                li.addEventListener('click', function () { commit(li); });
                li.addEventListener('mousemove', function () { setActive(i); });
            });

            document.addEventListener('click', function (event) {
                if (!wrap.contains(event.target)) close();
            });

            wrap.addEventListener('keydown', function (event) {
                const max = optionEls.length - 1;
                if (max < 0) return;
                switch (event.key) {
                    case 'Enter':
                    case ' ':
                        event.preventDefault();
                        if (!isOpen) { open(); }
                        else if (activeIndex >= 0) { commit(optionEls[activeIndex]); }
                        else { commit(optionEls[0]); }
                        break;
                    case 'ArrowDown':
                        event.preventDefault();
                        if (!isOpen) open();
                        setActive(activeIndex < 0 ? 0 : Math.min(activeIndex + 1, max));
                        break;
                    case 'ArrowUp':
                        event.preventDefault();
                        if (!isOpen) { open(); setActive(max); }
                        else { setActive(activeIndex <= 0 ? 0 : activeIndex - 1); }
                        break;
                    case 'Home':
                        if (isOpen) { event.preventDefault(); setActive(0); }
                        break;
                    case 'End':
                        if (isOpen) { event.preventDefault(); setActive(max); }
                        break;
                    case 'Escape':
                        if (isOpen) { event.preventDefault(); close(true); }
                        break;
                    case 'Tab':
                        close();
                        break;
                    default:
                        if (event.key.length === 1 && /\S/.test(event.key)) {
                            typeahead += event.key.toLowerCase();
                            clearTimeout(typeaheadTimer);
                            typeaheadTimer = setTimeout(function () { typeahead = ''; }, 600);
                            const found = optionEls.findIndex(function (el) {
                                return el.textContent.trim().toLowerCase().startsWith(typeahead);
                            });
                            if (found >= 0) {
                                if (!isOpen) { commit(optionEls[found]); }
                                else { setActive(found); }
                            }
                        }
                }
            });

            // Mirror the form validator's error state from the hidden native select.
            new MutationObserver(function () {
                toggle.classList.toggle('is-invalid', select.getAttribute('aria-invalid') === 'true');
            }).observe(select, { attributes: true, attributeFilter: ['aria-invalid'] });

            syncUI();
            select.addEventListener('change', syncUI);
            if (select.form) {
                select.form.addEventListener('reset', function () { setTimeout(syncUI, 0); });
            }
        });
    }
    initCustomSelects();

    /* ==========================================
       Gallery Category Filtering
       ========================================== */
    function initGalleryFilter() {
        const filterBtns = document.querySelectorAll('.hg-gallery-btn[data-filter]');
        const galleryCards = document.querySelectorAll('.hg-gallery-card, .hg-work-card');

        if (!filterBtns.length || !galleryCards.length) return;

        filterBtns.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const filter = this.getAttribute('data-filter');

                // Update button active states
                filterBtns.forEach(function (b) {
                    const isActive = b === btn;
                    b.classList.toggle('is-active', isActive);
                    b.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                });

                // Filter cards with smooth fade
                galleryCards.forEach(function (card) {
                    const cardCat = card.getAttribute('data-category') || '';
                    const match = filter === 'all' || cardCat.indexOf(filter) !== -1;

                    if (match) {
                        card.classList.remove('is-hidden');
                        card.style.opacity = '0';
                        card.style.transform = 'scale(0.96)';
                        setTimeout(function () {
                            card.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                            card.style.opacity = '1';
                            card.style.transform = 'scale(1)';
                        }, 20);
                    } else {
                        card.classList.add('is-hidden');
                    }
                });
            });
        });
    }
    initGalleryFilter();

    /* ==========================================
       Automotive Lightbox Gallery
       ========================================== */
    function initLightbox() {
        let lightbox = document.getElementById('hgLightboxModal');
        if (!lightbox) {
            lightbox = document.createElement('div');
            lightbox.id = 'hgLightboxModal';
            lightbox.className = 'hg-lightbox';
            lightbox.setAttribute('role', 'dialog');
            lightbox.setAttribute('aria-modal', 'true');
            lightbox.setAttribute('aria-label', 'Podgląd realizacji HI-GLOSS DESIGN — zdjęcie przed i po');
            lightbox.innerHTML = `
                <div class="hg-lightbox-topbar">
                    <span class="hg-lightbox-counter" id="hgLightboxCounter">01 / 01</span>
                    <button type="button" class="hg-lightbox-close" id="hgLightboxClose" aria-label="Zamknij podgląd">&times;</button>
                </div>
                <div class="hg-lightbox-main">
                    <button type="button" class="hg-lightbox-nav hg-lightbox-prev" id="hgLightboxPrev" aria-label="Poprzednia realizacja">&#10094;</button>
                    <div class="hg-lightbox-img-wrap">
                        <div class="hg-lightbox-pair" id="hgLightboxPair">
                            <figure class="hg-lightbox-side hg-lightbox-before">
                                <img src="" alt="" class="hg-lightbox-img" id="hgLightboxBeforeImg">
                                <figcaption>PRZED</figcaption>
                            </figure>
                            <span class="hg-lightbox-vs" aria-hidden="true">&#8594;</span>
                            <figure class="hg-lightbox-side hg-lightbox-after">
                                <img src="" alt="" class="hg-lightbox-img" id="hgLightboxImg">
                                <figcaption>PO</figcaption>
                            </figure>
                        </div>
                    </div>
                    <button type="button" class="hg-lightbox-nav hg-lightbox-next" id="hgLightboxNext" aria-label="Następna realizacja">&#10095;</button>
                </div>
                <div class="hg-lightbox-bottom">
                    <div class="hg-lightbox-info">
                        <h4 id="hgLightboxTitle">Realizacja HI-GLOSS DESIGN</h4>
                        <p id="hgLightboxMeta">Szczecin / Mierzyn</p>
                    </div>
                    <a href="#wycena" class="hg-lightbox-cta" id="hgLightboxCta">Wyceń podobny projekt &rarr;</a>
                </div>
            `;
            document.body.appendChild(lightbox);
        }

        const imgEl = document.getElementById('hgLightboxImg');
        const beforeImgEl = document.getElementById('hgLightboxBeforeImg');
        const pairEl = document.getElementById('hgLightboxPair');
        const titleEl = document.getElementById('hgLightboxTitle');
        const metaEl = document.getElementById('hgLightboxMeta');
        const counterEl = document.getElementById('hgLightboxCounter');
        const closeBtn = document.getElementById('hgLightboxClose');
        const prevBtn = document.getElementById('hgLightboxPrev');
        const nextBtn = document.getElementById('hgLightboxNext');
        const ctaBtn = document.getElementById('hgLightboxCta');

        let currentGalleryItems = [];
        let currentIndex = 0;

        function getVisibleGalleryItems() {
            const triggers = Array.from(document.querySelectorAll('[data-lightbox-img]'));
            return triggers.filter(function (el) {
                const card = el.closest('.hg-gallery-card, .hg-work-card');
                return !card || !card.classList.contains('is-hidden');
            });
        }

        function openLightboxAt(index) {
            currentGalleryItems = getVisibleGalleryItems();
            if (!currentGalleryItems.length) return;

            if (index < 0) index = currentGalleryItems.length - 1;
            if (index >= currentGalleryItems.length) index = 0;
            currentIndex = index;

            const target = currentGalleryItems[currentIndex];
            const imgSrc = target.getAttribute('data-lightbox-img') || target.getAttribute('src');
            const beforeSrc = target.getAttribute('data-lightbox-before') || '';
            const title = target.getAttribute('data-lightbox-title') || target.getAttribute('alt') || 'Realizacja HI-GLOSS DESIGN';
            const meta = target.getAttribute('data-lightbox-meta') || 'Car wrapping · Folie PPF · Mierzyn';
            const quoteLink = target.getAttribute('data-lightbox-link') || '#wycena';

            imgEl.src = imgSrc;
            imgEl.alt = title;
            titleEl.textContent = title;
            metaEl.textContent = meta;
            counterEl.textContent = (currentIndex + 1 < 10 ? '0' : '') + (currentIndex + 1) + ' / ' + (currentGalleryItems.length < 10 ? '0' : '') + currentGalleryItems.length;

            if (beforeSrc) {
                beforeImgEl.src = beforeSrc;
                beforeImgEl.alt = 'Przed realizacją: ' + title;
                pairEl.classList.add('has-before');
            } else {
                beforeImgEl.removeAttribute('src');
                beforeImgEl.removeAttribute('alt');
                pairEl.classList.remove('has-before');
            }

            if (ctaBtn) {
                ctaBtn.href = quoteLink;
                ctaBtn.onclick = function () { closeLightbox(); };
            }

            lightbox.classList.add('is-open');
            document.body.classList.add('lightbox-open');
            closeBtn.focus();
        }

        function closeLightbox() {
            lightbox.classList.remove('is-open');
            document.body.classList.remove('lightbox-open');
        }

        function nextItem() { openLightboxAt(currentIndex + 1); }
        function prevItem() { openLightboxAt(currentIndex - 1); }

        document.addEventListener('click', function (e) {
            const trigger = e.target.closest('[data-lightbox-img]');
            if (trigger) {
                e.preventDefault();
                const visible = getVisibleGalleryItems();
                const idx = visible.indexOf(trigger);
                openLightboxAt(idx !== -1 ? idx : 0);
            }
        });

        if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
        if (prevBtn) prevBtn.addEventListener('click', prevItem);
        if (nextBtn) nextBtn.addEventListener('click', nextItem);

        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox || e.target.classList.contains('hg-lightbox-main')) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (!lightbox.classList.contains('is-open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextItem();
            if (e.key === 'ArrowLeft') prevItem();
        });

        let touchStartX = 0;
        let touchEndX = 0;

        lightbox.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        lightbox.addEventListener('touchend', function (e) {
            touchEndX = e.changedTouches[0].screenX;
            const diff = touchEndX - touchStartX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) prevItem();
                else nextItem();
            }
        }, { passive: true });
    }
    initLightbox();

    /* ==========================================
       Background preloader for lightbox images
       (idle-time, one at a time — makes opening
       the lightbox and the Przed/Po switch instant)
       ========================================== */
    function initGalleryPreloader() {
        const onIdle = window.requestIdleCallback || function (cb) { return setTimeout(cb, 1500); };
        onIdle(function () {
            const seen = new Set();
            const queue = [];
            document.querySelectorAll('[data-lightbox-img]').forEach(function (el) {
                const main = el.getAttribute('data-lightbox-img');
                const before = el.getAttribute('data-lightbox-before');
                [main, before].forEach(function (url) {
                    if (url && !seen.has(url)) {
                        seen.add(url);
                        queue.push(url);
                    }
                });
            });
            let index = 0;
            function step() {
                if (index >= queue.length) return;
                const img = new Image();
                img.decoding = 'async';
                img.onload = img.onerror = function () {
                    index += 1;
                    setTimeout(step, 220);
                };
                img.src = queue[index];
            }
            step();
        });
    }
    initGalleryPreloader();

    /* ==========================================
       Cookie consent (RODO) — zapis w localStorage,
       brak trackerów na stronie = zero skryptów do bramkowania.
       Zgoda wystawiona na <html data-consent> pod przyszłe narzędzia.
       ========================================== */
    const cookieBanner = document.getElementById('hgCookies');
    const cookieOpeners = document.querySelectorAll('#hgCookiesOpen');
    const consentKey = 'hg_cookie_consent';

    function hgGetConsent() {
        try {
            const parsed = JSON.parse(localStorage.getItem(consentKey) || 'null');
            return parsed && parsed.choice ? parsed : null;
        } catch (e) {
            return null;
        }
    }

    function hgShowCookies() {
        if (!cookieBanner) {
            return;
        }
        cookieBanner.hidden = false;
        requestAnimationFrame(function () {
            cookieBanner.classList.add('is-visible');
        });
    }

    if (cookieBanner) {
        const stored = hgGetConsent();
        if (stored) {
            document.documentElement.dataset.consent = stored.choice;
        } else {
            hgShowCookies();
        }
        cookieBanner.querySelectorAll('[data-consent]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const choice = btn.getAttribute('data-consent') === 'all' ? 'all' : 'essential';
                try {
                    localStorage.setItem(consentKey, JSON.stringify({ choice: choice, at: new Date().toISOString() }));
                } catch (e) {
                    /* tryb prywatny — zgoda działa do zamknięcia karty */
                }
                document.documentElement.dataset.consent = choice;
                cookieBanner.classList.remove('is-visible');
                setTimeout(function () {
                    cookieBanner.hidden = true;
                }, 450);
            });
        });
    }

    cookieOpeners.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            try {
                localStorage.removeItem(consentKey);
            } catch (e) { /* noop */ }
            hgShowCookies();
        });
    });
});
