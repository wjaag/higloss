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
        <div class="hg-subpage-image-banner" style="--banner-accent: #ff0055; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.webp'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge" style="color: #ff0055; border-color: #ff0055;">PRZYCIEMNIANIE SZYB &amp; DECHROMING SZCZECIN</span>
                <h1 class="hg-subpage-banner-title">
                    DETAILING &amp; <span style="color: #ff0055;">PRZYCIEMNIANIE SZYB</span>
                </h1>
            </div>
        </div>

        <!-- SINGLE-COLUMN EDITORIAL CONTENT (ramka specyfikacji usunieta) -->
        <div style="display: grid; grid-template-columns: minmax(0, 1fr); gap: 2.8rem; margin: 0 auto 4rem; max-width: 920px;">
            
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

        </div>

    </div>
</main>

<?php get_footer(); ?>
