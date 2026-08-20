<?php
/**
 * Template Name: Podstrona Usługi - Przyciemnianie Szyb & Detailing (SEO Expanded)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 4rem; flex: 1;">
    <div class="hg-container">
        
        <!-- COMPACT HERO PHOTO BANNER WITH TITLE ON PHOTO -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #ff0055; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.jpg'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge" style="color: #ff0055; border-color: #ff0055;">PRZYCIEMNIANIE SZYB &amp; DECHROMING SZCZECIN</span>
                <h1 class="hg-subpage-banner-title">
                    DETAILING &amp; <span style="color: #ff0055;">PRZYCIEMNIANIE SZYB</span>
                </h1>
            </div>
        </div>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID WITH EXPANDED SEO CONTENT -->
        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: PROMINENT EXPANDED SEO DESCRIPTION CARD -->
            <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                <h2 class="hg-editorial-title">
                    Szyby i dechroming
                </h2>

                <p class="hg-editorial-paragraph">
                    Oferujemy profesjonalne przyciemnianie szyb samochodowych atestowanymi foliami ceramicznymi i piecowymi. Folia redukuje nagrzewanie się wnętrza pojazdu w upalne dni, blokuje do 99% szkodliwego promieniowania UV oraz zapewnia prywatność i bezpieczeństwo pasażerów.
                </p>

                <p class="hg-editorial-paragraph">
                    Specjalizujemy się także w usłudze <strong>Dechromingu (Shadow Line)</strong> – oklejaniu chromowanych listew wokół szyb, grilla, lusterek i dyfuzorów na wysoki połysk lub głęboką satynową czerń. Zmienia to wygląd każdego auta na bardziej sportowy i drapieżny.
                </p>

                <div class="hg-editorial-highlight-box" style="--card-accent: #ff0055; background: rgba(255, 0, 85, 0.1);">
                    <strong style="color: #ff0055; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Atest Instytutu Szkła i Ceramiki (ISiC):</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Na wybraną usługę przyciemniania szyb wydajemy oficjalny atest homologacyjny, gwarantujący 100% legalności i spokój podczas przeglądów i kontroli drogowych.</span>
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
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> ZADZWOŃ: 605 088 065 <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg>
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
