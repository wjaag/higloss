<?php
/**
 * Wspolna siatka 6 kafelkow oferty (Zmiana koloru / PPF / Dechroming /
 * Przyciemnianie szyb / Reklama / Szkolenia) — uzywana identycznie na
 * stronie glownej i na /oferta/, zeby nie utrzymywac dwoch kopii tego
 * samego bloku HTML.
 *
 * @package HiGloss2026
 */

$theme_uri = HIGLOSS_THEME_URI;
?>
<div class="hg-service-grid">
    <article class="hg-service-card hg-reveal">
        <div class="hg-service-image">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_zmiana_koloru.webp'); ?>" alt="Samochód po całościowej zmianie koloru folią" width="1408" height="768" loading="lazy">
            <span>01</span>
            <p>Car wrapping</p>
        </div>
        <div class="hg-service-body">
            <h3>Całościowa zmiana koloru</h3>
            <p>Odwracalna alternatywa dla lakierowania. Oklejamy auta, motocykle i łodzie foliami wylewanymi premium — w połysku, satynie, macie, carbonie i wykończeniach typu kameleon.</p>
            <ul>
                <li><span>Czas realizacji</span><strong>3–5 dni</strong></li>
                <li><span>Gwarancja producenta</span><strong>5–7 lat</strong></li>
                <li><span>Materiały</span><strong>3M / Avery / Hexis</strong></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-text-link">Poznaj zmianę koloru <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </article>

    <article class="hg-service-card hg-reveal">
        <div class="hg-service-image">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_ppf.webp'); ?>" alt="Aplikacja bezbarwnej folii ochronnej PPF na maskę samochodu" width="1408" height="768" loading="lazy">
            <span>02</span>
            <p>Paint Protection Film</p>
        </div>
        <div class="hg-service-body">
            <h3>Bezbarwne folie PPF</h3>
            <p>Niemal niewidoczna bariera chroniąca lakier przed odpryskami, zarysowaniami, chemią drogową i codziennym zużyciem. Powierzchnia folii regeneruje mikrorysy pod wpływem ciepła.</p>
            <ul>
                <li><span>Grubość folii</span><strong>140–200 μm</strong></li>
                <li><span>Trwałość</span><strong>8–10 lat</strong></li>
                <li><span>Pakiety</span><strong>Strefy / Full Front / Full Body</strong></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/ppf')); ?>" class="hg-text-link">Poznaj ochronę PPF <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </article>

    <article class="hg-service-card hg-reveal">
        <div class="hg-service-image">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_dechroming.webp'); ?>" alt="Samochód z odchromowanymi listwami i grillem, folia Shadow Line" width="1408" height="768" loading="lazy">
            <span>03</span>
            <p>Shadow Line</p>
        </div>
        <div class="hg-service-body">
            <h3>Dechroming (Shadow Line)</h3>
            <p>Oklejamy chromowane listwy, grill, lusterka i emblematy folią w połysku lub głębokiej satynowej czerni. Popularne dodatki: przyciemnianie lamp i paski na masce.</p>
            <ul>
                <li><span>Wykończenie</span><strong>Połysk / Satyna / Mat</strong></li>
                <li><span>Zakres</span><strong>Listwy, grill, lampy, dach</strong></li>
                <li><span>Czas usługi</span><strong>1 dzień</strong></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/dechroming')); ?>" class="hg-text-link">Poznaj dechroming <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </article>

    <article class="hg-service-card hg-reveal">
        <div class="hg-service-image">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_przyciemnianie_szyb.webp'); ?>" alt="Technik aplikujący folię przyciemniającą na szybę samochodu" width="1408" height="768" loading="lazy">
            <span>04</span>
            <p>Window Tinting</p>
        </div>
        <div class="hg-service-body">
            <h3>Przyciemnianie szyb</h3>
            <p>Atestowane folie ceramiczne i piecowe — redukują nagrzewanie wnętrza, blokują do 99% promieniowania UV i zapewniają prywatność, zgodnie z przepisami o przepuszczalności światła.</p>
            <ul>
                <li><span>Ochrona UV</span><strong>Do 99%</strong></li>
                <li><span>Folia</span><strong>Ceramiczna / Piecowa</strong></li>
                <li><span>Atest</span><strong>Na życzenie</strong></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/przyciemnianie-szyb')); ?>" class="hg-text-link">Poznaj przyciemnianie szyb <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </article>

    <article class="hg-service-card hg-reveal">
        <div class="hg-service-image">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_reklama.webp'); ?>" alt="Flota samochodów dostawczych z oznakowaniem reklamowym" width="1408" height="768" loading="lazy">
            <span>05</span>
            <p>Fleet branding</p>
        </div>
        <div class="hg-service-body">
            <h3>Reklama i branding flot</h3>
            <p>Projektujemy, drukujemy i aplikujemy grafikę, która pracuje na rozpoznawalność marki w każdym miejscu. Obsługujemy pojedyncze auta firmowe i powtarzalne wdrożenia flotowe.</p>
            <ul>
                <li><span>Realizacja</span><strong>Projekt + druk + montaż</strong></li>
                <li><span>Zaplecze</span><strong>Drukarki i plotery na miejscu</strong></li>
                <li><span>Doświadczenie</span><strong>DHL / Warta / MŚP</strong></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/reklama')); ?>" class="hg-text-link">Poznaj branding flot <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </article>

    <article class="hg-service-card hg-reveal">
        <div class="hg-service-image">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/szkolenia_banner.webp'); ?>" alt="Trener car wrappingu ucząca dwóch kursantów aplikacji folii na masce" width="1408" height="768" loading="lazy">
            <span>06</span>
            <p>Car Wrapping Academy</p>
        </div>
        <div class="hg-service-body">
            <h3>Szkolenia car wrappingu</h3>
            <p>Kursy w małych grupach — maksymalnie 4 osoby na trenera, żeby każdy uczestnik kleił samodzielnie. 15 lat praktyki przekute na wiedzę z realnych realizacji.</p>
            <ul>
                <li><span>Grupa</span><strong>Max 4 os. / trenera</strong></li>
                <li><span>Doświadczenie</span><strong>15 lat praktyki</strong></li>
                <li><span>Czas modułu</span><strong>1–3 dni</strong></li>
            </ul>
            <a href="<?php echo esc_url(home_url('/szkolenia')); ?>" class="hg-text-link">Poznaj program szkoleń <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </article>
</div>
