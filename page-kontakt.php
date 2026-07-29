<?php
/**
 * Template Name: Podstrona Kontakt (Informacje, Mapka, Formularz)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- MAIN KONTAKT SUBPAGE AREA -->
<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">

        <!-- 1. NAPIS (TITLE HEADLINE) -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(37, 170, 225, 0.12); border: 1px solid #25aae1; color: #25aae1; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                DANE STUDIO & FORMULARZ
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                KONTAKT <span style="color: #25aae1;">Z NAMI</span>
            </h1>
        </div>

        <!-- 2. DWA KAFLE: INFORMACJE KONTAKTOWE, MAPKA -->
        <div class="hg-grid hg-grid-2" style="gap: 2.5rem; margin-bottom: 3rem;">

            <!-- KAFEL 1: INFORMACJE KONTAKTOWE -->
            <div class="hg-ai-mastercard tile-theme-cyan" style="min-height: 380px; cursor: default;">
                <div class="hg-ai-card-tag">01 / DANE TELEADRE SOWE</div>

                <div class="hg-ai-card-body" style="margin-top: 1rem;">
                    <h2 class="hg-ai-card-title" style="margin-bottom: 1.5rem;">HI-GLOSS DESIGN</h2>

                    <div style="display: flex; flex-direction: column; gap: 1.2rem; color: #ffffff; font-size: 0.95rem;">
                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem;">Adres Studio:</span>
                            <strong>ul. Podmiejska 4, 72-006 Mierzyn / Szczecin</strong>
                        </div>

                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem;">Infolinia Studio:</span>
                            <strong><a href="tel:+48605088065" style="color: #00c2ff;">605 088 065</a> / <a href="tel:+48664129023" style="color: #00c2ff;">664 129 023</a></strong>
                        </div>

                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem;">Adres E-mail Biuro:</span>
                            <strong><a href="mailto:biuro@hi-glossdesign.pl" style="color: #00c2ff;">biuro@hi-glossdesign.pl</a></strong>
                        </div>

                        <div>
                            <span style="color: #25aae1; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; display: block; margin-bottom: 0.2rem;">Godziny Otwarcia:</span>
                            <span>Poniedziałek - Piątek: 08:00 - 17:00 | Sobota: na zapisy</span>
                        </div>
                    </div>
                </div>

                <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-btn hg-btn-cyan" style="margin-top: 1.5rem; justify-content: center; width: 100%;">
                    🗺️ OTWRÓŻ NAWIGACJĘ GOOGLE MAPS
                </a>
            </div>

            <!-- KAFEL 2: MAPKA GOOGLE -->
            <div class="hg-ai-mastercard tile-theme-amber" style="min-height: 380px; padding: 0; overflow: hidden;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.8!2d14.4781!3d53.4242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47aa093412345678%3A0x1234567890abcdef!2sPodmiejska%204%2C%2072-006%20Mierzyn!5e0!3m2!1spl!2spl!4v1600000000000!5m2!1spl!2spl" width="100%" height="100%" style="border:0; filter: grayscale(0.9) invert(0.9) contrast(1.2);" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>

        <!-- 3. FORMULARZ (STANDALONE FORM CARD BELOW) -->
        <div style="background: #0b0e17; border: 2px solid #25aae1; padding: 2.5rem; max-width: 1000px; margin: 0 auto;" id="kalkulator">
            <div style="text-align: center; margin-bottom: 2rem;">
                <span style="font-size: 0.8rem; color: #25aae1; font-weight: 800; letter-spacing: 0.1em; text-transform: uppercase;">SZYBKI KONTAKT ONLINE</span>
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-top: 0.3rem;">
                    WYŚLIJ SPECFIKACJĘ DO BEZPŁATNEJ WYCENY
                </h2>
            </div>

            <form id="hgCalcForm">
                <div style="margin-bottom: 1.25rem;">
                    <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 800; text-transform: uppercase;">Wybierz Usługę:</label>
                    <select id="calcServiceSelect" class="hg-input" style="cursor: pointer; background:#0f172a;">
                        <option value="Zmiana Koloru Auta">Całościowa Zmiana Koloru Auta</option>
                        <option value="Bezbarwna Folia PPF">Bezbarwna Folia Ochronna PPF</option>
                        <option value="Oklejanie Reklamowe">Reklama Mobilna & Floty</option>
                        <option value="Detailing & Przyciemnianie">Przyciemnianie Szyb & Detailing</option>
                    </select>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; margin-bottom: 1.25rem;">
                    <div>
                        <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 800; text-transform: uppercase;">Imię i Nazwisko:</label>
                        <input type="text" id="calcName" class="hg-input" placeholder="np. Jan Kowalski" required>
                    </div>

                    <div>
                        <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 800; text-transform: uppercase;">Numer Telefonu *:</label>
                        <input type="tel" id="calcPhone" class="hg-input" placeholder="np. 605 000 000" required>
                    </div>

                    <div>
                        <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 800; text-transform: uppercase;">Adres E-mail:</label>
                        <input type="email" id="calcEmail" class="hg-input" placeholder="np. jan@domena.pl">
                    </div>
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 800; text-transform: uppercase;">Marka, Model & Uwagi do Zapytania:</label>
                    <textarea id="calcNotes" class="hg-input" placeholder="np. Audi A7 2022, zmiana koloru na czarną satynę..." rows="4"></textarea>
                </div>

                <button type="submit" class="hg-btn hg-btn-cyan" style="width: 100%; justify-content: center;">
                    WYŚLIJ SPECFIKACJĘ DO WYCENY &rarr;
                </button>
            </form>

            <div id="calcResponseMsg" style="display: none;"></div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
