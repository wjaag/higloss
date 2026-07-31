<?php
/**
 * Template Name: Podstrona Usługi - Przyciemnianie Szyb & Detailing (Editorial UI/UX)
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
                DETAILING & <span style="color: #ff0055;">PRZYCIEMNIANIE SZYB</span>
            </h1>
        </div>

        <!-- FRAMED HIGH-DEFINITION AI PHOTO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #ff0055;">
            <span class="hg-subpage-banner-badge" style="color: #ff0055; border-color: #ff0055;">PRZYCIEMNIANIE SZYB & DECHROMING</span>
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.jpg'); ?>" alt="Przyciemnianie Szyb & Detailing">
            <div class="hg-subpage-banner-vignette"></div>
        </div>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: PROMINENT HIGH-CONTRAST DESCRIPTION CARD -->
            <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                <h2 class="hg-editorial-title" style="border-color: #ff0055;">
                    Precyzyjne Usługi Wykończeniowe
                </h2>

                <p class="hg-editorial-paragraph">
                    Oferujemy przyciemnianie szyb atestowanymi foliami ceramicznymi, które znacznie redukują nagrzewanie się wnętrza pojazdu oraz blokują do 99% promieniowania UV.
                </p>

                <p class="hg-editorial-paragraph">
                    Wykonujemy również <strong>Dechroming (Shadow Line)</strong> – oklejanie chromowanych listew wokół szyb, grilla i wydechów na głęboki połysk lub satynową czerń, co nadaje autu sportowy charakter.
                </p>

                <div class="hg-editorial-highlight-box" style="--card-accent: #ff0055; background: rgba(255, 0, 85, 0.1);">
                    <strong style="color: #ff0055; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Atest ISiC & Legalność:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Pracujemy wyłącznie na foliach z homologacją Instytutu Szkła i Ceramiki, gwarantujących bezproblemowy przegląd techniczny.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: STICKY SPECS & CALL CTA CARD -->
            <div class="hg-specs-cta-card" style="--card-accent: #ff0055;">
                <h3 class="hg-specs-title" style="border-color: #ff0055;">
                    SPECYFIKACJA DETAILINGU
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2.2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Szyby:</span>
                        <strong style="color: #ff0055; font-size: 1rem;">Folie Ceramiczne z Atestem</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Dechroming:</span>
                        <strong style="color: #ff0055; font-size: 1rem;">Shadow Line Black Gloss/Satin</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Usługi:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">1 Dzień Roboczy</strong>
                    </div>
                </div>

                <!-- CALL CTA BUTTON -->
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff0055; color: #ffffff; border: 2px solid #ff0055; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    🏎️ ZADZWOŃ: 605 088 065 &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
