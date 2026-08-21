<?php
/**
 * Realizacje — dedykowany panel administracyjny ("kreator realizacji").
 *
 * Zamiast typowego ekranu dodawania wpisu:
 * - pasek naglowka z logo i prowadzeniem krok-po-kroku (edit_form_top)
 * - panel SPECYFIKACJA bezposrednio pod tytulem (edit_form_after_title, priorytet 5)
 *   — pola marka/model + usluga podpowiadaja tytul automatycznie (JS)
 * - panel zdjec PRZED / PO (edit_form_after_title, priorytet 10),
 *   PO synchronizowane z obrazkiem wyrożniajacym (boczny panel WP ukryty),
 *   PRZED = pole meta _higloss_before_image z pickerem media library
 * - posprzatane pudelka boczne (domyslnie ukryte: wyciag, slug, custom fields itd.)
 * - miniatury PO / PRZED w listingu realizacji
 * - higloss_model_in_title() — helper frontowy: true, gdy tytul zawiera marke/model
 *   (skiny kart i baneru ukrywaja wtedy zduplikowany dopisek z modelem)
 *
 * Klucze meta zgodne ze starszymi wersjami: _higloss_car_model, _higloss_service_type,
 * _higloss_film_used, _higloss_execution_time, _higloss_finish_type, _higloss_before_image.
 */

if (!defined('ABSPATH')) {
    exit;
}

/* ---------------------------------------------------------------------------
 * Baner kreatora (nad tytulem) + panel zdjec (pod tytulem, nad edytorem)
 * ------------------------------------------------------------------------- */
function higloss_render_creator_banner($post) {
    if (!$post || 'realizacje' !== $post->post_type) {
        return;
    }
    $logo = get_template_directory_uri() . '/assets/images/logo.png';
    ?>
    <div class="hg-admin-hero">
        <img src="<?php echo esc_url($logo); ?>" alt="" class="hg-admin-hero-logo">
        <div class="hg-admin-hero-text">
            <strong>HI-GLOSS DESIGN · kreator realizacji</strong>
            <span>Wypelnij kroki po kolei: <em>1</em> specyfikacja auta — tytul podpowie sie sam &rarr; <em>2</em> zdjecia PRZED i PO &rarr; <em>3</em> opis i kategoria &rarr; <em>4</em> „Opublikuj". Opis pod edytorem zasila SEO strony realizacji.</span>
        </div>
    </div>
    <?php
}
add_action('edit_form_top', 'higloss_render_creator_banner');

function higloss_render_zdjecia_panel($post) {
    if (!$post || 'realizacje' !== $post->post_type) {
        return;
    }
    wp_nonce_field('higloss_save_realizacja', 'higloss_realizacja_nonce');

    $after_id   = get_post_thumbnail_id($post->ID);
    $after_url  = $after_id ? wp_get_attachment_image_url($after_id, 'medium') : '';
    $before_id  = (int) get_post_meta($post->ID, '_higloss_before_image', true);
    $before_url = $before_id ? wp_get_attachment_image_url($before_id, 'medium') : '';
    ?>
    <div class="hg-admin-photos">
        <div class="hg-admin-photos-head">
            <span class="hg-admin-photos-title">Zdjecia realizacji</span>
            <span class="hg-admin-photos-sub">PO = zdjecie glowne (siatka galerii, strona glowna, baner). PRZED opcjonalnie — lightbox pokaze pare PRZED &rarr; PO.</span>
        </div>

        <div class="hg-admin-duo">
            <div class="hg-admin-pick">
                <p class="hg-admin-step"><span>1</span> Zdjecie <strong>PO</strong> — wymagane</p>
                <input type="hidden" id="higloss_after_image" name="higloss_after_image" value="<?php echo esc_attr($after_id); ?>">
                <div class="hg-admin-preview" id="higloss_after_preview">
                    <?php if ($after_url) : ?>
                        <img src="<?php echo esc_url($after_url); ?>" alt="">
                    <?php else : ?>
                        <span class="hg-admin-empty hg-admin-empty--warn">Brak zdjecia PO — realizacja pokaze obraz zastepczy.</span>
                    <?php endif; ?>
                </div>
                <div class="hg-admin-actions">
                    <button type="button" class="button button-primary button-hero" id="higloss_after_select">Wybierz zdjecie PO&hellip;</button>
                    <button type="button" class="button" id="higloss_after_remove" <?php echo $after_id ? '' : 'style="display:none"'; ?>>Usun</button>
                </div>
            </div>

            <div class="hg-admin-pick">
                <p class="hg-admin-step"><span>2</span> Zdjecie <strong>PRZED</strong> — opcjonalne</p>
                <input type="hidden" id="higloss_before_image" name="higloss_before_image" value="<?php echo esc_attr($before_id); ?>">
                <div class="hg-admin-preview" id="higloss_before_preview">
                    <?php if ($before_url) : ?>
                        <img src="<?php echo esc_url($before_url); ?>" alt="">
                    <?php else : ?>
                        <span class="hg-admin-empty">Nie wybrano zdjecia PRZED.</span>
                    <?php endif; ?>
                </div>
                <div class="hg-admin-actions">
                    <button type="button" class="button button-hero" id="higloss_before_select">Wybierz zdjecie PRZED&hellip;</button>
                    <button type="button" class="button" id="higloss_before_remove" <?php echo $before_id ? '' : 'style="display:none"'; ?>>Usun</button>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action('edit_form_after_title', 'higloss_render_zdjecia_panel', 10);

/* ---------------------------------------------------------------------------
 * Panel SPECYFIKACJA — bezposrednio pod tytulem, nad zdjeciami
 * ------------------------------------------------------------------------- */
function higloss_render_specyfikacja_panel($post) {
    if (!$post || 'realizacje' !== $post->post_type) {
        return;
    }
    $fields = array(
        'higloss_car_model'       => array('Marka i model auta',     'np. Audi A7 Sportback'),
        'higloss_service_type'    => array('Wykonana usługa',         'np. Całościowa zmiana koloru'),
        'higloss_film_used'       => array('Użyta folia / materiał',  'np. 3M 2080 Gloss Blue'),
        'higloss_execution_time'  => array('Czas realizacji',         'np. 4 dni robocze'),
        'higloss_finish_type'     => array('Wykończenie powierzchni', 'np. Głęboki połysk / satyna'),
    );
    ?>
    <div class="hg-admin-specspanel">
        <div class="hg-admin-photos-head">
            <span class="hg-admin-photos-title">Specyfikacja realizacji</span>
            <span class="hg-admin-photos-sub">Pola „Marka i model" + „Wykonana usługa" same podpowiadają tytuł (pole nad tym panelem) — możesz go dowolnie poprawić, podpowiedź nie nadpisze Twojej wersji.</span>
        </div>
        <div class="hg-admin-specs">
            <?php foreach ($fields as $name => $cfg) :
                $value = get_post_meta($post->ID, '_' . $name, true);
            ?>
            <p class="hg-admin-field">
                <label for="<?php echo esc_attr($name); ?>"><?php echo esc_html($cfg[0]); ?></label>
                <input type="text" id="<?php echo esc_attr($name); ?>" name="<?php echo esc_attr($name); ?>"
                       value="<?php echo esc_attr($value); ?>" placeholder="<?php echo esc_attr($cfg[1]); ?>">
            </p>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}
add_action('edit_form_after_title', 'higloss_render_specyfikacja_panel', 5);

/* ---------------------------------------------------------------------------
 * Porzadki w metaboksach — boczny panel "Obrazek wyrozniajacy" znika,
 * bo PO wybiera sie w panelu glownym pod tytulem
 * ------------------------------------------------------------------------- */
function higloss_add_realizacje_metaboxes() {
    remove_meta_box('postimagediv', 'realizacje', 'side');
}
add_action('do_meta_boxes', 'higloss_add_realizacje_metaboxes');

/* ---------------------------------------------------------------------------
 * Zapis meta
 * ------------------------------------------------------------------------- */
function higloss_save_realizacje_meta($post_id) {
    if (!isset($_POST['higloss_realizacja_nonce']) || !wp_verify_nonce($_POST['higloss_realizacja_nonce'], 'higloss_save_realizacja')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $text_fields = array(
        'higloss_car_model'      => '_higloss_car_model',
        'higloss_service_type'   => '_higloss_service_type',
        'higloss_film_used'      => '_higloss_film_used',
        'higloss_execution_time' => '_higloss_execution_time',
        'higloss_finish_type'    => '_higloss_finish_type',
    );
    foreach ($text_fields as $post_key => $meta_key) {
        if (isset($_POST[$post_key])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field(wp_unslash($_POST[$post_key])));
        }
    }

    // Zdjecie PO = obrazek wyrozniajacy (synchronizacja)
    if (isset($_POST['higloss_after_image'])) {
        $after_id = absint($_POST['higloss_after_image']);
        if ($after_id) {
            set_post_thumbnail($post_id, $after_id);
        } else {
            delete_post_thumbnail($post_id);
        }
    }

    // Zdjecie PRZED
    if (isset($_POST['higloss_before_image'])) {
        $before_id = absint($_POST['higloss_before_image']);
        if ($before_id) {
            update_post_meta($post_id, '_higloss_before_image', $before_id);
        } else {
            delete_post_meta($post_id, '_higloss_before_image');
        }
    }

}
add_action('save_post_realizacje', 'higloss_save_realizacje_meta');

/* ---------------------------------------------------------------------------
 * Placeholder tytulu + domyslnie ukryte pudelka (czysty ekran)
 * ------------------------------------------------------------------------- */
function higloss_realizacja_title_placeholder($text, $post) {
    if ('realizacje' === $post->post_type) {
        $text = __('Tytuł realizacji, np. „BMW X5 — zmiana koloru na czarny mat"', 'higloss');
    }
    return $text;
}
add_filter('enter_title_here', 'higloss_realizacja_title_placeholder', 10, 2);

/* ---------------------------------------------------------------------------
 * Helper frontowy: czy tytul realizacji juz zawiera marke/model?
 * Gdy tak — karty i banery nie powtarzaja modelu w dopiskach.
 * ------------------------------------------------------------------------- */
function higloss_model_in_title($model) {
    $model = trim((string) $model);
    if ('' === $model) {
        return false;
    }
    $title = get_the_title();
    if ('' === $title) {
        return false;
    }
    return mb_stripos($title, $model) !== false;
}

function higloss_realizacje_hidden_boxes($hidden, $screen) {
    if ($screen && 'realizacje' === $screen->post_type && 'post' === $screen->base) {
        $hidden = array_unique(array_merge((array) $hidden, array(
            'postexcerpt',
            'slugdiv',
            'postcustom',
            'trackbacksdiv',
            'commentstatusdiv',
            'commentsdiv',
            'authordiv',
            'revisionsdiv',
        )));
    }
    return $hidden;
}
add_filter('hidden_meta_boxes', 'higloss_realizacje_hidden_boxes', 10, 2);

/* ---------------------------------------------------------------------------
 * Zasoby admina — tylko na ekranach realizacji
 * ------------------------------------------------------------------------- */
function higloss_realizacje_admin_assets($hook) {
    if (!in_array($hook, array('post.php', 'post-new.php'), true)) {
        return;
    }
    $screen = function_exists('get_current_screen') ? get_current_screen() : null;
    if (!$screen || 'realizacje' !== $screen->post_type) {
        return;
    }

    wp_enqueue_media();
    wp_enqueue_script(
        'higloss-admin-realizacje',
        get_template_directory_uri() . '/assets/js/admin-realizacje.js',
        array('jquery', 'media-editor'),
        '1.3',
        true
    );
    wp_enqueue_style(
        'higloss-admin-realizacje',
        get_template_directory_uri() . '/assets/css/admin-realizacje.css',
        array(),
        '1.3'
    );
}
add_action('admin_enqueue_scripts', 'higloss_realizacje_admin_assets');

/* ---------------------------------------------------------------------------
 * Miniaturki PO / PRZED w listingu realizacji
 * ------------------------------------------------------------------------- */
function higloss_realizacje_columns($columns) {
    $new = array();
    foreach ($columns as $key => $label) {
        if ('title' === $key) {
            $new['hg_photos'] = __('Zdjęcia (PO · PRZED)', 'higloss');
        }
        $new[$key] = $label;
    }
    return $new;
}
add_filter('manage_realizacje_posts_columns', 'higloss_realizacje_columns');

function higloss_realizacje_column_content($column, $post_id) {
    if ('hg_photos' !== $column) {
        return;
    }
    $after_id  = get_post_thumbnail_id($post_id);
    $before_id = (int) get_post_meta($post_id, '_higloss_before_image', true);

    echo $after_id
        ? wp_get_attachment_image($after_id, array(64, 64), false, array('style' => 'width:48px;height:48px;object-fit:cover;border:1px solid #c3c4c7;vertical-align:middle;'))
        : '<span style="color:#b32d2e">brak PO</span>';
    echo '&nbsp;';
    echo $before_id
        ? wp_get_attachment_image($before_id, array(64, 64), false, array('style' => 'width:48px;height:48px;object-fit:cover;border:1px solid #c3c4c7;opacity:.85;vertical-align:middle;'))
        : '<span style="color:#787c82">&mdash;</span>';
}
add_action('manage_realizacje_posts_custom_column', 'higloss_realizacje_column_content', 10, 2);
