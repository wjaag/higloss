<?php
/**
 * Hi-Gloss Design 2026 Theme Functions
 *
 * @package HiGloss2026
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('HIGLOSS_VERSION', '3.2.0');
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
    wp_enqueue_style('higloss-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', array(), null);

    $style_path   = HIGLOSS_THEME_DIR . '/style.css';
    $main_path    = HIGLOSS_THEME_DIR . '/assets/css/main.css';
    $landing_path = HIGLOSS_THEME_DIR . '/assets/css/landing.css';
    $js_path      = HIGLOSS_THEME_DIR . '/assets/js/main.js';

    $style_ver   = file_exists($style_path) ? filemtime($style_path) : HIGLOSS_VERSION;
    $main_ver    = file_exists($main_path) ? filemtime($main_path) : HIGLOSS_VERSION;
    $landing_ver = file_exists($landing_path) ? filemtime($landing_path) : HIGLOSS_VERSION;
    $js_ver      = file_exists($js_path) ? filemtime($js_path) : HIGLOSS_VERSION;

    wp_enqueue_style('higloss-style', get_stylesheet_uri(), array(), $style_ver);
    wp_enqueue_style('higloss-main-css', HIGLOSS_THEME_URI . '/assets/css/main.css', array('higloss-style'), $main_ver);
    wp_enqueue_style('higloss-landing-css', HIGLOSS_THEME_URI . '/assets/css/landing.css', array('higloss-main-css'), $landing_ver);

    wp_enqueue_script('higloss-main-js', HIGLOSS_THEME_URI . '/assets/js/main.js', array(), $js_ver, true);

    wp_localize_script('higloss-main-js', 'higlossData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('higloss_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'higloss_enqueue_assets', 99);

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
    ));
}
add_action('init', 'higloss_register_cpt_realizacje');

/**
 * Realizacje - panel admina (metaboxy na głównym planie: PRZED/PO, specyfikacja, galeria)
 */
require_once get_template_directory() . '/inc/realizacje-admin.php';

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
    $extras  = array_map('sanitize_text_field', $extras_raw);
    $name    = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $phone   = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $email   = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $notes   = sanitize_textarea_field(wp_unslash($_POST['notes'] ?? ''));
    $consent = !empty($_POST['consent']);
    $website = sanitize_text_field(wp_unslash($_POST['website'] ?? ''));

    // Quietly accept honeypot submissions without sending any message.
    if (!empty($website)) {
        wp_send_json_success(array('message' => 'Dziękujemy! Zapytanie zostało przyjęte.'));
    }

    if (empty($phone) || empty($service) || !$consent) {
        wp_send_json_error(array('message' => 'Uzupełnij numer telefonu, wybierz usługę i zaakceptuj zgodę na kontakt.'));
    }

    if (!empty($email) && !is_email($email)) {
        wp_send_json_error(array('message' => 'Podaj poprawny adres e-mail.'));
    }

    // Zapytania z formularza zawsze leca na skrzynke biura (stala ewentualnie w wp-config.php)
    $to = defined('HIGLOSS_QUOTE_TO') ? HIGLOSS_QUOTE_TO : 'biuro@hi-glossdesign.pl';
    $subject = 'Nowe zapytanie ze strony Hi-Gloss Design: ' . $service;
    
    $body  = "Nowe Zapytanie o Wycenę:\n\n";
    $body .= "Imię i nazwisko: " . $name . "\n";
    $body .= "Telefon: " . $phone . "\n";
    $body .= "E-mail: " . $email . "\n\n";
    $body .= "Wybrana usługa: " . $service . "\n";
    if (!empty($vehicle)) {
        $body .= "Typ pojazdu: " . $vehicle . "\n";
    }
    if (!empty($finish)) {
        $body .= "Wykończenie / folia: " . $finish . "\n";
    }
    if (!empty($extras)) {
        $body .= "Usługi dodatkowe: " . implode(', ', $extras) . "\n";
    }
    $body .= "Auto i opis projektu: " . $notes . "\n\n";
    $body .= "---\nWysłano z formularza Hi-Gloss Design 2026";

    // Nadawce ustawia inc/mailer.php (SMTP) albo WordPress domyslnie — nie wymuszamy naglowka From
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Let staff reply straight to the customer from any mail client or phone.
    if (!empty($email)) {
        $reply_name = str_replace(array('"', "\r", "\n", ','), '', (string) $name);
        $headers[]  = '' !== $reply_name
            ? sprintf('Reply-To: %s <%s>', $reply_name, $email)
            : sprintf('Reply-To: %s', $email);
    }

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Dziękujemy! Zapytanie zostało wysłane. Skontaktujemy się w najbliższym możliwym terminie.'));
    }

    wp_send_json_error(array('message' => 'Nie udało się wysłać formularza. Zadzwoń do nas pod numer 605 088 065 lub spróbuj ponownie.'));
}
add_action('wp_ajax_higloss_quote', 'higloss_handle_quote_calculator');
add_action('wp_ajax_nopriv_higloss_quote', 'higloss_handle_quote_calculator');

/**
 * Output LocalBusiness & AutomotiveBusiness Schema.org JSON-LD
 */
function higloss_render_schema_markup() {
    $schema = array(
        "@context" => "https://schema.org",
        "@type" => "AutoBodyShop",
        "name" => "HI-GLOSS DESIGN - Oklejanie Samochodów & PPF Szczecin",
        "image" => HIGLOSS_THEME_URI . "/assets/images/logo.png",
        "@id" => "https://www.hi-glossdesign.pl/#organization",
        "url" => "https://www.hi-glossdesign.pl",
        "telephone" => "+48605088065",
        "priceRange" => "$$$",
        "address" => array(
            "@type" => "PostalAddress",
            "streetAddress" => "ul. Podmiejska 4",
            "addressLocality" => "Mierzyn / Szczecin",
            "postalCode" => "72-006",
            "addressCountry" => "PL"
        ),
        "geo" => array(
            "@type" => "GeoCoordinates",
            "latitude" => 53.42748,
            "longitude" => 14.47109
        ),
        "openingHoursSpecification" => array(
            array(
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday"),
                "opens" => "09:00",
                "closes" => "17:00"
            )
        ),
        "sameAs" => array(
            "https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/",
            "https://www.instagram.com/higlossdesign/"
        ),
        "hasOfferCatalog" => array(
            "@type" => "OfferCatalog",
            "name" => "Usługi HI-GLOSS DESIGN",
            "itemListElement" => array(
                array("@type" => "Offer", "itemOffered" => array("@type" => "Service", "name" => "Całościowa zmiana koloru auta")),
                array("@type" => "Offer", "itemOffered" => array("@type" => "Service", "name" => "Bezbarwne folie ochronne PPF")),
                array("@type" => "Offer", "itemOffered" => array("@type" => "Service", "name" => "Oklejanie reklamowe i branding flot")),
                array("@type" => "Offer", "itemOffered" => array("@type" => "Service", "name" => "Przyciemnianie szyb i dechroming"))
            )
        ),
        "description" => "Profesjonalne studio całościowego oklejania pojazdów, zmiany koloru auta foliami premium oraz bezbarwnych folii ochronnych PPF w Szczecinie i Mierzynie."
    );

    echo '<script type="application/ld+json">' . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'higloss_render_schema_markup');
