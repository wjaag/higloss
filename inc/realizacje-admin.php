<?php
/**
 * Realizacje — panel administracyjny.
 *
 * - metaboxy na glownym planie (kontekst "normal", priorytet "high")
 * - zdjecie PO = obrazek wyrózniajacy (natywny WP), zdjecie PRZED = pole meta z pickerem
 * - galeria ujec dodatkowych (multi) — naprawiony wp.media (enqueue w admin_enqueue_scripts)
 * - miniatury PO/PRZED w listingu realizacji
 *
 * Klucze meta zgodne z dotychczasowymi: _higloss_car_model, _higloss_service_type,
 * _higloss_film_used, _higloss_execution_time, _higloss_finish_type, _higloss_gallery_images.
 * Nowy: _higloss_before_image (attachment ID).
 */

if (!defined('ABSPATH')) {
    exit;
}

/* ---------------------------------------------------------------------------
 * Metaboxy (rejestrowane w kolejnosci wyswietlania: zdjecia, specyfikacja, galeria)
 * ------------------------------------------------------------------------- */
function higloss_add_realizacje_metaboxes() {
    add_meta_box(
        'higloss_realizacja_zdjecia',
        __('Zdjęcia realizacji (PRZED / PO)', 'higloss'),
        'higloss_render_zdjecia_metabox',
        'realizacje',
        'normal',
        'high'
    );

    add_meta_box(
        'higloss_realizacja_specs',
        __('Specyfikacja realizacji', 'higloss'),
        'higloss_render_specs_metabox',
        'realizacje',
        'normal',
        'high'
    );

    add_meta_box(
        'higloss_realizacja_gallery',
        __('Galeria ujęć dodatkowych (opcjonalnie)', 'higloss'),
        'higloss_render_gallery_metabox',
        'realizacje',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'higloss_add_realizacje_metaboxes');

/* ---------------------------------------------------------------------------
 * Metabox: Zdjęcia PRZED / PO
 * ------------------------------------------------------------------------- */
function higloss_render_zdjecia_metabox($post) {
    wp_nonce_field('higloss_save_realizacja', 'higloss_realizacja_nonce');

    $thumb_id   = get_post_thumbnail_id($post->ID);
    $thumb_url  = $thumb_id ? wp_get_attachment_image_url($thumb_id, 'medium') : '';
    $before_id  = (int) get_post_meta($post->ID, '_higloss_before_image', true);
    $before_url = $before_id ? wp_get_attachment_image_url($before_id, 'medium') : '';
    ?>
    <div class="hg-admin-duo">
        <div class="hg-admin-pick">
            <p class="hg-admin-step">1 · Zdjęcie <strong>PO</strong> (główne)</p>
            <p class="description">
                Widoczne w siatce /galeria, w sekcji „Wybrane realizacje" na stronie głównej i na banerze strony realizacji.
                Ustawiasz je w panelu <strong>„Obrazek wyróżniający"</strong> po prawej stronie ekranu.
            </p>
            <div class="hg-admin-preview">
                <?php if ($thumb_url) : ?>
                    <img src="<?php echo esc_url($thumb_url); ?>" alt="">
                <?php else : ?>
                    <span class="hg-admin-empty hg-admin-empty--warn">Brak zdjęcia PO — bez niego realizacja pokaże obraz zastępczy.</span>
                <?php endif; ?>
            </div>
        </div>

        <div class="hg-admin-pick">
            <p class="hg-admin-step">2 · Zdjęcie <strong>PRZED</strong> (opcjonalne)</p>
            <p class="description">Po dodaniu lightbox pokaże parę PRZED&nbsp;→&nbsp;PO obok siebie.</p>
            <input type="hidden" id="higloss_before_image" name="higloss_before_image" value="<?php echo esc_attr($before_id); ?>">
            <div class="hg-admin-preview" id="higloss_before_preview">
                <?php if ($before_url) : ?>
                    <img src="<?php echo esc_url($before_url); ?>" alt="">
                <?php else : ?>
                    <span class="hg-admin-empty">Nie wybrano zdjęcia PRZED.</span>
                <?php endif; ?>
            </div>
            <div class="hg-admin-actions">
                <button type="button" class="button button-primary" id="higloss_before_select">Wybierz zdjęcie PRZED…</button>
                <button type="button" class="button button-link-delete" id="higloss_before_remove" <?php echo $before_id ? '' : 'style="display:none"'; ?>>Usuń zdjęcie PRZED</button>
            </div>
        </div>
    </div>
    <?php
}

/* ---------------------------------------------------------------------------
 * Metabox: Specyfikacja realizacji
 * ------------------------------------------------------------------------- */
function higloss_render_specs_metabox($post) {
    $fields = array(
        'higloss_car_model'       => array('Marka i model auta',        'np. Audi A7 Sportback'),
        'higloss_service_type'    => array('Wykonana usługa',            'np. Całościowa zmiana koloru'),
        'higloss_film_used'       => array('Użyta folia / materiał',     'np. 3M 2080 Gloss Blue'),
        'higloss_execution_time'  => array('Czas realizacji',            'np. 4 dni robocze'),
        'higloss_finish_type'     => array('Wykończenie powierzchni',    'np. Głęboki połysk / satyna'),
    );
    ?>
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
    <?php
}

/* ---------------------------------------------------------------------------
 * Metabox: Galeria ujęć dodatkowych (multi)
 * ------------------------------------------------------------------------- */
function higloss_render_gallery_metabox($post) {
    $gallery_images = get_post_meta($post->ID, '_higloss_gallery_images', true);
    ?>
    <p class="description">
        Dodatkowe ujęcia pojazdu (przód, tył, bok, detale) — wyświetlą się jako siatka na stronie realizacji.
        To <strong>nie</strong> jest zdjęcie PRZED ani PO — te ustawiasz w boksie wyżej.
    </p>

    <input type="hidden" name="higloss_gallery_images" id="higloss_gallery_images" value="<?php echo esc_attr($gallery_images); ?>">

    <div class="hg-admin-actions" style="margin-top:10px">
        <button type="button" class="button button-primary" id="higloss_upload_gallery_btn">Dodaj / edytuj ujęcia…</button>
        <button type="button" class="button button-link-delete" id="higloss_clear_gallery_btn">Wyczyść galerię</button>
    </div>

    <div id="higloss_gallery_preview" class="hg-admin-gallery"></div>
    <?php
}

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

    if (isset($_POST['higloss_before_image'])) {
        $before_id = absint($_POST['higloss_before_image']);
        if ($before_id) {
            update_post_meta($post_id, '_higloss_before_image', $before_id);
        } else {
            delete_post_meta($post_id, '_higloss_before_image');
        }
    }

    if (isset($_POST['higloss_gallery_images'])) {
        $ids = array_filter(array_map('absint', explode(',', sanitize_text_field(wp_unslash($_POST['higloss_gallery_images'])))));
        if ($ids) {
            update_post_meta($post_id, '_higloss_gallery_images', implode(',', $ids));
        } else {
            delete_post_meta($post_id, '_higloss_gallery_images');
        }
    }
}
add_action('save_post_realizacje', 'higloss_save_realizacje_meta');

/* ---------------------------------------------------------------------------
 * Zasoby admina (media + JS + drobne style) — tylko na ekranach realizacji
 * ------------------------------------------------------------------------- */
function higloss_realizacje_admin_assets($hook) {
    if (!in_array($hook, array('post.php', 'post-new.php'), true)) {
        return;
    }
    $screen = function_exists('get_current_screen') ? get_current_screen() : null;
    if (!$screen || $screen->post_type !== 'realizacje') {
        return;
    }

    wp_enqueue_media();
    wp_enqueue_script(
        'higloss-admin-realizacje',
        get_template_directory_uri() . '/assets/js/admin-realizacje.js',
        array('jquery', 'media-editor'),
        '1.0',
        true
    );

    $css = '
        .hg-admin-duo { display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:16px; }
        .hg-admin-pick { border:1px solid #dcdcde; padding:14px; background:#fff; }
        .hg-admin-step { font-weight:800; margin:0 0 6px; }
        .hg-admin-preview { margin:10px 0; min-height:64px; border:2px dashed #c3c4c7; background:#f6f7f7;
                            display:flex; align-items:center; justify-content:center; }
        .hg-admin-preview img { max-width:100%; max-height:180px; display:block; }
        .hg-admin-empty { color:#787c82; font-style:italic; padding:12px; }
        .hg-admin-empty--warn { color:#b32d2e; }
        .hg-admin-actions { display:flex; gap:10px; align-items:center; }
        .hg-admin-specs { display:grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap:0 16px; }
        .hg-admin-field label { font-weight:700; display:block; margin-bottom:4px; }
        .hg-admin-field input { width:100%; }
        .hg-admin-gallery { display:flex; flex-wrap:wrap; gap:12px; margin-top:12px; min-height:64px;
                            padding:12px; border:2px dashed #c3c4c7; background:#f6f7f7; }
        .hg-admin-gallery .hg-gal-item { position:relative; width:110px; height:110px; overflow:hidden; border:2px solid #2271b1; }
        .hg-admin-gallery .hg-gal-item img { width:100%; height:100%; object-fit:cover; display:block; }
        .hg-admin-gallery .hg-gal-remove { position:absolute; top:3px; right:3px; width:22px; height:22px; border:none;
                            border-radius:50%; background:#d63638; color:#fff; cursor:pointer; font-weight:bold; line-height:20px; padding:0; }
    ';
    wp_register_style('higloss-admin-realizacje', false);
    wp_enqueue_style('higloss-admin-realizacje');
    wp_add_inline_style('higloss-admin-realizacje', $css);
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
    $po_id    = get_post_thumbnail_id($post_id);
    $before_id = (int) get_post_meta($post_id, '_higloss_before_image', true);

    echo $po_id
        ? wp_get_attachment_image($po_id, array(64, 64), false, array('style' => 'width:48px;height:48px;object-fit:cover;border:1px solid #c3c4c7;'))
        : '<span style="color:#b32d2e">brak PO</span>';
    echo '&nbsp;';
    echo $before_id
        ? wp_get_attachment_image($before_id, array(64, 64), false, array('style' => 'width:48px;height:48px;object-fit:cover;border:1px solid #c3c4c7;opacity:.85'))
        : '<span style="color:#787c82">—</span>';
}
add_action('manage_realizacje_posts_custom_column', 'higloss_realizacje_column_content', 10, 2);
