<?php
/**
 * The template for displaying search results
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile2_oferta.jpg'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">WYSZUKIWARKA STUDIO HI-GLOSS</span>
                <h1 class="hg-subpage-banner-title">
                    WYNIKI DLA: <span style="color: #25aae1;">"<?php echo get_search_query(); ?>"</span>
                </h1>
            </div>
        </div>

        <!-- SEARCH FORM -->
        <div style="max-width: 600px; margin: 0 auto 3rem auto;">
            <?php get_search_form(); ?>
        </div>

        <?php if (have_posts()) : ?>
            
            <div class="hg-grid hg-grid-2" style="gap: 2.5rem; margin-bottom: 4rem;">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="hg-editorial-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="font-size: 0.78rem; font-weight: 800; color: #25aae1; text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.1em;">
                                <?php echo get_post_type() === 'realizacje' ? 'Realizacja Portfolio' : 'Strona Usługowa'; ?>
                            </div>

                            <h2 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem;">
                                <a href="<?php the_permalink(); ?>" style="color: #ffffff; text-decoration: none; transition: color 0.3s ease;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div style="color: #cbd5e1; font-size: 0.98rem; line-height: 1.7; margin-bottom: 1.5rem;">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="hg-btn hg-btn-cyan" style="align-self: flex-start; padding: 0.75rem 1.4rem; font-size: 0.85rem; font-weight: 800;">
                            ZOBACZ WIĘCEJ &rarr;
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- PAGINATION -->
            <div style="text-align: center; margin-top: 2rem;">
                <?php the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&laquo; Poprzednia', 'higloss2026'),
                    'next_text' => __('Następna &raquo;', 'higloss2026'),
                )); ?>
            </div>

        <?php else : ?>

            <div class="hg-editorial-card" style="text-align: center; padding: 4rem 2rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; color: #ffffff; margin-bottom: 1rem;">
                    BRAK WYNIKÓW DLA FRAZY "<?php echo get_search_query(); ?>"
                </h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Nie znaleziono podstron ani wpisów pasujących do wpisanego zapytania. Spróbuj poszukać np. **PPF**, **3M**, **zmiana koloru**, **dechroming** lub **DHL**.
                </p>
                <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.9rem 1.8rem; font-weight: 800;">
                    PRZEJDŹ DO PEŁNEJ OFERTY &rarr;
                </a>
            </div>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
