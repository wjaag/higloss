<?php
/**
 * Default Page Template
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem;">
    <div class="hg-container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="hg-glass-card">
                <h1 class="hg-section-title" style="margin-bottom: 2rem;"><?php the_title(); ?></h1>
                <div style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
