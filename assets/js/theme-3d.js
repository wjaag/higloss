/**
 * HI-GLOSS DESIGN — Theme 4.0 "DIMENSION" — silnik interakcji 3D.
 *
 * Warstwa progresywnego ulepszenia dokładana na main.js:
 *   - html.hg-3d        → aktywny statyczny system głębi (CSS)
 *   - html.hg-3d-motion → ruch 3D: tilt kart, parallax hero, reflektor ambient
 *
 * Zasady jakościowe:
 *   - pełne wsparcie prefers-reduced-motion (klasa jest zdejmowana dynamicznie),
 *   - efekty kursora tylko dla precyzyjnego wskaźnika (hover + fine pointer),
 *   - wszystkie odczyty pozycji throttlowane przez requestAnimationFrame,
 *   - wartości przekazywane wyłącznie zmiennymi CSS (--tilt-*, --par-*,
 *     --hero-par-*, --hg-sp, --hg-cursor-*), więc CSS zachowuje pełną kontrolę
 *     nad transformacjami, przejściami i wygaszaniem efektów.
 */
(function () {
    'use strict';

    var docEl = document.documentElement;
    docEl.classList.add('hg-3d');

    var motionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    var pointerQuery = window.matchMedia('(hover: hover) and (pointer: fine)');

    function motionEnabled() {
        return !motionQuery.matches && pointerQuery.matches;
    }

    function syncMotionClass() {
        docEl.classList.toggle('hg-3d-motion', motionEnabled());
    }

    syncMotionClass();

    if (typeof motionQuery.addEventListener === 'function') {
        motionQuery.addEventListener('change', syncMotionClass);
        pointerQuery.addEventListener('change', syncMotionClass);
    } else if (typeof motionQuery.addListener === 'function') {
        motionQuery.addListener(syncMotionClass);
        pointerQuery.addListener(syncMotionClass);
    }

    function motionOn() {
        return docEl.classList.contains('hg-3d-motion');
    }

    /* ==================================================================
       1. SILNIK TILTA — karty usług i realizacji
       ================================================================== */

    var TILT_RESET_PROPS = ['--tilt-x', '--tilt-y', '--tilt-lift', '--tilt-z', '--par-x', '--par-y', '--glare-x', '--glare-y'];

    function initTiltCard(card, maxTilt, lift) {
        var ticking = false;
        var lastEvent = null;

        function applyTilt() {
            ticking = false;
            if (!lastEvent || !motionOn()) return;

            var rect = card.getBoundingClientRect();
            if (!rect.width || !rect.height) return;

            var dx = lastEvent.clientX - (rect.left + rect.width / 2);
            var dy = lastEvent.clientY - (rect.top + rect.height / 2);
            var nx = Math.max(-1, Math.min(1, dx / (rect.width / 2)));
            var ny = Math.max(-1, Math.min(1, dy / (rect.height / 2)));

            card.style.setProperty('--tilt-x', (-ny * maxTilt).toFixed(2) + 'deg');
            card.style.setProperty('--tilt-y', (nx * maxTilt).toFixed(2) + 'deg');
            card.style.setProperty('--tilt-lift', lift + 'px');
            card.style.setProperty('--par-x', (dx * 0.06).toFixed(1) + 'px');
            card.style.setProperty('--par-y', (dy * 0.06).toFixed(1) + 'px');
            card.style.setProperty('--glare-x', (((lastEvent.clientX - rect.left) / rect.width) * 100).toFixed(1) + '%');
            card.style.setProperty('--glare-y', (((lastEvent.clientY - rect.top) / rect.height) * 100).toFixed(1) + '%');
        }

        function requestTilt(event) {
            lastEvent = event;
            if (!ticking) {
                ticking = true;
                window.requestAnimationFrame(applyTilt);
            }
        }

        function resetTilt() {
            card.classList.remove('is-tilting');
            TILT_RESET_PROPS.forEach(function (prop) {
                card.style.removeProperty(prop);
            });
        }

        card.addEventListener('pointerenter', function () {
            if (motionOn()) card.classList.add('is-tilting');
        });

        card.addEventListener('pointermove', requestTilt);

        card.addEventListener('pointerleave', resetTilt);
        card.addEventListener('pointercancel', resetTilt);
    }

    if (pointerQuery.matches) {
        document.querySelectorAll('.hg-service-card').forEach(function (card) {
            initTiltCard(card, 4.5, -10);
        });

        document.querySelectorAll('.hg-work-card').forEach(function (card) {
            initTiltCard(card, 5.5, -12);
        });
    }

    /* ==================================================================
       2. HERO — parallax warstw sterowany kursorem
       ================================================================== */

    var hero = document.querySelector('.hg-hero');

    if (hero && pointerQuery.matches) {
        var heroTicking = false;
        var heroEvent = null;

        function applyHeroParallax() {
            heroTicking = false;
            if (!heroEvent || !motionOn()) return;

            var rect = hero.getBoundingClientRect();
            if (!rect.width || !rect.height) return;

            var nx = ((heroEvent.clientX - rect.left) / rect.width - 0.5) * 2;
            var ny = ((heroEvent.clientY - rect.top) / rect.height - 0.5) * 2;

            hero.style.setProperty('--hero-par-x', Math.max(-1, Math.min(1, nx)).toFixed(3));
            hero.style.setProperty('--hero-par-y', Math.max(-1, Math.min(1, ny)).toFixed(3));
        }

        function requestHeroParallax(event) {
            heroEvent = event;
            if (!heroTicking) {
                heroTicking = true;
                window.requestAnimationFrame(applyHeroParallax);
            }
        }

        hero.addEventListener('pointermove', requestHeroParallax);

        hero.addEventListener('pointerleave', function () {
            hero.style.setProperty('--hero-par-x', '0');
            hero.style.setProperty('--hero-par-y', '0');
        });
    }

    /* ==================================================================
       3. PARALLAX SCROLLA — warstwy głębi przy przewijaniu
       ================================================================== */

    var scrollTargets = [];

    function registerScrollTarget(element, speed) {
        if (element) {
            scrollTargets.push({ el: element, speed: speed });
        }
    }

    registerScrollTarget(document.querySelector('.hg-hero-media'), -0.22);
    registerScrollTarget(document.querySelector('.hg-feature-media img'), -0.12);
    registerScrollTarget(document.querySelector('.hg-cta-track'), -0.08);
    document.querySelectorAll('.hg-section-heading').forEach(function (heading) {
        registerScrollTarget(heading, 0.05);
    });

    var scrollTicking = false;

    function updateScrollParallax() {
        scrollTicking = false;
        if (!motionOn()) return;

        var viewportHeight = window.innerHeight;

        scrollTargets.forEach(function (target) {
            var rect = target.el.getBoundingClientRect();

            /* Poza widokiem (z zapasem) — pomijamy, zero kosztów. */
            if (rect.bottom < -120 || rect.top > viewportHeight + 120) return;

            var progress = (rect.top + rect.height / 2 - viewportHeight / 2) / viewportHeight;
            target.el.style.setProperty('--hg-sp', (progress * target.speed * 100).toFixed(2));
        });
    }

    function requestScrollUpdate() {
        if (!scrollTicking) {
            scrollTicking = true;
            window.requestAnimationFrame(updateScrollParallax);
        }
    }

    if (scrollTargets.length) {
        window.addEventListener('scroll', requestScrollUpdate, { passive: true });
        window.addEventListener('resize', requestScrollUpdate, { passive: true });
        updateScrollParallax();
    }

    /* ==================================================================
       4. REFLEKTOR AMBIENT — poświata podążająca za kursorem
       ================================================================== */

    if (pointerQuery.matches) {
        var cursorTicking = false;
        var cursorEvent = null;

        function applyCursorGlow() {
            cursorTicking = false;
            if (!cursorEvent || !motionOn()) return;

            var x = (cursorEvent.clientX / window.innerWidth - 0.5) * 2;
            var y = (cursorEvent.clientY / window.innerHeight - 0.5) * 2;

            document.body.style.setProperty('--hg-cursor-x', x.toFixed(3));
            document.body.style.setProperty('--hg-cursor-y', y.toFixed(3));
        }

        window.addEventListener('pointermove', function (event) {
            cursorEvent = event;
            if (!cursorTicking) {
                cursorTicking = true;
                window.requestAnimationFrame(applyCursorGlow);
            }
        }, { passive: true });
    }
})();
