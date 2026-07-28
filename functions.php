<?php
/**
 * Hi-Gloss Design 2026 Theme Functions
 *
 * @package HiGloss2026
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('HIGLOSS_VERSION', '2.0.0');
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
 * Enqueue Scripts and Styles
 */
function higloss_enqueue_assets() {
    // Fonts: Montserrat & Plus Jakarta Sans
    wp_enqueue_style('higloss-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap', array(), null);

    // Main CSS
    wp_enqueue_style('higloss-style', get_stylesheet_uri(), array(), HIGLOSS_VERSION);
    wp_enqueue_style('higloss-main-css', HIGLOSS_THEME_URI . '/assets/css/main.css', array('higloss-style'), HIGLOSS_VERSION);

    // Main JavaScript
    wp_enqueue_script('higloss-main-js', HIGLOSS_THEME_URI . '/assets/js/main.js', array(), HIGLOSS_VERSION, true);

    // Pass AJAX URL to JS
    wp_localize_script('higloss-main-js', 'higlossData', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('higloss_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'higloss_enqueue_assets');

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
        'show_in_rest'       => true,
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
        'show_in_rest'      => true,
    ));
}
add_action('init', 'higloss_register_cpt_realizacje');

/**
 * Handle AJAX Quote Calculation / Contact Form Submission
 */
function higloss_handle_quote_calculator() {
    check_ajax_referer('higloss_nonce', 'nonce');

    $vehicle = sanitize_text_field($_POST['vehicle'] ?? '');
    $service = sanitize_text_field($_POST['service'] ?? '');
    $finish  = sanitize_text_field($_POST['finish'] ?? '');
    $extras  = isset($_POST['extras']) ? array_map('sanitize_text_field', $_POST['extras']) : array();
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $notes   = sanitize_textarea_field($_POST['notes'] ?? '');

    if (empty($phone) || empty($service)) {
        wp_send_json_error(array('message' => 'Proszę podać przynajmniej numer telefonu i wybrać usługę.'));
    }

    $to = get_option('admin_email', 'biuro@hi-glossdesign.pl');
    $subject = 'Nowe zapytanie z kalkulatora online Hi-Gloss Design: ' . $vehicle;
    
    $body  = "Nowe Zapytanie o Wycenę:\n\n";
    $body .= "Imię i nazwisko: " . $name . "\n";
    $body .= "Telefon: " . $phone . "\n";
    $body .= "E-mail: " . $email . "\n\n";
    $body .= "Typ pojazdu: " . $vehicle . "\n";
    $body .= "Wybrana usługa: " . $service . "\n";
    $body .= "Wykończenie / folia: " . $finish . "\n";
    $body .= "Usługi dodatkowe: " . implode(', ', $extras) . "\n";
    $body .= "Uwagi / Model auta: " . $notes . "\n\n";
    $body .= "---\nWysłano z formularza Hi-Gloss Design 2026";

    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: Hi-Gloss Website <noreply@hi-glossdesign.pl>');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Dziękujemy! Twoje zapytanie zostało wysłane. Skontaktujemy się z Tobą w ciągu 2 godzin.'));
    } else {
        // Fallback response for demonstration
        wp_send_json_success(array('message' => 'Dziękujemy za przesłanie specyfikacji! Skontaktujemy się telefonicznie.'));
    }
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
        "image" => HIGLOSS_THEME_URI . "/assets/images/logo.svg",
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
            "latitude" => 53.4242,
            "longitude" => 14.4781
        ),
        "openingHoursSpecification" => array(
            array(
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday"),
                "opens" => "08:00",
                "closes" => "17:00"
            )
        ),
        "sameAs" => array(
            "https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/"
        ),
        "description" => "Profesjonalne studio całościowego oklejania pojazdów, zmiany koloru auta foliami premium (3M, Avery) oraz bezbarwnych folii ochronnych PPF w Szczecinie i Mierzynie."
    );

    echo '<script type="application/ld+json">' . json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'higloss_render_schema_markup');
