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

        <!-- HERO VEHICLE PHOTO -->
        <div style="margin-bottom: 3.5rem; border: 2px solid #ff9900; overflow: hidden; max-height: 480px; box-shadow: 0 20px 40px rgba(0,0,0,0.8);">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Oklejanie Reklamowe & Floty" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 3rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: HIGHLY READABLE EDITORIAL TEXT -->
            <div style="background: #0b0e17; border: 1px solid rgba(255,255,255,0.15); padding: 2.5rem; color: #ffffff;">
                <h2 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 900; color: #ff9900; text-transform: uppercase; margin-bottom: 1.25rem;">
                    Mobilna Wizytówka Twojej Firmy
                </h2>

                <p style="color: #e2e8f0; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.5rem; font-weight: 500;">
                    Grafika samochodowa to potężny nośnik reklamy wizualnej. Posiadamy własne zaplecze techniczne: drukarki wielkoformatowe oraz plotery tnące w naszej pracowni.
                </p>

                <p style="color: #e2e8f0; font-size: 1.05rem; line-height: 1.8; margin-bottom: 2rem; font-weight: 500;">
                    Obsługujemy zarówno małe lokalne przedsiębiorstwa, jak i flotowe koncerny. Stale oklejamy flotę aut dla <strong>DHL Courier (ok. 40 pojazdów)</strong>. Braliśmy udział w rebrandingu flot firm Warta, Poczta Polska czy Raiffeisen Polbank.
                </p>

                <div style="background: rgba(255, 153, 0, 0.1); border-left: 4px solid #ff9900; padding: 1.5rem; margin-top: 1.5rem;">
                    <strong style="color: #ff9900; display: block; margin-bottom: 0.4rem; text-transform: uppercase; font-size: 0.85rem;">Wszystko Pod Jednym Dachem:</strong>
                    <span style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6;">Projektowanie grafik, bezinwazyjny druk wielkoformatowy, cięcie ploterowe i profesjonalna aplikacja w ogrzewanej pracowni.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: SPECS & DIRECT CTA CARD -->
            <div style="background: #0b0e17; border: 2px solid #ff9900; padding: 2.5rem; position: sticky; top: 110px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.8rem; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 0.75rem;">
                    SPECYFIKACJA FLOTOWA
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Zaplecze:</span>
                        <strong style="color: #ff9900; font-size: 1rem;">Druk i Ploter na Miejscu</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Doświadczenie:</span>
                        <strong style="color: #ff9900; font-size: 1rem;">DHL (40 aut) / Warta</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Format:</span>
                        <strong style="color: #ffffff; font-size: 1rem;">Osobowe & Dostawcze</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff9900; color: #000; border: 2px solid #ff9900; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    🚐 ZAPYTAJ O OKLEJANIE FLOTY &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
