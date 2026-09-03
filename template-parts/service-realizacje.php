<?php
/**
 * Karta PRZYKŁADOWEJ realizacji danej usługi — prawa kolumna podstrony usługi, pod sekcją SPECYFIKACJA.
 *
 * Jedna najnowsza realizacja dopasowana do strony usługi: taksonomia kategoria_realizacji,
 * awaryjnie rozpoznawanie po słowach kluczowych (higloss_service_guess).
 * Pod kartą link do przefiltrowanej galerii (#usluga-... — filtr uruchamia assets/js/main.js).
 *
 * Karta renderuje się jako drugi element .hg-service-side, dlatego NIE jest lepka —
 * przyklejony blok SPECYFIKACJA nachodziłby na nią podczas przewijania (zwłaszcza na mobile).
 *
 * @package HiGloss2026
 */

$slug  = get_post_field('post_name', get_queried_object_id());
$heads = array(
    'zmiana-koloru' => array('label' => 'zmiana koloru',                 'accent' => '#25aae1'),
    'ppf'           => array('label' => 'ochrona lakieru PPF',           'accent' => '#10b981'),
    'reklama'       => array('label' => 'reklama i branding',            'accent' => '#ff9900'),
    'detailing'     => array('label' => 'szyby, dechroming i detailing', 'accent' => '#ff0055'),
);

if (empty($heads[$slug])) {
    return;
}

$svc_query = new WP_Query(array(
    'post_type'           => 'realizacje',
    'posts_per_page'      => 18,
    'orderby'             => 'date',
    'order'               => 'DESC',
    'no_found_rows'       => true,
    'ignore_sticky_posts' => true,
));

if (!$svc_query->have_posts()) {
    return;
}

$first_match = null;
$first_any   = null;

foreach ($svc_query->posts as $svc_p) {
    if (!has_post_thumbnail($svc_p)) {
        continue;
    }
    if (!$first_any) {
        $first_any = $svc_p;
    }

    $hit   = false;
    $terms = get_the_terms($svc_p->ID, 'kategoria_realizacji');
    if ($terms && !is_wp_error($terms)) {
        foreach ($terms as $term) {
            if ($term->slug === $slug) { $hit = true; break; }
        }
    }
    if (!$hit && function_exists('higloss_service_guess')) {
        $hit = higloss_service_guess(get_the_title($svc_p) . ' ' . get_post_meta($svc_p->ID, '_higloss_service_type', true)) === $slug;
    }
    if ($hit) {
        $first_match = $svc_p;
        break;
    }
}

$picked = $first_match ? $first_match : $first_any;
if (!$picked) {
    return;
}

$accent  = $heads[$slug]['accent'];
$tag     = get_post_meta($picked->ID, '_higloss_service_type', true);
$model   = get_post_meta($picked->ID, '_higloss_car_model', true);
$title   = get_the_title($picked);
$heading = $first_match ? 'Przykładowa realizacja' : 'Najnowsza realizacja';
$meta    = array_filter(array($model, $tag ? $tag : $heads[$slug]['label'], 'Szczecin / Mierzyn'));
?>
<aside class="hg-svc-real-single" style="--svc-accent: <?php echo esc_attr($accent); ?>;" aria-label="<?php echo esc_attr($heading); ?>">
    <h3 class="hg-specs-title hg-svc-real-title">
        <?php echo esc_html($heading); ?>
    </h3>

    <a class="hg-svc-real-card" href="<?php echo esc_url(get_permalink($picked)); ?>">
        <span class="hg-svc-real-media">
            <?php
            echo wp_get_attachment_image(get_post_thumbnail_id($picked->ID), 'medium_large', false, array(
                'alt'      => $title,
                'loading'  => 'lazy',
                'decoding' => 'async',
            ));
            ?>
            <span class="hg-svc-real-pill" aria-hidden="true"><?php echo esc_html($tag ? $tag : $heads[$slug]['label']); ?></span>
            <span class="hg-svc-real-view" aria-hidden="true">
                Zobacz realizację
                <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg>
            </span>
        </span>
        <span class="hg-svc-real-body">
            <strong><?php echo esc_html($title); ?></strong>
            <small><?php echo esc_html(implode(' · ', $meta)); ?></small>
        </span>
    </a>

    <a class="hg-svc-real-more" href="<?php echo esc_url(home_url('/galeria/#usluga-' . $slug)); ?>">
        Więcej realizacji: <?php echo esc_html($heads[$slug]['label']); ?>
        <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg>
    </a>
</aside>
