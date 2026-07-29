<?php
/**
 * Template Name: AI-Powered Masterpiece 4-Tile Homepage
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN HOMEPAGE AREA: ONLY NAVBAR + SIGNATURE SLOGAN + 4 AI VISUAL MASTERPIECE TILES -->
<main class="sec-homepage-tiles">
    <div class="hg-container">
        <!-- Signature Client Slogan Headline Before the 4 Tiles -->
        <div style="text-align: center; margin-bottom: 3.2rem; animation: fadeInUp 0.6s ease both;">
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.2rem, 4vw, 3.6rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                CAŁOŚCIOWE <span style="color: #25aae1;">OKLEJANIE POJAZDÓW</span>
            </h1>
        </div>

        <div class="hg-tiles-grid">

            <!-- TILE 1: HISTORIA FIRMY (AI Porsche GT3 RS Wrap Studio) -->
            <a href="<?php echo esc_url(home_url('/o-firmie')); ?>" class="hg-ai-mastercard tile-theme-green">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile1_pasja.jpg'); ?>" alt="Historia Firmy & Pasja" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">01 / HISTORIA FIRMY</div>
                
                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">HISTORIA FIRMY & PASJA</h2>
                    <p class="hg-ai-card-desc">Certyfikowany zespół aplikatorów, ogrzewana pracownia w Mierzynie i własny park maszynowy.</p>
                    <div class="hg-ai-card-btn">
                        POZNAJ NAS <span class="arrow">&rarr;</span>
                    </div>
                </div>
            </a>

            <!-- TILE 2: NASZA OFERTA (AI BMW M4 Gold & Carbon Wrap Detail) -->
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-ai-mastercard tile-theme-amber">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile2_oferta.jpg'); ?>" alt="Nasza Oferta & Usługi" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">02 / NASZA OFERTA</div>
                
                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">NASZA OFERTA & USŁUGI</h2>
                    <p class="hg-ai-card-desc">Całościowa zmiana koloru (Mat, Połysk, Satyna, Carbon), bezbarwne folie PPF oraz reklama flot.</p>
                    <div class="hg-ai-card-btn">
                        SPRAWDŹ OFERTĘ <span class="arrow">&rarr;</span>
                    </div>
                </div>
            </a>

            <!-- TILE 3: GALERIA REALIZACJI (AI Audi RS7 Blue Gloss Gallery) -->
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-ai-mastercard tile-theme-ruby">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile3_galeria.jpg'); ?>" alt="Galeria Realizacji" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">03 / GALERIA PRAC</div>
                
                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">GALERIA REALIZACJI</h2>
                    <p class="hg-ai-card-desc">Zobacz setki ukończonych aut: Audi A7 Blue Gloss, Mercedes S Satyna, Porsche Panamera PPF.</p>
                    <div class="hg-ai-card-btn">
                        GALERIA PRAC <span class="arrow">&rarr;</span>
                    </div>
                </div>
            </a>

            <!-- TILE 4: KONTAKT Z NAMI (AI High-Tech Studio Scan) -->
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-ai-mastercard tile-theme-cyan">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile4_kontakt.jpg'); ?>" alt="Kontakt Z Nami & Wycena" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">04 / KONTAKT & WYCENA</div>
                
                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">KONTAKT Z NAMI & WYCENA</h2>
                    <p class="hg-ai-card-desc">Infolinia studio: 605 088 065 / 664 129 023. Odwiedź naszą ogrzewaną pracownię w Mierzynie ul. Podmiejska 4.</p>
                    <div class="hg-ai-card-btn">
                        SKONTAKTUJ SIĘ <span class="arrow">&rarr;</span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</main>

<?php get_footer(); ?>
