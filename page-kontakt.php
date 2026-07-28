<?php
/**
 * Template Name: Podstrona Kontakt Z Nami
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 9rem 0 6rem;">
    <div class="hg-container">
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(0, 194, 255, 0.1); border: 1px solid #00c2ff; color: #00c2ff; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.5rem;">
                DANE STUDIO & FORMULARZ
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.5rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase;">
                KONTAKT Z NAMI
            </h1>
        </div>

        <div class="hg-grid hg-grid-2">
            <!-- Form -->
            <div style="background: var(--bg-card); border: 2px solid #00c2ff; padding: 2.25rem;" id="kalkulator">
                <h2 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; margin-bottom: 1.25rem; text-transform: uppercase;">
                    Wyślij Zapytanie O Wycenę
                </h2>

                <form id="hgCalcForm">
                    <div style="margin-bottom: 1rem;">
                        <label style="display: block; font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.4rem; font-weight: 800; text-transform: uppercase;">Wybrana Usługa:</label>
                        <select id="calcServiceSelect" class="hg-input" style="cursor: pointer; background:#0f1118;">
                            <option value="Zmiana Koloru Auta">Całościowa Zmiana Koloru Auta</option>
                            <option value="Bezbarwna Folia PPF">Bezbarwna Folia Ochronna PPF</option>
                            <option value="Oklejanie Reklamowe">Reklama Mobilna & Floty</option>
                        </select>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                        <input type="text" id="calcName" class="hg-input" placeholder="Imię i Nazwisko" required>
                        <input type="tel" id="calcPhone" class="hg-input" placeholder="Numer Telefonu *" required>
                    </div>

                    <textarea id="calcNotes" class="hg-input" placeholder="Model auta (np. Audi A7 2022)..." rows="3" style="margin-bottom: 1.25rem;"></textarea>

                    <button type="submit" class="hg-btn" style="width: 100%; background: #00c2ff; color: #000000; border: 2px solid #00c2ff; font-weight: 900;">
                        WYŚLIJ SPECFIKACJĘ &rarr;
                    </button>
                </form>

                <div id="calcResponseMsg" style="display: none;"></div>
            </div>

            <!-- Details & Map -->
            <div style="background: var(--bg-card); border: 2px solid rgba(255,255,255,0.15); padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h2 style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 900; color: #ffffff; margin-bottom: 1.5rem; text-transform: uppercase;">
                        HI-GLOSS DESIGN
                    </h2>

                    <p style="color: #94a3b8; margin-bottom: 1rem; font-size: 1rem;">
                        📍 <strong>Adres Studio:</strong> ul. Podmiejska 4, 72-006 Mierzyn / Szczecin
                    </p>
                    <p style="color: #94a3b8; margin-bottom: 1rem; font-size: 1rem;">
                        📞 <strong>Infolinia:</strong> <a href="tel:+48605088065" style="color: #00c2ff;">605 088 065</a> / <a href="tel:+48664129023" style="color: #00c2ff;">664 129 023</a>
                    </p>
                    <p style="color: #94a3b8; margin-bottom: 1.5rem; font-size: 1rem;">
                        ✉️ <strong>E-mail:</strong> <a href="mailto:biuro@hi-glossdesign.pl" style="color: #00c2ff;">biuro@hi-glossdesign.pl</a>
                    </p>
                </div>

                <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-btn hg-btn-outline" style="width: 100%;">
                    🗺️ NAWIGACJA GOOGLE MAPS
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
