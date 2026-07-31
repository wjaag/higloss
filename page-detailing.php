<?php
/**
 * Template Name: Podstrona Usługi - Przyciemnianie Szyb & Detailing (Editorial High-Contrast UX)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 9.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        
        <!-- COMPACT HERO CARD WITH BACKGROUND VEHICLE PHOTO -->
        <div class="hg-subpage-hero" style="background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.jpg'); ?>'); --hero-border: #ff0055;">
            <div class="hg-subpage-hero-overlay"></div>
            <div class="hg-subpage-hero-content">
                <div style="display: inline-block; padding: 0.35rem 0.9rem; background: rgba(255, 0, 85, 0.2); border: 1px solid #ff0055; color: #ff0055; font-weight: 800; font-size: 0.78rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1rem;">
                    PRZYCIEMNIANIE SZYB & DECHROMING
                </div>
                <h1 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.8vw, 3.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0 0 1rem 0; line-height: 1.15; text-shadow: 0 4px 20px rgba(0,0,0,0.9);">
                    DETAILING & <span style="color: #ff0055;">PRZYCIEMNIANIE SZYB</span>
                </h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.6; margin: 0; font-weight: 500;">
                    Atestowane folie ceramiczne przyciemniające szyby, dechroming listew na wysoki połysk oraz uszlachetnianie wnętrza.
                </p>
            </div>
        </div>

        <!-- HIGH-CONTRAST EDITORIAL DESCRIPTION & SPECS GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.5rem; align-items: flex-start; margin-bottom: 3.5rem;">
            
            <!-- LEFT COLUMN: PROMINENT HIGH-CONTRAST DESCRIPTION CARD -->
            <div class="hg-desc-card" style="--card-accent: #ff0055;">
                <h2 class="hg-desc-title" style="border-color: #ff0055;">
                    Precyzyjne Usługi Wykończeniowe
                </h2>

                <p class="hg-desc-text">
                    Oferujemy przyciemnianie szyb atestowanymi foliami ceramicznymi, które znacznie redukują nagrzewanie się wnętrza pojazdu oraz blokują do 99% promieniowania UV.
                </p>

                <p class="hg-desc-text">
                    Wykonujemy również <strong>Dechroming (Shadow Line)</strong> – oklejanie chromowanych listew wokół szyb, grilla i wydechów na głęboki połysk lub satynową czerń, co nadaje autu sportowy charakter.
                </p>

                <div style="background: rgba(255, 0, 85, 0.12); border-left: 4px solid #ff0055; padding: 1.5rem; margin-top: 1.5rem;">
                    <strong style="color: #ff0055; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Atest ISiC & Legalność:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.6; display: block;">Pracujemy wyłącznie na foliach z homologacją Instytutu Szkła i Ceramiki, gwarantujących bezproblemowy przegląd techniczny.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: QUICK SPECS & CALL CTA CARD -->
            <div style="background: #0b0f19; border: 2px solid #ff0055; padding: 2.5rem; position: sticky; top: 110px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 2px solid #ff0055; padding-bottom: 0.6rem;">
                    SPECYFIKACJA DETAILINGU
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Szyby:</span>
                        <strong style="color: #ff0055; font-size: 1rem;">Folie Ceramiczne z Atestem</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Dechroming:</span>
                        <strong style="color: #ff0055; font-size: 1rem;">Shadow Line Black Gloss/Satin</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Usługi:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">1 Dzień Roboczy</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff0055; color: #fff; border: 2px solid #ff0055; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    🏎️ ZAPYTAJ O DECHROMING / SZYBY &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
