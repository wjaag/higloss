<?php
/**
 * Single Realizacja Template
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem;">
    <div class="hg-container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="hg-glass-card">
                <div class="hg-badge">Realizacja Hi-Gloss Design</div>
                <h1 class="hg-section-title" style="margin-bottom: 1.5rem;"><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div style="margin-bottom: 2rem; border-radius: var(--radius-md); overflow: hidden;">
                        <?php the_post_thumbnail('full', array('style' => 'width:100%; height:auto; max-height:500px; object-fit:cover;')); ?>
                    </div>
                <?php endif; ?>

                <div style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.8; margin-bottom: 2rem;">
                    <?php the_content(); ?>
                </div>

                <a href="<?php echo esc_url(home_url('/#realizacje')); ?>" class="hg-btn hg-btn-outline">
                    &larr; Powrót do Galerii Realizacji
                </a>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
