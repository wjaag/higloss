<?php
/**
 * Template Name: Podstrona Usługi - Bezbarwne Folie PPF (Specyfikacja na Zdjęciu)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- INTEGRATED HERO BANNER: PHOTO BACKGROUND + TITLE + SPECS BAR DIRECTLY ON THE PHOTO -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #10b981; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>'); height: auto; min-height: 380px; padding: 3rem 2.5rem;">
            <div class="hg-subpage-banner-vignette"></div>
            
            <div class="hg-subpage-banner-title-box" style="width: 100%; max-width: 1000px;">
                <span class="hg-subpage-banner-badge" style="color: #10b981; border-color: #10b981;">PAINT PROTECTION FILM (PPF)</span>
                
                <h1 style="font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 3.4rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0.75rem 0 1.5rem 0; line-height: 1.12; text-shadow: 0 4px 25px rgba(0,0,0,0.95);">
                    BEZBARWNE <span style="color: #10b981;">FOLIE OCHRONNE PPF</span>
                </h1>

                <!-- SPECS BAR EMBEDDED DIRECTLY ON THE PHOTO -->
                <div style="background: rgba(11, 15, 25, 0.88); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.18); padding: 1.5rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1.25rem; width: 100%; box-sizing: border-box;">
                    <div>
                        <span style="color: #94a3b8; font-size: 0.75rem; text-transform: uppercase; font-weight: 800; display: block; margin-bottom: 0.2rem;">Grubość Folii:</span>
                        <strong style="color: #10b981; font-size: 1.05rem;">140 - 200 Mikronów</strong>
                    </div>

                    <div>
                        <span style="color: #94a3b8; font-size: 0.75rem; text-transform: uppercase; font-weight: 800; display: block; margin-bottom: 0.2rem;">Gwarancja:</span>
                        <strong style="color: #10b981; font-size: 1.05rem;">8 - 10 Lat Gwarancji</strong>
                    </div>

                    <div>
                        <span style="color: #94a3b8; font-size: 0.75rem; text-transform: uppercase; font-weight: 800; display: block; margin-bottom: 0.2rem;">Funkcja:</span>
                        <strong style="color: #ffffff; font-size: 1.05rem;">Samoregeneracja Rys</strong>
                    </div>

                    <div>
                        <span style="color: #94a3b8; font-size: 0.75rem; text-transform: uppercase; font-weight: 800; display: block; margin-bottom: 0.2rem;">Kontakt Studio:</span>
                        <a href="tel:+48605088065" style="color: #10b981; font-weight: 900; font-size: 1.05rem;">📞 605 088 065</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FULL-WIDTH EDITORIAL DESCRIPTION CARD BELOW -->
        <div class="hg-editorial-card" style="--card-accent: #10b981; margin-bottom: 3.5rem;">
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

            <div style="margin-top: 2rem;">
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #10b981; color: #000000; border: 2px solid #10b981; width: 100%; justify-content: center; font-size: 1rem; font-weight: 900; text-align: center; padding: 1.15rem;">
                    🛡️ ZAPYTAJ O PAKIET OCHRONY PPF &rarr;
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
