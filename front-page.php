<?php
/**
 * Template Name: 3-Tile Premium Layout (Nasza Oferta, Galeria Prac, Wycena)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN HOMEPAGE AREA -->
<main style="padding: 9.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- 1. NAPIS (SLOGAN HEADLINE) -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.8vw, 4.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                CAŁOŚCIOWE <span style="color: #25aae1;">OKLEJANIE POJAZDÓW</span>
            </h1>
        </div>

        <!-- 2. KAFELKI: NASZA OFERTA | GALERIA PRAC (2 COLUMNS) -->
        <div class="hg-tiles-grid-2" style="margin-bottom: 2.2rem;">

            <!-- KAFELEK 1: NASZA OFERTA -->
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-ai-mastercard tile-theme-amber">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile2_oferta.jpg'); ?>" alt="Nasza Oferta" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">01 / NASZA OFERTA</div>
                
                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">NASZA OFERTA & USŁUGI</h2>
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

        <!-- 3. KAFELEK: WYCENA (FULL WIDTH TILE) -->
        <div id="wycena">
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-ai-mastercard tile-theme-green hg-full-tile">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile4_kontakt.jpg'); ?>" alt="Szybka Wycena" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">03 / BEZPŁATNA WYCENA</div>
                
                <div class="hg-ai-card-body" style="max-width: 580px;">
                    <h2 class="hg-ai-card-title">SZYBKA WYCENA & KONTAKT</h2>
                    <p class="hg-ai-card-desc">Wyślij darmową specyfikację lub skontaktuj się z nami bezpośrednio: 605 088 065 / 664 129 023. Studio Mierzyn ul. Podmiejska 4.</p>
                    <div class="hg-ai-card-btn">
                        SKONFIGURUJ WYCENĘ ONLINE <span class="arrow">&rarr;</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
</main>

<?php get_footer(); ?>
