<?php
/**
 * Template Name: Podstrona FAQ (lista artykulow w stylu archiwum + zdjecia)
 *
 * Hub FAQ: hero + wstep (tresc strony z WP-Admin) + siatka 2-kolumnowa kart
 * artykulow (jak archive.php, ale ze zdjeciami z mapy poradnika) + CTA.
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = get_template_directory_uri();

$faq_paged = max(1, (int) get_query_var('paged'), (int) get_query_var('page'));
$faq_query = new WP_Query(array(
    'post_type'           => 'post',
    'posts_per_page'      => 10,
    'paged'               => $faq_paged,
    'orderby'             => 'date',
    'order'               => 'DESC',
    'ignore_sticky_posts' => true,
));
?>

<main id="main-content" style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url($theme_uri . '/assets/images/ai_tile2_oferta.webp'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">FAQ &bull; WIEDZA ZE STUDIA &bull; SZCZECIN / MIERZYN</span>
                <h1 class="hg-subpage-banner-title">
                    PYTANIA <span style="color: #25aae1;">I ODPOWIEDZI</span>
                </h1>
            </div>
        </div>

        <?php
        // Wstep SEO — pole tresci tej strony (edytowalne w WP-Admin)
        $faq_intro = trim((string) get_post_field('post_content', get_the_ID()));
        if ('' !== $faq_intro) :
        ?>
        <div class="hg-editorial-card hg-post-content" style="padding: 2rem 2.2rem; margin-top: 1.5rem; font-size: 1.02rem;">
            <?php echo apply_filters('the_content', $faq_intro); ?>
        </div>
        <?php endif; ?>

        <div style="margin-top: 2.5rem;"></div>

        <?php if ($faq_query->have_posts()) : ?>
            <div class="hg-grid hg-grid-2" style="gap: 2.5rem; margin-bottom: 2.5rem;">
                <?php while ($faq_query->have_posts()) : $faq_query->the_post();
                    $lead = has_excerpt() ? get_the_excerpt() : wp_trim_words(wp_strip_all_tags(get_the_content()), 24, '...');
                ?>
                    <article class="hg-editorial-card" style="display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <a href="<?php the_permalink(); ?>" style="display: block; margin-bottom: 1.5rem; border: 1px solid rgba(255,255,255,0.15); overflow: hidden;">
                                <img src="<?php echo esc_url(higloss_poradnik_image(get_the_ID())); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%; height:220px; object-fit:cover; display:block;" loading="lazy" decoding="async" width="768" height="432">
                            </a>

                            <div style="font-size: 0.78rem; font-weight: 800; color: #25aae1; text-transform: uppercase; margin-bottom: 0.5rem; letter-spacing: 0.1em;">
                                <?php echo get_the_date('d.m.Y'); ?>
                            </div>

                            <h2 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem;">
                                <a href="<?php the_permalink(); ?>" style="color: #ffffff; text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div style="color: #cbd5e1; font-size: 0.98rem; line-height: 1.7; margin-bottom: 1.5rem;">
                                <?php echo esc_html($lead); ?>
                            </div>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="hg-btn hg-btn-cyan" style="align-self: flex-start; padding: 0.75rem 1.4rem; font-size: 0.85rem; font-weight: 800;">
                            CZYTAJ WIĘCEJ &rarr;
                        </a>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- PAGINACJA (aktywuje sie przy >10 artykulach) -->
            <div class="hg-poradnik-pagination" style="text-align: center;">
                <?php
                echo paginate_links(array(
                    'total'     => $faq_query->max_num_pages,
                    'current'   => $faq_paged,
                    'format'    => '?paged=%#%',
                    'prev_text' => '&laquo; Nowsze',
                    'next_text' => 'Starsze &raquo;',
                ));
                ?>
            </div>

        <?php else : ?>
            <div class="hg-editorial-card" style="text-align: center; padding: 4rem 2rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.8rem; color: #ffffff; margin-bottom: 1rem;">
                    ODPOWIEDZI W PRZYGOTOWANIU
                </h2>
                <p style="color: #cbd5e1; font-size: 1.05rem; margin-bottom: 2rem;">
                    Zbieramy najczęstsze pytania z warsztatu — pierwsze artykuły pojawią się wkrótce.
                </p>
                <a href="<?php echo esc_url(home_url('/oferta/')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.9rem 1.8rem; font-weight: 800;">
                    ZOBACZ OFERTĘ STUDIO &rarr;
                </a>
            </div>
        <?php endif; ?>

        <!-- CTA -->
        <div class="hg-editorial-card" style="margin-top: 2rem; background: linear-gradient(135deg, rgba(14, 20, 30, 0.95), rgba(7, 10, 16, 0.95)); border: 1px solid rgba(37, 170, 225, 0.4); padding: 3rem; text-align: center;">
            <span style="color: #25aae1; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                NIE ZNALAZŁEŚ ODPOWIEDZI? &bull; STUDIO SZCZECIN / MIERZYN
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem; letter-spacing: -0.02em;">
                ZAPYTAJ &mdash; ODPOWIADAMY DO 24 H
            </h2>
            <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 680px; margin: 0 auto 2.2rem; line-height: 1.6;">
                Podaj markę i model auta oraz swoje pytanie. Odezwiemy się z konkretną odpowiedzią i — jeśli chcesz — wyceną realizacji.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+48605088065" class="hg-btn hg-btn-cyan" style="padding: 1rem 2rem; font-weight: 900;">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> ZADZWOŃ: 605 088 065
                </a>
                <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-btn hg-btn-outline" style="padding: 1rem 2rem; font-weight: 800;">
                    FORMULARZ WYCENY &rarr;
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
