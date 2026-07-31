<?php
/**
 * Template Name: Podstrona Usługi - Przyciemnianie Szyb & Detailing (Compact Hero Background)
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
                <p style="color: rgba(255,255,255,0.9); font-size: 1.05rem; line-height: 1.6; margin: 0; font-weight: 500;">
                    Atestowane folie ceramiczne przyciemniające szyby, dechroming listew na wysoki połysk oraz uszlachetnianie wnętrza.
                </p>
            </div>
        </div>

        <!-- 2-COLUMN COMPACT CONTENT GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.5rem; align-items: flex-start; margin-bottom: 3.5rem;">
            
            <!-- LEFT COLUMN: COMPACT EDITORIAL TEXT -->
            <div style="background: #0b0e17; border: 1px solid rgba(255,255,255,0.15); padding: 2.25rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.25rem; border-bottom: 2px solid #ff0055; padding-bottom: 0.5rem;">
                    Precyzyjne Usługi Wykończeniowe
                </h2>

                <p style="color: #e2e8f0; font-size: 1rem; line-height: 1.75; margin-bottom: 1.25rem;">
                    Oferujemy przyciemnianie szyb atestowanymi foliami ceramicznymi, które znacznie redukują nagrzewanie się wnętrza pojazdu oraz blokują do 99% promieniowania UV.
                </p>

                <p style="color: #e2e8f0; font-size: 1rem; line-height: 1.75; margin-bottom: 1.5rem;">
                    Wykonujemy również <strong>Dechroming (Shadow Line)</strong> – oklejanie chromowanych listew wokół szyb, grilla i wydechów na głęboki połysk lub satynową czerń, co nadaje autu sportowy charakter.
                </p>

                <div style="background: rgba(255, 0, 85, 0.08); border-left: 3px solid #ff0055; padding: 1.25rem; margin-top: 1rem;">
                    <strong style="color: #ff0055; display: block; margin-bottom: 0.4rem; text-transform: uppercase; font-size: 0.85rem;">Gwarancja Atestu Diagnostycznego:</strong>
                    <span style="color: #cbd5e1; font-size: 0.9rem;">Pracujemy wyłącznie na folia certyfikowanych przez Instytut Szkła i Ceramiki (ISiC).</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: QUICK SPECS & CALL CTA CARD -->
            <div style="background: #0b0e17; border: 2px solid #ff0055; padding: 2.25rem;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 0.5rem;">
                    SPECYFIKACJA DETAILINGU
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Szyby:</span>
                        <strong style="color: #ff0055;">Folie Ceramiczne z Atestem</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Dechroming:</span>
                        <strong style="color: #ff0055;">Shadow Line Black Gloss/Satin</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Usługi:</span>
                        <strong style="color: #ffffff;">1 Dzień Roboczy</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff0055; color: #fff; border: 2px solid #ff0055; width: 100%; justify-content: center; font-size: 0.9rem; text-align: center; font-weight: 900;">
                    🏎️ ZAPYTAJ O DECHROMING / SZYBY &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
