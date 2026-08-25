<?php
/**
 * Realizacje — centralny config specyfikacji per kategoria.
 *
 * JEDNO ZRODLO PRAWDY: panel kreatora, zapis meta oraz front
 * (chipy na kartach, tabelka SPECYFIKACJA na stronie realizacji)
 * czytaja definicje pol wylacznie stad. Dodanie nowego pola = 1 linia tutaj.
 *
 * Klucze meta maja prefiks "_" (ukryte przed listami custom fields).
 * Nazwy inputow w formularzu = klucz bez prefiksu (np. higloss_car_model).
 */

if (!defined('ABSPATH')) {
    exit;
}

function higloss_realizacje_categories() {
    return array(
        'zmiana-koloru' => 'Zmiana koloru',
        'ppf'           => 'Folia ochronna PPF',
        'reklama'       => 'Reklama i branding',
        'detailing'     => 'Detailing i detale',
    );
}

function higloss_finish_options() {
    return array('Głęboki połysk', 'Satyna', 'Mat', 'Struktura / carbon', 'Kameleon');
}

function higloss_realizacje_fields_config() {
    return array(

        /* Pola wspolne dla kazdej kategorii (zawsze widoczne w kreatorze) */
        'common' => array(
            '_higloss_car_model' => array(
                'label'       => 'Marka i model auta',
                'chip'        => '',
                'type'        => 'text',
                'placeholder' => 'np. Audi A7 Sportback / flota DHL',
            ),
            '_higloss_service_type' => array(
                'label'       => 'Wykonana usługa',
                'chip'        => '',
                'type'        => 'text',
                'placeholder' => 'np. Całościowa zmiana koloru',
                'hint'        => 'Krótko — ten tekst widac na kartach, a razem z marka podpowiada tytul.',
            ),
            '_higloss_execution_time' => array(
                'label'       => 'Czas realizacji',
                'chip'        => 'Czas',
                'type'        => 'text',
                'placeholder' => 'np. 4 dni robocze',
            ),
        ),

        /* Pola unikalne per kategoria (chip=0 -> nigdy nie trafia na chipy kart) */
        'groups' => array(
            'zmiana-koloru' => array(
                '_higloss_film_used'   => array('label' => 'Użyta folia / kolor',    'chip' => 'Folia',  'type' => 'text',   'placeholder' => 'np. 3M 2080 Gloss Blue'),
                '_higloss_finish_type' => array('label' => 'Wykończenie powierzchni', 'chip' => 'Efekt',  'type' => 'select', 'options' => higloss_finish_options()),
                '_higloss_scope'       => array('label' => 'Zakres prac',             'chip' => 'Zakres', 'type' => 'select', 'options' => array('Całościowa zmiana', 'Częściowa zmiana', 'Elementy (dach, maska, lusterka)')),
            ),
            'ppf' => array(
                '_higloss_ppf_package'   => array('label' => 'Pakiet ochrony',      'chip' => 'Pakiet',    'type' => 'select', 'options' => array('Strefy newralgiczne', 'Full Front', 'Full Body', 'Elementy zewnętrzne')),
                '_higloss_film_used'     => array('label' => 'Folia PPF',           'chip' => 'PPF',       'type' => 'text',   'placeholder' => 'np. STEK DYNOshield / XPEL Ultimate'),
                '_higloss_ppf_thickness' => array('label' => 'Grubość folii',       'chip' => 'Grubość',   'type' => 'text',   'placeholder' => 'np. 180 µm'),
                '_higloss_warranty'      => array('label' => 'Gwarancja producenta', 'chip' => 'Gwarancja', 'type' => 'text',   'placeholder' => 'np. 10 lat'),
            ),
            'reklama' => array(
                '_higloss_vehicle_count' => array('label' => 'Liczba pojazdów',        'chip' => 'Pojazdy',  'type' => 'text',   'placeholder' => 'np. 12 aut'),
                '_higloss_scope'         => array('label' => 'Zakres usługi',          'chip' => 'Zakres',   'type' => 'select', 'options' => array('Projekt + druk + montaż', 'Druk + montaż', 'Tylko montaż')),
                '_higloss_film_used'     => array('label' => 'Materiał / system druku', 'chip' => 'Materiał', 'type' => 'text',   'placeholder' => 'np. druk UV + laminat ochronny'),
            ),
            'detailing' => array(
                '_higloss_service_subtype' => array('label' => 'Rodzaj usługi',          'chip' => 'Usługa', 'type' => 'select', 'options' => array('Przyciemnianie szyb', 'Dechroming (Shadow Line)', 'Oklejanie wnętrza', 'Powłoka ochronna', 'Kolorowanie detali', 'Inna')),
                '_higloss_finish_type'     => array('label' => 'Wykończenie',            'chip' => 'Efekt',  'type' => 'select', 'options' => higloss_finish_options()),
                '_higloss_attest'          => array('label' => 'Atest / norma (dla szyb)', 'chip' => 'Atest', 'type' => 'text',   'placeholder' => 'np. folia atestowana P-21'),
            ),
            /* Realizacja bez kategorii — dawny, ogolny uklad pol */
            'ogolna' => array(
                '_higloss_film_used'   => array('label' => 'Użyta folia / materiał',  'chip' => 'Folia', 'type' => 'text', 'placeholder' => 'np. 3M 2080 Gloss Blue'),
                '_higloss_finish_type' => array('label' => 'Wykończenie powierzchni',  'chip' => 'Efekt', 'type' => 'text', 'placeholder' => 'np. Głęboki połysk / satyna'),
            ),
        ),
    );
}

/* Mapa klucz => definicja (unikalna; do zapisu i renderu awaryjnego) */
function higloss_all_realizacja_field_keys() {
    static $map = null;
    if (null !== $map) {
        return $map;
    }
    $config = higloss_realizacje_fields_config();
    $map    = $config['common'];
    foreach ($config['groups'] as $group) {
        foreach ($group as $key => $def) {
            if (!isset($map[$key]) || '' === ($map[$key]['chip'] ?? '')) {
                $map[$key] = $def; // pierwsza definicja wygrywa, dopelniamy brakujace chipy
            }
        }
    }
    return $map;
}

/* Jednorazowe auto-tworzenie 4 kategorii o prawidlowych slugach (= kolory kart) */
add_action('admin_init', 'higloss_realizacje_ensure_terms');
function higloss_realizacje_ensure_terms() {
    if (!taxonomy_exists('kategoria_realizacji') || get_option('higloss_terms_seeded')) {
        return;
    }
    foreach (higloss_realizacje_categories() as $slug => $name) {
        if (!term_exists($slug, 'kategoria_realizacji')) {
            wp_insert_term($name, 'kategoria_realizacji', array('slug' => $slug));
        }
    }
    update_option('higloss_terms_seeded', 1);
}

/* Kategoria realizacji (obiekt WP_Term) albo null */
function higloss_realizacja_term($post_id) {
    $terms = get_the_terms($post_id, 'kategoria_realizacji');
    return ($terms && !is_wp_error($terms)) ? reset($terms) : null;
}

/**
 * Pelna lista wypelnionych pol realizacji: [key, chip, label, value].
 * Kolejnosc: pola wspolne -> grupa kategorii -> (awaryjnie) znane wypelnione
 * klucze spoza grupy, zeby zadne dane nie zniknely po zmianie kategorii.
 */
function higloss_get_realizacja_specs($post_id) {
    $config = higloss_realizacje_fields_config();
    $term   = higloss_realizacja_term($post_id);
    $group  = ($term && isset($config['groups'][$term->slug]))
        ? $config['groups'][$term->slug]
        : $config['groups']['ogolna'];

    $out = array();
    $add = static function ($key, $def) use (&$out, $post_id) {
        $value = trim((string) get_post_meta($post_id, $key, true));
        if ('' === $value) {
            return;
        }
        $out[] = array(
            'key'   => $key,
            'chip'  => (string) ($def['chip'] ?? ''),
            'label' => (string) $def['label'],
            'value' => $value,
        );
    };

    foreach ($config['common'] as $key => $def) {
        $add($key, $def);
    }
    foreach ($group as $key => $def) {
        $add($key, $def);
    }

    $seen = wp_list_pluck($out, 'key');
    foreach (higloss_all_realizacja_field_keys() as $key => $def) {
        if (in_array($key, $seen, true) || '' === ($def['chip'] ?? '')) {
            continue;
        }
        $add($key, $def);
    }
    return $out;
}
