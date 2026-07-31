<?php
/**
 * Template Name: Podstrona Usługi - Zmiana Koloru Auta (Matching Button Style)
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
                <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.6; margin: 0; font-weight: 600;">
                    Szybka i bezinwazyjna zmiana barwy pojazdu foliami wylewanymi (3M 2080, Avery Supreme) z demontażem elementów w ogrzewanej pracowni w Mierzynie.
                </p>
            </div>
        </div>

        <!-- HIGH-CONTRAST EDITORIAL DESCRIPTION & SPECS GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.5rem; align-items: flex-start; margin-bottom: 3.5rem;">
            
            <!-- LEFT COLUMN: PROMINENT HIGH-CONTRAST DESCRIPTION CARD -->
            <div class="hg-desc-card" style="--card-accent: #25aae1;">
                <h2 class="hg-desc-title">
                    O Szybkiej Zmianie Koloru
                </h2>

                <p class="hg-desc-text">
                    Firma <strong>HI-GLOSS DESIGN</strong> ze Szczecina specjalizuje się w całościowym oklejaniu aut foliami wylewanymi zmieniającymi kolor karoserii. Jest to metoda pozwalająca na szybką i spektakularną zmianę wyglądu pojazdu bez konieczności kosztownego i nieodwracalnego lakierowania.
                </p>

                <p class="hg-desc-text">
                    Oklejamy samochody, łodzie i motocykle. Pracujemy wyłącznie na wylewanych foliach renomowanych producentów: <strong>3M 2080, Avery Dennison Supreme, Hexis Skintac, KPMF oraz Oracal</strong> (mat, połysk, satyna, carbon 3D, kameleon).
                </p>

                <div style="background: rgba(37, 170, 225, 0.12); border-left: 4px solid #25aae1; padding: 1.5rem; margin-top: 1.5rem;">
                    <strong style="color: #25aae1; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Dbałość O Każdy Detal:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.6; display: block;">Przed aplikacją folii demontujemy klamki, lampy, zderzaki i lusterka. Folia zawijana jest do wewnątrz, co wyklucza ryzyko odklejania. Wykonujemy też drobne naprawy blacharsko-lakiernicze w cenie przygotowania auta.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: QUICK SPECS & CALL CTA CARD -->
            <div style="background: #0b0f19; border: 2px solid #25aae1; padding: 2.5rem; position: sticky; top: 110px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 2px solid #25aae1; padding-bottom: 0.6rem;">
                    SPECYFIKACJA USŁUGI
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Realizacji:</span>
                        <strong style="color: #25aae1; font-size: 1rem;">3 - 5 Dni Roboczych</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Gwarancja:</span>
                        <strong style="color: #25aae1; font-size: 1rem;">5 - 7 Lat Producenta</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Używane Folie:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">3M 2080 / Avery Supreme</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Warunki:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">Ogrzewane Studio Mierzyn</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #25aae1; color: #000; border: 2px solid #25aae1; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    📞 ZADZWOŃ I ZAPYTAJ O WYCENĘ &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
