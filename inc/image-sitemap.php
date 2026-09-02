<?php
/**
 * Mapa obrazkow (Google image sitemap) pod adresem /wp-sitemap-images.xml.
 *
 * Zrodla obrazkow:
 *  - strony (mapa slug -> assety motywu uzyte w szablonach),
 *  - wpisy (higloss_poradnik_image: wyróżniony obrazek albo asset artykulu),
 *  - realizacje CPT (obrazek wyróżniajacy = PO + meta _higloss_before_image = PRZED).
 *
 * Mape dopisujemy tez do robots.txt filtrem robots_txt.
 *
 * @package HiGloss2026
 */

/**
 * Assety obrazkow przypisane do stron (zgodne z zawartoscia szablonow).
 *
 * @return array slug_strony => array nazwy plikow z assets/images/
 */
function higloss_page_images_map() {
    return array(
        ''               => array('ai_oferta_zmiana_koloru.webp', 'ai_oferta_ppf.webp', 'ai_oferta_reklama.webp', 'ai_oferta_detailing.webp', 'ai_tile1_pasja.webp', 'gallery_bmw_m4_satin_black.webp'),
        'oferta'         => array('ai_tile2_oferta.webp', 'ai_oferta_zmiana_koloru.webp', 'ai_oferta_ppf.webp', 'ai_oferta_reklama.webp', 'ai_oferta_detailing.webp'),
        'zmiana-koloru'  => array('ai_oferta_zmiana_koloru.webp'),
        'ppf'            => array('ai_oferta_ppf.webp'),
        'reklama'        => array('ai_oferta_reklama.webp'),
        'detailing'      => array('ai_oferta_detailing.webp'),
        'galeria'        => array('galeria_realizacji.webp', 'gallery_bmw_m4_satin_black.webp', 'gallery_porsche_gt3_green.webp', 'gallery_porsche_gt3_before.webp', 'gallery_audi_rs6_blue.webp', 'gallery_audi_rs6_before.webp', 'gallery_mercedes_g63_matt.webp', 'gallery_mercedes_g63_before.webp', 'gallery_fleet_commercial.webp', 'gallery_fleet_before.webp', 'gallery_ppf_application.webp', 'gallery_ppf_application_before.webp', 'gallery_before_stock_paint.webp', 'ai_oferta_ppf.webp', 'ai_oferta_ppf_before.webp', 'ai_oferta_detailing.webp', 'ai_oferta_detailing_before.webp'),
        'proces'         => array('gallery_ppf_application.webp', 'proces_krok1.webp', 'proces_krok2.webp', 'proces_krok3.webp', 'proces_krok4.webp', 'proces_krok5.webp', 'proces_krok6.webp'),
        'faq'            => array('ai_tile2_oferta.webp'),
        'o-firmie'       => array('ai_tile1_pasja.webp', 'historia_firmy.webp'),
        'kontakt'        => array('kontakt_z_nami.webp'),
    );
}

/**
 * Sklada pary (url strony, tytul, lastmod, [urle obrazkow]) dla calej mapy.
 *
 * @return array
 */
function higloss_collect_image_sitemap_entries() {
    $entries = array();

    // Strony + strona glowna
    $map = higloss_page_images_map();
    foreach ($map as $slug => $files) {
        $page = $slug === '' ? get_post(get_option('page_on_front')) : get_page_by_path($slug);
        if (!$page) {
            continue;
        }
        $images = array();
        foreach ($files as $file) {
            $images[] = array(
                'loc'   => HIGLOSS_THEME_URI . '/assets/images/' . $file,
                'title' => get_the_title($page),
            );
        }
        $entries[] = array(
            'loc'     => get_permalink($page),
            'lastmod' => get_post_modified_time('c', true, $page),
            'images'  => $images,
        );
    }

    // Wpisy (artykuly FAQ)
    $posts = get_posts(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1));
    foreach ($posts as $post) {
        $image = function_exists('higloss_poradnik_image') ? higloss_poradnik_image($post->ID) : get_the_post_thumbnail_url($post->ID, 'large');
        if (!$image) {
            continue;
        }
        $entries[] = array(
            'loc'     => get_permalink($post),
            'lastmod' => get_post_modified_time('c', true, $post),
            'images'  => array(array('loc' => $image, 'title' => get_the_title($post))),
        );
    }

    // Realizacje CPT
    if (post_type_exists('realizacje')) {
        $realizacje = get_posts(array('post_type' => 'realizacje', 'post_status' => 'publish', 'posts_per_page' => -1));
        foreach ($realizacje as $realizacja) {
            $images = array();
            $after  = get_the_post_thumbnail_url($realizacja->ID, 'full');
            if ($after) {
                $images[] = array('loc' => $after, 'title' => get_the_title($realizacja));
            }
            $before_id = (int) get_post_meta($realizacja->ID, '_higloss_before_image', true);
            if ($before_id) {
                $before = wp_get_attachment_image_url($before_id, 'full');
                if ($before) {
                    $images[] = array('loc' => $before, 'title' => sprintf('Realizacja PRZED: %s', get_the_title($realizacja)));
                }
            }
            if (empty($images)) {
                continue;
            }
            $entries[] = array(
                'loc'     => get_permalink($realizacja),
                'lastmod' => get_post_modified_time('c', true, $realizacja),
                'images'  => $images,
            );
        }
    }

    return $entries;
}

/**
 * Renderuje XML mapy obrazkow i przerywa zadanie (tylko dla /wp-sitemap-images.xml).
 */
add_action('template_redirect', 'higloss_render_image_sitemap', 0);
function higloss_render_image_sitemap() {
    $request = isset($_SERVER['REQUEST_URI']) ? wp_parse_url(esc_url_raw(wp_unslash($_SERVER['REQUEST_URI'])), PHP_URL_PATH) : '';
    if (trim((string) $request, '/') !== 'wp-sitemap-images.xml') {
        return;
    }

    status_header(200);
    header('Content-Type: application/xml; charset=UTF-8', true);

    echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";

    foreach (higloss_collect_image_sitemap_entries() as $entry) {
        echo "\t<url>\n";
        echo "\t\t<loc>" . esc_url($entry['loc']) . "</loc>\n";
        if (!empty($entry['lastmod'])) {
            echo "\t\t<lastmod>" . esc_xml($entry['lastmod']) . "</lastmod>\n";
        }
        foreach ($entry['images'] as $image) {
            echo "\t\t<image:image>\n";
            echo "\t\t\t<image:loc>" . esc_url($image['loc']) . "</image:loc>\n";
            if (!empty($image['title'])) {
                echo "\t\t\t<image:title>" . esc_xml($image['title']) . "</image:title>\n";
            }
            echo "\t\t</image:image>\n";
        }
        echo "\t</url>\n";
    }

    echo '</urlset>' . "\n";
    exit;
}

/**
 * Dopisuje mape obrazkow do robots.txt (obok glownej mapy WP).
 */
add_filter('robots_txt', 'higloss_image_sitemap_robots');
function higloss_image_sitemap_robots($output) {
    $output .= "\nSitemap: " . esc_url(home_url('/wp-sitemap-images.xml')) . "\n";
    return $output;
}
