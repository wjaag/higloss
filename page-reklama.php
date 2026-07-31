<?php
/**
 * Template Name: Podstrona Usługi - Oklejanie Reklamowe & Floty (Proper UI/UX)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">
        
        <!-- SUBPAGE HEADER -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(255, 153, 0, 0.12); border: 1px solid #ff9900; color: #ff9900; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                REKLAMA MOBILNA & BRANDING FLOT
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                OKLEJANIE <span style="color: #ff9900;">REKLAMOWE & FLOTY</span>
            </h1>
        </div>

        <!-- CLEVER AUTOMOTIVE BANNER PHOTO -->
        <div style="margin-bottom: 3.5rem; border: 1px solid rgba(255,255,255,0.15); overflow: hidden; height: 380px;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Oklejanie Reklamowe & Floty" style="width: 100%; height: 100%; object-fit: cover;">
        </div>

        <!-- PROPER 2-COLUMN EDITORIAL UI/UX CONTENT -->
        <div class="hg-grid hg-grid-2" style="gap: 3.5rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: HIGHLY READABLE EDITORIAL TEXT -->
            <div>
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem; border-bottom: 2px solid #ff9900; padding-bottom: 0.5rem;">
                    Mobilna Wizytówka Twojej Firmy
                </h2>

                <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85; margin-bottom: 1.5rem; font-weight: 500;">
                    Grafika samochodowa to potężny nośnik reklamy wizualnej. Wykonujemy usługę kompleksowo – w naszej pracowni posiadamy własny park maszynowy: drukarki wielkoformatowe oraz plotery tnące.
                </p>

                <p style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85; margin-bottom: 2rem; font-weight: 500;">
                    Obsługujemy zarówno niewielkie lokalne firmy, jak i ogólnopolskie korporacje. Stale oklejamy flotę dostawczych pojazdów dla **DHL Courier (ok. 40 pojazdów)**. Braliśmy udział w rebrandingu flot firm **Warta, Poczta Polska, Raiffeisen Polbank**.
                </p>

                <div style="background: rgba(15, 21, 36, 0.8); border: 1px solid rgba(255,255,255,0.12); padding: 2rem; margin-bottom: 2rem;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 900; color: #ff9900; text-transform: uppercase; margin-bottom: 1rem;">
                        Kompleksowa Obsługa Flot
                    </h3>
                    <ul style="display: flex; flex-direction: column; gap: 0.8rem; color: #cbd5e1; font-size: 0.95rem;">
                        <li style="display: flex; gap: 0.75rem;">
                            <span style="color: #ff9900; font-weight: 900;">✓</span>
                            <span><strong>Projekt, Druk & Aplikacja:</strong> Cały proces realizujemy pod jednym dachem w Mierzynie.</span>
                        </li>
                        <li style="display: flex; gap: 0.75rem;">
                            <span style="color: #ff9900; font-weight: 900;">✓</span>
                            <span><strong>Atestowane folie polimerowe i wylewane:</strong> odporne na UV, myjnie bezdotykowe i chemię.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT COLUMN: SPECS & DIRECT CTA CARD -->
            <div style="background: #0b0f19; border: 2px solid #ff9900; padding: 2.5rem; position: sticky; top: 110px;">
                <h3 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.8rem; border-bottom: 1px solid rgba(255,255,255,0.12); padding-bottom: 0.75rem;">
                    SPECYFIKACJA FLOTOWA
                </h3>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2rem;">
                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Zaplecze:</span>
                        <strong style="color: #ff9900;">Druk i Ploter na Miejscu</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Doświadczenie:</span>
                        <strong style="color: #ff9900;">DHL (40 aut) / Warta</strong>
                    </div>

                    <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                        <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Format:</span>
                        <strong style="color: #ffffff;">Osobowe & Dostawcze</strong>
                    </div>
                </div>

                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff9900; color: #000; border: 2px solid #ff9900; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center;">
                    🚐 ZAPYTAJ O OKLEJANIE FLOTY &rarr;
                </a>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
