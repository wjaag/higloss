<?php
/**
 * Realizacje — SEO/internal-linking helpers.
 *
 * Keeps portfolio templates connected to the commercial service architecture
 * without adding duplicate schema/meta output.
 *
 * @package HiGloss2026
 */

if (!defined('ABSPATH')) {
    exit;
}

function higloss_realizacja_service_link($category_slug) {
    $map = array(
        'zmiana-koloru' => array('label' => 'zmianą koloru auta', 'path' => '/zmiana-koloru/'),
        'ppf'           => array('label' => 'folią ochronną PPF', 'path' => '/ppf/'),
        'reklama'       => array('label' => 'reklamą na samochodach', 'path' => '/reklama/'),
        'detailing'     => array('label' => 'detailingiem i oklejaniem detali', 'path' => '/detailing/'),
    );

    if (empty($map[$category_slug])) {
        return null;
    }

    return array(
        'label' => $map[$category_slug]['label'],
        'url'   => home_url($map[$category_slug]['path']),
    );
}

function higloss_get_related_realizacje($post_id, $term_slug = '', $limit = 3) {
    $args = array(
        'post_type'           => 'realizacje',
        'post_status'         => 'publish',
        'posts_per_page'      => max(1, min(6, (int) $limit)),
        'post__not_in'        => array((int) $post_id),
        'no_found_rows'       => true,
        'ignore_sticky_posts' => true,
    );

    if ('' === $term_slug) {
        $term = higloss_realizacja_term($post_id);
        $term_slug = $term ? $term->slug : '';
    }

    if ('' !== $term_slug) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'kategoria_realizacji',
                'field'    => 'slug',
                'terms'    => $term_slug,
            ),
        );
    }

    return new WP_Query($args);
}

/**
 * Append a small contextual portfolio block to realization content.
 * This creates crawlable links from one case study to related work and its service hub.
 */
add_filter('the_content', 'higloss_realizacje_related_content', 20);
function higloss_realizacje_related_content($content) {
    if (!is_singular('realizacje') || !in_the_loop() || !is_main_query()) {
        return $content;
    }

    $post_id = get_the_ID();
    $term    = higloss_realizacja_term($post_id);
    $service = $term ? higloss_realizacja_service_link($term->slug) : null;
    $related = higloss_get_related_realizacje($post_id, $term ? $term->slug : '', 3);

    ob_start();
    ?>
    <aside class="hg-related-projects" aria-labelledby="hg-related-projects-title">
        <?php if ($service) : ?>
            <p class="hg-related-service-link">
                Usługa w tym projekcie:
                <a href="<?php echo esc_url($service['url']); ?>"><?php echo esc_html(ucfirst($service['label'])); ?></a>
            </p>
        <?php endif; ?>

        <?php if ($related->have_posts()) : ?>
            <h2 id="hg-related-projects-title">Podobne realizacje</h2>
            <div class="hg-related-projects-grid">
                <?php while ($related->have_posts()) : $related->the_post(); ?>
                    <a class="hg-related-project" href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium_large', false, array('loading' => 'lazy')); ?>
                        <?php endif; ?>
                        <span><?php the_title(); ?></span>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </aside>
    <?php
    wp_reset_postdata();

    return $content . ob_get_clean();
}

/**
 * Map poradnik articles to the commercial service they support.
 * Keep this list explicit so unrelated editorial posts are not force-linked.
 *
 * @param string $slug Current post slug.
 * @return array<string,string>|null
 */
function higloss_poradnik_service_link($slug) {
    $map = array(
        'ile-kosztuje-zmiana-koloru-auta-folia' => array(
            'label' => 'zmiana koloru auta',
            'path'  => '/zmiana-koloru/',
            'term'  => 'zmiana-koloru',
        ),
        'folia-ppf-czy-powloka-ceramiczna' => array(
            'label' => 'ochrona lakieru folią PPF',
            'path'  => '/ppf/',
            'term'  => 'ppf',
        ),
        'przyciemnianie-szyb-przepisy' => array(
            'label' => 'przyciemnianie szyb i detailing',
            'path'  => '/detailing/',
            'term'  => 'detailing',
        ),
    );

    return isset($map[$slug]) ? array(
        'label' => $map[$slug]['label'],
        'url'   => home_url($map[$slug]['path']),
        'term'  => $map[$slug]['term'],
    ) : null;
}

/**
 * Add a service + portfolio path to poradnik articles.
 * The result is plain HTML with normal anchors, so it remains crawlable without JS.
 */
add_filter('the_content', 'higloss_poradnik_related_content', 25);
function higloss_poradnik_related_content($content) {
    if (!is_singular('post') || !in_the_loop() || !is_main_query()) {
        return $content;
    }

    $service = higloss_poradnik_service_link(get_post_field('post_name', get_the_ID()));

    if (!$service) {
        return $content;
    }

    $related = higloss_get_related_realizacje(get_the_ID(), $service['term'], 3);

    ob_start();
    ?>
    <aside class="hg-related-projects hg-related-editorial" aria-labelledby="hg-related-editorial-title">
        <p class="hg-related-service-link">
            Temat artykułu:
            <a href="<?php echo esc_url($service['url']); ?>"><?php echo esc_html(ucfirst($service['label'])); ?></a>
        </p>

        <?php if ($related->have_posts()) : ?>
            <h2 id="hg-related-editorial-title">Zobacz realizacje powiązane z tym tematem</h2>
            <div class="hg-related-projects-grid">
                <?php while ($related->have_posts()) : $related->the_post(); ?>
                    <a class="hg-related-project" href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'medium_large', false, array('loading' => 'lazy')); ?>
                        <?php endif; ?>
                        <span><?php the_title(); ?></span>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </aside>
    <?php
    wp_reset_postdata();

    return $content . ob_get_clean();
}
