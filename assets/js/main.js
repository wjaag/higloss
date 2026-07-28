/**
 * Hi-Gloss Design 2026 Interactive Features
 */

document.addEventListener('DOMContentLoaded', function() {
    
    /* ==========================================================================
       1. BEFORE / AFTER SLIDER
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
       2. COLOR & FINISH SWATCH VISUALIZER
       ========================================================================== */
    const swatchBtns = document.querySelectorAll('.hg-swatch-btn');
    const swatchPreviewText = document.getElementById('swatchPreviewName');
    const swatchPreviewDesc = document.getElementById('swatchPreviewDesc');

    if (swatchBtns.length > 0) {
        swatchBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                swatchBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const name = this.dataset.name;
                const desc = this.dataset.desc;

                if (swatchPreviewText) swatchPreviewText.textContent = name;
                if (swatchPreviewDesc) swatchPreviewDesc.textContent = desc;
            });
        });
    }

    /* ==========================================================================
       3. INTERACTIVE QUOTE CONFIGURATOR / CALCULATOR
       ========================================================================== */
    const calcBox = document.getElementById('hgQuoteCalculator');
    if (calcBox) {
        let currentVehicle = 'Hatchback / Sedan';
        let currentService = 'Zmiana Koloru Auta';
        let currentFinish  = 'Połysk / Mat / Satyna';
        let basePrices = {
            'Zmiana Koloru Auta': 4500,
            'Bezbarwna Folia PPF': 5500,
            'Oklejanie Reklamowe': 2200,
            'Detailing & Przyciemnianie': 1200
        };
        let vehicleMultiplier = {
            'Hatchback / Sedan': 1.0,
            'Kombi / SUV': 1.25,
            'Sport / Coupe': 1.15,
            'Dostawczy / Van': 1.5
        };

        function calculateEstimate() {
            let base = basePrices[currentService] || 4000;
            let mult = vehicleMultiplier[currentVehicle] || 1.0;
            let estMin = Math.round(base * mult);
            let estMax = Math.round(estMin * 1.25);

            const estDisplay = document.getElementById('hgEstPriceDisplay');
            if (estDisplay) {
                estDisplay.textContent = 'od ' + estMin.toLocaleString('pl-PL') + ' zł do ' + estMax.toLocaleString('pl-PL') + ' zł netto';
            }
        }

        // Vehicle Select Cards
        const vehicleCards = calcBox.querySelectorAll('.hg-vehicle-opt');
        vehicleCards.forEach(card => {
            card.addEventListener('click', function() {
                vehicleCards.forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                currentVehicle = this.dataset.vehicle;
                calculateEstimate();
            });
        });

        // Service Select Cards
        const serviceCards = calcBox.querySelectorAll('.hg-service-opt');
        serviceCards.forEach(card => {
            card.addEventListener('click', function() {
                serviceCards.forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                currentService = this.dataset.service;
                calculateEstimate();
            });
        });

        // Form Submit
        const calcForm = document.getElementById('hgCalcForm');
        if (calcForm) {
            calcForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const btn = this.querySelector('button[type="submit"]');
                const originalText = btn.textContent;
                btn.textContent = 'Wysyłanie specyfikacji...';
                btn.disabled = true;

                const formData = new FormData();
                formData.append('action', 'higloss_quote');
                formData.append('nonce', higlossData.nonce || '');
                formData.append('vehicle', currentVehicle);
                formData.append('service', currentService);
                formData.append('finish', currentFinish);
                formData.append('name', document.getElementById('calcName')?.value || '');
                formData.append('phone', document.getElementById('calcPhone')?.value || '');
                formData.append('email', document.getElementById('calcEmail')?.value || '');
                formData.append('notes', document.getElementById('calcNotes')?.value || '');

                fetch(higlossData.ajaxurl || '/wp-admin/admin-ajax.php', {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    const msgBox = document.getElementById('calcResponseMsg');
                    if (msgBox) {
                        msgBox.style.display = 'block';
                        msgBox.className = 'hg-glass-card';
                        msgBox.style.borderColor = 'var(--accent-blue)';
                        msgBox.style.marginTop = '1rem';
                        msgBox.innerHTML = '<strong style="color: var(--accent-blue);">' + (data.data?.message || 'Dziękujemy! Otrzymaliśmy Twoje zgłoszenie.') + '</strong>';
                    }
                    btn.textContent = 'Zapytanie Wysłane! ✓';
                })
                .catch(err => {
                    alert('Dziękujemy! Twoja specyfikacja została przetworzona.');
                    btn.textContent = originalText;
                    btn.disabled = false;
                });
            });
        }

        calculateEstimate();
    }

    /* ==========================================================================
       4. FAQ ACCORDION
       ========================================================================== */
    const faqItems = document.querySelectorAll('.hg-faq-item');
    faqItems.forEach(item => {
        const header = item.querySelector('.hg-faq-header');
        header.addEventListener('click', function() {
            const isOpen = item.classList.contains('open');
            faqItems.forEach(i => i.classList.remove('open'));
            if (!isOpen) {
                item.classList.add('open');
            }
        });
    });

    /* ==========================================================================
       5. PORTFOLIO / GALLERY AJAX FILTERING
       ========================================================================== */
    const filterBtns = document.querySelectorAll('.hg-filter-btn');
    const galleryItems = document.querySelectorAll('.hg-gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const cat = this.dataset.category;
            galleryItems.forEach(item => {
                if (cat === 'all' || item.dataset.category === cat) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    /* ==========================================================================
       6. MOBILE MENU TOGGLE
       ========================================================================== */
    const navToggle = document.getElementById('hgNavToggle');
    const navMenu = document.getElementById('hgNavMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            if (navMenu.classList.contains('active')) {
                navMenu.style.display = 'flex';
                navMenu.style.flexDirection = 'column';
                navMenu.style.position = 'absolute';
                navMenu.style.top = '100%';
                navMenu.style.left = '0';
                navMenu.style.right = '0';
                navMenu.style.background = 'var(--bg-dark)';
                navMenu.style.padding = '2rem';
                navMenu.style.borderBottom = '1px solid var(--border-glass)';
            } else {
                navMenu.style.display = '';
            }
        });
    }

});
