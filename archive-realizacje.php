<?php
/**
 * The template for displaying Realizacje (CPT) Archive
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="main-content" style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url($theme_uri . '/assets/images/galeria_realizacji.png'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">PORTFOLIO STUDIO SZCZECIN &bull; MIERZYN</span>
                <h1 class="hg-subpage-banner-title">
                    <?php if (is_tax()) : ?>
                        <?php single_term_title(); ?> &bull; <span style="color: #25aae1;">HI-GLOSS</span>
                    <?php else : ?>
                        GALERIA <span style="color: #25aae1;">REALIZACJI</span>
                    <?php endif; ?>
                </h1>
                <p style="color: #cbd5e1; max-width: 640px; margin: 0.8rem 0 0; font-size: 0.95rem; line-height: 1.6;">
                    Samochody wykonane w naszym studio w Mierzynie. Zobacz jakość dopasowania krawędzi, wykończenie lakiernicze i precyzję aplikacji.
                </p>
            </div>
        </div>

        <!-- CATEGORY FILTERS -->
        <div class="hg-gallery-filter-wrap" role="group" aria-label="Filtry kategorii realizacji">
            <button type="button" class="hg-gallery-btn is-active" data-filter="all" aria-pressed="true">
                <span>Wszystkie</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="zmiana-koloru" aria-pressed="false">
                <span>Zmiana Koloru</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="ppf" aria-pressed="false">
                <span>Ochrona PPF</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="reklama" aria-pressed="false">
                <span>Floty i Reklama</span>
            </button>
            <button type="button" class="hg-gallery-btn" data-filter="detailing" aria-pressed="false">
                <span>Detailing</span>
            </button>
        </div>

        <?php if (have_posts()) : ?>
            <div class="hg-gallery-grid">
                <?php while (have_posts()) : the_post(); 
                    $service_tag = get_post_meta(get_the_ID(), '_higloss_service_type', true);
                    $car_model   = get_post_meta(get_the_ID(), '_higloss_car_model', true);
                    $film_used   = get_post_meta(get_the_ID(), '_higloss_film_used', true);
                    $exec_time   = get_post_meta(get_the_ID(), '_higloss_execution_time', true);
                    $finish_type = get_post_meta(get_the_ID(), '_higloss_finish_type', true);
                    $terms       = get_the_terms(get_the_ID(), 'kategoria_realizacji');
                    $cat_slug    = ($terms && !is_wp_error($terms)) ? $terms[0]->slug : 'zmiana-koloru';
                    $thumb_url   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : $theme_uri . '/assets/images/gallery_bmw_m4_satin_black.jpg';
                ?>
                    <article class="hg-gallery-card" data-category="<?php echo esc_attr($cat_slug); ?>">
                        <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($thumb_url); ?>" data-lightbox-title="<?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr(($car_model ? $car_model . ' &bull; ' : '') . ($service_tag ?: 'HI-GLOSS Studio')); ?>" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                            <div class="hg-gallery-vignette"></div>
                            <span class="hg-gallery-cat-pill cat-<?php echo esc_attr($cat_slug); ?>">
                                <?php echo ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : (!empty($service_tag) ? esc_html($service_tag) : 'REALIZACJA'); ?>
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
                                    <button type="button" class="hg-gallery-card-btn" data-lightbox-img="<?php echo esc_url($thumb_url); ?>" data-lightbox-title="<?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr(($car_model ? $car_model . ' &bull; ' : '') . ($service_tag ?: 'HI-GLOSS Studio')); ?>">
                                        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg> Powiększ
                                    </button>
                                    <a href="<?php the_permalink(); ?>" class="hg-gallery-card-btn btn-primary">
                                        Szczegóły &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- PAGINATION -->
            <div style="text-align: center; margin-bottom: 3rem;">
                <?php the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Poprzednie', 'higloss2026'),
                    'next_text' => __('Następne &raquo;', 'higloss2026'),
                )); ?>
            </div>

        <?php else : ?>
            
            <div class="hg-editorial-card" style="text-align: center; padding: 4rem 2rem; margin-bottom: 3rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; color: #ffffff; margin-bottom: 1rem;">
                    Brak opublikowanych realizacji w tej kategorii.
                </h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 2rem;">
                    Zapraszamy do kontaktu z biurem HI-GLOSS DESIGN w Mierzynie — przygotujemy zdjęcia analogicznych prac z naszego archiwum.
                </p>
                <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.9rem 1.8rem; font-weight: 800;">
                    SKONTAKTUJ SIĘ Z NAMI &rarr;
                </a>
            </div>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
