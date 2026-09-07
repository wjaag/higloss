<?php
/**
 * Mapa obrazkow (Google image sitemap) pod adresem /wp-sitemap-images.xml.
 *
 * This is a fallback for installations without Yoast SEO. When Yoast is active,
 * its sitemap/robots system is authoritative and this file exits before registering
 * competing routes or robots directives.
 *
 * @package HiGloss2026
 */

if (defined('WPSEO_VERSION')) {
    return;
}

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

function higloss_collect_image_sitemap_entries() {
    $entries = array();
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

add_filter('robots_txt', 'higloss_image_sitemap_robots');
function higloss_image_sitemap_robots($output) {
    $output .= "\n# Podsumowanie serwisu dla LLM: " . esc_url(home_url('/llms.txt')) . "\n";
    $output .= "\n# Boty AI / LLM — dostęp otwarty\n";
    foreach (array('GPTBot', 'OAI-SearchBot', 'ChatGPT-User', 'ClaudeBot', 'PerplexityBot', 'Google-Extended') as $ai_agent) {
        $output .= "User-agent: {$ai_agent}\nAllow: /\n\n";
    }
    $output .= "Sitemap: " . esc_url(home_url('/wp-sitemap-images.xml')) . "\n";
    return $output;
}

add_action('template_redirect', 'higloss_render_llms_txt', 0);
function higloss_render_llms_txt() {
    $path = isset($_SERVER['REQUEST_URI']) ? strtok(wp_unslash($_SERVER['REQUEST_URI']), '?') : '/';
    if (rtrim($path, '/') !== '/llms.txt') {
        return;
    }

    $home = home_url();
    $out  = "# HI-GLOSS DESIGN\n\n";
    $out .= "> Studio oklejania pojazdów (Szczecin / Mierzyn, woj. zachodniopomorskie): całościowa zmiana koloru auta folią, bezbarwne folie ochronne PPF, oklejanie reklamowe i branding flot, przyciemnianie szyb, dechroming i detailing.\n\n";
    $out .= "## Usługi\n\n";
    $out .= "- [Całościowa zmiana koloru auta folią]({$home}/zmiana-koloru/): folie premium i aplikacja z dbałością o krawędzie.\n";
    $out .= "- [Bezbarwne folie ochronne PPF]({$home}/ppf/): ochrona lakieru w pakietach dopasowanych do auta.\n";
    $out .= "- [Reklama i branding flot]({$home}/reklama/): projekt, druk i aplikacja grafiki na pojazdach firmowych.\n";
    $out .= "- [Szyby, dechroming i detailing]({$home}/detailing/): przyciemnianie szyb, Shadow Line i przygotowanie auta.\n\n";

    $out .= "## Cenniki i poradniki\n\n";
    if (function_exists('higloss_poradnik_articles')) {
        foreach (higloss_poradnik_articles() as $article) {
            $out .= sprintf("- [%s]({$home}/%s/)%s\n", $article['title'], $article['slug'], !empty($article['excerpt']) ? ': ' . wp_strip_all_tags($article['excerpt']) : '');
        }
    }

    $out .= "\n## Realizacje i firma\n\n";
    $out .= "- [Galeria realizacji]({$home}/galeria/): portfolio metamorfoz PRZED/PO z opisami i foliami.\n";
    $out .= "- [Proces pracy]({$home}/proces/): od wyceny do odbioru auta.\n";
    $out .= "- [O nas]({$home}/o-firmie/): doświadczenie i zaplecze studia w Mierzynie.\n";
    $out .= "- [Kontakt i dojazd]({$home}/kontakt/) | [FAQ]({$home}/faq/)\n";

    status_header(200);
    header('Content-Type: text/plain; charset=utf-8');
    header('X-Robots-Tag: noindex', true);
    echo $out;
    exit;
}
