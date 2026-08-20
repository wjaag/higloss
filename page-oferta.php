<?php
/**
 * Template Name: Podstrona Oferta
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = HIGLOSS_THEME_URI;
?>

<main id="main-content" class="hg-landing">
    <section class="hg-hero hg-page-hero" aria-labelledby="hero-title">
        <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/ai_tile2_oferta.jpg'); ?>" alt="" width="1408" height="768" fetchpriority="high">
        <div class="hg-hero-shade"></div>
        <div class="hg-hero-grid" aria-hidden="true"></div>
        <div class="hg-container hg-hero-inner">
            <div class="hg-hero-content">
                <p class="hg-eyebrow hg-reveal"><span></span> Oferta studia · Szczecin / Mierzyn</p>
                <h1 id="hero-title" class="hg-hero-title hg-reveal">Jedno studio.<br><span>Pełna metamorfoza.</span></h1>
                <p class="hg-hero-lead hg-reveal">Od subtelnej ochrony fabrycznego lakieru po kompletną zmianę wizerunku auta lub całej floty. Każdy projekt realizujemy pod jednym dachem — od koncepcji po aplikację.</p>
                <div class="hg-hero-actions hg-reveal">
                    <a href="#uslugi" class="hg-btn hg-btn-primary">Zobacz usługi <svg class="hg-ui-icon hg-ui-icon--arrow-down" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M6 13.5l6 6 6-6"/></svg></a>
                    <a href="#wycena" class="hg-btn hg-btn-ghost">Bezpłatna wycena <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                </div>
            </div>
            <div class="hg-hero-proof hg-reveal" role="group" aria-label="Zakres oferty">
                <div><strong>4</strong><span>filary<br>usług</span></div>
                <div><strong>15</strong><span>lat<br>historii</span></div>
                <div><strong>1</strong><span>hala<br>w Mierzynie</span></div>
            </div>
        </div>
    </section>

    <section class="hg-section hg-services" id="uslugi" aria-labelledby="services-title">
        <div class="hg-container">
            <header class="hg-section-heading hg-reveal">
                <div>
                    <p class="hg-kicker">01 · Nasza oferta</p>
                    <h2 id="services-title">Wybierz kierunek<br><span>projektu.</span></h2>
                </div>
                <p>Każda usługa ma własną stronę z pakietami, realizacjami i wyceną. Możesz też od razu napisać — dobierzemy zakres za Ciebie.</p>
            </header>

            <div class="hg-service-grid">
                <article class="hg-service-card hg-reveal">
                    <div class="hg-service-image">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Samochód po całościowej zmianie koloru folią" width="1408" height="768" loading="lazy">
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
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_ppf.jpg'); ?>" alt="Aplikacja bezbarwnej folii ochronnej PPF na maskę samochodu" width="1408" height="768" loading="lazy">
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
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="Flota samochodów dostawczych z oznakowaniem reklamowym" width="1408" height="768" loading="lazy">
                        <span>03</span>
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
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_detailing.jpg'); ?>" alt="Samochód przygotowany do detailingu i zabezpieczenia" width="1408" height="768" loading="lazy">
                        <span>04</span>
                        <p>Finishing touch</p>
                    </div>
                    <div class="hg-service-body">
                        <h3>Szyby, dechroming i detailing</h3>
                        <p>Przyciemnianie szyb atestowanymi foliami, sportowy Shadow Line, oklejanie elementów wnętrza oraz przygotowanie lakieru do aplikacji. Detale, które domykają cały projekt.</p>
                        <ul>
                            <li><span>Ochrona UV</span><strong>Do 99%</strong></li>
                            <li><span>Dechroming</span><strong>Połysk / satyna</strong></li>
                            <li><span>Typowy czas usługi</span><strong>1 dzień</strong></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/detailing')); ?>" class="hg-text-link">Poznaj detale <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <?php
    get_template_part(
        'template-parts/quote-block',
        null,
        array(
            'quote_service'    => '',
            'quote_show_map'   => false,
            'quote_kicker'     => '02 · Wycena',
            'quote_title_html' => 'Nie wiesz, od czego<br><span>zacząć?</span>',
            'quote_lead'       => 'Napisz o aucie i efekcie, który chcesz osiągnąć. Zarekomendujemy usługę, materiał i termin.',
        )
    );
    ?>
</main>

<?php get_footer(); ?>
