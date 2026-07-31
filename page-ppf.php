<?php
/**
 * Template Name: Podstrona Usługi - Bezbarwne Folie PPF (Tytuł na Zdjęciu)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 9.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        
        <!-- MODERN HERO BANNER: TITLE DIRECTLY ON THE PHOTO -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #10b981; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            
            <div class="hg-subpage-banner-title-box">
                <span class="hg-subpage-banner-badge" style="color: #10b981; border-color: #10b981;">PAINT PROTECTION FILM (PPF)</span>
                <h1 style="font-family: var(--font-heading); font-size: clamp(1.8rem, 3.8vw, 3.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0.5rem 0 0 0; line-height: 1.12; text-shadow: 0 4px 25px rgba(0,0,0,0.95);">
                    BEZBARWNE <span style="color: #10b981;">FOLIE OCHRONNE PPF</span>
                </h1>
            </div>
        </div>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID BELOW -->
        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 3.5rem;">
            
            <!-- LEFT COLUMN: PROMINENT HIGH-CONTRAST DESCRIPTION CARD -->
            <div class="hg-editorial-card" style="--card-accent: #10b981;">
                <h2 class="hg-editorial-title" style="border-color: #10b981;">
                    Niewidzialny Pancerz Dla Lakieru
                </h2>

                <p class="hg-editorial-paragraph">
                    Powłoka lakiernicza nowoczesnego samochodu jest wyjątkowo narażona na uszkodzenia: odpryski od kamieni wyrzucanych spod kół, otarcia parkingowe, gałęzie czy chemię drogową.
                </p>

                <p class="hg-editorial-paragraph">
                    Ochronę zapewniają specjalne, bezbarwne folie poliuretanowe PPF (140–200 mikrometrów), które przyjmują na siebie siłę uderzeń. Powierzchnia folii posiada unikalne właściwości <strong>samoregeneracji</strong> – drobne zarysowania i mikrorysy znikają samoistnie pod wpływem ciepła (słońce lub gorąca woda).
                </p>

                <div class="hg-editorial-highlight-box" style="--card-accent: #10b981; background: rgba(16, 185, 129, 0.1);">
                    <strong style="color: #10b981; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Dedykowane Pakiety PPF:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Pakiet Przód (Full Front), Pakiet Całe Auto (Full Body) oraz Dedykowane Strefy Rys (progi, wnęki klamek, próg załadunkowy bagażnika).</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: STICKY SPECS & CALL CTA CARD -->
            <div class="hg-specs-cta-card" style="--card-accent: #10b981;">
                <h3 class="hg-specs-title" style="border-color: #10b981;">
                    SPECYFIKACJA PPF
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2.2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Grubość Folii:</span>
                        <strong style="color: #10b981; font-size: 1rem;">140 - 200 Mikronów</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Trwałość:</span>
                        <strong style="color: #10b981; font-size: 1rem;">8 - 10 Lat Gwarancji</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Właściwości:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">Samoregeneracja Rys</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Materiały:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">XPEL / PremiumShield</strong>
                    </div>
                </div>

                <!-- CALL CTA BUTTON -->
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #10b981; color: #000000; border: 2px solid #10b981; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    🛡️ ZADZWOŃ: 605 088 065 &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
