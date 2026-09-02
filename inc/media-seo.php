<?php
/**
 * Hurtowe metadane mediów realizacji (alt / tytuł / podpis / opis) — SEO obrazków.
 *
 * Jednorazowa migracja init (wzorzec jak inc/bootstrap-pages.php). Przechodzi po
 * wszystkich realizacjach i dla ich zdjęć (wyróżniające + "przed") uzupełnia:
 *   - ALT           — tylko puste,
 *   - tytuł         — puste ORAZ auto-tytuły z nazw plików (x7_2, IMG_1234),
 *   - podpis/opis   — tylko puste.
 * Ręcznych opisów klienta NIE nadpisuje. Przebudowa: podbić higloss_media_meta_v.
 *
 * @package HiGloss2026
 */

/**
 * Czy tytuł załącznika wygląda na auto-wygenerowany z nazwy pliku
 * (WP robi z "x7_2.jpg" tytuł "x7_2" — nie chcemy takich zostawiać).
 */
function higloss_media_auto_title($title, $attachment_id) {
    $title = trim((string) $title);
    if ('' === $title) {
        return true;
    }
    $file = get_attached_file($attachment_id);
    if ($file) {
        $base = pathinfo($file, PATHINFO_FILENAME);
        // WP tworzy tytuł z nazwy pliku bez rozszerzenia (z separatory zamienia na spacje)
        $auto = trim(str_replace(array('-', '_'), ' ', $base));
        if (0 === strcasecmp($title, $auto) || 0 === strcasecmp($title, $base)) {
            return true;
        }
    }
    return false;
}

/** Pierwsza litera wielka bez ruszania reszty (np. "branding DHL" -> "Branding DHL"). */
function higloss_mb_ucfirst($str) {
    return mb_strtoupper(mb_substr($str, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($str, 1, null, 'UTF-8');
}

function higloss_media_meta_migrate() {
    if ((int) get_option('higloss_media_meta_v') >= 1 || !post_type_exists('realizacje')) {
        return;
    }

    $branch_labels = array(
        'zmiana-koloru' => 'Zmiana koloru folią',
        'ppf'           => 'Ochrona lakieru folią PPF',
        'reklama'       => 'Reklama i branding pojazdów',
        'detailing'     => 'Detailing, przyciemnianie szyb i dechroming',
    );

    $realizacje_ids = get_posts(array(
        'post_type'      => 'realizacje',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'fields'         => 'ids',
    ));

    foreach ($realizacje_ids as $rid) {
        $title   = get_the_title($rid);
        $model   = trim((string) get_post_meta($rid, '_higloss_car_model', true));
        $service = trim((string) get_post_meta($rid, '_higloss_service_type', true));
        $film    = trim((string) get_post_meta($rid, '_higloss_film_used', true));
        $branch  = function_exists('higloss_service_guess') ? higloss_service_guess($title . ' ' . $service . ' ' . $model) : null;

        $service_label = $service ? $service : ($branch && isset($branch_labels[$branch]) ? $branch_labels[$branch] : 'Oklejanie pojazdów folią');

        $jobs = array(
            array('id' => (int) get_post_thumbnail_id($rid),                       'before' => false),
            array('id' => (int) get_post_meta($rid, '_higloss_before_image', true), 'before' => true),
        );

        foreach ($jobs as $job) {
            $aid = $job['id'];
            if (!$aid || 'attachment' !== get_post_type($aid)) {
                continue;
            }

            // --- ALT (tylko puste) ---
            $alt = $title;
            if ($service && false === mb_stripos($title, $service, 0, 'UTF-8')) {
                $alt .= ' — ' . mb_strtolower($service, 'UTF-8');
            }
            if ($job['before']) {
                $alt .= ' — przed realizacją';
            }
            if ('' === trim((string) get_post_meta($aid, '_wp_attachment_image_alt', true))) {
                update_post_meta($aid, '_wp_attachment_image_alt', $alt);
            }

            $attachment = get_post($aid);
            if (!$attachment) {
                continue;
            }

            $update = array('ID' => $aid);

            // --- TYTUŁ (puste + auto ze śmieciowych nazw plików) ---
            if (higloss_media_auto_title($attachment->post_title, $aid)) {
                $update['post_title'] = $title . ($job['before'] ? ' — zdjęcie przed' : '');
            }

            // --- PODPIS (tylko puste) ---
            if ('' === trim((string) $attachment->post_excerpt)) {
                $update['post_excerpt'] = higloss_mb_ucfirst($service_label) . ' — HI-GLOSS DESIGN, Mierzyn k. Szczecina';
            }

            // --- OPIS (tylko puste) ---
            if ('' === trim((string) $attachment->post_content)) {
                $desc  = $title . '. ';
                $desc .= higloss_mb_ucfirst($service_label) . ' wykonana w studio HI-GLOSS DESIGN w Mierzynie k. Szczecina';
                $desc .= $film ? ' — folia: ' . $film : '';
                $desc .= '.';
                if ($job['before']) {
                    $desc .= ' Zdjęcie dokumentacyjne przed rozpoczęciem prac.';
                }
                $update['post_content'] = $desc;
            }

            if (count($update) > 1) {
                wp_update_post($update);
            }
        }
    }

    update_option('higloss_media_meta_v', 1);
}
add_action('init', 'higloss_media_meta_migrate', 36);
