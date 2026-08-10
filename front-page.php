<?php
/**
 * Template Name: 2-Tile Visual Masterpiece Homepage
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN HOMEPAGE AREA: NAVBAR -> SLOGAN -> 2 TILES -> COMPACT FOOTER -->
<main class="sec-homepage-tiles">
    <div class="hg-container">

        <!-- 1. NAPIS (RESPONSIVE SLOGAN HEADLINE) -->
        <div style="text-align: center; margin-bottom: 2.8rem; animation: fadeInUp 0.6s ease both;">
            <h1 class="hg-slogan-headline" style="font-family: 'Montserrat', sans-serif; font-size: clamp(1.4rem, 3.8vw, 3.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8); white-space: nowrap;">
                CAŁOŚCIOWE <span style="color: #25aae1;">OKLEJANIE POJAZDÓW</span>
            </h1>
        </div>

        <!-- 2. KAFELKI: NASZA OFERTA | GALERIA PRAC (2 COLUMNS RESPONSIVE) -->
        <div class="hg-tiles-grid-2">

            <!-- KAFELEK 1: NASZA OFERTA -->
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-ai-mastercard tile-theme-amber">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile2_oferta.jpg'); ?>" alt="Nasza Oferta" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">01 / NASZA OFERTA</div>
                
                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">NASZA OFERTA</h2>
                    <p class="hg-ai-card-desc">Całościowa zmiana koloru (Mat, Połysk, Satyna, Carbon), bezbarwne folie ochronne PPF z samoregeneracją oraz reklama flot.</p>
                    <div class="hg-ai-card-btn">
                        SPRAWDŹ OFERTĘ <span class="arrow">&rarr;</span>
                    </div>
                </div>
            </a>

            <!-- KAFELEK 2: GALERIA PRAC -->
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-ai-mastercard tile-theme-cyan">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile3_galeria.jpg'); ?>" alt="Galeria Prac" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">02 / GALERIA PRAC</div>
                
                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">GALERIA REALIZACJI</h2>
                    <p class="hg-ai-card-desc">Zobacz setki ukończonych aut: Audi A7 Blue Gloss, Mercedes S Satyna, Porsche Panamera PPF oraz projekty specjalne.</p>
                    <div class="hg-ai-card-btn">
                        GALERIA PRAC <span class="arrow">&rarr;</span>
                    </div>
                </div>
            </a>

        </div>

    </div>
</main>

<?php get_footer(); ?>
