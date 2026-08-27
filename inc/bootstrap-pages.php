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
        'post_title'   => 'Proces realizacji',
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
 * Bootstrap v3b — tytul strony /proces: "Proces" -> "Proces realizacji"
 * (mocniejszy <title> pod SEO; slug i szablon bez zmian).
 */
function higloss_bootstrap_proces_title() {
    if (get_option('higloss_proces_v')) {
        return;
    }
    $proces_page = get_page_by_path('proces');
    if ($proces_page && 'Proces' === $proces_page->post_title) {
        wp_update_post(array(
            'ID'         => (int) $proces_page->ID,
            'post_title' => 'Proces realizacji',
        ));
    }
    if ($proces_page && !get_post_meta($proces_page->ID, '_wp_page_template', true)) {
        update_post_meta($proces_page->ID, '_wp_page_template', 'page-proces.php');
    }
    update_option('higloss_proces_v', 2);
}
add_action('init', 'higloss_bootstrap_proces_title', 33);

/**
 * Bootstrap v2 — Poradnik (blog SEO).
 *
 * Jednorazowa migracja (flaga higloss_poradnik_seeded): tworzy strone
 * "Pytania" (/pytania), ustawia ja jako strone wpisow (Ustawienia ->
 * Czytanie) i publikuje pakiet artykulow long-tail z inc/poradnik-articles.php.
 * Idempotentna: istniejace strony wpisy (po slugu) nie sa nadpisywane.
 * Odpala sie na pierwszym zaladowaniu strony po wgraniu nowej wersji motywu.
 */
function higloss_bootstrap_poradnik() {
    // v2: dociaga 5 NOWYCH artykulow (starsze slugi sa pomijane) + wstep na strone Pytania
    if ((int) get_option('higloss_poradnik_seeded') >= 2) {
        return;
    }

    // 1. Strona /pytania + przypisanie jako strona wpisow
    $poradnik_page = get_page_by_path('pytania');
    if (!$poradnik_page) {
        $poradnik_id = wp_insert_post(array(
            'post_title'   => 'Pytania',
            'post_name'    => 'pytania',
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

    // 1b. Wstep SEO na strone Pytania (widoczny nad lista artykulow; edytowalny w WP-Admin)
    $intro_content = '
<h2>Masz pytanie o folię na auto? Tu znajdziesz konkretną odpowiedź</h2>
<p>Codziennie rozmawiamy z właścicielami aut ze Szczecina i okolic o tych samych tematach: ile kosztuje zmiana koloru folią, czy PPF chroni lepiej niż ceramika, co wolno przy przyciemnianiu szyb i jak długo wytrzymuje folia na aucie. Zamiast odpowiadać skrótem — rozpisaliśmy te tematy rzetelnie, z cenami, procedurami i przykładami z naszego studia.</p>
<p>Zacznij od artykułów poniżej. Jeśli nie znajdziesz odpowiedzi na swoje pytanie, zadzwoń pod <strong>605 088 065</strong> albo zostaw zapytanie w <a href="/#wycena">bezpłatnym formularzu wyceny</a>. Możesz też podejrzeć efekty naszej pracy w <a href="/galeria/">galerii realizacji</a> i poznać <a href="/proces/">proces oklejania krok po kroku</a>.</p>';
    if ($poradnik_id && !is_wp_error($poradnik_id) && !trim((string) get_post_field('post_content', $poradnik_id))) {
        wp_update_post(array(
            'ID'           => (int) $poradnik_id,
            'post_content' => $intro_content,
        ));
    }

    // 2. Kategoria Pytania
    $cat = term_exists('pytania', 'category');
    if (!$cat) {
        $cat = wp_insert_term('Pytania', 'category', array('slug' => 'pytania'));
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

    update_option('higloss_poradnik_seeded', 2);
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
            <strong>Sekcja FAQ gotowa.</strong>
            Utworzyliśmy stronę <a href="<?php echo esc_url(home_url('/faq/')); ?>">/faq</a>
            i opublikowaliśmy <?php echo (int) $created; ?>
            artykułów SEO (Wpisy → Wszystkie wpisy). Możesz je dowolnie edytować.
        </p>
    </div>
    <?php
}
add_action('admin_notices', 'higloss_poradnik_admin_notice');

/**
 * Bootstrap v5 — przejscie z /pytania na dedykowana strone /faq.
 * Przenosi wstep (tresc strony) na nowa strone FAQ, odlacza /pytania od
 * ustawien "strona wpisow" i usuwa ja definitywnie. Bez przekierowan:
 * adres byl swiezy i niezindeksowany. Kategoria "Pytania" zostaje.
 */
function higloss_bootstrap_faq_page() {
    if (get_option('higloss_faq_seeded')) {
        return;
    }

    $old_page    = get_page_by_path('pytania');
    $old_content = $old_page ? (string) $old_page->post_content : '';

    $faq_page = get_page_by_path('faq');
    if (!$faq_page) {
        $faq_id = wp_insert_post(array(
            'post_title'   => 'FAQ',
            'post_name'    => 'faq',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => $old_content,
        ));
    } else {
        $faq_id = (int) $faq_page->ID;
        if ($old_content && !trim((string) $faq_page->post_content)) {
            wp_update_post(array('ID' => $faq_id, 'post_content' => $old_content));
        }
    }

    if (!$faq_id || is_wp_error($faq_id)) {
        return; // nastepny request sprobuje ponownie
    }

    update_post_meta($faq_id, '_wp_page_template', 'page-faq.php');

    // Odlaczenie /pytania od "strony wpisow" (hub obsluguje teraz szablon page-faq.php)
    if ($old_page && (int) get_option('page_for_posts') === (int) $old_page->ID) {
        update_option('page_for_posts', 0);
    }

    // Czyste usuniecie starej strony (bez kosza)
    if ($old_page) {
        wp_delete_post((int) $old_page->ID, true);
    }

    update_option('higloss_faq_seeded', 1);
}
add_action('init', 'higloss_bootstrap_faq_page', 35);

/**
 * Bootstrap v4 — rebrand sekcji Poradnik -> Pytania (strona + kategoria).
 * Jednorazowa migracja dla istniejacych instalacji; WordPress sam ustawia
 * 301 ze starego sluga strony (mechanizm wp_old_slug_redirect).
 */
function higloss_bootstrap_pytania_rename() {
    if (get_option('higloss_pytania_v')) {
        return;
    }
    $old_page = get_page_by_path('poradnik');
    if ($old_page) {
        wp_update_post(array(
            'ID'         => (int) $old_page->ID,
            'post_name'  => 'pytania',
            'post_title' => 'Pytania',
        ));
    }
    $old_term = get_term_by('slug', 'poradnik', 'category');
    if ($old_term && !is_wp_error($old_term)) {
        wp_update_term((int) $old_term->term_id, 'category', array('name' => 'Pytania', 'slug' => 'pytania'));
    }
    update_option('higloss_pytania_v', 2);
}
add_action('init', 'higloss_bootstrap_pytania_rename', 32);
