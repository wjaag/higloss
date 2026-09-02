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
            // Gdy tytuł już zawiera markę/model, nie powtarzamy go w dopiskach
            $model_label = (!empty($car_model) && ! higloss_model_in_title($car_model)) ? $car_model : '';
            $spec_rows   = higloss_get_realizacja_specs(get_the_ID());
            $before_id   = (int) get_post_meta(get_the_ID(), '_higloss_before_image', true);
        ?>

            <!-- HERO COMPACT BANNER -->
            <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; <?php if (has_post_thumbnail()) : ?>background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');<?php endif; ?>">
                <div class="hg-subpage-banner-vignette"></div>
                <div class="hg-subpage-banner-content">
                    <span class="hg-subpage-banner-badge">
                        <?php echo !empty($model_label) ? esc_html($model_label) : 'REALIZACJA HI-GLOSS DESIGN'; ?>
                    </span>
                    <h1 class="hg-subpage-banner-title">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>

            <!-- PRZED / PO COMPARE (IF BEFORE IMAGE ADDED IN ADMIN) -->
            <?php if ($before_id && has_post_thumbnail()) :
                $before_full  = wp_get_attachment_image_url($before_id, 'full');
                $before_large = wp_get_attachment_image_url($before_id, 'large');
                $after_full   = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $after_large  = get_the_post_thumbnail_url(get_the_ID(), 'large');
            ?>
                <div style="margin-bottom: 3.5rem;">
                    <h3 style="font-family: var(--font-heading); font-size: 1.3rem; color: #ffffff; text-transform: uppercase; margin-bottom: 1.25rem; letter-spacing: 0.05em; display: flex; align-items: center; gap: 0.6rem;">
                        <span style="color: #25aae1; display: inline-flex; line-height: 1;"><svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg></span> EFEKT PRZED / PO
                    </h3>

                    <div class="hg-grid hg-grid-2" style="gap: 1.5rem;">
                        <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($before_full); ?>" data-lightbox-title="PRZED — <?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr($model_label ?: 'Realizacja HI-GLOSS'); ?>" style="height: 320px; border: 1px solid var(--hg-line);">
                            <img src="<?php echo esc_url($before_large); ?>" alt="PRZED — <?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; top: 12px; left: 12px; z-index: 3; background: rgba(0,0,0,0.72); border: 1px solid rgba(255,255,255,0.35); color: #ffffff; padding: 0.35rem 0.8rem; font-weight: 800; font-size: 0.72rem; letter-spacing: 0.1em; text-transform: uppercase;">Przed</span>
                            <div class="hg-gallery-vignette"></div>
                            <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                                <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                            </button>
                        </div>

                        <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($after_full); ?>" data-lightbox-before="<?php echo esc_url($before_full); ?>" data-lightbox-title="PO — <?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr(($model_label ? $model_label . ' &bull; ' : '') . ($service_type ?: 'Realizacja HI-GLOSS')); ?>" style="height: 320px; border: 1px solid var(--hg-line);">
                            <img src="<?php echo esc_url($after_large); ?>" alt="PO — <?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; top: 12px; left: 12px; z-index: 3; background: #25aae1; color: #04121d; padding: 0.35rem 0.8rem; font-weight: 800; font-size: 0.72rem; letter-spacing: 0.1em; text-transform: uppercase;">Po</span>
                            <div class="hg-gallery-vignette"></div>
                            <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                                <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                            </button>
                        </div>
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
                        <?php if (empty($spec_rows)) : ?>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Pojazd:</span>
                            <strong style="color: #25aae1; font-size: 1rem;"><?php echo esc_html(get_the_title()); ?></strong>
                        </div>
                        <?php else : ?>
                        <?php foreach ($spec_rows as $row) :
                            $accent = ('_higloss_film_used' === $row['key']) ? '#25aae1' : '#ffffff';
                        ?>
                        <div style="display: flex; justify-content: space-between; gap: 1rem; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; flex: none;"><?php echo esc_html($row['label']); ?>:</span>
                            <strong style="color: <?php echo esc_attr($accent); ?>; font-size: 1rem; text-align: right;"><?php echo esc_html($row['value']); ?></strong>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- CALL CTA BUTTON -->
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-cyan" style="width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem; margin-bottom: 1rem;">
                        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> ZADZWOŃ: 605 088 065 <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg>
                    </a>

                    <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-btn hg-btn-outline" style="width: 100%; justify-content: center; font-size: 0.88rem; font-weight: 800; text-align: center;">
                        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 12H4M10 6l-6 6 6 6"/></svg> Powrót do Galerii
                    </a>
                </div>

            </div>

            <!-- DYSKRETNE LINKOWANIE WEWNETRZNE: realizacja -> strona uslugi + poradnik FAQ -->
            <?php
            $_rel_map = array(
                'ppf'           => array(array('/ppf/', 'Zobacz usługę: bezbarwne folie ochronne PPF'), array('/ile-kosztuje-folia-ppf-cennik/', 'Ile kosztuje folia PPF — cennik')),
                'reklama'       => array(array('/reklama/', 'Zobacz usługę: reklama i branding flot'), array('/jak-dlugo-trzyma-sie-folia/', 'Jak długo trzyma się folia na aucie?')),
                'detailing'     => array(array('/detailing/', 'Zobacz usługę: szyby, dechroming i detailing'), array('/przyciemnianie-szyb-przepisy/', 'Przyciemnianie szyb — co mówią przepisy')),
                'zmiana-koloru' => array(array('/zmiana-koloru/', 'Zobacz usługę: zmiana koloru auta folią'), array('/ile-kosztuje-zmiana-koloru-auta-folia/', 'Ile kosztuje zmiana koloru auta folią?')),
            );
            $_rel_slug = function_exists('higloss_service_guess') ? higloss_service_guess(get_the_title() . ' ' . $service_type) : null;
            if ($_rel_slug && isset($_rel_map[$_rel_slug])) :
                list($_rel_page, $_rel_faq) = $_rel_map[$_rel_slug];
            ?>
            <p class="hg-xlinks">
                <span class="hg-xlinks-label">Powiązane:</span>
                <a href="<?php echo esc_url($_rel_page[0]); ?>"><?php echo esc_html($_rel_page[1]); ?></a>
                <span class="hg-xlinks-sep" aria-hidden="true">·</span>
                <a href="<?php echo esc_url($_rel_faq[0]); ?>"><?php echo esc_html($_rel_faq[1]); ?></a>
            </p>
            <?php endif; ?>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
