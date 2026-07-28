<?php
/**
 * Template Name: Gaming Edition "Less is More" Landing Page
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- SECTION 1: HERO -->
<section class="sec-hero">
    <div class="hg-container hg-grid hg-grid-2" style="align-items: center;">
        <div>
            <div class="hg-badge">
                <span style="display:inline-block; width:6px; height:6px; background:var(--neon-cyan); border-radius:50%; box-shadow: 0 0 8px var(--neon-cyan);"></span>
                Studio Car Wrappingu Szczecin - Mierzyn
            </div>

            <h1 class="hg-section-title">
                Sztuka Zmiany Koloru & <span>Ochrona PPF</span>
            </h1>

            <p style="color: var(--text-muted); font-size: 1.1rem; margin-bottom: 2rem; line-height: 1.6;">
                Całościowe oklejanie pojazdów foliami wylewanymi oraz bezbarwne folie ochronne PPF najwyższej klasy. Zadbamy o każdy detal w ogrzewanej pracowni.
            </p>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#wycena" class="hg-btn hg-btn-primary">
                    ⚡ Szybka Wycena
                </a>
                <a href="#uslugi" class="hg-btn hg-btn-outline">
                    Poznaj Usługi
                </a>
            </div>
        </div>

        <div>
            <!-- Interactive Before/After Card -->
            <div class="hg-card" style="padding: 0.8rem; border-color: var(--border-neon);">
                <div style="text-align: center; margin-bottom: 0.6rem; font-weight: 700; font-size: 0.8rem; color: var(--neon-cyan); letter-spacing: 0.05em;">
                    ↔ PRZESUŃ SUWAK: LAKIER FABRYCZNY VS SATYNA BLACK
                </div>
                
                <div class="hg-slider-box" id="hgBeforeAfterSlider">
                    <div class="hg-slider-img hg-slider-before" style="background-image: url('https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1200&q=80');"></div>
                    <div class="hg-slider-img hg-slider-after" style="background-image: url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1200&q=80');"></div>
                    <div class="hg-slider-handle">↔</div>
                    <div class="hg-slider-badge left">Przed (Lakier)</div>
                    <div class="hg-slider-badge right">Po (Satyna)</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: USŁUGI (LESS IS MORE - 3 CARDS ONLY) -->
<section id="uslugi" class="sec-services">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div class="hg-badge">OFERTA</div>
            <h2 class="hg-section-title">Co <span>Robimy</span></h2>
        </div>

        <div class="hg-grid hg-grid-3">
            <div class="hg-card">
                <div style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; color: var(--neon-cyan); opacity: 0.8; margin-bottom: 0.5rem;">01</div>
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; color: #fff; margin-bottom: 0.75rem; text-transform: uppercase;">Zmiana Koloru Auta</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                    Całościowe oklejanie karoserii foliami wylewanymi (Mat, Połysk, Satyna, Carbon 3D, Kameleon) z profesjonalnym demontażem klamek, lamp i zderzaków.
                </p>
                <a href="#wycena" style="color: var(--neon-cyan); font-weight: 800; font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">Wylicz cenę &rarr;</a>
            </div>

            <div class="hg-card">
                <div style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; color: var(--neon-cyan); opacity: 0.8; margin-bottom: 0.5rem;">02</div>
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; color: #fff; margin-bottom: 0.75rem; text-transform: uppercase;">Bezbarwne PPF</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                    Niewidzialna folia ochronna z samoregeneracją pod wpływem ciepła. 100% odporności na kamienie, zarysowania oraz chemię drogową.
                </p>
                <a href="#wycena" style="color: var(--neon-cyan); font-weight: 800; font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">Wylicz cenę &rarr;</a>
            </div>

            <div class="hg-card">
                <div style="font-family: var(--font-heading); font-size: 2.5rem; font-weight: 900; color: var(--neon-cyan); opacity: 0.8; margin-bottom: 0.5rem;">03</div>
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; color: #fff; margin-bottom: 0.75rem; text-transform: uppercase;">Reklama & Floty</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                    Mobilna reklama wizualna dla firm. Własny park maszyn drukujących i tnących. Braliśmy udział w oklejaniu floty DHL (40 aut) oraz Warty.
                </p>
                <a href="#wycena" style="color: var(--neon-cyan); font-weight: 800; font-size: 0.85rem; letter-spacing: 0.05em; text-transform: uppercase;">Wylicz cenę &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: REALIZACJE -->
<section id="realizacje" class="sec-realizacje">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3rem;">
            <div class="hg-badge">PORTFOLIO</div>
            <h2 class="hg-section-title">Ostatnie <span>Projekty</span></h2>

            <div style="display: flex; justify-content: center; gap: 0.5rem; flex-wrap: wrap; margin-top: 1.5rem;">
                <button class="hg-btn hg-btn-outline hg-filter-btn active" data-category="all" style="padding: 0.4rem 1rem; font-size: 0.8rem;">Wszystkie</button>
                <button class="hg-btn hg-btn-outline hg-filter-btn" data-category="zmiana-koloru" style="padding: 0.4rem 1rem; font-size: 0.8rem;">Zmiana Koloru</button>
                <button class="hg-btn hg-btn-outline hg-filter-btn" data-category="ppf" style="padding: 0.4rem 1rem; font-size: 0.8rem;">PPF Ochrona</button>
                <button class="hg-btn hg-btn-outline hg-filter-btn" data-category="reklama" style="padding: 0.4rem 1rem; font-size: 0.8rem;">Reklama & Floty</button>
            </div>
        </div>

        <div class="hg-grid hg-grid-3">
            <div class="hg-card hg-gallery-item" data-category="zmiana-koloru" style="padding: 0;">
                <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=800&q=80" alt="Audi A7 Niebieski Połysk" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.25rem;">
                    <span style="font-size: 0.75rem; color: var(--neon-cyan); font-weight: 800; text-transform: uppercase;">Zmiana Koloru</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: #fff; margin-top: 0.2rem;">Audi A7 - Blue Gloss</h3>
                </div>
            </div>

            <div class="hg-card hg-gallery-item" data-category="zmiana-koloru" style="padding: 0;">
                <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=800&q=80" alt="Mercedes S-Klasa Czarna Satyna" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.25rem;">
                    <span style="font-size: 0.75rem; color: var(--neon-cyan); font-weight: 800; text-transform: uppercase;">Zmiana Koloru</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: #fff; margin-top: 0.2rem;">Mercedes S - Satin Black</h3>
                </div>
            </div>

            <div class="hg-card hg-gallery-item" data-category="ppf" style="padding: 0;">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80" alt="Porsche Panamera PPF" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.25rem;">
                    <span style="font-size: 0.75rem; color: var(--neon-cyan); font-weight: 800; text-transform: uppercase;">Bezbarwne PPF</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: #fff; margin-top: 0.2rem;">Porsche Panamera - PPF</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: SZYBKA WYCENA & KONTAKT -->
<section id="wycena" class="sec-contact">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div class="hg-badge">SZYBKA WYCENA & KONTAKT</div>
            <h2 class="hg-section-title">Napisz Do <span>Studio</span></h2>
        </div>

        <div class="hg-grid hg-grid-2">
            <!-- Simple Form -->
            <div class="hg-card" id="hgQuoteCalculator">
                <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: #fff; margin-bottom: 1.25rem; text-transform: uppercase;">Bezpłatna Wycena Online</h3>

                <form id="hgCalcForm">
                    <div style="margin-bottom: 1rem;">
                        <label style="display: block; font-size: 0.8rem; color: var(--text-muted); margin-bottom: 0.4rem; text-transform: uppercase; font-weight: 700;">Wybierz Usługę:</label>
                        <select id="calcServiceSelect" class="hg-input" style="cursor: pointer;">
                            <option value="Zmiana Koloru Auta">Całościowa Zmiana Koloru Auta</option>
                            <option value="Bezbarwna Folia PPF">Bezbarwna Folia Ochronna PPF</option>
                            <option value="Oklejanie Reklamowe">Reklama Mobilna & Floty</option>
                        </select>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                        <input type="text" id="calcName" class="hg-input" placeholder="Imię i Nazwisko" required>
                        <input type="tel" id="calcPhone" class="hg-input" placeholder="Numer Telefonu *" required>
                    </div>

                    <textarea id="calcNotes" class="hg-input" placeholder="Model auta (np. Audi A7 2022)..." rows="3" style="margin-bottom: 1.25rem;"></textarea>

                    <button type="submit" class="hg-btn hg-btn-primary" style="width: 100%;">
                        Wyślij Zapytanie &rarr;
                    </button>
                </form>

                <div id="calcResponseMsg" style="display: none;"></div>
            </div>

            <!-- Studio Info -->
            <div class="hg-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; color: #fff; margin-bottom: 1.5rem; text-transform: uppercase;">HI-GLOSS DESIGN</h3>

                    <p style="color: var(--text-muted); margin-bottom: 1rem; font-size: 0.95rem;">
                        📍 <strong>Adres:</strong> ul. Podmiejska 4, 72-006 Mierzyn / Szczecin
                    </p>
                    <p style="color: var(--text-muted); margin-bottom: 1rem; font-size: 0.95rem;">
                        📞 <strong>Telefon:</strong> <a href="tel:+48605088065" style="color: var(--neon-cyan);">605 088 065</a> / <a href="tel:+48664129023" style="color: var(--neon-cyan);">664 129 023</a>
                    </p>
                    <p style="color: var(--text-muted); margin-bottom: 1.5rem; font-size: 0.95rem;">
                        ✉️ <strong>E-mail:</strong> <a href="mailto:biuro@hi-glossdesign.pl" style="color: var(--neon-cyan);">biuro@hi-glossdesign.pl</a>
                    </p>
                </div>

                <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-btn hg-btn-outline" style="width: 100%;">
                    🗺️ Otwórz Nawigację Google Maps
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
