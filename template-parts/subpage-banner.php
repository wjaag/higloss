<?php
/**
 * Wspolny szablon: kompaktowy baner na gorze podstrony (zdjecie tla,
 * plakietka, H1, opcjonalny opis). Wczesniej ten sam blok HTML byl
 * powielony osobno w kazdym pliku page-*.php — teraz jest w jednym miejscu.
 *
 * Oczekiwane $args (wszystkie opcjonalne poza image/title):
 *   'accent' (string) kolor HEX np. '#25aae1' — steruje ramka/plakietka/
 *                      podswietleniem w H1 (przez zmienna CSS --banner-accent).
 *                      Domyslnie '#25aae1'.
 *   'image'  (string) pelny URL zdjecia tla. Pomijany, gdy pusty (np. brak
 *                      miniatury na realizacji bez zdjecia).
 *   'badge'  (string) gotowy HTML plakietki nad H1 (moze zawierac &bull; itp.).
 *                      Pomijany, gdy pusty.
 *   'title'  (string) gotowy HTML wewnatrz H1 — moze zawierac <span> do
 *                      podswietlenia kolorem accent (CSS dopisuje kolor sam).
 *   'desc'   (string) opcjonalny jeden akapit opisu pod H1.
 *
 * @package HiGloss2026
 */

$hg_banner_accent = !empty($args['accent']) ? $args['accent'] : '#25aae1';
$hg_banner_image  = !empty($args['image']) ? $args['image'] : '';
$hg_banner_badge  = !empty($args['badge']) ? $args['badge'] : '';
$hg_banner_title  = !empty($args['title']) ? $args['title'] : '';
$hg_banner_desc   = !empty($args['desc']) ? $args['desc'] : '';
?>
<div class="hg-subpage-image-banner" style="--banner-accent: <?php echo esc_attr($hg_banner_accent); ?>;<?php if ($hg_banner_image) : ?> background-image: url('<?php echo esc_url($hg_banner_image); ?>');<?php endif; ?>">
    <div class="hg-subpage-banner-vignette"></div>
    <div class="hg-subpage-banner-content">
        <?php if ($hg_banner_badge) : ?>
        <span class="hg-subpage-banner-badge"><?php echo $hg_banner_badge; ?></span>
        <?php endif; ?>
        <h1 class="hg-subpage-banner-title">
            <?php echo $hg_banner_title; ?>
        </h1>
        <?php if ($hg_banner_desc) : ?>
        <p class="hg-subpage-banner-desc"><?php echo $hg_banner_desc; ?></p>
        <?php endif; ?>
    </div>
</div>
