<?php
/**
 * Template Name: Podstrona Oferta (Układ 2x2 z Kolorowym Podświetleniem)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- SUBPAGE HEADER -->
<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO PHOTO BANNER WITH TITLE ON PHOTO -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile2_oferta.jpg'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">CAR WRAPPING &amp; PAINT PROTECTION STUDIO</span>
                <h1 class="hg-subpage-banner-title">
                    PEŁNA <span style="color: #25aae1;">OFERTA STUDIO</span>
                </h1>
            </div>
        </div>

        <!-- 2x2 GRID TILES LAYOUT WITH DEDICATED HOVER ACCENT COLORS -->
        <div class="hg-grid-2">

            <!-- TILE 1: CAŁOŚCIOWA ZMIANA KOLORU (CYAN HOVER) -->
            <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-ai-mastercard tile-theme-cyan">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Całościowa Zmiana Koloru" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">CAŁOŚCIOWA ZMIANA KOLORU</h2>
                    <p class="hg-ai-card-desc">
                        Szybka zmiana barwy pojazdu foliami wylewanymi (Mat, Połysk, Satyna, Carbon 3D, Kameleon) marek 3M, Avery Dennison, Hexis.
                    </p>
                </div>
            </a>

            <!-- TILE 2: BEZBARWNE FOLIE PPF (GREEN HOVER) -->
            <a href="<?php echo esc_url(home_url('/ppf')); ?>" class="hg-ai-mastercard tile-theme-green">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>" alt="Bezbarwne Folie PPF" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">BEZBARWNE FOLIE PPF</h2>
                    <p class="hg-ai-card-desc">
                        Bezbarwne folie poliuretanowe (140-200 µm) chroniące lakier przed uderzeniami kamieni i rysami z funkcją samoregeneracji.
                    </p>
                </div>
            </a>

            <!-- TILE 3: OKLEJANIE REKLAMOWE & FLOTY (AMBER HOVER) -->
            <a href="<?php echo esc_url(home_url('/reklama')); ?>" class="hg-ai-mastercard tile-theme-amber">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Oklejanie Reklamowe & Floty" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">OKLEJANIE REKLAMOWE & FLOTY</h2>
                    <p class="hg-ai-card-desc">
                        Grafika mobilna i branding dla firm i korporacji. Własny park maszynowy drukarek wielkoformatowych oraz ploterów tnących.
                    </p>
                </div>
            </a>

            <!-- TILE 4: PRZYCIEMNIANIE SZYB & DETAILING (RUBY HOVER) -->
            <a href="<?php echo esc_url(home_url('/detailing')); ?>" class="hg-ai-mastercard tile-theme-ruby">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.jpg'); ?>" alt="Przyciemnianie Szyb & Detailing" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">PRZYCIEMNIANIE SZYB & DETAILING</h2>
                    <p class="hg-ai-card-desc">
                        Przyciemnianie szyb atestowanymi foliami ceramicznymi, dechroming listew na wysoki połysk oraz oklejanie wnętrza pojazdów.
                    </p>
                </div>
            </a>

        </div>

    </div>
</main>

<?php get_footer(); ?>
