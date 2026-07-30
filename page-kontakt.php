<?php
/**
 * Template Name: Podstrona Kontakt (Powiększona Informacja + Mapa w Kolorze na Hover)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN KONTAKT SUBPAGE AREA -->
<main style="padding: 9.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- 1. NAPIS (SINGLE CLEAN TITLE - NO EXTRA BADGE) -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                KONTAKT <span style="color: #25aae1;">Z NAMI</span>
            </h1>
        </div>

        <!-- 2. DWA POWIĘKSZONE KAFLE: DANE TELEADRESOWE & MAPA GOOGLE (FULL COLOR ON HOVER) -->
        <div class="hg-grid hg-grid-2" style="gap: 2.5rem;">

            <!-- KAFEL 1: POWIĘKSZONE DANE TELEADRESOWE -->
            <div class="hg-ai-mastercard tile-theme-cyan" style="min-height: 480px; padding: 3rem 2.5rem; justify-content: space-between;">
                <div>
                    <h2 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 2rem; border-bottom: 2px solid #25aae1; padding-bottom: 0.75rem;">
                        HI-GLOSS DESIGN
                    </h2>

                    <div style="display: flex; flex-direction: column; gap: 1.8rem; color: #ffffff;">
                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="font-size: 1.5rem;">📍</span>
                            <div>
                                <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Adres Pracowni:</span>
                                <strong style="font-size: 1.15rem; color: #ffffff; display: block; line-height: 1.4;">ul. Podmiejska 4, 72-006 Mierzyn / Szczecin</strong>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="font-size: 1.5rem;">📞</span>
                            <div>
                                <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Infolinia Telefoniczna:</span>
                                <strong style="font-size: 1.25rem; color: #00c2ff; display: block; line-height: 1.4;">
                                    <a href="tel:+48605088065" style="color: #00c2ff;">605 088 065</a> &nbsp;|&nbsp; <a href="tel:+48664129023" style="color: #00c2ff;">664 129 023</a>
                                </strong>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="font-size: 1.5rem;">✉️</span>
                            <div>
                                <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Adres E-mail:</span>
                                <strong style="font-size: 1.15rem; color: #00c2ff; display: block; line-height: 1.4;">
                                    <a href="mailto:biuro@hi-glossdesign.pl" style="color: #00c2ff;">biuro@hi-glossdesign.pl</a>
                                </strong>
                            </div>
                        </div>

                        <div style="display: flex; gap: 1rem; align-items: flex-start;">
                            <span style="font-size: 1.5rem;">⏰</span>
                            <div>
                                <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem; letter-spacing: 0.08em;">Godziny Otwarcia Studio:</span>
                                <strong style="font-size: 1.05rem; color: #ffffff; display: block; line-height: 1.4;">Poniedziałek - Piątek: 08:00 - 17:00<br><span style="color: #94a3b8; font-weight: 600;">Sobota: na zapisy telefoniczne</span></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 2rem; flex-wrap: wrap;">
                    <a href="tel:+48605088065" class="hg-btn hg-btn-cyan" style="flex: 1; text-align: center; justify-content: center; padding: 1.1rem; font-size: 0.95rem;">
                        📞 ZADZWOŃ: 605 088 065
                    </a>
                </div>
            </div>

            <!-- KAFEL 2: MAPA GOOGLE (FULL COLOR ON HOVER) -->
            <div class="hg-map-card">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.8!2d14.4781!3d53.4242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aa093412345678%3A0x1234567890abcdef!2sPodmiejska%204%2C%2072-006%20Mierzyn!5e0!3m2!1spl!2spl!4v1600000000000!5m2!1spl!2spl" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
