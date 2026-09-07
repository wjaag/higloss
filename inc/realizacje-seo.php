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

/**
 * Return the canonical commercial service page for a portfolio category.
 *
 * @param string $category_slug Realizacja taxonomy slug.
 * @return array|null { label: string, url: string }
 */
function higloss_realizacja_service_link($category_slug) {
    $map = array(
        'zmiana-koloru' => array(
            'label' => 'zmianą koloru auta',
            'path'  => '/zmiana-koloru/',
        ),
        'ppf' => array(
            'label' => 'folią ochronną PPF',
            'path'  => '/ppf/',
        ),
        'reklama' => array(
            'label' => 'reklamą na samochodach',
            'path'  => '/reklama/',
        ),
        'detailing' => array(
            'label' => 'detailingiem i oklejaniem detali',
            'path'  => '/detailing/',
        ),
    );

    if (empty($map[$category_slug])) {
        return null;
    }

    return array(
        'label' => $map[$category_slug]['label'],
        'url'   => home_url($map[$category_slug]['path']),
    );
}

/**
 * Find a small set of related portfolio entries in the same taxonomy term.
 * Current post is excluded and results are intentionally limited for crawlability.
 *
 * @param int    $post_id Current realization.
 * @param string $term_slug Optional taxonomy slug.
 * @param int    $limit Number of related entries.
 * @return WP_Query
 */
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
