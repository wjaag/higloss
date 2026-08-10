<?php
/**
 * Template Name: Podstrona Galeria Realizacji (Dynamic CPT Query)
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
                    GALERIA REALIZACJI <span style="color: #25aae1;">HI-GLOSS</span>
                </h1>
            </div>
        </div>

        <?php
        $args = array(
            'post_type'      => 'realizacje',
            'posts_per_page' => 12,
            'orderby'        => 'date',
            'order'          => 'DESC'
        );
        $realizacje_query = new WP_Query($args);
        ?>

        <?php if ($realizacje_query->have_posts()) : ?>
            <div class="hg-grid hg-grid-3" style="gap: 2rem;">
                <?php while ($realizacje_query->have_posts()) : $realizacje_query->the_post(); 
                    $service_tag = get_post_meta(get_the_ID(), '_higloss_service_type', true);
                    $car_model   = get_post_meta(get_the_ID(), '_higloss_car_model', true);
                ?>
                    <a href="<?php the_permalink(); ?>" class="hg-ai-mastercard tile-theme-cyan" style="min-height: 350px; height: 350px;">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium_large', array('class' => 'hg-ai-card-img')); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_tile3_galeria.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="hg-ai-card-img">
                        <?php endif; ?>
                        <div class="hg-ai-card-vignette"></div>

                        <div class="hg-ai-card-body">
                            <span style="font-size: 0.75rem; color: #25aae1; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">
                                <?php echo !empty($service_tag) ? esc_html($service_tag) : 'REALIZACJA STUDIO'; ?>
                            </span>
                            <h2 class="hg-ai-card-title" style="font-size: 1.35rem; margin-bottom: 0.5rem;">
                                <?php the_title(); ?>
                            </h2>
                            <p class="hg-ai-card-desc" style="font-size: 0.88rem; line-height: 1.5; margin-bottom: 0.8rem;">
                                <?php echo !empty($car_model) ? esc_html($car_model) : wp_trim_words(get_the_excerpt(), 10, '...'); ?>
                            </p>
                            <div class="hg-ai-card-btn" style="padding: 0.4rem 0.9rem; font-size: 0.72rem;">
                                ZOBACZ SZCZEGÓŁY &rarr;
                            </div>
                        </div>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            
            <!-- FALLBACK DEMO REALISATIONS -->
            <div class="hg-grid hg-grid-3" style="gap: 2rem;">
                
                <a href="<?php echo esc_url(home_url('/zmiana-koloru')); ?>" class="hg-ai-mastercard tile-theme-cyan" style="min-height: 350px; height: 350px;">
                    <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_zmiana_koloru.jpg'); ?>" alt="Audi A7" class="hg-ai-card-img">
                    <div class="hg-ai-card-vignette"></div>
                    <div class="hg-ai-card-body">
                        <span style="font-size: 0.75rem; color: #25aae1; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">Zmiana Koloru Auta</span>
                        <h2 class="hg-ai-card-title" style="font-size: 1.35rem; margin-bottom: 0.5rem;">AUDI A7 - NIEBIESKI POŁYSK AVERY</h2>
                        <p class="hg-ai-card-desc" style="font-size: 0.88rem; line-height: 1.5; margin-bottom: 0.8rem;">Całościowa zmiana koloru folią Avery Dennison z demontażem klamek i zderzaków.</p>
                        <div class="hg-ai-card-btn" style="padding: 0.4rem 0.9rem; font-size: 0.72rem;">
                            ZOBACZ OFERTĘ &rarr;
                        </div>
                    </div>
                </a>

                <a href="<?php echo esc_url(home_url('/ppf')); ?>" class="hg-ai-mastercard tile-theme-green" style="min-height: 350px; height: 350px;">
                    <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_ppf.jpg'); ?>" alt="Porsche Panamera" class="hg-ai-card-img">
                    <div class="hg-ai-card-vignette"></div>
                    <div class="hg-ai-card-body">
                        <span style="font-size: 0.75rem; color: #10b981; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">Bezbarwna Ochrona PPF</span>
                        <h2 class="hg-ai-card-title" style="font-size: 1.35rem; margin-bottom: 0.5rem;">PORSCHE PANAMERA - FULL FRONT PPF</h2>
                        <p class="hg-ai-card-desc" style="font-size: 0.88rem; line-height: 1.5; margin-bottom: 0.8rem;">Pakiet ochronny przedniego pasa folią poliuretanową o grubości 180 mikronów.</p>
                        <div class="hg-ai-card-btn" style="padding: 0.4rem 0.9rem; font-size: 0.72rem; background: #10b981; border-color: #10b981;">
                            ZOBACZ OFERTĘ &rarr;
                        </div>
                    </div>
                </a>

                <a href="<?php echo esc_url(home_url('/reklama')); ?>" class="hg-ai-mastercard tile-theme-amber" style="min-height: 350px; height: 350px;">
                    <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_reklama.jpg'); ?>" alt="DHL Courier Fleet" class="hg-ai-card-img">
                    <div class="hg-ai-card-vignette"></div>
                    <div class="hg-ai-card-body">
                        <span style="font-size: 0.75rem; color: #ff9900; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; display: block; margin-bottom: 0.3rem;">Branding Floty</span>
                        <h2 class="hg-ai-card-title" style="font-size: 1.35rem; margin-bottom: 0.5rem;">DHL COURIER - FLOTA 40 POJAZDÓW</h2>
                        <p class="hg-ai-card-desc" style="font-size: 0.88rem; line-height: 1.5; margin-bottom: 0.8rem;">Oklejanie reklamowe i branding całej floty aut dostawczych w Mierzynie.</p>
                        <div class="hg-ai-card-btn" style="padding: 0.4rem 0.9rem; font-size: 0.72rem; background: #ff9900; border-color: #ff9900;">
                            ZOBACZ OFERTĘ &rarr;
                        </div>
                    </div>
                </a>

            </div>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
