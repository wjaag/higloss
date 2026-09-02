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
    // Google Fonts laduje sie asynchronicznie — patrz higloss_fonts_async() nizej

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


/**
 * Meta description + Open Graph — per strona, bez wtyczki SEO.
 * Opisy kuratowane pod frazy z mapy SEO (seo-migration/PLAN-WDROZENIA.md);
 * podstrony bez dopisku dostaja opis domyslny, realizacje — opis z tresci/specyfikacji.
 */
add_action('wp_head', 'higloss_render_seo_meta', 1);
function higloss_render_seo_meta() {
    $default_desc = 'HI-GLOSS DESIGN — studio całościowej zmiany koloru auta folią i bezbarwnych folii ochronnych PPF. Demontaż z procedurami fabrycznymi, folie premium. Szczecin / Mierzyn. Bezpłatna wycena.';

    $page_desc = array(
        'oferta'                => 'Oferta studia HI-GLOSS DESIGN: zmiana koloru auta folią, bezbarwne folie ochronne PPF, oklejanie reklamowe flot, przyciemnianie szyb, dechroming i detailing. Szczecin / Mierzyn.',
        'zmiana-koloru'         => 'Całościowa zmiana koloru auta foliami premium 3M, Avery Dennison i Inozetek. Demontaż klamek i zderzaków, efekt lakieru fabrycznego, gwarancja na folię. Szczecin / Mierzyn — bezpłatna wycena.',
        'ppf'                   => 'Bezbarwne folie ochronne PPF: ochrona lakieru przed odpryskami, zarysowaniami i solą drogową. Pakiety od stref newralgicznych po całe auto. HI-GLOSS DESIGN — Szczecin / Mierzyn.',
        'reklama'               => 'Oklejanie reklamowe aut i flot firmowych: projekt, druk wielkoformatowy i aplikacja. Branding, który sprzedaje w ruchu. HI-GLOSS DESIGN — Szczecin / Mierzyn — bezpłatna wycena.',
        'detailing'             => 'Usługi dodatkowe: przyciemnianie szyb, dechroming, detailing, powłoki ochronne i naprawy folii. HI-GLOSS DESIGN — studio w Szczecinie / Mierzynie.',
        'galeria'               => 'Galeria realizacji HI-GLOSS DESIGN: metamorfozy aut folią, folie ochronne PPF i branding flot — zdjęcia PRZED i PO ze studia w Szczecinie / Mierzynie.',
        'o-firmie'              => 'HI-GLOSS DESIGN — studio oklejania pojazdów z Mierzyna k. Szczecina. Procedury fabryczne, ogrzewana hala, folie premium. Poznaj naszą historię i standardy pracy.',
        'kontakt'               => 'Kontakt z HI-GLOSS DESIGN: tel. 605 088 065, biuro@hi-glossdesign.pl, ul. Podmiejska 4, Mierzyn k. Szczecina. Pon.–pt. 9:00–17:00. Bezpłatna wycena.',
        'polityka-prywatnosci'  => 'Polityka prywatności serwisu HI-GLOSS DESIGN — zasady przetwarzania danych osobowych zgodnie z RODO.',
        'faq'                   => 'FAQ HI-GLOSS DESIGN: najczęstsze pytania o oklejanie aut — cennik PPF i zmiany koloru folią, przyciemnianie szyb, trwałość i demontaż folii. Rzetelne odpowiedzi ze studia Szczecin / Mierzyn.',
        'proces'                => 'Jak wygląda oklejenie auta w HI-GLOSS DESIGN: wycena do 24 h, demontaż wg procedur fabrycznych, aplikacja w ogrzewanej hali, auto gotowe w 3–5 dni. Proces krok po kroku — Szczecin / Mierzyn.',
    );

    $description = $default_desc;
    $title       = wp_get_document_title();
    $url         = home_url('/');
    $type        = 'website';
    $image       = get_template_directory_uri() . '/screenshot.jpg';

    if (is_singular()) {
        global $post;
        $type = in_array(get_post_type($post), array('realizacje', 'post'), true) ? 'article' : 'website';
        $url  = get_permalink($post);

        if (is_page($post) && isset($page_desc[$post->post_name])) {
            $description = $page_desc[$post->post_name];
        } elseif ('realizacje' === get_post_type($post)) {
            $service = get_post_meta($post->ID, '_higloss_service_type', true);
            $model   = get_post_meta($post->ID, '_higloss_car_model', true);
            $lead    = trim(($model ? $model . ' — ' : '') . ($service ? $service : 'realizacja studia oklejania pojazdów'));
            $description = sprintf('Realizacja HI-GLOSS DESIGN: %s. Zobacz efekt PRZED i PO oraz specyfikację projektu ze studia w Szczecinie / Mierzynie.', $lead);
            if (has_excerpt($post)) {
                $description = wp_strip_all_tags(get_the_excerpt($post), true);
            } elseif (!empty($post->post_content)) {
                $description = wp_trim_words(wp_strip_all_tags(strip_shortcodes($post->post_content), true), 28, '');
            }
        } elseif (has_excerpt($post)) {
            $description = wp_strip_all_tags(get_the_excerpt($post), true);
        } elseif (!empty($post->post_content)) {
            $description = wp_trim_words(wp_strip_all_tags(strip_shortcodes($post->post_content), true), 28, '');
        }

        if (has_post_thumbnail($post)) {
            $thumb = get_the_post_thumbnail_url($post, 'large');
            if ($thumb) {
                $image = $thumb;
            }
        }
    } elseif (is_home()) {
        // Archiwum wpisow (gdy ktos ustawi strone wpisow) — fallback na FAQ
        $description = $page_desc['faq'];
        $posts_page  = (int) get_option('page_for_posts');
        $url         = $posts_page ? get_permalink($posts_page) : home_url('/');
    } elseif (is_post_type_archive('realizacje')) {
        $description = $page_desc['galeria'];
        $url         = get_post_type_archive_link('realizacje');
    } elseif (is_search()) {
        $description = 'Wyniki wyszukiwania w serwisie HI-GLOSS DESIGN.';
    }
    ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:locale" content="pl_PL">
    <meta property="og:type" content="<?php echo esc_attr($type); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:site_name" content="HI-GLOSS DESIGN">
    <meta property="og:image" content="<?php echo esc_url($image); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <?php
}

/**
 * Auto-alt dla obrazkow z biblioteki: pusty alt -> tytul realizacji rodzica
 * (klient wgrywa zdjecia bez opisow, front sam opisze je dla SEO/dostepnosci).
 */
add_filter('wp_get_attachment_image_attributes', 'higloss_auto_image_alt', 10, 2);
function higloss_auto_image_alt($attr, $attachment) {
    if (!empty($attr['alt'])) {
        return $attr;
    }
    if (!empty($attachment->post_parent)) {
        $parent_type = get_post_type($attachment->post_parent);
        if ('realizacje' === $parent_type) {
            $attr['alt'] = sprintf('Realizacja HI-GLOSS DESIGN: %s', get_the_title($attachment->post_parent));
            return $attr;
        }
    }
    $attr['alt'] = get_the_title($attachment);
    return $attr;
}

/**
 * Schema FAQPage dla sekcji FAQ strony glownej (pytania rozwijane w SERP Google).
 * Tresc 1:1 z widocznym akordeonem w front-page.php — wymog Google.
 */
add_action('wp_head', 'higloss_render_faq_schema');
function higloss_render_faq_schema() {
    if (!is_front_page()) {
        return;
    }
    $faq = array(
        array('Czy folia do zmiany koloru chroni lakier?', 'Folia zmieniająca kolor stanowi dodatkową warstwę i ogranicza drobne uszkodzenia eksploatacyjne, jednak do ochrony przed kamieniami i głębszymi zarysowaniami przeznaczona jest grubsza, poliuretanowa folia PPF.'),
        array('Jak długo trwa oklejenie całego auta?', 'Standardowa zmiana koloru zajmuje zwykle 3–5 dni roboczych. Dokładny termin zależy od wielkości i konstrukcji auta, zakresu demontażu oraz wybranego materiału.'),
        array('Czy folię można później bezpiecznie usunąć?', 'Tak. Prawidłowo zaaplikowana folia renomowanego producenta może zostać profesjonalnie usunięta bez naruszania fabrycznego lakieru, o ile lakier był wcześniej w dobrym stanie i nie był naprawiany niezgodnie ze sztuką.'),
        array('Jaki pakiet PPF wybrać?', 'Do jazdy miejskiej często wystarcza ochrona stref najbardziej narażonych. Przy częstych trasach rekomendujemy Full Front, a dla nowych, sportowych i kolekcjonerskich aut — zabezpieczenie Full Body.'),
        array('Co jest potrzebne do przygotowania wyceny?', 'Podaj markę, model i rocznik auta, interesującą Cię usługę oraz oczekiwany efekt. Zdjęcia i informacja o stanie lakieru pomogą nam przygotować bardziej precyzyjną propozycję.'),
    );
    $entities = array();
    foreach ($faq as $pair) {
        $entities[] = array(
            '@type'          => 'Question',
            'name'           => $pair[0],
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => $pair[1]),
        );
    }
    $schema = array('@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $entities);
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}

/**
 * Pytania FAQ dla stron uslug (zmiana koloru / PPF / reklama / detailing).
 * JEDYNE ZRODLO PRAWDY: te same dane renderuja widoczny akordeon
 * (template-parts/service-faq.php) i schema FAQPage — Google wymaga zgodnosci 1:1.
 */
function higloss_service_faqs($slug) {
    $all = array(
        'zmiana-koloru' => array(
            'title' => 'Najczęstsze pytania o zmianę koloru folią',
            'items' => array(
                array('Ile kosztuje całkowita zmiana koloru auta folią?', 'Orientacyjnie od ok. 5 500 zł za auto kompaktowe do ok. 11 000 zł za dużego SUV-a. Ostateczna cena zależy od wielkości auta, zakresu demontażu, stanu lakieru i wybranej folii — dokładną wycenę przygotowujemy bezpłatnie po obejrzeniu auta.'),
                array('Ile trwa oklejenie całego auta?', 'Standardowo 3–5 dni roboczych. Dokładny termin zależy od wielkości i konstrukcji auta, zakresu demontażu oraz wybranego materiału.'),
                array('Czy przed oklejeniem demontujecie elementy?', 'Tak. Klamki, lampy, zderzaki i lusterka demontujemy zgodnie z procedurami fabrycznymi — folia zawijana jest głęboko do wnętrza elementu, więc krawędzie się nie odklejają. Demontaż jest zawarty w wycenie usługi.'),
                array('Czy folię da się później bezpiecznie zdjąć?', 'Tak — profesjonalnie założona folia premium schodzi bez naruszenia fabrycznego lakieru, o ile był on wcześniej w dobrym stanie i nie był naprawiany niezgodnie ze sztuką.'),
            ),
        ),
        'ppf' => array(
            'title' => 'Najczęstsze pytania o folie ochronne PPF',
            'items' => array(
                array('Ile kosztuje folia ochronna PPF?', 'Ochrona stref newralgicznych od ok. 1 500 zł, pakiet Full Front 5 000–9 000 zł, a zabezpieczenie całego auta od ok. 15 000 zł. Wycenę zawsze dopasowujemy do auta i sposobu jego użytkowania.'),
                array('Czy folię PPF widać na lakierze?', 'Prawie wcale — poliuretanowa folia jest transparentna i wielowarstwowa, a jej warstwa wierzchnia regeneruje mikrorysy pod wpływem ciepła (słońce, ciepła woda).'),
                array('Który pakiet PPF będzie najlepszy dla mnie?', 'Do jazdy głównie po mieście zwykle wystarcza ochrona stref najbardziej narażonych na odpryski. Jeśli jeździsz dużo w trasie, rekomendujemy pakiet Full Front, a do nowego, sportowego lub kolekcjonerskiego auta — Full Body.'),
                array('Ile lat wytrzymuje folia PPF?', '8–10 lat przy poprawnej pielęgnacji. Na wybrane folie oferujemy gwarancję do 10 lat.'),
            ),
        ),
        'reklama' => array(
            'title' => 'Najczęstsze pytania o oklejanie reklamowe',
            'items' => array(
                array('Czy projekt graficzny jest po Waszej stronie?', 'Tak — prowadzimy pełny proces: projekt, druk wielkoformatowy i aplikację wykonujemy na miejscu, we własnym zapleczu. Możesz też dostarczyć gotowy projekt do realizacji.'),
                array('Ile kosztuje oklejenie auta firmowego?', 'Od prostych naklejek na drzwi po pełne oklejenie reklamowe — cena zależy od zakresu grafiki, liczby aut i zastosowanych materiałów. Wycena jest bezpłatna, wystarczy krótki opis potrzeb.'),
                array('Jak długo trwa realizacja?', 'Pojedyncze auto to zwykle 1–2 dni robocze po akceptacji projektu. Większe floty planujemy cyklami, tak aby auta były wyłączone z pracy możliwie krótko.'),
                array('Czy oklejenie reklamowe da się zdjąć np. po leasingu?', 'Tak — profesjonalny demontaż nie pozostawia śladów na lakierze i przywraca auto do stanu sprzed oklejenia.'),
            ),
        ),
        'detailing' => array(
            'title' => 'Najczęstsze pytania o szyby i detailing',
            'items' => array(
                array('Czy przyciemnianie przednich szyb jest legalne?', 'Przednia szyba musi przepuszczać minimum 75% światła, a przednie boczne minimum 70%. Tylne szyby boczne i tylną szybę możesz przyciemnić dowolnie — doradzimy rozwiązanie w pełni zgodne z przepisami.'),
                array('Czy stosujecie folie z atestem?', 'Tak — pracujemy wyłącznie na atestowanych foliach renomowanych producentów i do każdej realizacji wydajemy potwierdzenie zastosowanego materiału.'),
                array('Co to jest dechroming?', 'Oklejanie fabrycznie chromowanych listew i ozdobników folią w kolorze czarnego połysku lub satyny (tzw. Shadow Line) — szybki sposób na sportowy charakter auta bez wymiany elementów.'),
                array('Ile trwa przyciemnianie szyb?', 'Standardowa usługa zajmuje zwykle 1 dzień — auto odstawiasz rano, a odbierasz po południu.'),
            ),
        ),
    );
    return isset($all[$slug]) ? $all[$slug] : null;
}

/**
 * Schema FAQPage dla stron uslug (rozwijane pytania w SERP Google).
 */
add_action('wp_head', 'higloss_render_service_faq_schema');
function higloss_render_service_faq_schema() {
    if (!is_page(array('zmiana-koloru', 'ppf', 'reklama', 'detailing'))) {
        return;
    }
    $faq = higloss_service_faqs(get_post_field('post_name', get_queried_object_id()));
    if (empty($faq['items'])) {
        return;
    }
    $entities = array();
    foreach ($faq['items'] as $pair) {
        $entities[] = array(
            '@type'          => 'Question',
            'name'           => $pair[0],
            'acceptedAnswer' => array('@type' => 'Answer', 'text' => $pair[1]),
        );
    }
    $schema = array('@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $entities);
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}

/**
 * Przekierowania 301 starych artykulow Joomla pod /o-firmie/<id>-<slug>.
 * Warstwa PHP (WordPress) — dziala bez dostepu do .htaccess. Zapalany dopiero
 * dla adresow konczacych sie 404, wiec nie rusza poprawnych tras. Po wdrozeniu
 * bloku 3b w .htaccess reguly Apache odpalaja sie pierwsze — brak konfliktu.
 */
add_action('template_redirect', 'higloss_legacy_ofirmie_redirects', 1);
function higloss_legacy_ofirmie_redirects() {
    if (!is_404()) {
        return;
    }
    $path = isset($_SERVER['REQUEST_URI']) ? wp_parse_url(esc_url_raw(wp_unslash($_SERVER['REQUEST_URI'])), PHP_URL_PATH) : '';
    if (!$path || strpos($path, '/o-firmie/') !== 0) {
        return;
    }
    $target = '/o-firmie/';
    if (preg_match('#^/o-firmie/\d+-zmiana-koloru#', $path)) {
        $target = '/zmiana-koloru/';
    } elseif (preg_match('#^/o-firmie/\d+-(ppf|folie-ochronne|bezbarwn)#', $path)) {
        $target = '/ppf/';
    } elseif (preg_match('#^/o-firmie/\d+-(oklej|reklam|flot)#', $path)) {
        $target = '/reklama/';
    } elseif (preg_match('#^/o-firmie/\d+-(szyb|dechrom|detailing|uslugi)#', $path)) {
        $target = '/detailing/';
    }
    wp_safe_redirect(home_url($target), 301);
    exit;
}

/**
 * Schema Article JSON-LD dla artykulow Pytan (lepsza prezencja w SERP:
 * data, autor, obrazek — sygnaly rich result dla Google).
 */
add_action('wp_head', 'higloss_render_article_schema');
function higloss_render_article_schema() {
    if (!is_singular('post')) {
        return;
    }
    global $post;
    $description = has_excerpt($post)
        ? wp_strip_all_tags(get_the_excerpt($post), true)
        : wp_trim_words(wp_strip_all_tags(strip_shortcodes($post->post_content), true), 28, '');
    $schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'Article',
        'headline'    => get_the_title($post),
        'description' => $description,
        'image'       => higloss_poradnik_image($post->ID),
        'datePublished' => get_the_date('c', $post),
        'dateModified'  => get_the_modified_date('c', $post),
        'inLanguage'  => 'pl-PL',
        'author'      => array(
            '@type' => 'Organization',
            'name'  => 'HI-GLOSS DESIGN',
            'url'   => 'https://www.hi-glossdesign.pl',
            'logo'  => array('@type' => 'ImageObject', 'url' => HIGLOSS_THEME_URI . '/assets/images/logo.png'),
        ),
        'publisher'   => array(
            '@type' => 'Organization',
            'name'  => 'HI-GLOSS DESIGN',
            'logo'  => array('@type' => 'ImageObject', 'url' => HIGLOSS_THEME_URI . '/assets/images/logo.png'),
        ),
        'mainEntityOfPage' => array('@type' => 'WebPage', '@id' => get_permalink($post)),
    );
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}

/**
 * Schema BreadcrumbList: realizacje (Glowna > Galeria > realizacja) oraz podstrony.
 */
add_action('wp_head', 'higloss_render_breadcrumb_schema');
function higloss_render_breadcrumb_schema() {
    if (!is_singular() || is_front_page()) {
        return;
    }
    $items = array(
        array('@type' => 'ListItem', 'position' => 1, 'name' => 'Strona główna', 'item' => home_url('/')),
    );
    if ('realizacje' === get_post_type()) {
        $items[] = array('@type' => 'ListItem', 'position' => 2, 'name' => 'Galeria realizacji', 'item' => home_url('/galeria/'));
        $position = 3;
    } elseif ('post' === get_post_type()) {
        $items[] = array('@type' => 'ListItem', 'position' => 2, 'name' => 'FAQ', 'item' => home_url('/faq/'));
        $position = 3;
    } else {
        $position = 2;
    }
    $items[] = array('@type' => 'ListItem', 'position' => $position, 'name' => get_the_title());
    $schema = array('@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items);
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
