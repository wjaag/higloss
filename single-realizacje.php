<?php
/**
 * Single Realizacja Template - High-Definition Car Gallery & Project Specs
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 0 0 5rem; flex: 1;">

        <?php while (have_posts()) : the_post(); 
            $car_model   = get_post_meta(get_the_ID(), '_higloss_car_model', true);
            $service_type= get_post_meta(get_the_ID(), '_higloss_service_type', true);
            // Gdy tytuł już zawiera markę/model, nie powtarzamy go w dopiskach
            $model_label = (!empty($car_model) && ! higloss_model_in_title($car_model)) ? $car_model : '';
            $spec_rows   = higloss_get_realizacja_specs(get_the_ID());
            $before_id   = (int) get_post_meta(get_the_ID(), '_higloss_before_image', true);

            // Tytul realizacji zwykle w formacie "Model — Efekt" — dzielimy na dwie linie hero,
            // druga czesc dostaje stylistyczny "pusty" konturowy wariant (jak na innych podstronach).
            // Jesli myslnika brak, wyswietlamy caly tytul jedna linia (bezpieczny fallback).
            $hg_title_raw = get_the_title();
            if (false !== strpos($hg_title_raw, ' — ')) {
                list($hg_title_l1, $hg_title_l2) = explode(' — ', $hg_title_raw, 2);
                $hg_hero_title_html = esc_html($hg_title_l1) . '<br><span>' . esc_html($hg_title_l2) . '</span>';
            } else {
                $hg_hero_title_html = esc_html($hg_title_raw);
            }
            $hg_hero_eyebrow = !empty($model_label)
                ? esc_html($model_label) . ' · Studio Szczecin / Mierzyn'
                : 'Realizacja HI-GLOSS DESIGN · Szczecin / Mierzyn';
            $hg_hero_lead = has_excerpt()
                ? get_the_excerpt()
                : 'Zobacz pełną specyfikację projektu, zdjęcia przed / po i szczegóły materiałowe tej realizacji HI-GLOSS DESIGN.';
        ?>

            <!-- HERO (bez zdjecia w tle — sam gradient + siatka, jak reszta design-systemu) -->
            <section class="hg-hero hg-page-hero" aria-labelledby="hero-title">
                <div class="hg-hero-shade"></div>
                <div class="hg-hero-grid" aria-hidden="true"></div>
                <div class="hg-container hg-hero-inner">
                    <div class="hg-hero-content">
                        <p class="hg-eyebrow hg-reveal"><span></span> <?php echo $hg_hero_eyebrow; ?></p>
                        <h1 id="hero-title" class="hg-hero-title hg-reveal"><?php echo $hg_hero_title_html; ?></h1>
                        <p class="hg-hero-lead hg-reveal"><?php echo esc_html($hg_hero_lead); ?></p>
                        <div class="hg-hero-actions hg-reveal">
                            <a href="tel:+48605088065" class="hg-btn hg-btn-primary">Zadzwoń: 605 088 065 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-ghost">Bezpłatna wycena <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                        </div>
                    </div>
                    <div class="hg-hero-proof hg-reveal" role="group" aria-label="Dlaczego warto nam zaufać">
                        <div><strong>500+</strong><span>oklejonych<br>pojazdów</span></div>
                        <div><strong>15 lat</strong><span>doświadczenia<br>w branży</span></div>
                        <div><strong>10 lat</strong><span>gwarancji<br>na folie PPF</span></div>
                    </div>
                </div>
            </section>

    <div class="hg-container" style="margin-top: 3rem;">

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
                        <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($before_full); ?>" data-lightbox-title="PRZED — <?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr($model_label ?: 'Realizacja HI-GLOSS'); ?>" data-lightbox-desc="<?php echo esc_attr(wp_trim_words(get_the_excerpt() ? get_the_excerpt() : get_the_title(), 26, '…')); ?>" style="height: 320px; border: 1px solid var(--hg-line);">
                            <img src="<?php echo esc_url($before_large); ?>" alt="PRZED — <?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            <span style="position: absolute; top: 12px; left: 12px; z-index: 3; background: rgba(0,0,0,0.72); border: 1px solid rgba(255,255,255,0.35); color: #ffffff; padding: 0.35rem 0.8rem; font-weight: 800; font-size: 0.72rem; letter-spacing: 0.1em; text-transform: uppercase;">Przed</span>
                            <div class="hg-gallery-vignette"></div>
                            <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                                <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                            </button>
                        </div>

                        <div class="hg-gallery-media-box" data-lightbox-img="<?php echo esc_url($after_full); ?>" data-lightbox-before="<?php echo esc_url($before_full); ?>" data-lightbox-title="PO — <?php the_title_attribute(); ?>" data-lightbox-meta="<?php echo esc_attr(($model_label ? $model_label . ' &bull; ' : '') . ($service_type ?: 'Realizacja HI-GLOSS')); ?>" data-lightbox-desc="<?php echo esc_attr(wp_trim_words(get_the_excerpt() ? get_the_excerpt() : get_the_title(), 26, '…')); ?>" style="height: 320px; border: 1px solid var(--hg-line);">
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
                            <p>Projekt zrealizowany w profesjonalnym studio oklejania pojazdów <strong>HI-GLOSS DESIGN</strong> w Mierzynie k. Szczecina z zachowaniem rygorystycznych procedur demontażu oraz aplikacji folii.</p>
                        <?php endif; ?>
                    </div>

                    <div class="hg-editorial-highlight-box">
                        <strong style="color: #25aae1; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem;">Precyzja Wykonania w Mierzynie:</strong>
                        <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Prace wykonane w ogrzewanej hali z zachowaniem sterylnych warunków montażowych. Folie zawijane głęboko pod elementy dla efektu lakieru fabrycznego.</span>
                    </div>
                </div>

<!-- RIGHT COLUMN: PROJECT SPECS CARD -->
                <div class="hg-specs-cta-card">
            <?php
            $spec_icons = array(
                '_higloss_car_model'       => '<path d="M3 12l2-5h14l2 5v5h-3m-12 0H3v-5Zm4 0h10"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/>',
                '_higloss_service_type'    => '<path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 0 0 5.4-5.4l-2.9 2.9-2.1-2.1 2.9-2.9Z"/>',
                '_higloss_service_subtype' => '<path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 0 0 5.4-5.4l-2.9 2.9-2.1-2.1 2.9-2.9Z"/>',
                '_higloss_execution_time'  => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
                '_higloss_film_used'       => '<path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="m3 13 9 5 9-5"/>',
                '_higloss_finish_type'     => '<path d="M12 3v3m0 12v3M3 12h3m12 0h3M5.6 5.6l2.1 2.1m8.6 8.6 2.1 2.1m0-12.8-2.1 2.1M7.7 16.3l-2.1 2.1"/><circle cx="12" cy="12" r="3"/>',
                '_higloss_scope'           => '<path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>',
                '_higloss_ppf_package'     => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                '_higloss_ppf_thickness'   => '<path d="M3 17 17 3l4 4L7 21l-4-4Zm4-4 1.5 1.5M11 9l1.5 1.5M15 5l1.5 1.5"/>',
                '_higloss_warranty'        => '<circle cx="12" cy="12" r="9"/><path d="m9 12 2 2 4-4"/>',
                '_higloss_vehicle_count'   => '<path d="M1 8h13v8H1zM14 11h4l3 3v2h-7"/><circle cx="6" cy="18" r="1.6"/><circle cx="17.5" cy="18" r="1.6"/>',
                '_higloss_attest'          => '<path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8l-5-5Z"/><path d="m9 13 2 2 4-4"/>',
            );
            $spec_icon_default = '<circle cx="12" cy="12" r="9"/><path d="M12 11v5m0-8h.01"/>';
            $spec_icon_car     = $spec_icons['_higloss_car_model'];
            ?>
                    <h3 class="hg-specs-title">
                        SPECYFIKACJA PROJEKTU
                    </h3>

                    <div style="display: flex; flex-direction: column; gap: 1.2rem; color: #ffffff; margin-bottom: 2rem;">
                        <?php if (empty($spec_rows)) : ?>
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; display: inline-flex; align-items: center; gap: 0.5rem;"><svg class="hg-ui-icon" style="color: #25aae1;" viewBox="0 0 24 24" aria-hidden="true"><?php echo $spec_icon_car; ?></svg>Pojazd:</span>
                            <strong style="color: #25aae1; font-size: 1rem;"><?php echo esc_html(get_the_title()); ?></strong>
                        </div>
                        <?php else : ?>
                        <?php foreach ($spec_rows as $row) :
                            $accent = ('_higloss_film_used' === $row['key']) ? '#25aae1' : '#ffffff';
                        ?>
                        <div style="display: flex; justify-content: space-between; gap: 1rem; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem; flex: none; display: inline-flex; align-items: center; gap: 0.5rem;"><svg class="hg-ui-icon" style="color: #25aae1;" viewBox="0 0 24 24" aria-hidden="true"><?php echo $spec_icons[$row['key']] ?? $spec_icon_default; ?></svg><?php echo esc_html($row['label']); ?>:</span>
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
                'dechroming'          => array(array('/dechroming/', 'Zobacz usługę: dechroming (Shadow Line)'), array('/przyciemnianie-szyb-przepisy/', 'Przyciemnianie szyb — co mówią przepisy')),
                'przyciemnianie-szyb' => array(array('/przyciemnianie-szyb/', 'Zobacz usługę: przyciemnianie szyb'), array('/pielegnacja-folii-po-oklejeniu/', 'Jak dbać o folię po oklejeniu auta')),
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

            <!-- LOKALNY KONTEKST REALIZACJI (SEO lokalne — bez zmian w tytule wpisu) -->
            <p class="hg-xlinks">
                <span class="hg-xlinks-label">Studio:</span>
                Realizacja wykonana w studiu <strong>HI-GLOSS DESIGN</strong> w Mierzynie pod Szczecinem (ul. Podmiejska 4) — ogrzewana hala, demontaż wg procedur fabrycznych i folie premium z gwarancją producenta.
                <span class="hg-xlinks-sep" aria-hidden="true">·</span>
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>">Umów bezpłatną wycenę podobnego projektu</a>
            </p>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
