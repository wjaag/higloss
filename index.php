<?php
/**
 * Main Index Template (Fallback)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 10rem 0 6rem;">
    <div class="hg-container">
        <?php if (have_posts()) : ?>
            <div class="hg-grid hg-grid-3">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="hg-glass-card">
                        <h2 style="font-family: var(--font-heading); font-size: 1.4rem; color: #fff; margin-bottom: 0.75rem;">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.25rem;">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" style="color: var(--accent-blue); font-weight: 700; font-size: 0.9rem;">
                            Czytaj więcej &rarr;
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="hg-glass-card" style="text-align: center;">
                <h2 style="font-family: var(--font-heading); font-size: 1.5rem; color: #fff; margin-bottom: 1rem;">Brak treści</h2>
                <p style="color: var(--text-muted);">Nie znaleziono wpisów spełniających podane kryteria.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
