<?php
/**
 * Hi-Gloss Design 2026 Theme Functions
 *
 * @package HiGloss2026
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define('HIGLOSS_VERSION', '3.0.0');
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
    wp_enqueue_style('higloss-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap', array(), null);

    // Core theme CSS and the one-page design layer.
    wp_enqueue_style('higloss-style', get_stylesheet_uri(), array(), HIGLOSS_VERSION);
    wp_enqueue_style('higloss-main-css', HIGLOSS_THEME_URI . '/assets/css/main.css', array('higloss-style'), HIGLOSS_VERSION);
    wp_enqueue_style('higloss-landing-css', HIGLOSS_THEME_URI . '/assets/css/landing.css', array('higloss-main-css'), HIGLOSS_VERSION);

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
 * Register Custom Meta Boxes for Realizacje (Specs & Multi-Photo Gallery)
 */
function higloss_add_realizacje_metaboxes() {
    add_meta_box(
        'higloss_realizacja_specs',
        '🚗 Specyfikacja Projektu & Pojazdu (Hi-Gloss Specs)',
        'higloss_render_specs_metabox',
        'realizacje',
        'normal',
        'high'
    );

    add_meta_box(
        'higloss_realizacja_gallery',
        '🖼️ Galeria Zdjęć Pojazdu (Wielozdjęciowa Galeria Auto)',
        'higloss_render_gallery_metabox',
        'realizacje',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'higloss_add_realizacje_metaboxes');

/**
 * Render Project Specs Metabox
 */
function higloss_render_specs_metabox($post) {
    wp_nonce_field('higloss_save_specs', 'higloss_specs_nonce');

    $car_model   = get_post_meta($post->ID, '_higloss_car_model', true);
    $service_type= get_post_meta($post->ID, '_higloss_service_type', true);
    $film_used   = get_post_meta($post->ID, '_higloss_film_used', true);
    $exec_time   = get_post_meta($post->ID, '_higloss_execution_time', true);
    $finish_type = get_post_meta($post->ID, '_higloss_finish_type', true);
    ?>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; padding: 10px 0;">
        <div>
            <label style="font-weight: 700; display: block; margin-bottom: 5px;">🚘 Marka i Model Auta:</label>
            <input type="text" name="higloss_car_model" value="<?php echo esc_attr($car_model); ?>" placeholder="np. Audi A7 Sportback" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:0;" />
        </div>
        <div>
            <label style="font-weight: 700; display: block; margin-bottom: 5px;">🛠️ Wykonana Usługa:</label>
            <input type="text" name="higloss_service_type" value="<?php echo esc_attr($service_type); ?>" placeholder="np. Całościowa Zmiana Koloru" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:0;" />
        </div>
        <div>
            <label style="font-weight: 700; display: block; margin-bottom: 5px;">📜 Użyta Folia / Materiał:</label>
            <input type="text" name="higloss_film_used" value="<?php echo esc_attr($film_used); ?>" placeholder="np. 3M 2080 Series Gloss Blue" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:0;" />
        </div>
        <div>
            <label style="font-weight: 700; display: block; margin-bottom: 5px;">⏱️ Czas Realizacji:</label>
            <input type="text" name="higloss_execution_time" value="<?php echo esc_attr($exec_time); ?>" placeholder="np. 4 Dni Robocze" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:0;" />
        </div>
        <div>
            <label style="font-weight: 700; display: block; margin-bottom: 5px;">✨ Wykończenie Powierzchni:</label>
            <input type="text" name="higloss_finish_type" value="<?php echo esc_attr($finish_type); ?>" placeholder="np. Głęboki Połysk / Satyna" style="width:100%; padding:8px; border:1px solid #ccc; border-radius:0;" />
        </div>
    </div>
    <?php
}

/**
 * Render Gallery Metabox
 */
function higloss_render_gallery_metabox($post) {
    wp_nonce_field('higloss_save_gallery', 'higloss_gallery_nonce');

    $gallery_images = get_post_meta($post->ID, '_higloss_gallery_images', true);
    ?>
    <div style="padding: 10px 0;">
        <p style="margin-bottom: 12px; color: #555;">Dodaj wielkoformatowe zdjęcia pojazdu z różnych ujęć (przód, tył, bok, detale). Wybrane zdjęcia utworzą interaktywną galerię na stronie przedniej.</p>
        
        <input type="hidden" name="higloss_gallery_images" id="higloss_gallery_images" value="<?php echo esc_attr($gallery_images); ?>" />

        <div style="display: flex; gap: 10px; align-items: center; margin-bottom: 15px;">
            <button type="button" class="button button-primary button-large" id="higloss_upload_gallery_btn" style="border-radius: 0 !important; font-weight: 700;">
                ➕ Dodaj / Edytuj Zdjęcia w Galerii
            </button>
            <button type="button" class="button button-link-delete" id="higloss_clear_gallery_btn" style="color: #a00;">
                🗑️ Wyczyść Galerię
            </button>
        </div>

        <div id="higloss_gallery_preview" style="display: flex; flex-wrap: wrap; gap: 12px; min-height: 100px; padding: 12px; background: #f8f9fa; border: 2px dashed #ccc;">
            <!-- Thumbnails rendered dynamically via JS -->
        </div>
    </div>
    <?php
}

/**
 * Save Realizacje Meta
 */
function higloss_save_realizacje_meta($post_id) {
    if (!isset($_POST['higloss_specs_nonce']) || !wp_verify_nonce($_POST['higloss_specs_nonce'], 'higloss_save_specs')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['higloss_car_model'])) {
        update_post_meta($post_id, '_higloss_car_model', sanitize_text_field($_POST['higloss_car_model']));
    }
    if (isset($_POST['higloss_service_type'])) {
        update_post_meta($post_id, '_higloss_service_type', sanitize_text_field($_POST['higloss_service_type']));
    }
    if (isset($_POST['higloss_film_used'])) {
        update_post_meta($post_id, '_higloss_film_used', sanitize_text_field($_POST['higloss_film_used']));
    }
    if (isset($_POST['higloss_execution_time'])) {
        update_post_meta($post_id, '_higloss_execution_time', sanitize_text_field($_POST['higloss_execution_time']));
    }
    if (isset($_POST['higloss_finish_type'])) {
        update_post_meta($post_id, '_higloss_finish_type', sanitize_text_field($_POST['higloss_finish_type']));
    }
    if (isset($_POST['higloss_gallery_images'])) {
        update_post_meta($post_id, '_higloss_gallery_images', sanitize_text_field($_POST['higloss_gallery_images']));
    }
}
add_action('save_post_realizacje', 'higloss_save_realizacje_meta');

/**
 * Enqueue Media Uploader Scripts in WP Admin
 */
function higloss_admin_gallery_scripts($hook) {
    global $post_type;
    if (($hook === 'post.php' || $hook === 'post-new.php') && $post_type === 'realizacje') {
        wp_enqueue_media();
        ?>
        <script>
        jQuery(document).ready(function($) {
            var frame;
            var $imagesInput = $('#higloss_gallery_images');
            var $preview = $('#higloss_gallery_preview');

            function renderPreview() {
                $preview.empty();
                var ids = $imagesInput.val() ? $imagesInput.val().split(',').filter(Boolean) : [];
                if (ids.length === 0) {
                    $preview.html('<span style="color:#888; font-style:italic; align-self:center;">Brak dodanych zdjęć. Kliknij przycisk powyżej, aby dodać zdjęcia.</span>');
                    return;
                }

                ids.forEach(function(id) {
                    var attachment = wp.media.attachment(id);
                    attachment.fetch().then(function() {
                        var url = attachment.get('sizes') && attachment.get('sizes').thumbnail ? attachment.get('sizes').thumbnail.url : attachment.get('url');
                        var $box = $('<div style="position:relative; width:110px; height:110px; border:2px solid #25aae1; background:#000; overflow:hidden;">' +
                            '<img src="' + url + '" style="width:100%; height:100%; object-fit:cover;" />' +
                            '<button type="button" class="remove-img" data-id="' + id + '" style="position:absolute; top:3px; right:3px; background:#e11d48; color:#fff; border:none; border-radius:50%; width:22px; height:22px; cursor:pointer; font-size:12px; line-height:22px; text-align:center; font-weight:bold;">&times;</button>' +
                            '</div>');
                        $preview.append($box);
                    });
                });
            }

            renderPreview();

            $('#higloss_upload_gallery_btn').on('click', function(e) {
                e.preventDefault();
                if (frame) {
                    frame.open();
                    return;
                }

                frame = wp.media({
                    title: 'Wybierz Zdjęcia Do Galerii Realizacji',
                    button: { text: 'Dodaj Zdjęcia Do Galerii' },
                    multiple: true
                });

                frame.on('select', function() {
                    var selection = frame.state().get('selection');
                    var currentIds = $imagesInput.val() ? $imagesInput.val().split(',').filter(Boolean) : [];
                    selection.map(function(attachment) {
                        attachment = attachment.toJSON();
                        if (currentIds.indexOf(attachment.id.toString()) === -1) {
                            currentIds.push(attachment.id);
                        }
                    });
                    $imagesInput.val(currentIds.join(','));
                    renderPreview();
                });

                frame.open();
            });

            $preview.on('click', '.remove-img', function(e) {
                e.preventDefault();
                var idToRemove = $(this).data('id').toString();
                var currentIds = $imagesInput.val().split(',').filter(Boolean);
                var newIds = currentIds.filter(function(id) { return id !== idToRemove; });
                $imagesInput.val(newIds.join(','));
                renderPreview();
            });

            $('#higloss_clear_gallery_btn').on('click', function(e) {
                e.preventDefault();
                if (confirm('Czy na pewno chcesz usunąć wszystkie zdjęcia z tej galerii?')) {
                    $imagesInput.val('');
                    renderPreview();
                }
            });
        });
        </script>
        <?php
    }
}
add_action('admin_footer', 'higloss_admin_gallery_scripts');

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

    $to = get_option('admin_email', 'biuro@hi-glossdesign.pl');
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

    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: Hi-Gloss Website <noreply@hi-glossdesign.pl>');

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
                "opens" => "08:00",
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
