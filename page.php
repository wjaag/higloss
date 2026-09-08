<?php
/**
 * Default Page Template
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = HIGLOSS_THEME_URI;
?>

<main id="main-content" class="hg-landing">
    <?php while (have_posts()) : the_post(); ?>
        <section class="hg-hero hg-page-hero" aria-labelledby="hero-title">
            <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/ai_tile2_oferta.webp'); ?>" srcset="<?php echo esc_url($theme_uri . '/assets/images/ai_tile2_oferta-480.webp'); ?> 480w, <?php echo esc_url($theme_uri . '/assets/images/ai_tile2_oferta-768.webp'); ?> 768w, <?php echo esc_url($theme_uri . '/assets/images/ai_tile2_oferta.webp'); ?> 1408w" sizes="100vw" alt="<?php echo esc_attr(get_the_title() . ' — HI-GLOSS DESIGN, Szczecin / Mierzyn'); ?>" width="1408" height="768" fetchpriority="high" data-no-lazy="1">
            <div class="hg-hero-shade"></div>
            <div class="hg-hero-grid" aria-hidden="true"></div>
            <div class="hg-container hg-hero-inner">
                <div class="hg-hero-content">
                    <p class="hg-eyebrow hg-reveal"><span></span> HI-GLOSS DESIGN · Szczecin / Mierzyn</p>
                    <h1 id="hero-title" class="hg-hero-title hg-reveal"><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
        <section class="hg-section">
            <div class="hg-container">
                <article class="hg-legal hg-reveal">
                    <?php the_content(); ?>
                </article>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
