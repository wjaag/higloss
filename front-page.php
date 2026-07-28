<?php
/**
 * Template Name: Innovative 4-Tile Performance Homepage 2026
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN HOMEPAGE AREA: ONLY NAVBAR + 4 INNOVATIVE TILES (hi-glossdesign.pl mapped) -->
<main class="sec-homepage-tiles">
    <div class="hg-container">
        <div class="hg-tiles-grid">

            <!-- TILE 01: HISTORIA FIRMY (NEON GREEN ACCENT) -->
            <a href="<?php echo esc_url(home_url('/o-firmie')); ?>" class="hg-innovative-card tile-accent-green">
                <span class="hg-card-numeral">01</span>
                <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1000&q=80" alt="Historia Firmy" class="hg-card-bg-vehicle">
                
                <div class="hg-card-content">
                    <h2 class="hg-card-title">HISTORIA FIRMY & PASJA</h2>
                    <p class="hg-card-desc">Certyfikowany zespół aplikatorów, ogrzewana hala w Mierzynie i własny park maszynowy.</p>
                </div>

                <div class="hg-card-action-btn">
                    POZNAJ NAS &rarr;
                </div>
            </a>

            <!-- TILE 02: NASZA OFERTA (NEON AMBER ACCENT) -->
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-innovative-card tile-accent-amber">
                <span class="hg-card-numeral">02</span>
                <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1000&q=80" alt="Nasza Oferta" class="hg-card-bg-vehicle">
                
                <div class="hg-card-content">
                    <h2 class="hg-card-title">NASZA OFERTA & USŁUGI</h2>
                    <p class="hg-card-desc">Całościowa zmiana koloru (Mat, Połysk, Satyna, Carbon), bezbarwne folie PPF oraz reklama flot.</p>
                </div>

                <div class="hg-card-action-btn">
                    SPRAWDŹ OFERTĘ &rarr;
                </div>
            </a>

            <!-- TILE 03: GALERIA REALIZACJI (NEON RED ACCENT) -->
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-innovative-card tile-accent-red">
                <span class="hg-card-numeral">03</span>
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80" alt="Galeria Realizacji" class="hg-card-bg-vehicle">
                
                <div class="hg-card-content">
                    <h2 class="hg-card-title">GALERIA REALIZACJI</h2>
                    <p class="hg-card-desc">Zobacz setki ukończonych aut: Audi A7 Blue Gloss, Mercedes S Satyna, Porsche Panamera PPF.</p>
                </div>

                <div class="hg-card-action-btn">
                    GALERIA PRAC &rarr;
                </div>
            </a>

            <!-- TILE 04: KONTAKT Z NAMI (NEON CYAN ACCENT) -->
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-innovative-card tile-accent-cyan">
                <span class="hg-card-numeral">04</span>
                <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=1000&q=80" alt="Kontakt Z Nami" class="hg-card-bg-vehicle">
                
                <div class="hg-card-content">
                    <h2 class="hg-card-title">KONTAKT Z NAMI & WYCENA</h2>
                    <p class="hg-card-desc">Zadzwoń: 605 088 065 / 664 129 023. Odwiedź naszą ogrzewaną pracownię w Mierzynie ul. Podmiejska 4.</p>
                </div>

                <div class="hg-card-action-btn">
                    KONTAKT &rarr;
                </div>
            </a>

        </div>
    </div>
</main>

<?php get_footer(); ?>
