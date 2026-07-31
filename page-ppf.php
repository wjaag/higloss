<?php
/**
 * Template Name: Podstrona Usługi - Bezbarwne Folie PPF (Editorial High-Contrast UX)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 9.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        
        <!-- COMPACT HERO CARD WITH BACKGROUND VEHICLE PHOTO -->
        <div class="hg-subpage-hero" style="background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>'); --hero-border: #10b981;">
            <div class="hg-subpage-hero-overlay"></div>
            <div class="hg-subpage-hero-content">
                <div style="display: inline-block; padding: 0.35rem 0.9rem; background: rgba(16, 185, 129, 0.2); border: 1px solid #10b981; color: #10b981; font-weight: 800; font-size: 0.78rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1rem;">
                    PAINT PROTECTION FILM (PPF)
                </div>
                <h1 style="font-family: var(--font-heading); font-size: clamp(2rem, 3.8vw, 3.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0 0 1rem 0; line-height: 1.15; text-shadow: 0 4px 20px rgba(0,0,0,0.9);">
                    BEZBARWNE <span style="color: #10b981;">FOLIE OCHRONNE PPF</span>
                </h1>
                <p style="color: rgba(255,255,255,0.95); font-size: 1.1rem; line-height: 1.6; margin: 0; font-weight: 600;">
                    Niewidzialny pancerz poliuretanowy z właściwościami samoregeneracji rys pod wpływem ciepła. 100% ochrony przed kamieniami i otarciami.
                </p>
            </div>
        </div>

        <!-- HIGH-CONTRAST EDITORIAL DESCRIPTION & SPECS GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.5rem; align-items: flex-start; margin-bottom: 3.5rem;">
            
            <!-- LEFT COLUMN: PROMINENT HIGH-CONTRAST DESCRIPTION CARD -->
            <div class="hg-desc-card" style="--card-accent: #10b981;">
                <h2 class="hg-desc-title" style="border-color: #10b981;">
                    Niewidzialny Pancerz Dla Lakieru
                </h2>

                <p class="hg-desc-text">
                    Powłoka lakiernicza nowoczesnego samochodu jest wyjątkowo narażona na uszkodzenia: odpryski od kamieni wyrzucanych spod kół, otarcia parkingowe, gałęzie czy chemię drogową.
                </p>

                <p class="hg-desc-text">
                    Ochronę zapewniają specjalne, bezbarwne folie poliuretanowe PPF (140–200 mikrometrów), które przyjmują na siebie siłę uderzeń. Powierzchnia folii posiada unikalne właściwości <strong>samoregeneracji</strong> – drobne zarysowania i mikrorysy znikają samoistnie pod wpływem ciepła (słońce lub gorąca woda).
                </p>

                <div style="background: rgba(16, 185, 129, 0.12); border-left: 4px solid #10b981; padding: 1.5rem; margin-top: 1.5rem;">
                    <strong style="color: #10b981; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Dedykowane Pakiety PPF:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.6; display: block;">Pakiet Przód (Full Front), Pakiet Całe Auto (Full Body) oraz Dedykowane Strefy Rys (progi, wnęki klamek, próg załadunkowy bagażnika).</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: QUICK SPECS & CALL CTA CARD -->
            <div style="background: #0b0f19; border: 2px solid #10b981; padding: 2.5rem; position: sticky; top: 110px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 2px solid #10b981; padding-bottom: 0.6rem;">
                    SPECYFIKACJA PPF
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Grubość Folii:</span>
                        <strong style="color: #10b981; font-size: 1rem;">140 - 200 Mikronów</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Trwałość:</span>
                        <strong style="color: #10b981; font-size: 1rem;">8 - 10 Lat Gwarancji</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Właściwości:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">Samoregeneracja Rys</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.5rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Materiały:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">XPEL / PremiumShield</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #10b981; color: #000; border: 2px solid #10b981; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    🛡️ ZAPYTAJ O PAKIET OCHRONY PPF &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
