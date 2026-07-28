<?php
/**
 * Template Name: Premium 4-Tile Landing Page (hi-glossdesign.pl inspired)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- HERO BANNER -->
<section class="sec-hero">
    <div class="hg-container" style="max-width: 960px;">
        <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(37, 170, 225, 0.12); border: 1px solid #25aae1; color: #25aae1; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.5rem;">
            STUDIO CAR WRAPPINGU & PPF SZCZECIN - MIERZYN
        </div>

        <h1 class="hg-hero-title">
            CAŁOŚCIOWE <span>OKLEJANIE POJAZDÓW</span>
        </h1>

        <p style="font-size: 1.2rem; color: #94a3b8; font-weight: 500; margin-bottom: 2.5rem; line-height: 1.7;">
            Szybka zmiana koloru bez konieczności lakierowania. Bezbarwne folie ochronne PPF z samoregeneracją, tuning optyczny oraz reklama mobilna dla flot w ogrzewanej pracowni w Mierzynie.
        </p>

        <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 3rem;">
            <a href="#kalkulator" class="hg-btn hg-btn-cyan">
                ⚡ Szybka Wycena Online
            </a>
            <a href="#przed-po" class="hg-btn hg-btn-outline">
                ↔ Zobacz Efekt Przed / Po
            </a>
        </div>
    </div>
</section>

<!-- THE 4 ICONIC TILES GRID (KAFELKI INPIRED BY HI-GLOSSDESIGN.PL) -->
<section class="sec-tiles">
    <div class="hg-container">
        <div class="hg-grid hg-grid-4">
            <!-- Tile 1: Historia Firmy (Deep Navy) -->
            <a href="#o-firmie" class="hg-tile-card tile-1-navy">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/historia_firmy.png'); ?>" alt="Historia Firmy" class="hg-tile-icon">
                <h3 class="hg-tile-title">Historia Firmy</h3>
                <p class="hg-tile-desc">
                    Młody, kreatywny zespół pełen pasji. Certyfikacje 3M i Avery Dennison, ogrzewana pracownia w Mierzynie.
                </p>
                <div class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.75rem; margin-top: auto; border-color: rgba(255,255,255,0.3);">
                    Poznaj Nas &rarr;
                </div>
            </a>

            <!-- Tile 2: Nasza Oferta (Deep Emerald Green) -->
            <a href="#oferta" class="hg-tile-card tile-2-emerald">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/nasza_oferta.png'); ?>" alt="Nasza Oferta" class="hg-tile-icon">
                <h3 class="hg-tile-title">Nasza Oferta</h3>
                <p class="hg-tile-desc">
                    Zmiana koloru (Mat, Połysk, Satyna, Carbon), folie ochronne PPF, branding flot (DHL - 40 aut) oraz detailing.
                </p>
                <div class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.75rem; margin-top: auto; border-color: rgba(255,255,255,0.3);">
                    Sprawdź Usługi &rarr;
                </div>
            </a>

            <!-- Tile 3: Galeria Realizacji (Deep Ruby Crimson) -->
            <a href="#realizacje" class="hg-tile-card tile-3-ruby">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/galeria_realizacji.png'); ?>" alt="Galeria Realizacji" class="hg-tile-icon">
                <h3 class="hg-tile-title">Galeria Prac</h3>
                <p class="hg-tile-desc">
                    Zobacz kilkadziesiąt odmienionych pojazdów: Audi A7 Blue Gloss, Mercedes S Satyna, Porsche Panamera PPF.
                </p>
                <div class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.75rem; margin-top: auto; border-color: rgba(255,255,255,0.3);">
                    Otwórz Galerię &rarr;
                </div>
            </a>

            <!-- Tile 4: Kontakt Z Nami (Deep Burnt Bronze) -->
            <a href="#kontakt" class="hg-tile-card tile-4-bronze">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/kontakt_z_nami.png'); ?>" alt="Kontakt z Nami" class="hg-tile-icon">
                <h3 class="hg-tile-title">Kontakt Z Nami</h3>
                <p class="hg-tile-desc">
                    Napisz lub zadzwoń: 605 088 065 / 664 129 023. Studio w Mierzynie ul. Podmiejska 4.
                </p>
                <div class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.75rem; margin-top: auto; border-color: rgba(255,255,255,0.3);">
                    Dane & Mapa &rarr;
                </div>
            </a>
        </div>
    </div>
</section>

<!-- BEFORE / AFTER SLIDER SHOWCASE -->
<section id="przed-po" style="padding: 4rem 0 6rem; background: rgba(11, 15, 25, 0.7); border-y: 2px solid #25aae1;">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 2.5rem;">
            <div style="display: inline-block; padding: 0.3rem 0.8rem; background: #25aae1; color: #ffffff; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.75rem;">
                Tuning Optyczny & Transformacja
            </div>
            <h2 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0;">
                EFEKT PRZED I PO OKLEJENIU
            </h2>
        </div>

        <div style="max-width: 1000px; margin: 0 auto; padding: 1rem; background: #000000; border: 2px solid #25aae1;">
            <div class="hg-slider-box" id="hgBeforeAfterSlider">
                <div class="hg-slider-img hg-slider-before" style="background-image: url('https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="hg-slider-img hg-slider-after" style="background-image: url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="hg-slider-handle">↔</div>
                <div class="hg-slider-badge left">Przed (Lakier)</div>
                <div class="hg-slider-badge right">Po (Satyna Black)</div>
            </div>
        </div>
    </div>
</section>

<!-- DEDICATED SECTION 1: HISTORIA FIRMY (O NAS) -->
<section id="o-firmie" style="padding: 6rem 0;">
    <div class="hg-container">
        <div class="hg-grid hg-grid-2" style="align-items: center;">
            <div>
                <div style="display: inline-block; padding: 0.3rem 0.8rem; background: #312e81; color: #ffffff; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 1rem;">
                    O NASZYM STUDIO
                </div>
                <h2 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.25rem;">
                    HI-GLOSS DESIGN Szczecin
                </h2>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 1.5rem;">
                    Firma HI-GLOSS DESIGN ze Szczecina specjalizuje się w całościowym oklejaniu aut foliami zmieniającymi kolor karoserii. Jest to metoda pozwalająca na szybką zmianę koloru pojazdu bez konieczności lakierowania. Oklejamy samochody, łodzie, motory. Naszą pasją jest grafika samochodowa.
                </p>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 2rem;">
                    Oklejamy w ogrzewanej pracowni w Mierzynie, dzięki czemu aplikowana folia ma odpowiednie warunki do ułożenia się na karoserii pojazdu. Wykonujemy także drobne naprawy blacharsko-lakiernicze przygotowujące auto pod folię.
                </p>
            </div>

            <div style="background: rgba(30, 27, 75, 0.6); padding: 2.5rem; border: 2px solid #4338ca;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.25rem;">
                    Dlaczego Wybrać Hi-Gloss?
                </h3>
                <ul style="display: flex; flex-direction: column; gap: 1rem; color: #cbd5e1;">
                    <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                        <span style="color: #25aae1; font-weight: 900;">✓</span>
                        <span><strong>Certyfikowani aplikatorzy 3M i Avery Dennison</strong> z wieloletnim doświadczeniem.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                        <span style="color: #25aae1; font-weight: 900;">✓</span>
                        <span><strong>Demontaż elementów:</strong> klamki, lampy i zderzaki są demontowane pod zawinięcie folii.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                        <span style="color: #25aae1; font-weight: 900;">✓</span>
                        <span><strong>Własny park maszynowy:</strong> drukarki i plotery tnące na miejscu w pracowni.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- DEDICATED SECTION 2: NASZA OFERTA -->
<section id="oferta" style="padding: 6rem 0; background: #064e3b; border-y: 2px solid #059669;">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.3rem 0.8rem; background: #ffffff; color: #064e3b; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.75rem;">
                NASZE USŁUGI
            </div>
            <h2 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0;">
                ZAKRES USŁUG PRACORWNI
            </h2>
        </div>

        <div class="hg-grid hg-grid-2">
            <div style="background: #022c22; padding: 2rem; border: 2px solid #059669;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 0.75rem;">
                    1. Zmiana Koloru Auta
                </h3>
                <p style="color: #a7f3d0; font-size: 0.95rem; line-height: 1.6;">
                    Całościowe oklejanie karoserii foliami wylewanymi (Mat, Połysk, Satyna, Carbon 3D, Kameleon). Dajemy 5-7 lat gwarancji producentów.
                </p>
            </div>

            <div style="background: #022c22; padding: 2rem; border: 2px solid #059669;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 0.75rem;">
                    2. Bezbarwne Folie PPF
                </h3>
                <p style="color: #a7f3d0; font-size: 0.95rem; line-height: 1.6;">
                    Specjalne poliuretanowe folie bezbarwne (140-200 µm) chroniące lakier przed kamieniami, gałęziami i zarysowaniami z samoregeneracją.
                </p>
            </div>

            <div style="background: #022c22; padding: 2rem; border: 2px solid #059669;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 0.75rem;">
                    3. Oklejanie Reklamowe & Floty
                </h3>
                <p style="color: #a7f3d0; font-size: 0.95rem; line-height: 1.6;">
                    Projektujemy, drukujemy i aplikujemy grafikę reklamową na pojazdach. Stała obsługa floty ok. 40 pojazdów DHL Courier.
                </p>
            </div>

            <div style="background: #022c22; padding: 2rem; border: 2px solid #059669;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 0.75rem;">
                    4. Przyciemnianie Szyb & Detailing
                </h3>
                <p style="color: #a7f3d0; font-size: 0.95rem; line-height: 1.6;">
                    Atestowane folie przyciemniające szyby, dechroming elementów, oklejanie wnętrza oraz kosmetyki do pielęgnacji folii.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- DEDICATED SECTION 3: GALERIA REALIZACJI -->
<section id="realizacje" style="padding: 6rem 0; background: #881337; border-bottom: 2px solid #9f1239;">
    <div class="hg-container">
        <div style="margin-bottom: 3rem; display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem;">
            <div>
                <div style="display: inline-block; padding: 0.3rem 0.8rem; background: #ffffff; color: #881337; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.75rem;">
                    PORTFOLIO
                </div>
                <h2 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0;">
                    GALERIA REALIZACJI
                </h2>
            </div>

            <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                <button class="hg-btn hg-btn-cyan hg-filter-btn active" data-category="all" style="padding: 0.4rem 1rem; font-size: 0.8rem;">Wszystkie</button>
                <button class="hg-btn hg-filter-btn" data-category="zmiana-koloru" style="padding: 0.4rem 1rem; font-size: 0.8rem; background: rgba(0,0,0,0.4); color:#fff; border: 1px solid rgba(255,255,255,0.3);">Zmiana Koloru</button>
                <button class="hg-btn hg-filter-btn" data-category="ppf" style="padding: 0.4rem 1rem; font-size: 0.8rem; background: rgba(0,0,0,0.4); color:#fff; border: 1px solid rgba(255,255,255,0.3);">PPF Ochrona</button>
                <button class="hg-btn hg-filter-btn" data-category="reklama" style="padding: 0.4rem 1rem; font-size: 0.8rem; background: rgba(0,0,0,0.4); color:#fff; border: 1px solid rgba(255,255,255,0.3);">Reklama & Floty</button>
            </div>
        </div>

        <div class="hg-grid hg-grid-3">
            <div class="hg-gallery-item" data-category="zmiana-koloru" style="background: #4c0519; border: 2px solid #be123c;">
                <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=800&q=80" alt="Audi A7" style="width: 100%; height: 230px; object-fit: cover;">
                <div style="padding: 1.25rem;">
                    <span style="font-size: 0.75rem; color: #f43f5e; font-weight: 800; text-transform: uppercase;">Zmiana Koloru</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: #ffffff; margin-top: 0.2rem; text-transform: uppercase;">Audi A7 - Blue Gloss Avery</h3>
                </div>
            </div>

            <div class="hg-gallery-item" data-category="zmiana-koloru" style="background: #4c0519; border: 2px solid #be123c;">
                <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=800&q=80" alt="Mercedes S" style="width: 100%; height: 230px; object-fit: cover;">
                <div style="padding: 1.25rem;">
                    <span style="font-size: 0.75rem; color: #f43f5e; font-weight: 800; text-transform: uppercase;">Zmiana Koloru</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: #ffffff; margin-top: 0.2rem; text-transform: uppercase;">Mercedes S - Satin Black 3M</h3>
                </div>
            </div>

            <div class="hg-gallery-item" data-category="ppf" style="background: #4c0519; border: 2px solid #be123c;">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80" alt="Porsche Panamera" style="width: 100%; height: 230px; object-fit: cover;">
                <div style="padding: 1.25rem;">
                    <span style="font-size: 0.75rem; color: #f43f5e; font-weight: 800; text-transform: uppercase;">Bezbarwne PPF</span>
                    <h3 style="font-family: var(--font-heading); font-size: 1.15rem; color: #ffffff; margin-top: 0.2rem; text-transform: uppercase;">Porsche Panamera - PPF</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DEDICATED SECTION 4: KONTAKT & KALKULATOR (BURNT BRONZE / CHARCOAL) -->
<section id="kontakt" class="sec-details" style="background: #090d16;">
    <div class="hg-container">
        <div style="margin-bottom: 3rem;">
            <div style="display: inline-block; padding: 0.3rem 0.8rem; background: #f59e0b; color: #000000; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 0.75rem;">
                KONTAKT & SZYBKA WYCENA
            </div>
            <h2 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.5vw, 3rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0;">
                ODWIEDŹ NASZE STUDIO LUB NAPISZ
            </h2>
        </div>

        <div class="hg-grid hg-grid-2">
            <!-- Form -->
            <div style="background: #111827; padding: 2.25rem; border: 2px solid #f59e0b;" id="kalkulator">
                <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 900; color: #ffffff; margin-bottom: 1.25rem; text-transform: uppercase;">
                    BEZPŁATNE ZAPYTANIE ONLINE
                </h3>

                <form id="hgCalcForm">
                    <div style="margin-bottom: 1rem;">
                        <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 800; text-transform: uppercase;">Wybrana Usługa:</label>
                        <select id="calcServiceSelect" class="hg-input" style="cursor: pointer; background:#0f172a;">
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

                    <button type="submit" class="hg-btn" style="width: 100%; background: #f59e0b; color: #000000; border: 2px solid #f59e0b;">
                        WYŚLIJ SPECFIKACJĘ &rarr;
                    </button>
                </form>

                <div id="calcResponseMsg" style="display: none;"></div>
            </div>

            <!-- Contact Details & Map -->
            <div style="background: #111827; padding: 2.25rem; border: 2px solid rgba(255,255,255,0.15); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 900; color: #ffffff; margin-bottom: 1.5rem; text-transform: uppercase;">
                        HI-GLOSS DESIGN
                    </h3>

                    <p style="color: #94a3b8; margin-bottom: 1rem; font-size: 0.95rem;">
                        📍 <strong>Adres Studio:</strong> ul. Podmiejska 4, 72-006 Mierzyn / Szczecin
                    </p>
                    <p style="color: #94a3b8; margin-bottom: 1rem; font-size: 0.95rem;">
                        📞 <strong>Infolinia:</strong> <a href="tel:+48605088065" style="color: #25aae1;">605 088 065</a> / <a href="tel:+48664129023" style="color: #25aae1;">664 129 023</a>
                    </p>
                    <p style="color: #94a3b8; margin-bottom: 1.5rem; font-size: 0.95rem;">
                        ✉️ <strong>E-mail:</strong> <a href="mailto:biuro@hi-glossdesign.pl" style="color: #25aae1;">biuro@hi-glossdesign.pl</a>
                    </p>
                </div>

                <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-btn hg-btn-outline" style="width: 100%;">
                    🗺️ NAWIGACJA GOOGLE MAPS
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
