<?php
/**
 * Template Name: Podstrona Usługi - Zmiana Koloru Auta (Editorial UI/UX)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- SUBPAGE TITLE -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                CAŁOŚCIOWA <span style="color: #25aae1;">ZMIANA KOLORU AUTA</span>
            </h1>
        </div>

        <!-- FRAMED HIGH-DEFINITION AI PHOTO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1;">
            <span class="hg-subpage-banner-badge">CAR WRAPPING & TUNING OPTYCZNY</span>
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Zmiana Koloru Auta">
            <div class="hg-subpage-banner-vignette"></div>
        </div>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: PROMINENT HIGH-CONTRAST DESCRIPTION CARD -->
            <div class="hg-editorial-card" style="--card-accent: #25aae1;">
                <h2 class="hg-editorial-title">
                    O Szybkiej Zmianie Koloru
                </h2>

                <p class="hg-editorial-paragraph">
                    Firma <strong>HI-GLOSS DESIGN</strong> ze Szczecina specjalizuje się w całościowym oklejaniu aut foliami wylewanymi zmieniającymi kolor karoserii. Jest to metoda pozwalająca na szybką i spektakularną zmianę wyglądu pojazdu bez konieczności kosztownego i nieodwracalnego lakierowania.
                </p>

                <p class="hg-editorial-paragraph">
                    Oklejamy samochody, łodzie i motocykle. Pracujemy wyłącznie na wylewanych foliach renomowanych producentów: <strong>3M 2080, Avery Dennison Supreme, Hexis Skintac, KPMF oraz Oracal</strong> (mat, połysk, satyna, carbon 3D, kameleon).
                </p>

                <div class="hg-editorial-highlight-box" style="--card-accent: #25aae1;">
                    <strong style="color: #25aae1; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Dbałość O Każdy Detal:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Przed aplikacją folii demontujemy klamki, lampy, zderzaki i lusterka. Folia zawijana jest głęboko do wnętrza, co wyklucza ryzyko odklejania. Wykonujemy też drobne naprawy blacharsko-lakiernicze w cenie przygotowania auta.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: STICKY SPECS & CALL CTA CARD -->
            <div class="hg-specs-cta-card" style="--card-accent: #25aae1;">
                <h3 class="hg-specs-title">
                    SPECYFIKACJA USŁUGI
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2.2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Realizacji:</span>
                        <strong style="color: #25aae1; font-size: 1rem;">3 - 5 Dni Roboczych</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Gwarancja:</span>
                        <strong style="color: #25aae1; font-size: 1rem;">5 - 7 Lat Producenta</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Używane Folie:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">3M 2080 / Avery Supreme</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Warunki:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">Ogrzewane Studio Mierzyn</strong>
                    </div>
                </div>

                <!-- CALL CTA BUTTON -->
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #25aae1; color: #000000; border: 2px solid #25aae1; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    📞 ZADZWOŃ: 605 088 065 &rarr;
                </a>
            </div>

        </div>

        <!-- BEFORE / AFTER SLIDER SHOWCASE -->
        <div style="background: #0d111a; border: 2px solid #25aae1; padding: 2.5rem; text-align: center;">
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
