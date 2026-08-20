<?php
/**
 * The template for displaying archive pages
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile2_oferta.webp'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">ARCHIWUM STUDIO HI-GLOSS</span>
                <h1 class="hg-subpage-banner-title">
                    <?php the_archive_title(); ?>
                </h1>
            </div>
        </div>

        <?php if (have_posts()) : ?>
            <div class="hg-grid hg-grid-2" style="gap: 2.5rem; margin-bottom: 4rem;">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="hg-editorial-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <?php if (has_post_thumbnail()) : ?>
                                <div style="margin-bottom: 1.5rem; border: 1px solid rgba(255,255,255,0.15); overflow: hidden;">
                                    <?php the_post_thumbnail('medium_large', array('style' => 'width:100%; height:220px; object-fit:cover; display:block;')); ?>
                                </div>
                            <?php endif; ?>

                            <div style="font-size: 0.78rem; font-weight: 800; color: #25aae1; text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.1em;">
                                <?php echo get_the_date('d.m.Y'); ?>
                            </div>

                            <h2 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem;">
                                <a href="<?php the_permalink(); ?>" style="color: #ffffff; text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div style="color: #cbd5e1; font-size: 0.98rem; line-height: 1.7; margin-bottom: 1.5rem;">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="hg-btn hg-btn-cyan" style="align-self: flex-start; padding: 0.75rem 1.4rem; font-size: 0.85rem; font-weight: 800;">
                            CZYTAJ WIĘCEJ &rarr;
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- PAGINATION -->
            <div style="text-align: center;">
                <?php the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Poprzednie', 'higloss2026'),
                    'next_text' => __('Następne &raquo;', 'higloss2026'),
                )); ?>
            </div>

        <?php else : ?>
            <div class="hg-editorial-card" style="text-align: center; padding: 4rem 2rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; color: #ffffff; margin-bottom: 1rem;">
                    BRAK WPISÓW W ARCHIWUM
                </h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 2rem;">
                    W tej sekcji brak wpisów. Zapraszamy do zapoznania się z naszą ofertą oklejania aut i PPF.
                </p>
                <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.9rem 1.8rem; font-weight: 800;">
                    ZOBACZ OFERTĘ STUDIO &rarr;
                </a>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
