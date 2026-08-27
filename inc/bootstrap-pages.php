<?php
/**
 * Bootstrap przy aktywacji motywu — turnkey wdrożenie na czysty WordPress.
 *
 * Tworzy brakujące strony (z przypisaniem szablonów), ustawia statyczną stronę
 * główną i permalinki, a na końcu odświeża reguły przepisywania (CPT + archiwa).
 * Idempotentne: istniejące strony (po slugu) nie są nadpisywane ani duplikowane.
 */

if (!defined('ABSPATH')) {
    exit;
}

function higloss_bootstrap_pages() {

    $pages = array(
        'strona-glowna' => array(
            'title'    => 'Strona główna',
            'template' => '', // front-page.php łapie statyczną stronę główną automatycznie
        ),
        'oferta' => array(
            'title'    => 'Oferta',
            'template' => 'page-oferta.php',
        ),
        'o-firmie' => array(
            'title'    => 'O firmie',
            'template' => 'page-o-firmie.php',
        ),
        'galeria' => array(
            'title'    => 'Galeria realizacji',
            'template' => 'page-galeria.php',
        ),
        'kontakt' => array(
            'title'    => 'Kontakt',
            'template' => 'page-kontakt.php',
        ),
        'polityka-prywatnosci' => array(
            'title'    => 'Polityka prywatności i RODO',
            'template' => 'page-polityka-prywatnosci.php',
        ),
        'zmiana-koloru' => array(
            'title'    => 'Zmiana koloru auta',
            'template' => 'page-zmiana-koloru.php',
        ),
        'ppf' => array(
            'title'    => 'Bezbarwne folie PPF',
            'template' => 'page-ppf.php',
        ),
        'reklama' => array(
            'title'    => 'Oklejanie reklamowe i floty',
            'template' => 'page-reklama.php',
        ),
        'detailing' => array(
            'title'    => 'Detailing i przyciemnianie szyb',
            'template' => 'page-detailing.php',
        ),
    );

    $front_page_id = 0;
    $created       = array();

    foreach ($pages as $slug => $cfg) {
        $existing = get_page_by_path($slug);

        if ($existing) {
            if ('strona-glowna' === $slug) {
                $front_page_id = (int) $existing->ID;
            }
            // Dopełnij brakujący przypis szablonu na istniejącej stronie
            if (!empty($cfg['template']) && !get_post_meta($existing->ID, '_wp_page_template', true)) {
                update_post_meta($existing->ID, '_wp_page_template', $cfg['template']);
            }
            continue;
        }

        $new_id = wp_insert_post(array(
            'post_title'   => $cfg['title'],
            'post_name'    => $slug,
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ));

        if ($new_id && !is_wp_error($new_id)) {
            if (!empty($cfg['template'])) {
                update_post_meta($new_id, '_wp_page_template', $cfg['template']);
            }
            if ('strona-glowna' === $slug) {
                $front_page_id = (int) $new_id;
            }
            $created[] = $slug;
        }
    }

    if ($front_page_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $front_page_id);
    }

    if (!get_option('permalink_structure')) {
        update_option('permalink_structure', '/%postname%/');
    }

    // Rejestracja CPT przed flushem, żeby /realizacja/ działało od razu
    if (function_exists('higloss_register_cpt_realizacje')) {
        higloss_register_cpt_realizacje();
    }
    flush_rewrite_rules();

    set_transient('higloss_bootstrap_notice', $created ? $created : array('ok'), 5 * MINUTE_IN_SECONDS);
}
add_action('after_switch_theme', 'higloss_bootstrap_pages');

/**
 * Jednorazowy komunikat po aktywacji motywu.
 */
function higloss_bootstrap_admin_notice() {
    $created = get_transient('higloss_bootstrap_notice');
    if (!$created || !current_user_can('manage_options')) {
        return;
    }
    delete_transient('higloss_bootstrap_notice');
    ?>
    <div class="notice notice-success is-dismissible">
        <p>
            <strong>Motyw HI-GLOSS DESIGN aktywny.</strong>
            Strony są gotowe (Oferta, O firmie, Galeria, Kontakt, Polityka prywatności i wszystkie podstrony usług),
            strona główna i permalinki ustawione. Ostatni krok: <em>Realizacje → Dodaj nową</em> — po publikacji
            wpisy zastąpią karty demonstracyjne w galerii.
        </p>
    </div>
    <?php
}
add_action('admin_notices', 'higloss_bootstrap_admin_notice');

/**
 * Bootstrap v3 — strona Proces (/proces) z szablonem page-proces.php.
 * Jednorazowa, idempotentna po slugu; odpala sie na pierwszym
 * zaladowaniu strony po wgraniu nowej wersji motywu.
 */
function higloss_bootstrap_proces_page() {
    if (get_option('higloss_proces_seeded')) {
        return;
    }
    $existing = get_page_by_path('proces');
    if ($existing) {
        if (!get_post_meta($existing->ID, '_wp_page_template', true)) {
            update_post_meta($existing->ID, '_wp_page_template', 'page-proces.php');
        }
        update_option('higloss_proces_seeded', 1);
        return;
    }
    $new_id = wp_insert_post(array(
        'post_title'   => 'Proces',
        'post_name'    => 'proces',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'post_content' => '',
    ));
    if ($new_id && !is_wp_error($new_id)) {
        update_post_meta($new_id, '_wp_page_template', 'page-proces.php');
        update_option('higloss_proces_seeded', 1);
    }
}
add_action('init', 'higloss_bootstrap_proces_page', 28);

/**
 * Bootstrap v2 — Poradnik (blog SEO).
 *
 * Jednorazowa migracja (flaga higloss_poradnik_seeded): tworzy strone
 * "Poradnik" (/poradnik), ustawia ja jako strone wpisow (Ustawienia ->
 * Czytanie) i publikuje pakiet artykulow long-tail z inc/poradnik-articles.php.
 * Idempotentna: istniejace strony wpisy (po slugu) nie sa nadpisywane.
 * Odpala sie na pierwszym zaladowaniu strony po wgraniu nowej wersji motywu.
 */
function higloss_bootstrap_poradnik() {
    if (get_option('higloss_poradnik_seeded')) {
        return;
    }

    // 1. Strona /poradnik + przypisanie jako strona wpisow
    $poradnik_page = get_page_by_path('poradnik');
    if (!$poradnik_page) {
        $poradnik_id = wp_insert_post(array(
            'post_title'   => 'Poradnik',
            'post_name'    => 'poradnik',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ));
    } else {
        $poradnik_id = (int) $poradnik_page->ID;
    }

    if ($poradnik_id && !is_wp_error($poradnik_id) && !(int) get_option('page_for_posts')) {
        update_option('page_for_posts', (int) $poradnik_id);
    }

    // 2. Kategoria Poradnik
    $cat = term_exists('poradnik', 'category');
    if (!$cat) {
        $cat = wp_insert_term('Poradnik', 'category', array('slug' => 'poradnik'));
    }
    $cat_id = (is_array($cat) && !is_wp_error($cat)) ? (int) $cat['term_id'] : 0;

    // 3. Artykuły startowe (daty rozłożone co 2 dni wstecz — naturalna chronologia)
    $articles = function_exists('higloss_poradnik_articles') ? higloss_poradnik_articles() : array();
    $created  = 0;
    $total    = count($articles);

    foreach (array_reverse($articles) as $i => $article) {
        $existing = get_page_by_path($article['slug'], OBJECT, 'post');
        if ($existing) {
            continue; // juz jest (np. po edycji/re-imporcie) — nie ruszamy
        }
        $days_back = ($total - 1 - $i) * 2;
        $new_post  = wp_insert_post(array(
            'post_title'    => $article['title'],
            'post_name'     => $article['slug'],
            'post_status'   => 'publish',
            'post_type'     => 'post',
            'post_excerpt'  => $article['excerpt'],
            'post_content'  => $article['content'],
            'post_date'     => gmdate('Y-m-d H:i:s', strtotime("-{$days_back} days")),
            'post_date_gmt' => gmdate('Y-m-d H:i:s', strtotime("-{$days_back} days")),
            'post_category' => $cat_id ? array($cat_id) : array(),
        ));
        if ($new_post && !is_wp_error($new_post)) {
            $created++;
        }
    }

    update_option('higloss_poradnik_seeded', 1);
    set_transient('higloss_poradnik_notice', $created, 10 * MINUTE_IN_SECONDS);
}
add_action('init', 'higloss_bootstrap_poradnik', 30);

/**
 * Komunikat w kokpicie po jednorazowej publikacji artykulow Poradnika.
 */
function higloss_poradnik_admin_notice() {
    $created = get_transient('higloss_poradnik_notice');
    if (false === $created || !current_user_can('manage_options')) {
        return;
    }
    delete_transient('higloss_poradnik_notice');
    ?>
    <div class="notice notice-success is-dismissible">
        <p>
            <strong>Poradnik gotowy.</strong>
            Utworzyliśmy stronę <a href="<?php echo esc_url(home_url('/poradnik/')); ?>">/poradnik</a>
            (Ustawienia → Czytanie → Strona z wpisami) i opublikowaliśmy <?php echo (int) $created; ?>
            artykułów SEO (Wpisy → Wszystkie wpisy). Możesz je dowolnie edytować.
        </p>
    </div>
    <?php
}
add_action('admin_notices', 'higloss_poradnik_admin_notice');
