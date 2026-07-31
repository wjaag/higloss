<?php
/**
 * Template Name: Podstrona Usługi - Zmiana Koloru Auta
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- TITLE -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(37, 170, 225, 0.12); border: 1px solid #25aae1; color: #25aae1; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                CAR WRAPPING & TUNING OPTYCZNY
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                CAŁOŚCIOWA <span style="color: #25aae1;">ZMIANA KOLORU AUTA</span>
            </h1>
        </div>

        <div class="hg-grid hg-grid-2" style="gap: 3rem; align-items: flex-start; margin-bottom: 4rem;">
            <div>
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Zmiana Koloru Auta" style="width: 100%; border: 2px solid #25aae1; box-shadow: 0 20px 40px rgba(0,0,0,0.8);">
            </div>

            <div style="background: #0b0e17; border: 1px solid rgba(255,255,255,0.15); padding: 2.5rem; color: #ffffff;">
                <h2 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 900; color: #25aae1; text-transform: uppercase; margin-bottom: 1.25rem;">
                    Niezrównany Efekt Wizualny
                </h2>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 1.5rem;">
                    Firma HI-GLOSS DESIGN specjalizuje się w całościowej zmianie koloru aut foliami wylewanymi marek premium: <strong>3M 2080, Avery Dennison Supreme, Hexis Skintac, KPMF, Oracal</strong>.
                </p>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 2rem;">
                    Pracujemy w ogrzewanej pracowni w Mierzynie k. Szczecina, zapewniając odpowiednią temperaturę aplikacji. Przed oklejeniem wykonujemy profesjonalny demontaż klamek, lamp i zderzaków, dzięki czemu folia zawijana jest głęboko pod elementy.
                </p>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-cyan" style="width: 100%; justify-content: center; font-size: 0.95rem;">
                    📞 ZADZWOŃ I ZAPYTAJ O WYCENĘ: 605 088 065
                </a>
            </div>
        </div>

        <!-- BEFORE / AFTER SLIDER SHOWCASE -->
        <div style="background: #0b0e17; border: 2px solid #25aae1; padding: 2.5rem; text-align: center;">
            <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem;">
                PRZESUŃ SUWAK: LAKIER FABRYCZNY VS SATYNA BLACK
            </h3>
            
            <div class="hg-slider-box" id="hgBeforeAfterSlider" style="max-width: 900px; margin: 0 auto;">
                <div class="hg-slider-img hg-slider-before" style="background-image: url('https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="hg-slider-img hg-slider-after" style="background-image: url('https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1200&q=80');"></div>
                <div class="hg-slider-handle">↔</div>
                <div class="hg-slider-badge left">Przed (Lakier)</div>
                <div class="hg-slider-badge right">Po (Satyna)</div>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
