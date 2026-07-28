<?php
/**
 * Template Name: Dynamic Angled Performance 4-Tile Homepage
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN HOMEPAGE AREA: ONLY 4 DYNAMIC ANGLED TILES (Inspired by koncept.png & hi-glossdesign.pl) -->
<main class="sec-homepage-tiles">
    <div class="hg-container">
        <div class="hg-tiles-grid">

            <!-- TILE 1: HISTORIA FIRMY (NEON GREEN GLOW) -->
            <a href="<?php echo esc_url(home_url('/o-firmie')); ?>" class="hg-angled-wrapper card-green-glow">
                <div class="hg-angled-inner">
                    <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1000&q=80" alt="Historia Firmy" class="hg-angled-bg-img">
                    <div class="hg-angled-content">
                        <h2 class="hg-angled-title">HISTORIA FIRMY & PASJA</h2>
                        <p class="hg-angled-subtitle">Certyfikowany zespół aplikatorów, ogrzewana hala w Mierzynie i własny park maszynowy.</p>
                        <span class="hg-angled-pill pill-green">POZNAJ NAS &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- TILE 2: NASZA OFERTA (NEON AMBER GLOW) -->
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-angled-wrapper card-amber-glow">
                <div class="hg-angled-inner">
                    <img src="https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1000&q=80" alt="Nasza Oferta" class="hg-angled-bg-img">
                    <div class="hg-angled-content">
                        <h2 class="hg-angled-title">NASZA OFERTA & USŁUGI</h2>
                        <p class="hg-angled-subtitle">Całościowa zmiana koloru (Mat, Połysk, Satyna, Carbon), bezbarwne folie PPF oraz reklama flot.</p>
                        <span class="hg-angled-pill pill-amber">SPRAWDŹ OFERTĘ &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- TILE 3: GALERIA REALIZACJI (NEON RED GLOW) -->
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-angled-wrapper card-red-glow">
                <div class="hg-angled-inner">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80" alt="Galeria Realizacji" class="hg-angled-bg-img">
                    <div class="hg-angled-content">
                        <h2 class="hg-angled-title">GALERIA REALIZACJI</h2>
                        <p class="hg-angled-subtitle">Zobacz setki ukończonych aut: Audi A7 Blue Gloss, Mercedes S Satyna, Porsche Panamera PPF.</p>
                        <span class="hg-angled-pill pill-red">GALERIA PRAC &rarr;</span>
                    </div>
                </div>
            </a>

            <!-- TILE 4: KONTAKT Z NAMI (NEON CYAN GLOW) -->
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-angled-wrapper card-cyan-glow">
                <div class="hg-angled-inner">
                    <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?auto=format&fit=crop&w=1000&q=80" alt="Kontakt Z Nami" class="hg-angled-bg-img">
                    <div class="hg-angled-content">
                        <h2 class="hg-angled-title">KONTAKT Z NAMI & WYCENA</h2>
                        <p class="hg-angled-subtitle">Zadzwoń: 605 088 065 / 664 129 023. Odwiedź naszą ogrzewaną pracownię w Mierzynie ul. Podmiejska 4.</p>
                        <span class="hg-angled-pill pill-cyan">KONTAKT &rarr;</span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</main>

<?php get_footer(); ?>
