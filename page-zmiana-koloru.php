<?php
/**
 * Template Name: Podstrona Usługi - Zmiana Koloru Auta (Compact Hero Background)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 9.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        
        <!-- COMPACT HERO CARD WITH BACKGROUND VEHICLE PHOTO -->
        <div class="hg-subpage-hero" style="background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>'); --hero-border: #25aae1;">
            <div class="hg-subpage-hero-overlay"></div>
            <div class="hg-subpage-hero-content">
                <div style="display: inline-block; padding: 0.35rem 0.9rem; background: rgba(37, 170, 225, 0.2); border: 1px solid #25aae1; color: #25aae1; font-weight: 800; font-size: 0.78rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1rem;">
                    CAR WRAPPING & TUNING OPTYCZNY
                </div>
                <h1 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.8vw, 3.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0 0 1rem 0; line-height: 1.15; text-shadow: 0 4px 20px rgba(0,0,0,0.9);">
                    CAŁOŚCIOWA <span style="color: #25aae1;">ZMIANA KOLORU AUTA</span>
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.05rem; line-height: 1.6; margin: 0; font-weight: 500;">
                    Szybka i bezinwazyjna zmiana barwy pojazdu foliami wylewanymi (3M 2080, Avery Supreme) z demontażem elementów w ogrzewanej pracowni w Mierzynie.
                </p>
            </div>
        </div>

        <!-- 2-COLUMN COMPACT CONTENT GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.5rem; align-items: flex-start; margin-bottom: 3.5rem;">
            
            <!-- LEFT COLUMN: COMPACT EDITORIAL TEXT -->
            <div style="background: #0b0e17; border: 1px solid rgba(255,255,255,0.15); padding: 2.25rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.25rem; border-bottom: 2px solid #25aae1; padding-bottom: 0.5rem;">
                    O Szybkiej Zmianie Koloru
                </h2>

                <p style="color: #e2e8f0; font-size: 1rem; line-height: 1.75; margin-bottom: 1.25rem;">
                    Firma <strong>HI-GLOSS DESIGN</strong> specjalizuje się w całościowym oklejaniu aut foliami wylewanymi zmieniającymi kolor karoserii. Pozwala to na szybką zmianę wyglądu pojazdu bez konieczności kosztownego lakierowania.
                </p>

                <p style="color: #e2e8f0; font-size: 1rem; line-height: 1.75; margin-bottom: 1.5rem;">
                    Oklejamy samochody, łodzie i motocykle. Pracujemy wyłącznie na wylewanych foliach premium: <strong>3M 2080, Avery Dennison, Hexis Skintac, Oracal</strong> (mat, połysk, satyna, carbon 3D, kameleon).
                </p>

                <div style="background: rgba(37, 170, 225, 0.08); border-left: 3px solid #25aae1; padding: 1.25rem; margin-top: 1rem;">
                    <strong style="color: #25aae1; display: block; margin-bottom: 0.4rem; text-transform: uppercase; font-size: 0.85rem;">Profesjonalny Demontaż Elementów:</strong>
                    <span style="color: #cbd5e1; font-size: 0.9rem;">Przed aplikacją folii demontujemy klamki, lampy, zderzaki i lusterka. Folia zawijana jest głęboko do wnętrza.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: QUICK SPECS & CALL CTA CARD -->
            <div style="background: #0b0e17; border: 2px solid #25aae1; padding: 2.25rem;">
                <h3 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 0.5rem;">
                    SPECYFIKACJA USŁUGI
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Realizacji:</span>
                        <strong style="color: #25aae1;">3 - 5 Dni Roboczych</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Gwarancja:</span>
                        <strong style="color: #25aae1;">5 - 7 Lat Producenta</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Używane Folie:</span>
                        <strong style="color: #ffffff;">3M 2080 / Avery Supreme</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Lokalizacja:</span>
                        <strong style="color: #ffffff;">Pracownia Mierzyn</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-cyan" style="width: 100%; justify-content: center; font-size: 0.9rem; text-align: center;">
                    📞 ZADZWOŃ I ZAPYTAJ O WYCENĘ &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
