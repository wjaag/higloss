<?php
/**
 * Template Name: Podstrona Usługi - Przyciemnianie Szyb & Detailing (Proper UI/UX)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- SUBPAGE HEADER -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(255, 0, 85, 0.12); border: 1px solid #ff0055; color: #ff0055; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                PRZYCIEMNIANIE SZYB & DECHROMING
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                DETAILING & <span style="color: #ff0055;">PRZYCIEMNIANIE SZYB</span>
            </h1>
        </div>

        <!-- CLEVER AUTOMOTIVE BANNER PHOTO -->
        <div style="margin-bottom: 3.5rem; border: 1px solid rgba(255,255,255,0.15); overflow: hidden; height: 380px;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.jpg'); ?>" alt="Przyciemnianie Szyb & Detailing" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- PROPER 2-COLUMN EDITORIAL UI/UX CONTENT -->
        <div class="hg-grid hg-grid-2" style="gap: 3.5rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: HIGHLY READABLE EDITORIAL TEXT -->
            <div>
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 2px solid #ff0055; padding-bottom: 0.5rem;">
                    Precyzyjne Usługi Wykończeniowe
                </h2>

                <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85; margin-bottom: 1.5rem; font-weight: 500;">
                    Oferujemy przyciemnianie szyb atestowanymi foliami ceramicznymi, które znacznie redukują nagrzewanie się wnętrza pojazdu oraz blokują do 99% promieniowania UV.
                </p>

                <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85; margin-bottom: 2rem; font-weight: 500;">
                    Wykonujemy również **Dechroming (Shadow Line)** – oklejanie chromowanych listew wokół szyb, grilla i wydechów na głęboki połysk lub satynową czerń, co nadaje autu nowoczesny, sportowy charakter.
                </p>

                <div style="background: rgba(15, 21, 36, 0.8); border: 1px solid rgba(255,255,255,0.12); padding: 2rem; margin-bottom: 2rem;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 900; color: #ff0055; text-transform: uppercase; margin-bottom: 1rem;">
                        Zakres Działań
                    </h3>
                    <ul style="display: flex; flex-direction: column; gap: 0.8rem; color: #cbd5e1; font-size: 0.95rem;">
                        <li style="display: flex; gap: 0.75rem;">
                            <span style="color: #ff0055; font-weight: 900;">✓</span>
                            <span><strong>Atestowane folie piecowe/ceramiczne:</strong> gwarancja legalności i atestu diagnostycznego.</span>
                        </li>
                        <li style="display: flex; gap: 0.75rem;">
                            <span style="color: #ff0055; font-weight: 900;">✓</span>
                            <span><strong>Stylizacja Wnętrza & Dechroming:</strong> wykończenie dekorów w carbonie lub matowej czerni.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT COLUMN: SPECS & DIRECT CTA CARD -->
            <div style="background: #0b0f19; border: 2px solid #ff0055; padding: 2.5rem; position: sticky; top: 110px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.8rem; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 0.75rem;">
                    SPECYFIKACJA DETAILINGU
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Szyby:</span>
                        <strong style="color: #ff0055;">Folie Ceramiczne z Atestem</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Dechroming:</span>
                        <strong style="color: #ff0055;">Shadow Line Black Gloss/Satin</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Usługi:</span>
                        <strong style="color: #ffffff;">1 Dzień Roboczy</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff0055; color: #fff; border: 2px solid #ff0055; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center;">
                    🏎️ ZAPYTAJ O DECHROMING / SZYBY &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
