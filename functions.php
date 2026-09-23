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
 * Krytyczne poprawki wydajnosci bezposrednio w <head> — inline, wiec odporne
 * na optymalizatory LiteSpeed (UCSS/CCSS/combine), ktore potrafia wyciac
 * reguly z zewnetrznych plikow CSS (selektory z .hg-js sa dodawane przez JS
 * i optymalizator uznaje je za "nieuzywane").
 * 1) Hero widoczne od pierwszego painta — bez JS-gated reveal (LCP 5,9 s -> ~FCP).
 * 2) Preload obrazu hero (LCP) z srcset — pobieranie startuje przed arkuszami CSS.
 */
add_action('wp_head', 'higloss_perf_head', 1);
function higloss_perf_head() {
    echo "<style>.hg-hero .hg-reveal{opacity:1!important;transform:none!important;transition:none!important}</style>\n";

    if (is_front_page()) {
        $u = HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru';
        printf(
            '<link rel="preload" as="image" href="%s" imagesrcset="%s 480w, %s 768w, %s 1408w" imagesizes="100vw" fetchpriority="high">' . "\n",
            esc_url($u . '-768.webp'),
            esc_url($u . '-480.webp'),
            esc_url($u . '-768.webp'),
            esc_url($u . '.webp')
        );
    }
}

/**
 * WYDAJNOSC (PageSpeed mobile) — fonty self-hostowane (woff2 variable z
 * @fontsource, zwarte instancerem do wag realnie uzywanych w motywie:
 * Montserrat 700-900, Plus Jakarta Sans 400-800 — ~119 KB lacznie zamiast
 * ~158 KB za pelne zakresy 100-900/200-800). Bez Google Fonts: brak DNS/TLS
 * do fonts.gstatic.com (~300-600 ms na mobile). Preload TYLKO Montserrat
 * (latin, 28 KB — H1 to czysty basic-latin); Plus Jakarta Sans
 * (tekst biezacy) dociaga sie asynchronicznie z font-display: swap.
 */
add_action('wp_head', 'higloss_fonts_async', 1);
function higloss_fonts_async() {
    $f = HIGLOSS_THEME_URI . '/assets/fonts/';
    echo '<link rel="preload" as="font" type="font/woff2" href="' . esc_url($f . 'montserrat-latin-wght700-900.woff2') . '" crossorigin>' . "\n";
    $latin     = 'U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD';
    $latin_ext = 'U+0100-02BA,U+02BD-02C5,U+02C7-02CC,U+02CE-02D7,U+02DD-02FF,U+0304,U+0308,U+0329,U+1D00-1DBF,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20C0,U+2113,U+2C60-2C7F,U+A720-A7FF';
    echo '<style>' . "\n";
    echo "@font-face{font-family:'Montserrat';font-style:normal;font-display:swap;font-weight:700 900;src:url(" . esc_url($f . 'montserrat-latin-wght700-900.woff2') . ") format('woff2-variations');unicode-range:" . $latin . ";}\n";
    echo "@font-face{font-family:'Montserrat';font-style:normal;font-display:swap;font-weight:700 900;src:url(" . esc_url($f . 'montserrat-latin-ext-wght700-900.woff2') . ") format('woff2-variations');unicode-range:" . $latin_ext . ";}\n";
    echo "@font-face{font-family:'Plus Jakarta Sans';font-style:normal;font-display:swap;font-weight:400 800;src:url(" . esc_url($f . 'plus-jakarta-sans-latin-wght400-800.woff2') . ") format('woff2-variations');unicode-range:" . $latin . ";}\n";
    echo "@font-face{font-family:'Plus Jakarta Sans';font-style:normal;font-display:swap;font-weight:400 800;src:url(" . esc_url($f . 'plus-jakarta-sans-latin-ext-wght400-800.woff2') . ") format('woff2-variations');unicode-range:" . $latin_ext . ";}\n";
    echo '</style>' . "\n";
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
 * Rozpoznaje branze realizacji po tytule + polu "wykonana usluga" (tekst wpisywany przez klienta).
 * Zwraca slug: zmiana-koloru | ppf | reklama | detailing albo null.
 * Kolejnosc regul ma znaczenie (ppf wygrywa z "ochrona lakieru", reklama z "branding").
 */
function higloss_service_guess($text) {
    $t = strtolower((string) $text);
    if ('' === trim($t)) return null;
    if (preg_match('/ppf|ochron/i', $t)) return 'ppf';
    if (preg_match('/reklam|brand/i', $t)) return 'reklama';
    if (preg_match('/szyb|dechrom|detailing|lamp|przyciemn/i', $t)) return 'detailing';
    if (preg_match('/zmiana|kolor|mat|satyna|połysk|paski|dach|grafik|motyw|wrap/i', $t)) return 'zmiana-koloru';
    return null;
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
 * Pytania FAQ dla stron uslug (zmiana koloru / PPF / reklama / detailing).
 * JEDYNE ZRODLO PRAWDY: te same dane renderuja widoczny akordeon
 * (template-parts/service-faq.php). Schematy JSON-LD obsluguje wylacznie wtyczka SEO.
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
        'szkolenia' => array(
            'title' => 'Najczęstsze pytania o szkolenia car wrappingu',
            'items' => array(
                array('Dla kogo są szkolenia?', 'Dla warsztatów i detailerów poszerzających ofertę, osób startujących w branży car wrappingu oraz działów marketingu i flot, które chcą oklejać pojazdy samodzielnie. Nie wymagamy doświadczenia w module podstawowym.'),
                array('Czy potrzebuję własnego sprzętu lub auta?', 'Nie — ćwiczymy na prawdziwych autach z naszej hali, a folie premium, narzędzia i sprzęt grzewczy są w cenie szkolenia.'),
                array('Ile osób liczy grupa i jak długo trwa szkolenie?', 'Maksymalnie 4 uczestników na trenera, dzięki czemu każdy klei samodzielnie. Moduły trwają od 1 do 3 dni zależnie od zakresu.'),
                array('Czy po szkoleniu otrzymam certyfikat?', 'Tak — każdy uczestnik dostaje certyfikat ukończenia, materiały szkoleniowe oraz możliwość konsultacji po wdrożeniu umiejętności w praktyce.'),
            ),
        ),
    );
    return isset($all[$slug]) ? $all[$slug] : null;
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
