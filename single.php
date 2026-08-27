<?php
/**
 * The template for displaying all single posts (Poradnik)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <?php while (have_posts()) : the_post();
            $img_url   = higloss_poradnik_image(get_the_ID());
            $read_time = higloss_reading_time(get_the_content());
        ?>
            <article style="max-width: 900px; margin: 0 auto;">

                <!-- BREADCRUMB -->
                <nav aria-label="Okruszki" style="margin-bottom: 1.5rem; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: #94a3b8;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #94a3b8; text-decoration: none;">Strona główna</a>
                    <span style="color: #25aae1; margin: 0 0.4rem;">&raquo;</span>
                    <a href="<?php echo esc_url(home_url('/poradnik/')); ?>" style="color: #94a3b8; text-decoration: none;">Poradnik</a>
                    <span style="color: #25aae1; margin: 0 0.4rem;">&raquo;</span>
                    <span style="color: #cbd5e1;"><?php echo esc_html(wp_trim_words(get_the_title(), 6, '...')); ?></span>
                </nav>

                <!-- POST HEADER BADGE & METADATA -->
                <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.25rem; flex-wrap: wrap;">
                    <span class="hg-subpage-banner-badge" style="margin: 0;">
                        <?php echo get_the_category_list(', '); ?>
                    </span>
                    <span style="color: #94a3b8; font-size: 0.88rem; font-weight: 700; text-transform: uppercase;">
                        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 0.95em; color: #25aae1;"><rect x="3" y="4.5" width="18" height="17" rx="2"/><path d="M16 2.5v4M8 2.5v4M3 9.5h18"/></svg> <?php echo get_the_date('d.m.Y'); ?>
                    </span>
                    <span style="color: #94a3b8; font-size: 0.88rem; font-weight: 700; text-transform: uppercase;">
                        ~<?php echo (int) $read_time; ?> min czytania
                    </span>
                </div>

                <!-- POST TITLE -->
                <h1 style="font-family: var(--font-heading, 'Montserrat', sans-serif); font-size: clamp(1.9rem, 4vw, 3rem); font-weight: 900; color: #ffffff; text-transform: uppercase; line-height: 1.15; margin-bottom: 2rem; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                    <?php the_title(); ?>
                </h1>

                <!-- HERO IMAGE (featured lub statyczny asset poradnika) -->
                <div style="width: 100%; border: 2px solid #25aae1; border-radius: 0 !important; overflow: hidden; margin-bottom: 3rem; box-shadow: 0 20px 40px rgba(0,0,0,0.8);">
                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%; height:auto; display:block; object-fit:cover;" loading="eager" decoding="async">
                </div>

                <!-- EDITORIAL CONTENT -->
                <div class="hg-editorial-card" style="margin-bottom: 3rem;">
                    <div class="hg-post-content" style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85;">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- POST NAVIGATION & CTA -->
                <div style="display: flex; justify-content: space-between; gap: 1.5rem; flex-wrap: wrap; border-top: 1px solid rgba(255,255,255,0.12); padding-top: 2rem;">
                    <div>
                        <?php previous_post_link('%link', '&larr; Poprzedni artykuł'); ?>
                    </div>
                    <a href="<?php echo esc_url(home_url('/oferta/')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.8rem 1.6rem; font-size: 0.88rem; font-weight: 800;">
                        PEŁNA OFERTA STUDIO &rarr;
                    </a>
                    <div>
                        <?php next_post_link('%link', 'Następny artykuł &rarr;'); ?>
                    </div>
                </div>

            </article>
        <?php endwhile; ?>

        <!-- POWIĄZANE ARTYKUŁY -->
        <?php
        $related = new WP_Query(array(
            'post_type'           => 'post',
            'posts_per_page'      => 3,
            'post__not_in'        => array(get_the_ID()),
            'ignore_sticky_posts' => true,
        ));
        if ($related->have_posts()) :
        ?>
        <div style="max-width: 900px; margin: 4rem auto 0;">
            <h2 style="font-family: var(--font-heading, 'Montserrat', sans-serif); font-size: clamp(1.3rem, 2.5vw, 1.8rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.5rem;">
                PRZECZYTAJ TAKŻE <span style="color: #25aae1;">&raquo;</span>
            </h2>
            <div class="hg-gallery-grid">
                <?php while ($related->have_posts()) : $related->the_post(); ?>
                    <article class="hg-gallery-card">
                        <a href="<?php the_permalink(); ?>" class="hg-gallery-media-box" style="display: block; text-decoration: none;">
                            <img src="<?php echo esc_url(higloss_poradnik_image(get_the_ID())); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                            <div class="hg-gallery-vignette"></div>
                        </a>
                        <div class="hg-gallery-content">
                            <div>
                                <h3 class="hg-gallery-title" style="font-size: 1rem;">
                                    <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
                                </h3>
                            </div>
                            <div>
                                <div class="hg-gallery-actions">
                                    <a href="<?php the_permalink(); ?>" class="hg-gallery-card-btn btn-primary">Czytaj &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
