<?php
/**
 * Template Name: Podstrona Usługi - Oklejanie Reklamowe & Floty
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- TITLE -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(255, 153, 0, 0.12); border: 1px solid #ff9900; color: #ff9900; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                REKLAMA MOBILNA & BRANDING FLOT
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                OKLEJANIE <span style="color: #ff9900;">REKLAMOWE & FLOTY</span>
            </h1>
        </div>

        <div class="hg-grid hg-grid-2" style="gap: 3rem; align-items: flex-start; margin-bottom: 4rem;">
            <div>
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Oklejanie Reklamowe" style="width: 100%; border: 2px solid #ff9900; box-shadow: 0 20px 40px rgba(0,0,0,0.8);">
            </div>

            <div style="background: #0b0e17; border: 1px solid rgba(255,255,255,0.15); padding: 2.5rem; color: #ffffff;">
                <h2 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 900; color: #ff9900; text-transform: uppercase; margin-bottom: 1.25rem;">
                    Mobilna Reklama Twojej Firmy
                </h2>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 1.5rem;">
                    Wykonujemy kompleksową usługę oklejania reklamowego pojazdów firmowych. Posiadamy własny park maszynowy (drukarki wielkoformatowe oraz plotery tnące).
                </p>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 2rem;">
                    Projektujemy grafiki, produkujemy folie i aplikujemy je w ogrzewanej pracowni. Braliśmy udział w rebrandingu flot dla takich marek jak: **DHL (ok. 40 pojazdów), Warta, Poczta Polska, Raiffeisen Polbank**.
                </p>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff9900; color: #000; border: 2px solid #ff9900; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900;">
                    🚐 SKONTAKTUJ SIĘ W SPRAWIE FLOTY: 605 088 065
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
