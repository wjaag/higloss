<?php
/**
 * Template Name: Podstrona Oferta (Układ 2x2: 1|2 / 3|4)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- SUBPAGE HEADER -->
<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">

        <!-- TITLE HEADLINE -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                PEŁNA <span style="color: #25aae1;">OFERTA STUDIO</span>
            </h1>
        </div>

        <!-- 2x2 GRID TILES LAYOUT (ROW 1: 1 | 2 , ROW 2: 3 | 4) -->
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2.5rem; width: 100%;">

            <!-- ROW 1, COL 1 (TILE 1): CAŁOŚCIOWA ZMIANA KOLORU -->
            <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-ai-mastercard tile-theme-cyan" style="min-height: 380px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Całościowa Zmiana Koloru" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body" style="margin-top: auto;">
                    <h2 class="hg-ai-card-title">CAŁOŚCIOWA ZMIANA KOLORU</h2>
                    <p class="hg-ai-card-desc">
                        Szybka zmiana barwy pojazdu foliami wylewanymi (Mat, Połysk, Satyna, Carbon 3D, Kameleon) marek 3M, Avery Dennison, Hexis.
                    </p>
                </div>
            </a>

            <!-- ROW 1, COL 2 (TILE 2): BEZBARWNE FOLIE PPF -->
            <a href="<?php echo esc_url(home_url('/ppf')); ?>" class="hg-ai-mastercard tile-theme-green" style="min-height: 380px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>" alt="Bezbarwne Folie PPF" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body" style="margin-top: auto;">
                    <h2 class="hg-ai-card-title">BEZBARWNE FOLIE PPF</h2>
                    <p class="hg-ai-card-desc">
                        Bezbarwne folie poliuretanowe (140-200 µm) chroniące lakier przed uderzeniami kamieni i rysami z funkcją samoregeneracji.
                    </p>
                </div>
            </a>

            <!-- ROW 2, COL 1 (TILE 3): OKLEJANIE REKLAMOWE & FLOTY -->
            <a href="<?php echo esc_url(home_url('/reklama')); ?>" class="hg-ai-mastercard tile-theme-amber" style="min-height: 380px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Oklejanie Reklamowe & Floty" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body" style="margin-top: auto;">
                    <h2 class="hg-ai-card-title">OKLEJANIE REKLAMOWE & FLOTY</h2>
                    <p class="hg-ai-card-desc">
                        Grafika mobilna i branding dla firm i korporacji. Własny park maszynowy drukarek wielkoformatowych oraz ploterów tnących.
                    </p>
                </div>
            </a>

            <!-- ROW 2, COL 2 (TILE 4): PRZYCIEMNIANIE SZYB & DETAILING -->
            <a href="<?php echo esc_url(home_url('/detailing')); ?>" class="hg-ai-mastercard tile-theme-ruby" style="min-height: 380px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.jpg'); ?>" alt="Przyciemnianie Szyb & Detailing" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-body" style="margin-top: auto;">
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
