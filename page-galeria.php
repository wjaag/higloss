<?php
/**
 * Template Name: Podstrona Galeria Realizacji (Dynamic CPT Query & Interactive Lightbox)
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="main-content" style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        
        <!-- HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url($theme_uri . '/assets/images/galeria_realizacji.png'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">PORTFOLIO STUDIO SZCZECIN &bull; MIERZYN</span>
                <h1 class="hg-subpage-banner-title">
                    GALERIA REALIZACJI <span style="color: #25aae1;">HI-GLOSS</span>
                </h1>
                <p style="color: #cbd5e1; max-width: 640px; margin: 0.8rem 0 0; font-size: 0.95rem; line-height: 1.6;">
                    Poznaj wybrane transformacje aut naszych klientów. Każdy projekt to indywidualne podejście, demontaż z zachowaniem procedur fabrycznych i najwyższej klasy folie ochronne oraz do zmiany koloru.
                </p>
            </div>
        </div>

        <!-- STATS / PROOF STRIP -->
        <div class="hg-gallery-hero-strip">
            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <div>
                    <strong>500+</strong>
                    <small>Oklejonych pojazdów</small>
                </div>
            </div>

            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                </div>
                <div>
                    <strong>15 Lat</strong>
                    <small>Doświadczenia w branży</small>
                </div>
            </div>

            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <strong>10 Lat</strong>
                    <small>Gwarancji na folie PPF</small>
                </div>
            </div>

            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 14.5h-2v-2h2zm0-4h-2V7h2z"/></svg>
                </div>
                <div>
                    <strong>3M / Avery / STEK</strong>
                    <small>Certyfikowane materiały</small>
                </div>
            </div>
        </div>

        <!-- CATEGORY FILTERS -->
        <div class="hg-gallery-filter-wrap" role="group" aria-label="Filtry kategorii realizacji">
            <button type="button" class="hg-gallery-btn is-active" data-filter="all" aria-pressed="true">
                <span>Wszystkie</span>
                <span class="hg-gallery-btn-count">8</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="zmiana-koloru" aria-pressed="false">
                <span>Zmiana Koloru</span>
                <span class="hg-gallery-btn-count">4</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="ppf" aria-pressed="false">
                <span>Ochrona PPF</span>
                <span class="hg-gallery-btn-count">2</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="reklama" aria-pressed="false">
                <span>Floty i Reklama</span>
                <span class="hg-gallery-btn-count">1</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="detailing" aria-pressed="false">
                <span>Detailing &amp; Detale</span>
                <span class="hg-gallery-btn-count">1</span>
            </button>
        </div>

        <?php
        $args = array(
            'post_type'      => 'realizacje',
            'posts_per_page' => 24,
            'orderby'        => 'date',
            'order'          => 'DESC'
        );
        $realizacje_query = new WP_Query($args);
        ?>

        <?php if ($realizacje_query->have_posts()) : ?>
            
            <!-- DYNAMIC WORDPRESS CPT GRID -->
            <div class="hg-gallery-grid">
                <?php while ($realizacje_query->have_posts()) : $realizacje_query->the_post(); 
                    $service_tag = get_post_meta(get_the_ID(), '_higloss_service_type', true);
                    $car_model   = get_post_meta(get_the_ID(), '_higloss_car_model', true);
                    $film_used   = get_post_meta(get_the_ID(), '_higloss_film_used', true);
                    $exec_time   = get_post_meta(get_the_ID(), '_higloss_execution_time', true);
                    $finish_type = get_post_meta(get_the_ID(), '_higloss_finish_type', true);
                    $terms       = get_the_terms(get_the_ID(), 'kategoria_realizacji');
                    $cat_slug    = ($terms && !is_wp_error($terms)) ? $terms[0]->slug : 'zmiana-koloru';
                    $thumb_url   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : $theme_uri . '/assets/images/gallery_bmw_m4_satin_black.jpg';
                    $before_image_map = array(
                        'gallery_bmw_m4_satin_black.jpg' => 'gallery_before_stock_paint.jpg',
                        'gallery_porsche_gt3_green.jpg'  => 'gallery_porsche_gt3_before.jpg',
                        'gallery_audi_rs6_blue.jpg'      => 'gallery_audi_rs6_before.jpg',
                        'gallery_mercedes_g63_matt.jpg'  => 'gallery_mercedes_g63_before.jpg',
                        'gallery_ppf_application.jpg'    => 'gallery_ppf_application_before.jpg',
                        'ai_oferta_ppf.jpg'              => 'ai_oferta_ppf_before.jpg',
                        'gallery_fleet_commercial.jpg'   => 'gallery_fleet_before.jpg',
                        'ai_oferta_detailing.jpg'        => 'ai_oferta_detailing_before.jpg',
                    );
                    $thumb_basename = basename(parse_url($thumb_url, PHP_URL_PATH));
                    $before_url     = isset($before_image_map[$thumb_basename]) ? $theme_uri . '/assets/images/' . $before_image_map[$thumb_basename] : '';
                ?>
                    <article class="hg-gallery-card" data-category="<?php echo esc_attr($cat_slug); ?>">
                        <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($thumb_url); ?>" data-lightbox-before="<?php echo $before_url ? esc_url($before_url) : ''; ?>" data-lightbox-title="<?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr(($car_model ? $car_model . ' &bull; ' : '') . ($service_tag ?: 'HI-GLOSS Studio')); ?>" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                            <div class="hg-gallery-vignette"></div>
                            <span class="hg-gallery-cat-pill cat-<?php echo esc_attr($cat_slug); ?>">
                                <?php echo !empty($service_tag) ? esc_html($service_tag) : 'REALIZACJA'; ?>
                            </span>
                            <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                                <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                            </button>
                        </div>

                        <div class="hg-gallery-content">
                            <div>
                                <h2 class="hg-gallery-title"><?php the_title(); ?></h2>
                                <p class="hg-gallery-desc">
                                    <?php echo !empty($car_model) ? esc_html($car_model) : wp_trim_words(get_the_excerpt(), 12, '...'); ?>
                                </p>
                            </div>

                            <div>
                                <div class="hg-gallery-specs-row">
                                    <?php if (!empty($film_used)) : ?>
                                        <span class="hg-gallery-spec-item">Folia: <strong><?php echo esc_html($film_used); ?></strong></span>
                                    <?php endif; ?>
                                    <?php if (!empty($exec_time)) : ?>
                                        <span class="hg-gallery-spec-item">Czas: <strong><?php echo esc_html($exec_time); ?></strong></span>
                                    <?php endif; ?>
                                    <?php if (!empty($finish_type)) : ?>
                                        <span class="hg-gallery-spec-item">Efekt: <strong><?php echo esc_html($finish_type); ?></strong></span>
                                    <?php endif; ?>
                                </div>

                                <div class="hg-gallery-actions">
                                    <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($thumb_url); ?>" data-lightbox-before="<?php echo $before_url ? esc_url($before_url) : ''; ?>" data-lightbox-title="<?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr(($car_model ? $car_model . ' &bull; ' : '') . ($service_tag ?: 'HI-GLOSS Studio')); ?>">
                                        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                    </button>
                                    <a href="<?php the_permalink(); ?>" class="hg-gallery-card-btn btn-primary">
                                        Szczegóły &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

        <?php else : ?>
            
            <!-- FALLBACK RICH MASTERPIECE GALLERY SHOWCASE -->
            <div class="hg-gallery-grid">
                
                <!-- CARD 1: BMW M4 -->
                <article class="hg-gallery-card" data-category="zmiana-koloru">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_bmw_m4_satin_black.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_before_stock_paint.jpg'); ?>" data-lightbox-title="BMW M4 Coupe — Satin Nero Wrap &amp; Dechroming" data-lightbox-meta="BMW M4 Coupe &bull; Całościowa zmiana koloru folią Avery Dennison &bull; Szczecin" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/gallery_bmw_m4_satin_black.jpg'); ?>" alt="BMW M4 Coupe — Satin Black" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-zmiana-koloru">Zmiana Koloru</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">BMW M4 Coupe — Satin Nero</h2>
                            <p class="hg-gallery-desc">Kompletna transformacja fabrycznego lakieru na głęboką satynową czerń z demontażem klamek, zderzaków i dechromingiem listew okiennych.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Folia: <strong>Avery Dennison SWF</strong></span>
                                <span class="hg-gallery-spec-item">Czas: <strong>4 dni</strong></span>
                                <span class="hg-gallery-spec-item">Wykończenie: <strong>Satyna Nero</strong></span>
                                <span class="hg-gallery-spec-item">Gwarancja: <strong>7 lat</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_bmw_m4_satin_black.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_before_stock_paint.jpg'); ?>" data-lightbox-title="BMW M4 Coupe — Satin Nero" data-lightbox-meta="BMW M4 Coupe &bull; Zmiana koloru &bull; Avery Dennison SWF">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- CARD 2: PORSCHE GT3 RS -->
                <article class="hg-gallery-card" data-category="zmiana-koloru">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_porsche_gt3_green.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_porsche_gt3_before.jpg'); ?>" data-lightbox-title="Porsche 911 GT3 RS — Satin Racing Green" data-lightbox-meta="Porsche 911 GT3 RS &bull; Zmiana koloru Inozetek / 3M 2080 &bull; Mierzyn" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/gallery_porsche_gt3_green.jpg'); ?>" alt="Porsche 911 GT3 RS" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-zmiana-koloru">Zmiana Koloru</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">Porsche 911 GT3 RS — Racing Green</h2>
                            <p class="hg-gallery-desc">Spektakularna satynowa zieleń British Racing Green z zabezpieczeniem newralgicznych wlotów powietrza bezbarwną folią PPF.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Folia: <strong>3M 2080 / Inozetek</strong></span>
                                <span class="hg-gallery-spec-item">Czas: <strong>5 dni</strong></span>
                                <span class="hg-gallery-spec-item">Wykończenie: <strong>Satynowa Zieleń</strong></span>
                                <span class="hg-gallery-spec-item">Aplikator: <strong>Master Pro</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_porsche_gt3_green.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_porsche_gt3_before.jpg'); ?>" data-lightbox-title="Porsche 911 GT3 RS — Racing Green" data-lightbox-meta="Porsche 911 GT3 RS &bull; British Racing Green &bull; 3M 2080">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- CARD 3: AUDI RS6 -->
                <article class="hg-gallery-card" data-category="zmiana-koloru">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_audi_rs6_blue.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_audi_rs6_before.jpg'); ?>" data-lightbox-title="Audi RS6 Avant — Gloss Miami Blue + Black Optics" data-lightbox-meta="Audi RS6 Avant &bull; Gloss Miami Blue Wrap &bull; Szczecin" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/gallery_audi_rs6_blue.jpg'); ?>" alt="Audi RS6 Avant — Gloss Miami Blue" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-zmiana-koloru">Zmiana Koloru</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">Audi RS6 Avant — Gloss Miami Blue</h2>
                            <p class="hg-gallery-desc">Intensywny błękit w wysokim połysku z pakietem Black Optic (relingi, grill, lusterka) i hydrofobową powłoką ceramiczną na folię.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Folia: <strong>3M 2080 Gloss Blue</strong></span>
                                <span class="hg-gallery-spec-item">Czas: <strong>4 dni</strong></span>
                                <span class="hg-gallery-spec-item">Efekt: <strong>Wysoki Połysk</strong></span>
                                <span class="hg-gallery-spec-item">Powłoka: <strong>Ceramika Gyeon</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_audi_rs6_blue.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_audi_rs6_before.jpg'); ?>" data-lightbox-title="Audi RS6 Avant — Gloss Miami Blue" data-lightbox-meta="Audi RS6 &bull; Wysoki Połysk &bull; 3M 2080 Gloss">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- CARD 4: MERCEDES G63 AMG -->
                <article class="hg-gallery-card" data-category="zmiana-koloru">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_mercedes_g63_matt.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_mercedes_g63_before.jpg'); ?>" data-lightbox-title="Mercedes-AMG G63 — Matte Dark Charcoal" data-lightbox-meta="Mercedes-AMG G63 &bull; Matowa zmiana koloru Hexis Skintac &bull; Mierzyn" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/gallery_mercedes_g63_matt.jpg'); ?>" alt="Mercedes-AMG G63" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-zmiana-koloru">Zmiana Koloru</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">Mercedes-AMG G63 — Matte Charcoal</h2>
                            <p class="hg-gallery-desc">Masywna sylwetka Klasy G w matowym graficie. Pełne zawinięcie krawędzi, ochrona newralgicznych uszczelek i zderzaków.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Folia: <strong>Hexis Skintac Matte</strong></span>
                                <span class="hg-gallery-spec-item">Czas: <strong>5 dni</strong></span>
                                <span class="hg-gallery-spec-item">Wykończenie: <strong>Głęboki Mat</strong></span>
                                <span class="hg-gallery-spec-item">Trwałość: <strong>Długoterminowa</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_mercedes_g63_matt.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_mercedes_g63_before.jpg'); ?>" data-lightbox-title="Mercedes-AMG G63 — Matte Charcoal" data-lightbox-meta="Mercedes-AMG G63 &bull; Hexis Skintac Matte Charcoal">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- CARD 5: PORSCHE PPF APPLICATION -->
                <article class="hg-gallery-card" data-category="ppf">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_ppf_application.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_ppf_application_before.jpg'); ?>" data-lightbox-title="Zabezpieczenie Foliami PPF — Full Front Package" data-lightbox-meta="Folia Ochronna PPF 180µm &bull; Samoregeneracja lakieru &bull; Szczecin" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/gallery_ppf_application.jpg'); ?>" alt="Aplikacja folii ochronnej PPF" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-ppf">Ochrona PPF</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">Aplikacja Pakietu Full Front PPF</h2>
                            <p class="hg-gallery-desc">Precyzyjna aplikacja poliuretanowej folii ochronnej na zderzak, maskę, błotniki, słupki A i reflektory. Pełna ochrona przed odpryskami kamieni.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Materiał: <strong>STEK DYNOshield 180µm</strong></span>
                                <span class="hg-gallery-spec-item">Czas: <strong>2 dni</strong></span>
                                <span class="hg-gallery-spec-item">Właściwość: <strong>Self-healing</strong></span>
                                <span class="hg-gallery-spec-item">Gwarancja: <strong>10 lat</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_ppf_application.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_ppf_application_before.jpg'); ?>" data-lightbox-title="Aplikacja Pakietu Full Front PPF" data-lightbox-meta="Bezbarwna folia ochronna PPF &bull; STEK DYNOshield 180µm">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/ppf')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta PPF &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- CARD 6: PORSCHE PANAMERA PPF -->
                <article class="hg-gallery-card" data-category="ppf">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_ppf.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_ppf_before.jpg'); ?>" data-lightbox-title="Porsche Panamera Turbo — Full Body PPF" data-lightbox-meta="Porsche Panamera Turbo &bull; Kompletna ochrona nadwozia folią bezbarwną &bull; Mierzyn" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_ppf.jpg'); ?>" alt="Porsche Panamera — Full Body PPF" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-ppf">Ochrona PPF</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">Porsche Panamera — Full Body PPF</h2>
                            <p class="hg-gallery-desc">100% powierzchni lakierniczej zabezpieczone bezbarwną folią poliuretanową o właściwościach samoregeneracji rys pod wpływem ciepła.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Folia: <strong>XPEL / STEK PPF</strong></span>
                                <span class="hg-gallery-spec-item">Czas: <strong>4 dni</strong></span>
                                <span class="hg-gallery-spec-item">Ochrona: <strong>100% Karoserii</strong></span>
                                <span class="hg-gallery-spec-item">Gwarancja: <strong>10 lat</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_ppf.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_ppf_before.jpg'); ?>" data-lightbox-title="Porsche Panamera Turbo — Full Body PPF" data-lightbox-meta="Porsche Panamera &bull; Full Body PPF &bull; 10 lat gwarancji">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/ppf')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta PPF &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- CARD 7: FLEET DHL COMMERCIAL -->
                <article class="hg-gallery-card" data-category="reklama">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_fleet_commercial.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_fleet_before.jpg'); ?>" data-lightbox-title="Oklejanie Floty Kurierskiej — DHL Courier Szczecin" data-lightbox-meta="Branding Floty &bull; 40 pojazdów dostawczych &bull; Projekt, druk i aplikacja w Mierzynie" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/gallery_fleet_commercial.jpg'); ?>" alt="Branding floty pojazdów DHL" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-reklama">Floty &amp; Reklama</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">Flota DHL Courier — 40 Pojazdów</h2>
                            <p class="hg-gallery-desc">Seryjny branding aut kurierskich z zachowaniem identyfikacji wizualnej marki. Trwałe folie polimerowe odporne na myjnie ciśnieniowe i UV.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Folia: <strong>Oracal 970 / Cast Print</strong></span>
                                <span class="hg-gallery-spec-item">Skala: <strong>40 Aut</strong></span>
                                <span class="hg-gallery-spec-item">Laminat: <strong>UV Anty-Scratch</strong></span>
                                <span class="hg-gallery-spec-item">Typ: <strong>Fleet Wrap</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/gallery_fleet_commercial.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/gallery_fleet_before.jpg'); ?>" data-lightbox-title="Flota DHL Courier — 40 Pojazdów" data-lightbox-meta="Branding flotowy &bull; Druk wielkoformatowy i oklejanie">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/reklama')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta Reklama &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- CARD 8: DETAILING & DECHROMING -->
                <article class="hg-gallery-card" data-category="detailing">
                    <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_detailing.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_detailing_before.jpg'); ?>" data-lightbox-title="Detailing &amp; Dechroming — Shadow Line Studio" data-lightbox-meta="Dechroming listew &bull; Przyciemnianie szyb &bull; Powłoki ceramiczne" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_detailing.jpg'); ?>" alt="Detailing i Dechroming" loading="lazy">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-gallery-cat-pill cat-detailing">Detailing &amp; Detale</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                    </div>
                    <div class="hg-gallery-content">
                        <div>
                            <h2 class="hg-gallery-title">Dechroming &amp; Przyciemnianie Szyb</h2>
                            <p class="hg-gallery-desc">Kompletne oklejenie chromowanych listew folią Shadow Line Gloss Black oraz termiczne przyciemnienie szyb foliami z filtrem IR.</p>
                        </div>
                        <div>
                            <div class="hg-gallery-specs-row">
                                <span class="hg-gallery-spec-item">Folia: <strong>3M 2080 Gloss Black</strong></span>
                                <span class="hg-gallery-spec-item">Szyby: <strong>Ceramic IR Tint</strong></span>
                                <span class="hg-gallery-spec-item">Czas: <strong>1 dzień</strong></span>
                                <span class="hg-gallery-spec-item">Atest: <strong>Atest ISiC</strong></span>
                            </div>
                            <div class="hg-gallery-actions">
                                <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_detailing.jpg'); ?>" data-lightbox-before="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_detailing_before.jpg'); ?>" data-lightbox-title="Dechroming &amp; Przyciemnianie Szyb" data-lightbox-meta="Stylizacja detali &bull; Shadow Line &bull; Termoizolacja">
                                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Przed / Po
                                </button>
                                <a href="<?php echo esc_url(home_url('/detailing')); ?>" class="hg-gallery-card-btn btn-primary">
                                    Oferta Detailing &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

            </div>

        <?php endif; ?>

        <!-- CONSULTATION & CALL-TO-ACTION BANNER -->
        <div class="hg-editorial-card" style="margin-top: 2rem; background: linear-gradient(135deg, rgba(14, 20, 30, 0.95), rgba(7, 10, 16, 0.95)); border: 1px solid rgba(37, 170, 225, 0.4); padding: 3rem; text-align: center;">
            <span style="color: #25aae1; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                INDYWIDUALNY PROJEKT &bull; STUDIO SZCZECIN / MIERZYN
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem; letter-spacing: -0.02em;">
                CHCESZ ZMIENIĆ LUB ZABEZPIECZYĆ SWOJE AUTO?
            </h2>
            <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 680px; margin: 0 auto 2.2rem; line-height: 1.6;">
                Odwiedź nasze studio przy ul. Podmiejskiej 4 w Mierzynie lub prześlij markę i model samochodu. Dobierzemy optymalny materiał i przygotujemy darmową kalkulację.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+48605088065" class="hg-btn hg-btn-cyan" style="padding: 1rem 2rem; font-weight: 900;">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> ZADZWOŃ: 605 088 065
                </a>
                <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-btn hg-btn-outline" style="padding: 1rem 2rem; font-weight: 800;">
                    FORMULARZ WYCENY &rarr;
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
