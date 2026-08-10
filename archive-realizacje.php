<?php
/**
 * The template for displaying Realizacje (CPT) Archive
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/galeria_realizacji.png'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">PORTFOLIO STUDIO SZCZECIN - MIERZYN</span>
                <h1 class="hg-subpage-banner-title">
                    GALERIA <span style="color: #25aae1;">REALIZACJI</span>
                </h1>
            </div>
        </div>

        <?php if (have_posts()) : ?>
            <div class="hg-grid hg-grid-3" style="gap: 2rem; margin-bottom: 4rem;">
                <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="hg-ai-mastercard tile-theme-cyan" style="min-height: 340px; height: 340px;">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium_large', array('class' => 'hg-ai-card-img')); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile3_galeria.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="hg-ai-card-img">
                        <?php endif; ?>
                        <div class="hg-ai-card-vignette"></div>

                        <div class="hg-ai-card-body">
                            <div style="font-size: 0.75rem; font-weight: 800; color: #25aae1; text-transform: uppercase; margin-bottom: 0.4rem; letter-spacing: 0.1em;">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'kategoria_realizacji');
                                echo ($terms && !is_wp_error($terms)) ? esc_html($terms[0]->name) : 'REALIZACJA';
                                ?>
                            </div>
                            <h2 class="hg-ai-card-title" style="font-size: 1.35rem; margin-bottom: 0.5rem;">
                                <?php the_title(); ?>
                            </h2>
                            <p class="hg-ai-card-desc" style="font-size: 0.88rem; margin-bottom: 0.8rem; line-height: 1.5;">
                                <?php echo wp_trim_words(get_the_excerpt(), 12, '...'); ?>
                            </p>
                        </div>
                    </a>
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
                    Brak opublikowanych realizacji w portfolio.
                </h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 2rem;">
                    Zapraszamy do kontaktu z biurem HI-GLOSS DESIGN w celu zobaczenia zdjęć bezpośrednio z warsztatu.
                </p>
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.9rem 1.8rem; font-weight: 800;">
                    SKONTAKTUJ SIĘ Z NAMI &rarr;
                </a>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
