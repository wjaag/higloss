<?php
/**
 * Template Name: Podstrona Usługi - Oklejanie Reklamowe & Floty (Editorial UI/UX)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- SUBPAGE TITLE -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                OKLEJANIE <span style="color: #ff9900;">REKLAMOWE & FLOTY</span>
            </h1>
        </div>

        <!-- FRAMED HIGH-DEFINITION AI PHOTO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #ff9900;">
            <span class="hg-subpage-banner-badge" style="color: #ff9900; border-color: #ff9900;">REKLAMA MOBILNA & BRANDING FLOT</span>
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Oklejanie Reklamowe & Floty">
            <div class="hg-subpage-banner-vignette"></div>
        </div>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID -->
        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: PROMINENT HIGH-CONTRAST DESCRIPTION CARD -->
            <div class="hg-editorial-card" style="--card-accent: #ff9900;">
                <h2 class="hg-editorial-title" style="border-color: #ff9900;">
                    Mobilna Wizytówka Twojej Firmy
                </h2>

                <p class="hg-editorial-paragraph">
                    Grafika samochodowa to potężny nośnik reklamy wizualnej. Posiadamy własne zaplecze techniczne: drukarki wielkoformatowe oraz plotery tnące w naszej pracowni.
                </p>

                <p class="hg-editorial-paragraph">
                    Obsługujemy zarówno małe lokalne przedsiębiorstwa, jak i flotowe koncerny. Stale oklejamy flotę aut dla <strong>DHL Courier (ok. 40 pojazdów)</strong>. Braliśmy udział w rebrandingu flot firm Warta, Poczta Polska czy Raiffeisen Polbank.
                </p>

                <div class="hg-editorial-highlight-box" style="--card-accent: #ff9900; background: rgba(255, 153, 0, 0.1);">
                    <strong style="color: #ff9900; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Wszystko Pod Jednym Dachem:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Projektowanie grafik, bezinwazyjny druk wielkoformatowy, cięcie ploterowe i profesjonalna aplikacja w ogrzewanej pracowni w Mierzynie.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: STICKY SPECS & CALL CTA CARD -->
            <div class="hg-specs-cta-card" style="--card-accent: #ff9900;">
                <h3 class="hg-specs-title" style="border-color: #ff9900;">
                    SPECYFIKACJA FLOTOWA
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2.2rem;">
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

                <!-- CALL CTA BUTTON -->
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff9900; color: #000000; border: 2px solid #ff9900; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                    🚐 ZADZWOŃ: 605 088 065 &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
