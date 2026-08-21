<?php
/**
 * Front Page — HI-GLOSS DESIGN one-page landing.
 *
 * @package HiGloss2026
 */

get_header();

$theme_uri = HIGLOSS_THEME_URI;
$facebook_url = 'https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/';
$instagram_url = 'https://www.instagram.com/higlossdesign/';
?>

<main id="main-content" class="hg-landing">
    <section class="hg-hero" aria-labelledby="hero-title">
        <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_zmiana_koloru.webp'); ?>" alt="" width="1408" height="768" fetchpriority="high">
        <div class="hg-hero-shade"></div>
        <div class="hg-hero-grid" aria-hidden="true"></div>

        <div class="hg-container hg-hero-inner">
            <div class="hg-hero-content">
                <p class="hg-eyebrow hg-reveal"><span></span> Studio car wrappingu · Szczecin / Mierzyn</p>
                <h1 id="hero-title" class="hg-hero-title hg-reveal">
                    Twoje auto.<br>
                    <span>Nowy charakter.</span>
                </h1>
                <p class="hg-hero-lead hg-reveal">Całościowe oklejanie pojazdów, bezbarwne folie ochronne PPF i branding flot. Precyzyjna aplikacja, materiały premium i efekt dopracowany w każdym detalu.</p>
                <div class="hg-hero-actions hg-reveal">
                    <a href="#wycena" class="hg-btn hg-btn-primary">Wyceń swój projekt <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                    <a href="#realizacje" class="hg-btn hg-btn-ghost">Zobacz realizacje <svg class="hg-ui-icon hg-ui-icon--arrow-down" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M6 13.5l6 6 6-6"/></svg></a>
                </div>
            </div>

            <div class="hg-hero-proof hg-reveal" role="group" aria-label="Najważniejsze informacje o studio">
                <div><strong>500<sup>+</sup></strong><span>zrealizowanych<br>projektów</span></div>
                <div><strong>40<sup>+</sup></strong><span>aut we flocie<br>DHL Courier</span></div>
                <div><strong>10</strong><span>lat gwarancji<br>na wybrane folie</span></div>
            </div>
        </div>

        <div class="hg-social-rail" role="group" aria-label="Media społecznościowe">
            <span>Obserwuj nas</span>
            <i></i>
            <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram HI-GLOSS DESIGN">
                <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" class="hg-icon-fill"/></svg>
            </a>
            <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook HI-GLOSS DESIGN">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 2-5 5v2H6v4h3v7h4v-7h3.2l.8-4h-4V9c0-.7.3-1 1-1Z" class="hg-icon-fill"/></svg>
            </a>
        </div>

        <a class="hg-scroll-cue" href="#oferta"><span></span> Poznaj nasze możliwości</a>
    </section>

    <section class="hg-material-strip" aria-label="Materiały stosowane w studio">
        <div class="hg-container">
            <p>Pracujemy na sprawdzonych systemach</p>
            <div class="hg-material-list">
                <span>3M <b>2080</b></span>
                <span>AVERY <b>DENNISON</b></span>
                <span>HEXIS</span>
                <span>KPMF</span>
                <span>ORACAL</span>
                <span>XPEL</span>
            </div>
        </div>
    </section>

    <section class="hg-section hg-services" id="oferta" aria-labelledby="services-title">
        <div class="hg-container">
            <header class="hg-section-heading hg-reveal">
                <div>
                    <p class="hg-kicker">01 · Nasza oferta</p>
                    <h2 id="services-title">Jedno studio.<br><span>Pełna metamorfoza.</span></h2>
                </div>
                <p>Od subtelnej ochrony fabrycznego lakieru po kompletną zmianę wizerunku auta lub całej floty. Każdy projekt realizujemy pod jednym dachem — od koncepcji po aplikację.</p>
            </header>

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
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_reklama.webp'); ?>" alt="Flota samochodów dostawczych z oznakowaniem reklamowym" width="1408" height="768" loading="lazy">
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
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_detailing.webp'); ?>" alt="Samochód przygotowany do detailingu i zabezpieczenia" width="1408" height="768" loading="lazy">
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
                        <a href="#wycena" class="hg-text-link">Zaplanuj zakres prac <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="hg-feature-split" id="o-nas" aria-labelledby="about-title">
        <div class="hg-feature-media hg-reveal">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_tile1_pasja.webp'); ?>" alt="Studio HI-GLOSS DESIGN — praca nad samochodem" width="1408" height="768" loading="lazy">
            <div class="hg-feature-label"><span>HI-GLOSS STUDIO</span> Szczecin · Mierzyn</div>
        </div>
        <div class="hg-feature-copy">
            <div class="hg-reveal">
                <p class="hg-kicker">02 · O HI-GLOSS</p>
                <h2 id="about-title">Pasja do grafiki.<br><span>Rzemiosło w detalach.</span></h2>
                <p class="hg-feature-lead">Specjalizujemy się w całościowym oklejaniu pojazdów i tworzeniu grafiki samochodowej. Łączymy kreatywne podejście z techniczną precyzją, bo przy zmianie koloru lub zabezpieczeniu lakieru efekt końcowy nie może być dziełem przypadku.</p>
                <p>Pracujemy w ogrzewanej pracowni w Mierzynie, zapewniając folii właściwe warunki aplikacji. Przed rozpoczęciem prac dokładnie przygotowujemy auto, a gdy projekt tego wymaga — demontujemy klamki, lampy, lusterka i inne elementy, aby uzyskać czyste, trwałe wykończenie krawędzi.</p>
                <p>Od 15 lat rozwijamy HI-GLOSS DESIGN w Szczecinie. Zaczynaliśmy od grafiki samochodowej i oklejania reklamowego, a zdobywane doświadczenie pozwoliło nam rozszerzyć studio o kompleksowe zmiany koloru, ochronę PPF i obsługę flot.</p>
                <p>Technologia i materiały zmieniały się na przestrzeni lat — standard wykonania oraz odpowiedzialność za każdy detal pozostały takie same.</p>
            </div>

            <div class="hg-history hg-reveal" role="group" aria-label="15 lat historii HI-GLOSS">
                <div class="hg-history-figure">
                    <strong>15</strong>
                    <span>lat historii<br>HI-GLOSS</span>
                </div>
                <p class="hg-history-note">Doświadczenie, które widać w każdym detalu realizacji — od grafiki samochodowej po kompleksową ochronę lakieru.</p>
            </div>

            <div class="hg-feature-points hg-reveal">
                <div><span>01</span><p><strong>Własne zaplecze</strong>Druk wielkoformatowy i precyzyjne plotery tnące na miejscu.</p></div>
                <div><span>02</span><p><strong>Kontrolowane warunki</strong>Ogrzewana, przygotowana do aplikacji pracownia.</p></div>
                <div><span>03</span><p><strong>Materiały premium</strong>System dobierany do auta, efektu i sposobu użytkowania.</p></div>
                <div><span>04</span><p><strong>Pełne przygotowanie</strong>Dbałość o lakier, demontaż i bezpieczne wykończenie detali.</p></div>
            </div>
        </div>
    </section>

    <section class="hg-section hg-process" id="proces" aria-labelledby="process-title">
        <div class="hg-container">
            <header class="hg-section-heading hg-reveal">
                <div>
                    <p class="hg-kicker">03 · Jak pracujemy</p>
                    <h2 id="process-title">Od pomysłu<br><span>do efektu „wow”.</span></h2>
                </div>
                <p>Przejrzysty proces, konkretny harmonogram i jeden zespół odpowiedzialny za całość. Wiesz, co dzieje się z Twoim autem na każdym etapie.</p>
            </header>

            <ol class="hg-process-grid">
                <li class="hg-reveal"><span>01</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v11H8l-4 4V5Z"/><path d="M8 9h8M8 12h5"/></svg></div><h3>Rozmowa i wycena</h3><p>Poznajemy auto, oczekiwany efekt i sposób użytkowania. Dobieramy rozwiązanie oraz zakres prac.</p></li>
                <li class="hg-reveal"><span>02</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 16 8-12 8 12-8 4-8-4Z"/><path d="m8 14 4 2 4-2M12 4v12"/></svg></div><h3>Projekt i materiał</h3><p>Wybieramy kolor, strukturę lub przygotowujemy projekt grafiki. Potwierdzamy materiał i termin realizacji.</p></li>
                <li class="hg-reveal"><span>03</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 5.5 18.5 9.5M3 21l3.5-1 12-12a2.8 2.8 0 0 0-4-4l-12 12L3 21Z"/><path d="m13 6 4 4"/></svg></div><h3>Przygotowanie i aplikacja</h3><p>Myjemy, dekontaminujemy i przygotowujemy powierzchnię. Aplikujemy folię w kontrolowanych warunkach.</p></li>
                <li class="hg-reveal"><span>04</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 4 4L19 6"/><circle cx="12" cy="12" r="10"/></svg></div><h3>Kontrola i odbiór</h3><p>Sprawdzamy każdy detal, omawiamy pielęgnację i przekazujemy gotowy pojazd wraz z zaleceniami.</p></li>
            </ol>
        </div>
    </section>

    <section class="hg-section hg-portfolio" id="realizacje" aria-labelledby="portfolio-title">
        <div class="hg-container">
            <header class="hg-section-heading hg-reveal">
                <div>
                    <p class="hg-kicker">04 · Wybrane realizacje</p>
                    <h2 id="portfolio-title">Samochody mówią<br><span>za nas.</span></h2>
                </div>
                <p>Każdy projekt ma inny cel, ale ten sam bezkompromisowy standard wykonania. Zobacz zmianę koloru foliami premium, bezbarwną ochronę PPF i identyfikację flotową.</p>
            </header>

            <div class="hg-work-grid">
                <?php
                $projects = new WP_Query(array(
                    'post_type'           => 'realizacje',
                    'posts_per_page'      => 6,
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                ));

                if ($projects->have_posts()) :
                    while ($projects->have_posts()) :
                        $projects->the_post();
                        $service = get_post_meta(get_the_ID(), '_higloss_service_type', true);
                        $model = get_post_meta(get_the_ID(), '_higloss_car_model', true);
                        // Gdy tytuł już zawiera markę/model, nie powtarzamy go w dopiskach
                        $model_label = ($model && ! higloss_model_in_title($model)) ? $model : '';
                        $terms = get_the_terms(get_the_ID(), 'kategoria_realizacji');
                        $cat_slug = ($terms && !is_wp_error($terms)) ? $terms[0]->slug : 'zmiana-koloru';
                        $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : $theme_uri . '/assets/images/gallery_bmw_m4_satin_black.webp';
                        $before_image_map = array(
                            'gallery_bmw_m4_satin_black.webp' => 'gallery_before_stock_paint.webp',
                            'gallery_porsche_gt3_green.webp'  => 'gallery_porsche_gt3_before.webp',
                            'gallery_audi_rs6_blue.webp'      => 'gallery_audi_rs6_before.webp',
                            'gallery_mercedes_g63_matt.webp'  => 'gallery_mercedes_g63_before.webp',
                            'gallery_ppf_application.webp'    => 'gallery_ppf_application_before.webp',
                            'ai_oferta_ppf.webp'              => 'ai_oferta_ppf_before.webp',
                            'gallery_fleet_commercial.webp'   => 'gallery_fleet_before.webp',
                            'ai_oferta_detailing.webp'        => 'ai_oferta_detailing_before.webp',
                        );
                        $thumb_basename = basename(parse_url($thumb, PHP_URL_PATH));
                        $before_meta_id = (int) get_post_meta(get_the_ID(), '_higloss_before_image', true);
                        $before_url     = $before_meta_id ? wp_get_attachment_image_url($before_meta_id, 'full') : (isset($before_image_map[$thumb_basename]) ? $theme_uri . '/assets/images/' . $before_image_map[$thumb_basename] : '');
                        ?>
                        <a class="hg-work-card hg-reveal" href="<?php the_permalink(); ?>" data-category="<?php echo esc_attr($cat_slug); ?>" data-lightbox-img="<?php echo esc_url($thumb); ?>" data-lightbox-before="<?php echo $before_url ? esc_url($before_url) : ''; ?>" data-lightbox-title="<?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr(($model_label ? $model_label . ' · ' : '') . ($service ?: 'HI-GLOSS Studio')); ?>">
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" width="1408" height="768" loading="lazy">
                            <span class="hg-work-overlay"></span>
                            <span class="hg-work-index"><?php echo esc_html(sprintf('%02d', $projects->current_post + 1)); ?></span>
                            <span class="hg-work-meta"><?php echo esc_html($service ?: 'Realizacja HI-GLOSS'); ?></span>
                            <span class="hg-work-title"><strong><?php the_title(); ?></strong><?php if ($model_label) : ?><small><?php echo esc_html($model_label); ?></small><?php endif; ?></span>
                            <span class="hg-work-arrow" aria-hidden="true"><svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></span>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    $fallback_projects = array(
                        array('gallery_bmw_m4_satin_black.webp', 'Zmiana koloru', 'BMW M4 Coupe — Satin Nero', 'Folia Avery SWF · Satyna · Szczecin', 'zmiana-koloru'),
                        array('gallery_porsche_gt3_green.webp', 'Zmiana koloru', 'Porsche 911 GT3 RS — Racing Green', 'Inozetek / 3M 2080 · Satynowa zieleń', 'zmiana-koloru'),
                        array('gallery_audi_rs6_blue.webp', 'Zmiana koloru', 'Audi RS6 Avant — Miami Blue', '3M 2080 Gloss + Dechroming Black Optics', 'zmiana-koloru'),
                        array('gallery_ppf_application.webp', 'Folia ochronna PPF', 'Full Front PPF — Samoregeneracja', 'STEK DYNOshield 180µm · 10 lat gwarancji', 'ppf'),
                        array('gallery_fleet_commercial.webp', 'Branding flot', 'Flota DHL Express — 40 Aut', 'Projekt · Druk UV · Aplikacja seryjna', 'reklama'),
                        array('ai_oferta_detailing.webp', 'Detailing & Detale', 'Dechroming & Przyciemnianie Szyb', 'Shadow Line Gloss Black · Atest Ceramika', 'detailing'),
                    );
                    foreach ($fallback_projects as $index => $project) :
                        $before_map = array(
                            'gallery_bmw_m4_satin_black.webp' => 'gallery_before_stock_paint.webp',
                            'gallery_porsche_gt3_green.webp'  => 'gallery_porsche_gt3_before.webp',
                            'gallery_audi_rs6_blue.webp'      => 'gallery_audi_rs6_before.webp',
                            'gallery_ppf_application.webp'    => 'gallery_ppf_application_before.webp',
                            'gallery_fleet_commercial.webp'   => 'gallery_fleet_before.webp',
                            'ai_oferta_detailing.webp'        => 'ai_oferta_detailing_before.webp',
                        );
                        $before_src = isset($before_map[$project[0]]) ? $theme_uri . '/assets/images/' . $before_map[$project[0]] : '';
                        ?>
                        <a class="hg-work-card hg-reveal" href="<?php echo esc_url(home_url('/galeria')); ?>" data-category="<?php echo esc_attr($project[4]); ?>" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/' . $project[0]); ?>" data-lightbox-before="<?php echo $before_src ? esc_url($before_src) : ''; ?>" data-lightbox-title="<?php echo esc_attr($project[2]); ?>" data-lightbox-meta="<?php echo esc_attr($project[1] . ' · ' . $project[3]); ?>">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/' . $project[0]); ?>" srcset="<?php echo esc_url($theme_uri . '/assets/images/' . str_replace('.webp', '-480.webp', $project[0])); ?> 480w, <?php echo esc_url($theme_uri . '/assets/images/' . str_replace('.webp', '-768.webp', $project[0])); ?> 768w, <?php echo esc_url($theme_uri . '/assets/images/' . $project[0]); ?> 1408w" sizes="(max-width: 768px) 92vw, 400px" alt="<?php echo esc_attr($project[2]); ?>" width="1408" height="768" loading="lazy" decoding="async">
                            <span class="hg-work-overlay"></span>
                            <span class="hg-work-index"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                            <span class="hg-work-meta"><?php echo esc_html($project[1]); ?></span>
                            <span class="hg-work-title"><strong><?php echo esc_html($project[2]); ?></strong><small><?php echo esc_html($project[3]); ?></small></span>
                            <span class="hg-work-arrow" aria-hidden="true"><svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></span>
                        </a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>

            <div style="text-align: center; margin-top: 2.5rem;" class="hg-reveal">
                <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-btn hg-btn-outline" style="padding: 0.95rem 2.2rem; font-weight: 800; font-size: 0.9rem;">
                    Zobacz pełną galerię realizacji &rarr;
                </a>
            </div>
        </div>
    </section>

    <section class="hg-cta-band" aria-label="Zaproszenie do kontaktu">
        <div class="hg-cta-track" aria-hidden="true">
            <span>Zmień kolor</span><i></i><span>Chroń lakier</span><i></i><span>Wyróżnij markę</span><i></i><span>Zmień kolor</span><i></i><span>Chroń lakier</span><i></i>
        </div>
        <div class="hg-container hg-cta-content hg-reveal">
            <p>Masz pomysł na swoje auto?</p>
            <h2>My wiemy, jak go zrealizować.</h2>
            <a href="#wycena" class="hg-btn hg-btn-primary">Porozmawiajmy o projekcie <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </section>

    <section class="hg-section hg-faq" aria-labelledby="faq-title">
        <div class="hg-container hg-faq-layout">
            <header class="hg-faq-heading hg-reveal">
                <p class="hg-kicker">05 · Warto wiedzieć</p>
                <h2 id="faq-title">Najczęstsze<br><span>pytania.</span></h2>
                <p>Nie widzisz odpowiedzi? Zadzwoń — doradzimy rozwiązanie dopasowane do Twojego auta.</p>
                <a href="tel:+48605088065" class="hg-text-link">605&nbsp;088&nbsp;065 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
            </header>
            <div class="hg-accordion hg-reveal">
                <details open>
                    <summary>Czy folia do zmiany koloru chroni lakier?<span></span></summary>
                    <div><p>Folia zmieniająca kolor stanowi dodatkową warstwę i ogranicza drobne uszkodzenia eksploatacyjne, jednak do ochrony przed kamieniami i głębszymi zarysowaniami przeznaczona jest grubsza, poliuretanowa folia PPF.</p></div>
                </details>
                <details>
                    <summary>Jak długo trwa oklejenie całego auta?<span></span></summary>
                    <div><p>Standardowa zmiana koloru zajmuje zwykle 3–5 dni roboczych. Dokładny termin zależy od wielkości i konstrukcji auta, zakresu demontażu oraz wybranego materiału.</p></div>
                </details>
                <details>
                    <summary>Czy folię można później bezpiecznie usunąć?<span></span></summary>
                    <div><p>Tak. Prawidłowo zaaplikowana folia renomowanego producenta może zostać profesjonalnie usunięta bez naruszania fabrycznego lakieru, o ile lakier był wcześniej w dobrym stanie i nie był naprawiany niezgodnie ze sztuką.</p></div>
                </details>
                <details>
                    <summary>Jaki pakiet PPF wybrać?<span></span></summary>
                    <div><p>Do jazdy miejskiej często wystarcza ochrona stref najbardziej narażonych. Przy częstych trasach rekomendujemy Full Front, a dla nowych, sportowych i kolekcjonerskich aut — zabezpieczenie Full Body.</p></div>
                </details>
                <details>
                    <summary>Co jest potrzebne do przygotowania wyceny?<span></span></summary>
                    <div><p>Podaj markę, model i rocznik auta, interesującą Cię usługę oraz oczekiwany efekt. Zdjęcia i informacja o stanie lakieru pomogą nam przygotować bardziej precyzyjną propozycję.</p></div>
                </details>
            </div>
        </div>
    </section>

    <section class="hg-contact" id="kontakt" aria-labelledby="contact-title">
        <div class="hg-container">
            <header class="hg-section-heading hg-contact-heading hg-reveal">
                <div>
                    <p class="hg-kicker">06 · Kontakt</p>
                    <h2 id="contact-title">Zacznijmy<br><span>Twój projekt.</span></h2>
                </div>
                <p>Opowiedz nam o aucie i oczekiwanym efekcie. Wrócimy z rekomendacją zakresu, materiału i orientacyjnym terminem.</p>
            </header>

            <div class="hg-contact-grid" id="wycena">
                <div class="hg-contact-panel hg-reveal">
                    <p class="hg-contact-label">HI-GLOSS DESIGN</p>
                    <a class="hg-contact-phone" href="tel:+48605088065">605&nbsp;088&nbsp;065 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                    <a class="hg-contact-phone hg-contact-phone-secondary" href="tel:+48664129023">664&nbsp;129&nbsp;023 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>

                    <div class="hg-contact-details">
                        <div><span>Studio</span><a href="https://www.google.com/maps/dir/?api=1&destination=Podmiejska+4%2C+72-006+Mierzyn" target="_blank" rel="noopener noreferrer">ul. Podmiejska 4<br>72-006 Mierzyn / Szczecin</a></div>
                        <div><span>E-mail</span><a href="mailto:biuro@hi-glossdesign.pl">biuro@hi-glossdesign.pl</a></div>
                        <div><span>Godziny</span><p>Pon.–Pt. 08:00–17:00<br>Sobota: po umówieniu</p></div>
                    </div>

                    <a class="hg-google-proof" href="https://www.google.com/maps/search/?api=1&query=HI-GLOSS+DESIGN+Podmiejska+4+Mierzyn" target="_blank" rel="noopener noreferrer" aria-label="Opinie naszych klientów — wysoki ranking HI-GLOSS DESIGN w Google">
                        <span class="hg-google-proof-star" aria-hidden="true">
                            <svg class="hg-ui-icon hg-ui-icon--fill" viewBox="0 0 24 24"><path d="m12 2.6 2.92 5.98 6.58.94-4.77 4.63 1.14 6.55L12 17.5l-5.87 3.2 1.14-6.55L2.5 9.52l6.58-.94L12 2.6Z"/></svg>
                        </span>
                        <span class="hg-google-proof-copy">
                            <small>Opinie naszych klientów</small>
                            <strong>Wysoki ranking w Google</strong>
                        </span>
                        <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg>
                    </a>

                    <div class="hg-contact-socials">
                        <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" class="hg-icon-fill"/></svg>
                            <span>Instagram<small>@higlossdesign</small></span>
                        </a>
                        <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 2-5 5v2H6v4h3v7h4v-7h3.2l.8-4h-4V9c0-.7.3-1 1-1Z" class="hg-icon-fill"/></svg>
                            <span>Facebook<small>Hi-gloss design Szczecin</small></span>
                        </a>
                    </div>
                </div>

                <div class="hg-form-panel hg-reveal">
                    <div class="hg-form-heading">
                        <span>Bezpłatna wycena</span>
                        <h3>Opowiedz nam o swoim aucie</h3>
                    </div>
                    <form class="hg-quote-form" id="hgQuoteForm" novalidate>
                        <div class="hg-form-row">
                            <label><span>Imię i nazwisko</span>
                                <input type="text" name="name" autocomplete="name" placeholder="Jan Kowalski">
                            </label>
                            <label><span>Numer telefonu <em>*</em></span>
                                <input type="tel" name="phone" autocomplete="tel" inputmode="tel" placeholder="600 000 000" required>
                            </label>
                        </div>
                        <div class="hg-form-row">
                            <label><span>Adres e-mail</span>
                                <input type="email" name="email" autocomplete="email" placeholder="jan@email.pl">
                            </label>
                            <label><span>Interesująca usługa <em>*</em></span>
                                <select name="service" required>
                                    <option value="">Wybierz usługę</option>
                                    <option value="Całościowa zmiana koloru">Całościowa zmiana koloru</option>
                                    <option value="Bezbarwna folia PPF">Bezbarwna folia PPF</option>
                                    <option value="Reklama i branding floty">Reklama i branding floty</option>
                                    <option value="Przyciemnianie szyb / dechroming">Szyby / dechroming</option>
                                    <option value="Inna usługa">Inna usługa</option>
                                </select>
                            </label>
                        </div>
                        <label><span>Auto i oczekiwany efekt</span>
                            <textarea name="notes" rows="4" placeholder="Marka, model, rocznik i krótki opis projektu..."></textarea>
                        </label>
                        <input type="text" name="website" class="hg-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">
                        <label class="hg-consent">
                            <input type="checkbox" name="consent" value="1" required>
                            <span>Wyrażam zgodę na kontakt w sprawie wyceny. Zapoznałem/am się z <a href="<?php echo esc_url(home_url('/polityka-prywatnosci')); ?>">polityką prywatności</a>. <em>*</em></span>
                        </label>
                        <div class="hg-form-submit">
                            <button type="submit" class="hg-btn hg-btn-primary">Wyślij zapytanie <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></button>
                            <p>Pola oznaczone * są wymagane.</p>
                        </div>
                        <div class="hg-form-status" id="hgFormStatus" role="status" aria-live="polite"></div>
                    </form>
                </div>
            </div>

            <div class="hg-map hg-reveal">
                <iframe title="Mapa dojazdu do HI-GLOSS DESIGN w Mierzynie" src="https://www.google.com/maps?q=Podmiejska+4,+72-006+Mierzyn&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                <div class="hg-map-caption">
                    <span>53.4275° N · 14.4711° E</span>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=Podmiejska+4%2C+72-006+Mierzyn" target="_blank" rel="noopener noreferrer">Wyznacz trasę <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
