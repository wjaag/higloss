<?php
/**
 * Template Name: Podstrona Usługi - Zmiana Koloru Auta (Proper UI/UX)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- SUBPAGE HEADER -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(37, 170, 225, 0.12); border: 1px solid #25aae1; color: #25aae1; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                CAR WRAPPING & TUNING OPTYCZNY
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                CAŁOŚCIOWA <span style="color: #25aae1;">ZMIANA KOLORU AUTA</span>
            </h1>
        </div>

        <!-- CLEVER AUTOMOTIVE BANNER PHOTO -->
        <div style="margin-bottom: 3.5rem; border: 1px solid rgba(255,255,255,0.15); overflow: hidden; height: 380px;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Zmiana Koloru Auta" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- PROPER 2-COLUMN EDITORIAL UI/UX CONTENT -->
        <div class="hg-grid hg-grid-2" style="gap: 3.5rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: HIGHLY READABLE EDITORIAL TEXT -->
            <div>
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 2px solid #25aae1; padding-bottom: 0.5rem;">
                    O Szybkiej Zmianie Koloru
                </h2>

                <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85; margin-bottom: 1.5rem; font-weight: 500;">
                    Firma <strong>HI-GLOSS DESIGN</strong> ze Szczecina specjalizuje się w całościowym oklejaniu aut foliami wylewanymi zmieniającymi kolor karoserii. Jest to metoda pozwalająca na szybką i spektakularną zmianę wyglądu pojazdu bez konieczności kosztownego i nieodwracalnego lakierowania.
                </p>

                <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85; margin-bottom: 2rem; font-weight: 500;">
                    Oklejamy samochody, łodzie i motocykle. Pracujemy wyłącznie na wylewanych foliach renomowanych producentów: <strong>3M 2080, Avery Dennison Supreme, Hexis Skintac, KPMF oraz Oracal</strong>. Bogata paleta kolorów (mat, połysk, satyna, carbon 3D, kameleon) sprawi, że Twój pojazd na pewno nie przejedzie niezauważony.
                </p>

                <div style="background: rgba(15, 21, 36, 0.8); border: 1px solid rgba(255,255,255,0.12); padding: 2rem; margin-bottom: 2rem;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 900; color: #25aae1; text-transform: uppercase; margin-bottom: 1rem;">
                        Dlaczego Aplikacja w Hi-Gloss?
                    </h3>
                    <ul style="display: flex; flex-direction: column; gap: 0.8rem; color: #cbd5e1; font-size: 0.95rem;">
                        <li style="display: flex; gap: 0.75rem;">
                            <span style="color: #25aae1; font-weight: 900;">✓</span>
                            <span><strong>Profesjonalny demontaż elementów:</strong> demontujemy klamki, lampy, zderzaki i lusterka, aby folia była zawinięta do wewnątrz.</span>
                        </li>
                        <li style="display: flex; gap: 0.75rem;">
                            <span style="color: #25aae1; font-weight: 900;">✓</span>
                            <span><strong>Ogrzewana pracownia w Mierzynie:</strong> stała temperatura pozwala na prawidłowe wiązanie kleju na przetłoczeniach.</span>
                        </li>
                        <li style="display: flex; gap: 0.75rem;">
                            <span style="color: #25aae1; font-weight: 900;">✓</span>
                            <span><strong>Naprawy blacharsko-lakiernicze:</strong> drobne ogniska rdzy i odpryski usuwamy w cenie przygotowania auta.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT COLUMN: SPECS & DIRECT CTA CARD -->
            <div style="background: #0b0f19; border: 2px solid #25aae1; padding: 2.5rem; position: sticky; top: 110px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.8rem; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 0.75rem;">
                    SPECYFIKACJA USŁUGI
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Realizacji:</span>
                        <strong style="color: #25aae1;">3 - 5 Dni Roboczych</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Gwarancja:</span>
                        <strong style="color: #25aae1;">5 - 7 Lat Producenta</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Używane Folie:</span>
                        <strong style="color: #ffffff;">3M 2080 / Avery Supreme</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Lokalizacja:</span>
                        <strong style="color: #ffffff;">Pracownia Mierzyn</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-cyan" style="width: 100%; justify-content: center; font-size: 0.95rem; text-align: center;">
                    📞 ZADZWOŃ I ZAPYTAJ O WYCENĘ &rarr;
                </a>
            </div>

        </div>

        <!-- BEFORE / AFTER SLIDER SHOWCASE -->
        <div style="background: #0b0f19; border: 2px solid #25aae1; padding: 2.5rem; text-align: center;">
            <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem;">
                PRZESUŃ SUWAK: LAKIER FABRYCZNY VS SATYNA BLACK
            </h3>
            
            <div class="hg-slider-box" id="hgBeforeAfterSlider" style="max-width: 900px; margin: 0 auto;">
                <div class="hg-slider-img hg-slider-before" style="background-image: url('https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="hg-slider-img hg-slider-after" style="background-image: url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="hg-slider-handle">↔</div>
                <div class="hg-slider-badge left">Przed (Lakier)</div>
                <div class="hg-slider-badge right">Po (Satyna)</div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
