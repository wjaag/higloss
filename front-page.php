<?php
/**
 * Template Name: Background Graphic Icons 4-Tile Performance Homepage
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN HOMEPAGE AREA: ONLY NAVBAR + 4 TILES WITH CORRESPONDING BACKGROUND GRAPHIC ICONS -->
<main class="sec-homepage-tiles">
    <div class="hg-container">
        <div class="hg-tiles-grid">

            <!-- TILE 1: HISTORIA FIRMY (Background Icon: historia_firmy.png) -->
            <a href="<?php echo esc_url(home_url('/o-firmie')); ?>" class="hg-luxury-card">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/historia_firmy.png'); ?>" alt="Historia Firmy" class="hg-card-icon-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">HISTORIA FIRMY & PASJA</h2>
                    <p class="hg-luxury-card-desc">Certyfikowany zespół aplikatorów 3M i Avery Dennison, ogrzewana hala w Mierzynie i własny park maszynowy.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    POZNAJ NAS <span class="arrow">&rarr;</span>
                </div>
            </a>

            <!-- TILE 2: NASZA OFERTA (Background Icon: nasza_oferta.png) -->
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-luxury-card">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/nasza_oferta.png'); ?>" alt="Nasza Oferta" class="hg-card-icon-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">NASZA OFERTA & USŁUGI</h2>
                    <p class="hg-luxury-card-desc">Całościowa zmiana koloru (Mat, Połysk, Satyna, Carbon), bezbarwne folie PPF z samoregeneracją oraz reklama flot.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    SPRAWDŹ OFERTĘ <span class="arrow">&rarr;</span>
                </div>
            </a>

            <!-- TILE 3: GALERIA REALIZACJI (Background Icon: galeria_realizacji.png) -->
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-luxury-card">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/galeria_realizacji.png'); ?>" alt="Galeria Realizacji" class="hg-card-icon-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">GALERIA REALIZACJI</h2>
                    <p class="hg-luxury-card-desc">Zobacz setki ukończonych aut: Audi A7 Blue Gloss, Mercedes S Satyna, Porsche Panamera PPF.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    GALERIA PRAC <span class="arrow">&rarr;</span>
                </div>
            </a>

            <!-- TILE 4: KONTAKT Z NAMI (Background Icon: kontakt_z_nami.png) -->
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-luxury-card">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/kontakt_z_nami.png'); ?>" alt="Kontakt Z Nami" class="hg-card-icon-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">KONTAKT Z NAMI & WYCENA</h2>
                    <p class="hg-luxury-card-desc">Infolinia studio: 605 088 065 / 664 129 023. Odwiedź naszą ogrzewaną pracownię w Mierzynie ul. Podmiejska 4.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    SKONTAKTUJ SIĘ <span class="arrow">&rarr;</span>
                </div>
            </a>

        </div>
    </div>
</main>

<?php get_footer(); ?>
