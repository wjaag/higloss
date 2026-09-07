<?php
/**
 * Front page service cards.
 *
 * @package HiGloss2026
 */
$theme_uri = HIGLOSS_THEME_URI;
$services = array(
    array('01','Car wrapping','Całościowa zmiana koloru','Odwracalna alternatywa dla lakierowania. Oklejamy auta, motocykle i łodzie foliami wylewanymi premium — w połysku, satynie, macie, carbonie i wykończeniach typu kameleon.','ai_oferta_zmiana_koloru.webp','Samochód po całościowej zmianie koloru folią','/zmiana-koloru','Poznaj zmianę koloru',array('Czas realizacji','3–5 dni'),array('Gwarancja producenta','5–7 lat'),array('Materiały','3M / Avery / Hexis')),
    array('02','Paint Protection Film','Bezbarwne folie PPF','Niemal niewidoczna bariera chroniąca lakier przed odpryskami, zarysowaniami, chemią drogową i codziennym zużyciem. Powierzchnia folii regeneruje mikrorysy pod wpływem ciepła.','ai_oferta_ppf.webp','Aplikacja bezbarwnej folii ochronnej PPF na maskę samochodu','/ppf','Poznaj ochronę PPF',array('Grubość folii','140–200 μm'),array('Trwałość','8–10 lat'),array('Pakiety','Strefy / Full Front / Full Body')),
    array('03','Fleet branding','Reklama i branding flot','Projektujemy, drukujemy i aplikujemy grafikę, która pracuje na rozpoznawalność marki w każdym miejscu. Obsługujemy pojedyncze auta firmowe i powtarzalne wdrożenia flotowe.','ai_oferta_reklama.webp','Flota samochodów dostawczych z oznakowaniem reklamowym','/reklama','Poznaj branding flot',array('Realizacja','Projekt + druk + montaż'),array('Zaplecze','Drukarki i plotery na miejscu'),array('Doświadczenie','DHL / Warta / MŚP')),
    array('04','Finishing touch','Szyby, dechroming i detailing','Przyciemnianie szyb atestowanymi foliami, sportowy Shadow Line, oklejanie elementów wnętrza oraz przygotowanie lakieru do aplikacji. Detale, które domykają cały projekt.','ai_oferta_detailing.webp','Samochód przygotowany do detailingu i zabezpieczenia','#wycena','Zaplanuj zakres prac',array('Ochrona UV','Do 99%'),array('Dechroming','Połysk / satyna'),array('Typowy czas usługi','1 dzień')),
);
?>
<section class="hg-section hg-services" id="oferta" aria-labelledby="services-title">
    <div class="hg-container">
        <header class="hg-section-heading hg-reveal">
            <div><p class="hg-kicker">01 · Nasza oferta</p><h2 id="services-title">Jedno studio.<br><span>Pełna metamorfoza.</span></h2></div>
            <p>Od subtelnej ochrony fabrycznego lakieru po kompletną zmianę wizerunku auta lub całej floty. Każdy projekt realizujemy pod jednym dachem — od koncepcji po aplikację.</p>
        </header>
        <div class="hg-service-grid">
            <?php foreach ($services as $service) : ?>
                <article class="hg-service-card hg-reveal">
                    <div class="hg-service-image">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/' . $service[4]); ?>" alt="<?php echo esc_attr($service[5]); ?>" width="1408" height="768" loading="lazy" decoding="async">
                        <span><?php echo esc_html($service[0]); ?></span><p><?php echo esc_html($service[1]); ?></p>
                    </div>
                    <div class="hg-service-body">
                        <h3><?php echo esc_html($service[2]); ?></h3><p><?php echo esc_html($service[3]); ?></p>
                        <ul><?php for ($i = 7; $i <= 9; $i++) : ?><li><span><?php echo esc_html($service[$i][0]); ?></span><strong><?php echo esc_html($service[$i][1]); ?></strong></li><?php endfor; ?></ul>
                        <a href="<?php echo esc_url(home_url($service[6])); ?>" class="hg-text-link"><?php echo esc_html($service[7]); ?> <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
