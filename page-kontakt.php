<?php
/**
 * Template Name: Podstrona Kontakt
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = HIGLOSS_THEME_URI;
?>

<main id="main-content" class="hg-landing">
    <section class="hg-hero hg-page-hero" aria-labelledby="hero-title">
        <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/kontakt_z_nami.webp'); ?>" alt="" width="1408" height="768" fetchpriority="high">
        <div class="hg-hero-shade"></div>
        <div class="hg-hero-grid" aria-hidden="true"></div>
        <div class="hg-container hg-hero-inner">
            <div class="hg-hero-content">
                <p class="hg-eyebrow hg-reveal"><span></span> Studio · ul. Podmiejska 4, Mierzyn</p>
                <h1 id="hero-title" class="hg-hero-title hg-reveal">Zacznijmy<br><span>Twój projekt.</span></h1>
                <p class="hg-hero-lead hg-reveal">Zadzwoń, napisz albo wpadnij do hali. Opowiedz o aucie i oczekiwanym efekcie — wrócimy z zakresem, materiałem i terminem.</p>
                <div class="hg-hero-actions hg-reveal">
                    <a href="tel:+48605088065" class="hg-btn hg-btn-primary">605 088 065 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                    <a href="#wycena" class="hg-btn hg-btn-ghost">Formularz wyceny <svg class="hg-ui-icon hg-ui-icon--arrow-down" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M6 13.5l6 6 6-6"/></svg></a>
                </div>
            </div>
            <div class="hg-hero-proof hg-reveal" role="group" aria-label="Dane kontaktu">
                <div><strong>09–17</strong><span>poniedziałek<br>– piątek</span></div>
                <div><strong>500+</strong><span>oklejonych<br>pojazdów</span></div>
                <div><strong>10</strong><span>min z centrum<br>Szczecina</span></div>
            </div>
        </div>
    </section>

    <?php
    get_template_part(
        'template-parts/quote-block',
        null,
        array(
            'quote_service'    => '',
            'quote_show_map'   => true,
            'quote_kicker'     => 'Kontakt i wycena',
            'quote_title_html' => 'Hala jest<br><span>otwarta.</span>',
            'quote_lead'       => 'Najszybciej połączysz się telefonicznie. Formularz zostawiamy na wyceny z opisem auta i zdjęciami.',
        )
    );
    ?>
</main>

<?php get_footer(); ?>
