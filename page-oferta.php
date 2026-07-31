<?php
/**
 * Template Name: Podstrona Oferta (Responsive 2x2 / 1-Col Mobile)
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

        <!-- 2x2 RESPONSIVE GRID FOR OFERTA (2 COLUMNS DESKTOP / 1 COLUMN MOBILE) -->
        <div class="hg-grid-2">

            <!-- CARD 1: CAŁOŚCIOWA ZMIANA KOLORU -->
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

            <!-- CARD 2: BEZBARWNE FOLIE PPF -->
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

            <!-- CARD 3: OKLEJANIE REKLAMOWE & FLOTY -->
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

            <!-- CARD 4: PRZYCIEMNIANIE SZYB & DETAILING -->
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
