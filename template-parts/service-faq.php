<?php
/**
 * Sekcja FAQ na stronach uslug (zmiana koloru / PPF / reklama / detailing).
 * Dane pochodza z higloss_service_faqs() — to samo zrodlo co schema FAQPage
 * w <head> (higloss_render_service_faq_schema), wiec tresc = schema 1:1.
 *
 * @package HiGloss2026
 */

$slug = get_post_field('post_name', get_queried_object_id());
$faq  = function_exists('higloss_service_faqs') ? higloss_service_faqs($slug) : null;

if (empty($faq['items'])) {
    return;
}
?>

<section class="hg-container" style="margin-bottom: 1rem;">
    <div class="hg-editorial-card" style="--card-accent: #25aae1;">
        <h2 class="hg-editorial-title"><?php echo esc_html($faq['title']); ?></h2>
        <div class="hg-accordion">
            <?php foreach ($faq['items'] as $index => $pair) : ?>
                <details<?php echo $index === 0 ? ' open' : ''; ?>>
                    <summary><?php echo esc_html($pair[0]); ?><span></span></summary>
                    <div><p><?php echo esc_html($pair[1]); ?></p></div>
                </details>
            <?php endforeach; ?>
        </div>
        <div class="hg-editorial-highlight-box" style="--card-accent: #25aae1;">
            <strong style="color: #25aae1; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Nie znalazłeś odpowiedzi?</strong>
            <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Zadzwoń pod <a href="tel:+48605088065" style="color: #25aae1; font-weight: 700;">605 088 065</a> albo zostaw zapytanie w <a href="<?php echo esc_url(home_url('/#wycena')); ?>" style="color: #25aae1; font-weight: 700;">formularzu wyceny</a> — odpowiadamy do 24 h.</span>
        </div>
    </div>
</section>
