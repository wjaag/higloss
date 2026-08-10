<?php
/**
 * Single Realizacja Template - High-Definition Car Gallery & Project Specs
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">
        
        <?php while (have_posts()) : the_post(); 
            $car_model   = get_post_meta(get_the_ID(), '_higloss_car_model', true);
            $service_type= get_post_meta(get_the_ID(), '_higloss_service_type', true);
            $film_used   = get_post_meta(get_the_ID(), '_higloss_film_used', true);
            $exec_time   = get_post_meta(get_the_ID(), '_higloss_execution_time', true);
            $finish_type = get_post_meta(get_the_ID(), '_higloss_finish_type', true);
            $gallery_raw = get_post_meta(get_the_ID(), '_higloss_gallery_images', true);
            $gallery_ids = array_filter(explode(',', $gallery_raw));
        ?>

            <!-- HERO COMPACT BANNER -->
            <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; <?php if (has_post_thumbnail()) : ?>background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');<?php endif; ?>">
                <div class="hg-subpage-banner-vignette"></div>
                <div class="hg-subpage-banner-content">
                    <span class="hg-subpage-banner-badge">
                        <?php echo !empty($car_model) ? esc_html($car_model) : 'REALIZACJA HI-GLOSS DESIGN'; ?>
                    </span>
                    <h1 class="hg-subpage-banner-title">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>

            <!-- MULTI-PHOTO GALLERY GRID (IF ADDED IN ADMIN) -->
            <?php if (!empty($gallery_ids)) : ?>
                <div style="margin-bottom: 3.5rem;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.3rem; color: #ffffff; text-transform: uppercase; margin-bottom: 1.25rem; letter-spacing: 0.05em; display: flex; align-items: center; gap: 0.6rem;">
                        <span>📸</span> GALERIA ZDJĘĆ PROJEKTU (<?php echo count($gallery_ids); ?> UJĘCIA)
                    </h3>

                    <div class="hg-grid hg-grid-3" style="gap: 1.5rem;">
                        <?php foreach ($gallery_ids as $img_id) : 
                            $img_url = wp_get_attachment_image_url($img_id, 'full');
                            $img_thumb = wp_get_attachment_image_url($img_id, 'large');
                            if ($img_url) :
                        ?>
                            <a href="<?php echo esc_url($img_url); ?>" target="_blank" style="display: block; border: 1px solid rgba(255,255,255,0.18); overflow: hidden; height: 260px; position: relative; transition: border-color 0.3s ease;" onmouseover="this.style.borderColor='#25aae1'" onmouseout="this.style.borderColor='rgba(255,255,255,0.18)'">
                                <img src="<?php echo esc_url($img_thumb); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.06)'" onmouseout="this.style.transform='scale(1.0)'">
                            </a>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- 2-COLUMN EDITORIAL & SPECS GRID -->
            <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 3.5rem;">
                
                <!-- LEFT COLUMN: CASE STUDY / DESCRIPTION -->
                <div class="hg-editorial-card">
                    <h2 class="hg-editorial-title">
                        Opis Projektu &amp; Zakres Prac
                    </h2>

                    <div class="hg-editorial-paragraph">
                        <?php if (get_the_content()) : ?>
                            <?php the_content(); ?>
                        <?php else : ?>
                            <p>Projekt zrealizowany w profesjonalnym studio oklejania pojazdów **HI-GLOSS DESIGN** w Mierzynie k. Szczecina z zachowaniem rygorystycznych procedur demontażu oraz aplikacji folii.</p>
                        <?php endif; ?>
                    </div>

                    <div class="hg-editorial-highlight-box">
                        <strong style="color: #25aae1; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem;">Precyzja Wykonania w Mierzynie:</strong>
                        <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Prace wykonane w ogrzewanej hali z zachowaniem sterylnych warunków montażowych. Folie zawijane głęboko pod elementy dla efektu lakieru fabrycznego.</span>
                    </div>
                </div>

                <!-- RIGHT COLUMN: PROJECT SPECS CARD -->
                <div class="hg-specs-cta-card">
                    <h3 class="hg-specs-title">
                        SPECYFIKACJA PROJEKTU
                    </h3>

                    <div style="display: flex; flex-direction: column; gap: 1.2rem; color: #ffffff; margin-bottom: 2rem;">
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Pojazd:</span>
                            <strong style="color: #25aae1; font-size: 1rem;"><?php echo !empty($car_model) ? esc_html($car_model) : esc_html(get_the_title()); ?></strong>
                        </div>

                        <?php if (!empty($service_type)) : ?>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Usługa:</span>
                            <strong style="color: #ffffff; font-size: 1rem;"><?php echo esc_html($service_type); ?></strong>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($film_used)) : ?>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Folia / Materiał:</span>
                            <strong style="color: #25aae1; font-size: 1rem;"><?php echo esc_html($film_used); ?></strong>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($exec_time)) : ?>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Usługi:</span>
                            <strong style="color: #ffffff; font-size: 1rem;"><?php echo esc_html($exec_time); ?></strong>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($finish_type)) : ?>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Wykończenie:</span>
                            <strong style="color: #ffffff; font-size: 1rem;"><?php echo esc_html($finish_type); ?></strong>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- CALL CTA BUTTON -->
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-cyan" style="width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem; margin-bottom: 1rem;">
                        📞 ZADZWOŃ: 605 088 065 &rarr;
                    </a>

                    <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-btn hg-btn-outline" style="width: 100%; justify-content: center; font-size: 0.88rem; font-weight: 800; text-align: center;">
                        &larr; Powrót do Galerii
                    </a>
                </div>

            </div>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
