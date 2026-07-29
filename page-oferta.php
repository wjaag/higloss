<?php
/**
 * Template Name: Podstrona Oferta (2 Kolumny)
 *
 * @package HiGloss2026
 */

get_header();
?>

<!-- SUBPAGE HEADER -->
<main style="padding: 10rem 0 6rem; flex: 1;">
    <div class="hg-container">

        <!-- TITLE HEADLINE -->
        <div style="text-align: center; margin-bottom: 3.5rem;">
            <div style="display: inline-block; padding: 0.35rem 1rem; background: rgba(37, 170, 225, 0.12); border: 1px solid #25aae1; color: #25aae1; font-weight: 800; font-size: 0.8rem; letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 1.25rem;">
                USŁUGI STUDIO HI-GLOSS
            </div>
            <h1 style="font-family: var(--font-heading); font-size: clamp(2.4rem, 4.5vw, 3.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; letter-spacing: -0.01em; margin: 0; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                PEŁNA <span style="color: #25aae1;">OFERTA STUDIO</span>
            </h1>
        </div>

        <!-- 2-COLUMN TILES GRID FOR OFERTA -->
        <div class="hg-grid hg-grid-2">

            <!-- CARD 1: ZMIANA KOLORU AUTA -->
            <div class="hg-ai-mastercard tile-theme-cyan" style="min-height: 440px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Zmiana Koloru Auta" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">01 / CAR WRAPPING</div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">1. CAŁOŚCIOWA ZMIANA KOLORU</h2>
                    <p class="hg-ai-card-desc">
                        Szybka zmiana barwy pojazdu foliami wylewanymi (Mat, Połysk, Satyna, Carbon 3D, Kameleon) marek 3M, Avery Dennison, Hexis. Profesjonalny demontaż klamek, lamp i zderzaków.
                    </p>
                    <ul style="color: rgba(255,255,255,0.85); font-size: 0.85rem; margin-bottom: 1.5rem; display: flex; flex-direction: column; gap: 0.4rem;">
                        <li>✓ 5-7 lat gwarancji producentów folii</li>
                        <li>✓ Bezinwazyjna i w pełni odwracalna metoda</li>
                        <li>✓ Drobne naprawy blacharsko-lakiernicze w cenie przygotowania</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-ai-card-btn">
                        ZAPYTAJ O WYCENĘ <span class="arrow">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- CARD 2: BEZBARWNE FOLIE PPF -->
            <div class="hg-ai-mastercard tile-theme-green" style="min-height: 440px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>" alt="Folie Ochronne PPF" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">02 / PROTECTION FILM</div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">2. BEZBARWNE FOLIE PPF</h2>
                    <p class="hg-ai-card-desc">
                        Bezbarwne folie poliuretanowe (140-200 µm) chroniące lakier przed uderzeniami kamieni, rysami i chemią drogową. Powłoka samoregenerująca się pod wpływem ciepła.
                    </p>
                    <ul style="color: rgba(255,255,255,0.85); font-size: 0.85rem; margin-bottom: 1.5rem; display: flex; flex-direction: column; gap: 0.4rem;">
                        <li>✓ Dedykowane pakiety: Front, Full Body lub Strefy Rys</li>
                        <li>✓ Trwałość od 8 do 10 lat</li>
                        <li>✓ Niewidzialny pancerz chroniący fabryczny lakier</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-ai-card-btn">
                        PAKIETY OCHRONY PPF <span class="arrow">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- CARD 3: OKLEJANIE REKLAMOWE & FLOTY -->
            <div class="hg-ai-mastercard tile-theme-amber" style="min-height: 440px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Oklejanie Reklamowe & Floty" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">03 / COMMERCIAL FLEET</div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">3. OKLEJANIE REKLAMOWE & FLOTY</h2>
                    <p class="hg-ai-card-desc">
                        Grafika mobilna i branding dla firm i korporacji. Własny park maszynowy drukarek wielkoformatowych oraz ploterów. Obsługa floty 40 aut dla DHL Courier.
                    </p>
                    <ul style="color: rgba(255,255,255,0.85); font-size: 0.85rem; margin-bottom: 1.5rem; display: flex; flex-direction: column; gap: 0.4rem;">
                        <li>✓ Projekt, wydruk i aplikacja pod jednym dachem</li>
                        <li>✓ Rebranding flot korporacyjnych (Warta, DHL, Poczta Polska)</li>
                        <li>✓ Trwałe i wyraziste pigmenty odporne na UV</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-ai-card-btn">
                        BRANDING FLOTY <span class="arrow">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- CARD 4: PRZYCIEMNIANIE SZYB & DETAILING -->
            <div class="hg-ai-mastercard tile-theme-ruby" style="min-height: 440px;">
                <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.jpg'); ?>" alt="Przyciemnianie Szyb & Detailing" class="hg-ai-card-img">
                <div class="hg-ai-card-vignette"></div>

                <div class="hg-ai-card-tag">04 / DETAILING & WINDOW TINT</div>

                <div class="hg-ai-card-body">
                    <h2 class="hg-ai-card-title">4. PRZYCIEMNIANIE SZYB & DETAILING</h2>
                    <p class="hg-ai-card-desc">
                        Przyciemnianie szyb atestowanymi foliami ceramicznymi, dechroming listew na wysoki połysk, oklejanie wnętrza oraz profesjonalna konserwacja folii.
                    </p>
                    <ul style="color: rgba(255,255,255,0.85); font-size: 0.85rem; margin-bottom: 1.5rem; display: flex; flex-direction: column; gap: 0.4rem;">
                        <li>✓ Redukcja nagrzewania wnętrza i promieniowania UV</li>
                        <li>✓ Stylizacja Dechroming (Shadow Line)</li>
                        <li>✓ Dedykowane kosmetyki i pielęgnacja powłok</li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-ai-card-btn">
                        ZAPYTAJ O DODATKI <span class="arrow">&rarr;</span>
                    </a>
                </div>
            </div>

        </div>

    </div>
</main>

<?php get_footer(); ?>
