/**
 * Hi-Gloss Design 2026 Interactive Features
 */

document.addEventListener('DOMContentLoaded', function() {
    
    /* ==========================================================================
       1. STICKY NAVBAR SCROLL GLASSMORPHISM TOGGLE
       ========================================================================== */
    const header = document.querySelector('.hg-header');
    if (header) {
        function updateHeaderOnScroll() {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        window.addEventListener('scroll', updateHeaderOnScroll);
        updateHeaderOnScroll();
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

    /* ==========================================================================
       3. FAQ ACCORDION
       ========================================================================== */
    const faqItems = document.querySelectorAll('.hg-faq-item');
    faqItems.forEach(item => {
        const header = item.querySelector('.hg-faq-header');
        if (header) {
            header.addEventListener('click', function() {
                const isOpen = item.classList.contains('open');
                faqItems.forEach(i => i.classList.remove('open'));
                if (!isOpen) {
                    item.classList.add('open');
                }
            });
        }
    });

});
