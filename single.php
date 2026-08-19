<?php
/**
 * The template for displaying all single posts
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        
        <?php while (have_posts()) : the_post(); ?>
            <article style="max-width: 900px; margin: 0 auto;">
                
                <!-- POST HEADER BADGE & METADATA -->
                <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1.25rem; flex-wrap: wrap;">
                    <span class="hg-subpage-banner-badge" style="margin: 0;">
                        <?php echo get_the_category_list(', '); ?>
                    </span>
                    <span style="color: #94a3b8; font-size: 0.88rem; font-weight: 700; text-transform: uppercase;">
                        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 0.95em; color: #25aae1;"><rect x="3" y="4.5" width="18" height="17" rx="2"/><path d="M16 2.5v4M8 2.5v4M3 9.5h18"/></svg> <?php echo get_the_date('d.m.Y'); ?>
                    </span>
                </div>

                <!-- POST TITLE -->
                <h1 style="font-family: var(--font-heading, 'Montserrat', sans-serif); font-size: clamp(2rem, 4.5vw, 3.2rem); font-weight: 900; color: #ffffff; text-transform: uppercase; line-height: 1.15; margin-bottom: 2rem; text-shadow: 0 4px 20px rgba(0,0,0,0.8);">
                    <?php the_title(); ?>
                </h1>

                <!-- FEATURED IMAGE -->
                <?php if (has_post_thumbnail()) : ?>
                    <div style="width: 100%; border: 2px solid #25aae1; border-radius: 0 !important; overflow: hidden; margin-bottom: 3rem; box-shadow: 0 20px 40px rgba(0,0,0,0.8);">
                        <?php the_post_thumbnail('full', array('style' => 'width:100%; height:auto; display:block; object-fit:cover;')); ?>
                    </div>
                <?php endif; ?>

                <!-- EDITORIAL CONTENT -->
                <div class="hg-editorial-card" style="margin-bottom: 3rem;">
                    <div style="color: #e2e8f0; font-size: 1.1rem; line-height: 1.85;">
                        <?php the_content(); ?>
                    </div>
                </div>

                <!-- POST NAVIGATION & CTA -->
                <div style="display: flex; justify-content: space-between; gap: 1.5rem; flex-wrap: wrap; border-top: 1px solid rgba(255,255,255,0.12); padding-top: 2rem;">
                    <div>
                        <?php previous_post_link('%link', '&larr; Poprzedni artykuł'); ?>
                    </div>
                    <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.8rem 1.6rem; font-size: 0.88rem; font-weight: 800;">
                        PEŁNA OFERTA STUDIO &rarr;
                    </a>
                    <div>
                        <?php next_post_link('%link', 'Następny artykuł &rarr;'); ?>
                    </div>
                </div>

            </article>
        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
