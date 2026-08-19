<?php
/**
 * Template Name: Podstrona Kontakt (Lewo: Dane, Prawo: Mapa)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN KONTAKT SUBPAGE AREA -->
<main style="padding: 9.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- 1. NAPIS (SINGLE CLEAN TITLE) -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                KONTAKT <span style="color: #25aae1;">Z NAMI</span>
            </h1>
        </div>

        <!-- 2. DWA POWIĘKSZONE KAFLE: DANE TELEADRESOWE & MAPA GOOGLE -->
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2.5rem; width: 100%; align-items: stretch;">

            <!-- LEWA KOLUMNA: DANE TELEADRESOWE (NO BUTTON) -->
            <div class="hg-ai-mastercard tile-theme-cyan" style="height: 100%; min-height: 480px; padding: 3rem 2.5rem; justify-content: flex-start; box-sizing: border-box; cursor: default;">
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 2rem; border-bottom: 2px solid #25aae1; padding-bottom: 0.75rem;">
                    HI-GLOSS DESIGN
                </h2>

                <div style="display: flex; flex-direction: column; gap: 1.8rem; color: #ffffff;">
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.35rem; color: #25aae1; display: inline-flex; flex: 0 0 auto; line-height: 1;"><svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Adres Pracowni:</span>
                            <strong style="font-size: 1.15rem; color: #ffffff; display: block; line-height: 1.4;">ul. Podmiejska 4, 72-006 Mierzyn / Szczecin</strong>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.35rem; color: #25aae1; display: inline-flex; flex: 0 0 auto; line-height: 1;"><svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg></span>
                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Infolinia Telefoniczna:</span>
                            <strong style="font-size: 1.25rem; color: #00c2ff; display: block; line-height: 1.4;">
                                <a href="tel:+48605088065" style="color: #00c2ff;">605 088 065</a> &nbsp;|&nbsp; <a href="tel:+48664129023" style="color: #00c2ff;">664 129 023</a>
                            </strong>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.35rem; color: #25aae1; display: inline-flex; flex: 0 0 auto; line-height: 1;"><svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg></span>
                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Adres E-mail:</span>
                            <strong style="font-size: 1.15rem; color: #00c2ff; display: block; line-height: 1.4;">
                                <a href="mailto:biuro@hi-glossdesign.pl" style="color: #00c2ff;">biuro@hi-glossdesign.pl</a>
                            </strong>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <span style="font-size: 1.35rem; color: #25aae1; display: inline-flex; flex: 0 0 auto; line-height: 1;"><svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9.5"/><path d="M12 7v5l3.5 2"/></svg></span>
                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Godziny Otwarcia Studio:</span>
                            <strong style="font-size: 1.05rem; color: #ffffff; display: block; line-height: 1.4;">Poniedziałek - Piątek: 08:00 - 17:00<br><span style="color: #94a3b8; font-weight: 600;">Sobota: na zapisy telefoniczne</span></strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRAWA KOLUMNA: MAPA GOOGLE (FULL COLOR) -->
            <div class="hg-map-card" style="height: 100%; min-height: 480px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.8!2d14.4781!3d53.4242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aa093412345678%3A0x1234567890abcdef!2sPodmiejska%204%2C%2072-006%20Mierzyn!5e0!3m2!1spl!2spl!4v1600000000000!5m2!1spl!2spl" style="width:100%; height:100%; min-height:480px; border:0; filter:none !important;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
