<?php
/**
 * Template Name: Podstrona Usługi - Bezbarwne Folie PPF
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- TITLE -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(16, 185, 129, 0.12); border: 1px solid #10b981; color: #10b981; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                PAINT PROTECTION FILM (PPF)
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                BEZBARWNE <span style="color: #10b981;">FOLIE OCHRONNE PPF</span>
            </h1>
        </div>

        <div class="hg-grid hg-grid-2" style="gap: 3rem; align-items: flex-start; margin-bottom: 4rem;">
            <div>
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>" alt="Folie Ochronne PPF" style="width: 100%; border: 2px solid #10b981; box-shadow: 0 20px 40px rgba(0,0,0,0.8);">
            </div>

            <div style="background: #0b0e17; border: 1px solid rgba(255,255,255,0.15); padding: 2.5rem; color: #ffffff;">
                <h2 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 900; color: #10b981; text-transform: uppercase; margin-bottom: 1.25rem;">
                    Niewidzialna Ochrona Lakieru
                </h2>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 1.5rem;">
                    Bezbarwne poliuretanowe folie ochronne PPF (140-200 mikronów) przyjmują na siebie uderzenia kamieni, gałęzi i chemii drogowej, chroniąc fabryczną powłokę lakierniczą.
                </p>
                <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 2rem;">
                    Folia posiada właściwości **samoregenerujące** – drobne zarysowania i mikrorysy znikają samoistnie pod wpływem ciepła (słońce, gorąca woda). Trwałość folii wynosi od 8 do 10 lat!
                </p>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #10b981; color: #000; border: 2px solid #10b981; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900;">
                    🛡️ ZAPYTAJ O PAKIET PPF: 605 088 065
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
