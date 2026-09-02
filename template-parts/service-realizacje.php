<?php
/**
 * Kafelki realizacji dopasowane do biezacej strony uslugi + przycisk do galerii.
 * Dopasowanie: taksonomia kategoria_realizacji, awaryjnie rozpoznawanie po slowach
 * kluczowych (higloss_service_guess). Desktop: siatka 3 kol., mobile: slider poziomy.
 *
 * @package HiGloss2026
 */

$slug  = get_post_field('post_name', get_queried_object_id());
$heads = array(
    'zmiana-koloru' => array('label' => 'zmiana koloru',                'accent' => '#25aae1'),
    'ppf'           => array('label' => 'ochrona lakieru PPF',          'accent' => '#10b981'),
    'reklama'       => array('label' => 'reklama i branding',           'accent' => '#ff9900'),
    'detailing'     => array('label' => 'szyby, dechroming i detailing','accent' => '#ff0055'),
);

if (empty($heads[$slug])) {
    return;
}

$svc_query = new WP_Query(array(
    'post_type'              => 'realizacje',
    'posts_per_page'         => 18,
    'orderby'                => 'date',
    'order'                  => 'DESC',
    'no_found_rows'          => true,
    'ignore_sticky_posts'    => true,
));

if (!$svc_query->have_posts()) {
    return;
}

$matched = array();
$any     = array();

foreach ($svc_query->posts as $svc_p) {
    if (!has_post_thumbnail($svc_p)) {
        continue;
    }
    $any[] = $svc_p;

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
        $matched[] = $svc_p;
    }
}

$picked  = $matched ? array_slice($matched, 0, 3) : array_slice($any, 0, 3);
if (!$picked) {
    return;
}

$accent     = $heads[$slug]['accent'];
$title_html = $matched
    ? 'Realizacje: <span>' . esc_html($heads[$slug]['label']) . '</span>'
    : 'Najnowsze <span>realizacje</span>';
?>
<section class="hg-svc-reals" style="--svc-accent: <?php echo esc_attr($accent); ?>;" aria-label="<?php echo esc_attr('Realizacje: ' . $heads[$slug]['label']); ?>">
    <div class="hg-svc-reals-head">
        <div>
            <span class="hg-svc-reals-eyebrow">Przykłady z naszej hali</span>
            <h2 class="hg-svc-reals-title"><?php echo $title_html; ?></h2>
        </div>
        <a class="hg-btn hg-btn-outline hg-svc-reals-more" href="<?php echo esc_url(home_url('/galeria/#usluga-' . $slug)); ?>">
            Wszystkie realizacje
            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg>
        </a>
    </div>

    <div class="hg-svc-reals-grid">
        <?php foreach ($picked as $svc_p) :
            $svc_thumb = get_post_thumbnail_id($svc_p->ID);
            $svc_tag   = get_post_meta($svc_p->ID, '_higloss_service_type', true);
        ?>
        <a class="hg-svc-real-card" href="<?php echo esc_url(get_permalink($svc_p)); ?>">
            <span class="hg-svc-real-media">
                <?php
                echo wp_get_attachment_image($svc_thumb, 'large', false, array(
                    'alt'      => get_the_title($svc_p),
                    'loading'  => 'lazy',
                    'decoding' => 'async',
                ));
                ?>
                <span class="hg-svc-real-pill"><?php echo esc_html($svc_tag ? $svc_tag : $heads[$slug]['label']); ?></span>
            </span>
            <span class="hg-svc-real-body">
                <strong><?php echo esc_html(get_the_title($svc_p)); ?></strong>
                <small><?php echo esc_html($svc_tag ? $svc_tag . ' · Szczecin / Mierzyn' : 'Realizacja · Szczecin / Mierzyn'); ?></small>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</section>
