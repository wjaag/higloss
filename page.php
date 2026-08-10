<?php
/**
 * Default Page Template
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        <?php while (have_posts()) : the_post(); ?>
            <article style="max-width: 950px; margin: 0 auto;">
                
                <!-- COMPACT HERO BANNER -->
                <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile2_oferta.jpg'); ?>');">
                    <div class="hg-subpage-banner-vignette"></div>
                    <div class="hg-subpage-banner-content">
                        <span class="hg-subpage-banner-badge">HI-GLOSS DESIGN SZCZECIN</span>
                        <h1 class="hg-subpage-banner-title">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>

                <div class="hg-editorial-card">
                    <div style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85;">
                        <?php the_content(); ?>
                    </div>
                </div>

            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
