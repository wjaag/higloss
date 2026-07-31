/**
 * Hi-Gloss Design 2026 Interactive Features
 */

document.addEventListener('DOMContentLoaded', function() {
    
    /* ==========================================================================
       1. STICKY NAVBAR SCROLL GLASSMORPHISM & MOBILE BURGER MENU
       ========================================================================== */
    const header = document.querySelector('.hg-header');
    if (header) {
        function updateHeaderOnScroll() {
            if (window.scrollY > 30) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        window.addEventListener('scroll', updateHeaderOnScroll);
        updateHeaderOnScroll();
    }

    // Mobile Navigation Toggle
    const navToggle = document.getElementById('hgNavToggle');
    const navMenu = document.getElementById('hgNavMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('active');
            }
        });

        // Close menu on link click
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navMenu.classList.remove('active');
            });
        });
    }

    /* ==========================================================================
       2. BEFORE / AFTER SLIDER
       ========================================================================== */
    const sliderBox = document.getElementById('hgBeforeAfterSlider');
    if (sliderBox) {
        const afterLayer = sliderBox.querySelector('.hg-slider-after');
        const handle = sliderBox.querySelector('.hg-slider-handle');
        let isDragging = false;

        function updateSliderPosition(x) {
            const rect = sliderBox.getBoundingClientRect();
            let position = x - rect.left;
            if (position < 0) position = 0;
            if (position > rect.width) position = rect.width;
            
            const percentage = (position / rect.width) * 100;
            afterLayer.style.width = percentage + '%';
            handle.style.left = percentage + '%';
        }

        sliderBox.addEventListener('mousedown', function(e) {
            isDragging = true;
            updateSliderPosition(e.clientX);
        });

        window.addEventListener('mouseup', function() {
            isDragging = false;
        });

        sliderBox.addEventListener('mousemove', function(e) {
            if (!isDragging) return;
            updateSliderPosition(e.clientX);
        });

        // Touch events
        sliderBox.addEventListener('touchstart', function(e) {
            isDragging = true;
            if (e.touches[0]) updateSliderPosition(e.touches[0].clientX);
        });

        window.addEventListener('touchend', function() {
            isDragging = false;
        });

        sliderBox.addEventListener('touchmove', function(e) {
            if (!isDragging) return;
            if (e.touches[0]) updateSliderPosition(e.touches[0].clientX);
        });
    }

});
