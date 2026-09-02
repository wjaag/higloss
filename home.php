<?php
/**
 * Template: strona postow (Poradnik) — listing artykulow SEO.
 *
 * Styl 1:1 z page-galeria.php (te same klasy hg-gallery-*) — spojny wyglad
 * bez dodatkowego CSS. Przypisanie: Ustawienia -> Czytanie -> Strona z wpisami
 * (ustawiane automatycznie przez bootstrap v2).
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="main-content" style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_zmiana_koloru.webp'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">ODPOWIEDZI EKSPERTA &bull; OKLEJANIE &bull; PPF &bull; DETAILING</span>
                <h1 class="hg-subpage-banner-title">
                    PYTANIA <span style="color: #25aae1;">I ODPOWIEDZI</span>
                </h1>
                <p style="color: #cbd5e1; max-width: 640px; margin: 0.8rem 0 0; font-size: 0.95rem; line-height: 1.6;">
                    Rzetelne odpowiedzi na pytania, które słyszymy codziennie w studiu: cenniki, przepisy, pielęgnacja i technologia. Bez marketingowej wody — piszemy o tym, co robimy pod Szczecinem.
                </p>
            </div>
        </div>

        <?php
        // Tresc strony "Pytania" (pole tresci w WP-Admin) — blok SEO nad lista
        $posts_page_id = (int) get_option('page_for_posts');
        $intro_html    = $posts_page_id ? trim((string) get_post_field('post_content', $posts_page_id)) : '';
        if ('' !== $intro_html) :
        ?>
        <div class="hg-editorial-card hg-post-content" style="padding: 2rem 2.2rem; margin-top: 1.5rem; font-size: 1.02rem;">
            <?php echo apply_filters('the_content', $intro_html); ?>
        </div>
        <?php endif; ?>

        <div style="margin-top: 2.5rem;"></div>

        <?php if (have_posts()) : ?>

            <!-- SIATKA ARTYKULOW -->
            <div class="hg-gallery-grid">
                <?php while (have_posts()) : the_post();
                    $img_url   = higloss_poradnik_image(get_the_ID());
                    $cats      = get_the_category();
                    $cat_name  = (!empty($cats) && !is_wp_error($cats)) ? $cats[0]->name : 'Poradnik';
                    $lead      = has_excerpt() ? get_the_excerpt() : wp_trim_words(wp_strip_all_tags(get_the_content()), 22, '...');
                    $read_time = higloss_reading_time(get_the_content());
                ?>
                    <article class="hg-gallery-card">
                        <a href="<?php the_permalink(); ?>" class="hg-gallery-media-box" style="display: block; text-decoration: none;">
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" decoding="async">
                            <div class="hg-gallery-vignette"></div>
                            <span class="hg-gallery-cat-pill cat-zmiana-koloru"><?php echo esc_html($cat_name); ?></span>
                        </a>

                        <div class="hg-gallery-content">
                            <div>
                                <h2 class="hg-gallery-title">
                                    <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
                                </h2>
                                <p class="hg-gallery-desc"><?php echo esc_html($lead); ?></p>
                            </div>

                            <div>
                                <div class="hg-gallery-specs-row">
                                    <span class="hg-gallery-spec-item">Data: <strong><?php echo get_the_date('d.m.Y'); ?></strong></span>
                                    <span class="hg-gallery-spec-item">Czytania: <strong>~<?php echo (int) $read_time; ?> min</strong></span>
                                </div>
                                <div class="hg-gallery-actions">
                                    <a href="<?php the_permalink(); ?>" class="hg-gallery-card-btn btn-primary">
                                        Czytaj artykuł &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- PAGINACJA (pojawi sie przy >10 artykulach) -->
            <div class="hg-poradnik-pagination" style="margin-top: 2.5rem;">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '&larr; Nowsze',
                    'next_text' => 'Starsze &rarr;',
                ));
                ?>
            </div>

        <?php else : ?>

            <div class="hg-editorial-card" style="padding: 3rem; text-align: center;">
                <h2 style="font-family: var(--hg-heading); color: #ffffff; text-transform: uppercase; margin-bottom: 1rem;">Artykuły w przygotowaniu</h2>
                <p style="color: #cbd5e1;">Eksperckie poradniki o foliach i ochronie lakieru pojawią się tutaj wkrótce.</p>
            </div>

        <?php endif; ?>

        <!-- CTA KONWERSYJNE -->
        <div class="hg-editorial-card" style="margin-top: 2rem; background: linear-gradient(135deg, rgba(14, 20, 30, 0.95), rgba(7, 10, 16, 0.95)); border: 1px solid rgba(37, 170, 225, 0.4); padding: 3rem; text-align: center;">
            <span style="color: #25aae1; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                MASZ PYTANIE PO LEKTURZE? &bull; STUDIO SZCZECIN / MIERZYN
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem; letter-spacing: -0.02em;">
                PORADZIMY I WYCENIMY &mdash; BEZPŁATNIE
            </h2>
            <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 680px; margin: 0 auto 2.2rem; line-height: 1.6;">
                Podaj markę i model auta oraz usługę, która Cię interesuje. Odezwiemy się z konkretną propozycją materiału i kalkulacją.
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
