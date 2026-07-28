<?php
/**
 * Template Name: Ultra-Luxury 4-Tile Performance Homepage
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN HOMEPAGE AREA: ONLY NAVBAR + 4 LUXURY TILES (hi-glossdesign.pl mapped) -->
<main class="sec-homepage-tiles">
    <div class="hg-container">
        <div class="hg-tiles-grid">

            <!-- TILE 1: HISTORIA FIRMY -->
            <a href="<?php echo esc_url(home_url('/o-firmie')); ?>" class="hg-luxury-card">
                <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1000&q=80" alt="Historia Firmy" class="hg-luxury-card-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">HISTORIA FIRMY & PASJA</h2>
                    <p class="hg-luxury-card-desc">Certyfikowany zespół aplikatorów 3M i Avery Dennison, ogrzewana hala w Mierzynie i własny park maszynowy.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    POZNAJ NAS &rarr;
                </div>
            </a>

            <!-- TILE 2: NASZA OFERTA -->
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-luxury-card">
                <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1000&q=80" alt="Nasza Oferta" class="hg-luxury-card-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">NASZA OFERTA & USŁUGI</h2>
                    <p class="hg-luxury-card-desc">Całościowa zmiana koloru (Mat, Połysk, Satyna, Carbon), bezbarwne folie PPF z samoregeneracją oraz reklama flot.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    SPRAWDŹ OFERTĘ &rarr;
                </div>
            </a>

            <!-- TILE 3: GALERIA REALIZACJI -->
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-luxury-card">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80" alt="Galeria Realizacji" class="hg-luxury-card-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">GALERIA REALIZACJI</h2>
                    <p class="hg-luxury-card-desc">Zobacz setki ukończonych aut: Audi A7 Blue Gloss, Mercedes S Satyna, Porsche Panamera PPF.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    GALERIA PRAC &rarr;
                </div>
            </a>

            <!-- TILE 4: KONTAKT Z NAMI -->
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-luxury-card">
                <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=1000&q=80" alt="Kontakt Z Nami" class="hg-luxury-card-bg">
                
                <div class="hg-luxury-card-content">
                    <h2 class="hg-luxury-card-title">KONTAKT Z NAMI & WYCENA</h2>
                    <p class="hg-luxury-card-desc">Infolinia studio: 605 088 065 / 664 129 023. Odwiedź naszą ogrzewaną pracownię w Mierzynie ul. Podmiejska 4.</p>
                </div>

                <div class="hg-luxury-card-btn">
                    SKONTAKTUJ SIĘ &rarr;
                </div>
            </a>

        </div>
    </div>
</main>

<?php get_footer(); ?>
