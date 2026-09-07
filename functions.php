<?php
/**
 * Hi-Gloss Design 2026 Theme Functions
 *
 * @package HiGloss2026
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('HIGLOSS_VERSION', '3.2.1');
define('HIGLOSS_THEME_DIR', get_template_directory());
define('HIGLOSS_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function higloss_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');

    register_nav_menus(array(
        'primary' => __('Menu Głównie (Header)', 'higloss2026'),
        'footer'  => __('Menu w Stopce', 'higloss2026'),
    ));
}
add_action('after_setup_theme', 'higloss_theme_setup');

/**
 * Enqueue scripts and styles with file-based cache busting.
 */
function higloss_enqueue_assets() {
    // Google Fonts laduje sie asynchronicznie — patrz higloss_fonts_async() nizej

    $style_path   = HIGLOSS_THEME_DIR . '/style.css';
    $main_path    = HIGLOSS_THEME_DIR . '/assets/css/main.css';
    $landing_path = HIGLOSS_THEME_DIR . '/assets/css/landing.css';
    $redesign_path = HIGLOSS_THEME_DIR . '/assets/css/redesign.css';
    $js_path      = HIGLOSS_THEME_DIR . '/assets/js/main.js';

    $style_ver    = file_exists($style_path) ? filemtime($style_path) : HIGLOSS_VERSION;
    $main_ver     = file_exists($main_path) ? filemtime($main_path) : HIGLOSS_VERSION;
    $landing_ver  = file_exists($landing_path) ? filemtime($landing_path) : HIGLOSS_VERSION;
    $redesign_ver = file_exists($redesign_path) ? filemtime($redesign_path) : HIGLOSS_VERSION;
    $js_ver       = file_exists($js_path) ? filemtime($js_path) : HIGLOSS_VERSION;

    wp_enqueue_style('higloss-style', get_stylesheet_uri(), array(), $style_ver);
    wp_enqueue_style('higloss-main-css', HIGLOSS_THEME_URI . '/assets/css/main.css', array('higloss-style'), $main_ver);
    wp_enqueue_style('higloss-landing-css', HIGLOSS_THEME_URI . '/assets/css/landing.css', array('higloss-main-css'), $landing_ver);
    wp_enqueue_style('higloss-redesign', HIGLOSS_THEME_URI . '/assets/css/redesign.css', array('higloss-landing-css'), $redesign_ver);

    wp_enqueue_script('higloss-main-js', HIGLOSS_THEME_URI . '/assets/js/main.js', array(), $js_ver, true);

    wp_localize_script('higloss-main-js', 'higlossData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('higloss_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'higloss_enqueue_assets', 99);

/**
 * WYDAJNOSC (PageSpeed mobile) — 3 elementy:
 * 1) Google Fonts bez blokowania renderowania (preload + media="print"),
 *    przy okazji 7 plikow krojec zamiast 9 (odpada ~40 KB transferu)
 * 2) lzejszy <head>: bez emoji-skryptu, oembed-discovery, RSD, generator itd.
 * 3) preload obrazka LCP na stronie glownej + dequeue CSS blokow (theme nie uzywa Gutenberga)
 */
add_action('wp_head', 'higloss_fonts_async', 1);
function higloss_fonts_async() {
    $fonts = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap';
    echo '<link rel="preload" as="style" href="' . esc_url($fonts) . '">' . "\n";
    echo '<link rel="stylesheet" href="' . esc_url($fonts) . '" media="print" onload="this.media=\'all\'">' . "\n";
    echo '<noscript><link rel="stylesheet" href="' . esc_url($fonts) . '"></noscript>' . "\n";
}

add_action('wp_head', 'higloss_preload_lcp_image', 2);
function higloss_preload_lcp_image() {
    if (is_front_page()) {
        echo '<link rel="preload" as="image" href="' . HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.webp" fetchpriority="high">' . "\n";
    }
}

// Mniej smieci w <head> (kazdy bajt i zadanie wazne na mobile)
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11);

add_action('wp_enqueue_scripts', 'higloss_trim_wp_assets', 100);
function higloss_trim_wp_assets() {
    // Zadne strony nie uzywa embedow (YouTube/WordPress) ani edytora blokow
    wp_deregister_script('wp-embed');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}

/**
 * Register Custom Post Type: Realizacje (Portfolio / Projects)
 */
function higloss_register_cpt_realizacje() {
    $labels = array(
        'name'               => 'Realizacje',
        'singular_name'      => 'Realizacja',
        'menu_name'          => 'Realizacje (Portfolio)',
        'add_new'            => 'Dodaj Realizację',
        'add_new_item'       => 'Dodaj Nową Realizację',
        'edit_item'          => 'Edytuj Realizację',
        'new_item'           => 'Nowa Realizacja',
        'view_item'          => 'Zobacz Realizację',
        'search_items'       => 'Szukaj Realizacji',
        'not_found'          => 'Nie znaleziono realizacji',
        'not_found_in_trash' => 'Brak realizacji w koszu'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'realizacja'),
        'capability_type'    => 'post',
        'hierarchy'          => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => false,
    );

    register_post_type('realizacje', $args);

    // Custom Taxonomy: Kategoria Realizacji
    $tax_labels = array(
        'name'              => 'Kategorie Realizacji',
        'singular_name'     => 'Kategoria Realizacji',
        'search_items'      => 'Szukaj Kategorii',
        'all_items'         => 'Wszystkie Kategorie',
        'edit_item'         => 'Edytuj Kategorię',
        'update_item'       => 'Aktualizuj Kategorię',
        'add_new_item'      => 'Dodaj Nową Kategorię',
        'menu_name'         => 'Kategorie'
    );

    register_taxonomy('kategoria_realizacji', array('realizacje'), array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'kategoria-realizacji'),
        'show_in_rest'      => false,
        // Boczny box kategorii w edytorze wylaczony — wybor przez pigułki
        // w panelu SPECYFIKACJA (inc/realizacje-admin.php)
        'meta_box_cb'       => false,
    ));
}
add_action('init', 'higloss_register_cpt_realizacje');

/**
 * Realizacje — centralny config pól specyfikacji per kategoria (współdzielony: admin + front)
 */
require_once get_template_directory() . '/inc/realizacje-fields.php';
require_once get_template_directory() . '/inc/realizacje-seo.php';

/**
 * Realizacje - panel admina (metaboxy na głównym planie: PRZED/PO, specyfikacja, galeria)
 */
require_once get_template_directory() . '/inc/realizacje-admin.php';

/**
 * Poradnik — definicje artykulow SEO + helpery (obrazki, czas czytania)
 * (wymagany PRZED bootstrap-pages.php: bootstrap v2 publikuje te artykuły)
 */
require_once get_template_directory() . '/inc/poradnik-articles.php';

/**
 * Mapa obrazkow dla Google (image sitemap): /wp-sitemap-images.xml
 */
require_once get_template_directory() . '/inc/image-sitemap.php';

/**
 * Hurtowe metadane mediów realizacji (jednorazowa migracja, option-gated).
 */
require_once get_template_directory() . '/inc/media-seo.php';

/**
 * Bootstrap stron przy aktywacji motywu (wdrożenie na czysty WordPress)
 */
require_once get_template_directory() . '/inc/bootstrap-pages.php';

/**
 * Wysyłka SMTP przez stałe z wp-config.php (patrz inc/mailer.php)
 */
require_once get_template_directory() . '/inc/mailer.php';

/**
 * Handle AJAX Quote Calculation / Contact Form Submission
 */
function higloss_handle_quote_calculator() {
    check_ajax_referer('higloss_nonce', 'nonce');

    $vehicle = sanitize_text_field(wp_unslash($_POST['vehicle'] ?? ''));
    $service = sanitize_text_field(wp_unslash($_POST['service'] ?? ''));
    $finish  = sanitize_text_field(wp_unslash($_POST['finish'] ?? ''));
    $extras_raw = isset($_POST['extras']) && is_array($_POST['extras']) ? wp_unslash($_POST['extras']) : array();