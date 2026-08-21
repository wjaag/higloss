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
