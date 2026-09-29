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

            // Chipy w hero: cala specyfikacja OPROCZ pol, ktore juz dublowalyby
            // tresc naglowka/pigulki kategorii (marka+model oraz nazwa uslugi).
            $hg_hidden_hero_keys = array('_higloss_car_model', '_higloss_service_type');
            $hg_specs_hero = array_values(array_filter($spec_rows, function ($row) use ($hg_hidden_hero_keys) {
                return !in_array($row['key'], $hg_hidden_hero_keys, true);
            }));

            // Pigulka kategorii — klikalna, prowadzi do przefiltrowanej galerii (kotwica #usluga-{slug}).
            $hg_term      = function_exists('higloss_realizacja_term') ? higloss_realizacja_term(get_the_ID()) : null;
            $hg_cat_name  = $hg_term ? $hg_term->name : 'Realizacja HI-GLOSS';
            $hg_cat_slug  = $hg_term ? $hg_term->slug : 'zmiana-koloru';
            $hg_cat_link  = home_url('/galeria/') . ($hg_term ? '#usluga-' . $hg_term->slug : '');

            // Zdjecie hero: domyslnie "PO" (miniaturka wpisu), z opcjonalnym "PRZED" do przelaczenia.
            $hg_fallback_img = HIGLOSS_THEME_URI . '/assets/images/gallery_bmw_m4_satin_black.webp';
            $hg_after_full   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full')  : $hg_fallback_img;
            $hg_after_large  = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : $hg_fallback_img;
            $hg_before_full  = $before_id ? wp_get_attachment_image_url($before_id, 'full')  : '';
            $hg_before_large = $before_id ? wp_get_attachment_image_url($before_id, 'large') : '';
            $hg_lb_desc      = wp_trim_words(get_the_excerpt() ? get_the_excerpt() : get_the_title(), 26, '…');

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
        ?>

            <!-- HERO (bez zdjecia w tle — sam gradient + siatka, jak reszta design-systemu).
                 Elastyczna wysokosc (hg-hero-compact): tresc decyduje o wysokosci,
                 hero NIE jest naciagane do standardowych ~760px pozostalych podstron. -->
            <section class="hg-hero hg-page-hero hg-hero-compact" aria-labelledby="hero-title">
                <div class="hg-hero-shade"></div>
                <div class="hg-hero-grid" aria-hidden="true"></div>
                <div class="hg-container hg-hero-inner hg-hero-inner--media">
                    <div class="hg-hero-content">
                        <a href="<?php echo esc_url($hg_cat_link); ?>" class="hg-gallery-cat-pill hg-pill-inline cat-<?php echo esc_attr($hg_cat_slug); ?> hg-reveal">
                            <?php echo esc_html($hg_cat_name); ?>
                        </a>
                        <h1 id="hero-title" class="hg-hero-title hg-reveal"><?php echo $hg_hero_title_html; ?></h1>
                        <?php if (!empty($hg_specs_hero)) : ?>
                        <span class="hg-specs-row-label hg-reveal">Specyfikacja</span>
                        <div class="hg-gallery-specs-row hg-specs-row--hero hg-reveal">
                            <?php foreach ($hg_specs_hero as $row) : ?>
                            <span class="hg-gallery-spec-item"><?php echo esc_html($row['chip'] ?: $row['label']); ?>: <strong><?php echo esc_html($row['value']); ?></strong></span>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                        <div class="hg-hero-actions hg-reveal">
                            <a href="tel:+48605088065" class="hg-btn hg-btn-primary">Zadzwoń: 605 088 065 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-ghost">Bezpłatna wycena <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                        </div>
                    </div>

                    <!-- Zdjecie PO z prostym przelacznikiem na PRZED (bez "przeciagania").
                         Kliknięcie otwiera lightbox TYLKO z aktualnie ustawionym zdjeciem
                         (PRZED albo PO — bez pary porownawczej): dlatego kontener NIE ma
                         data-lightbox-before, a JS podmienia data-lightbox-img przy kazdym
                         przelaczeniu (patrz main.js, sekcja hgRealizacjaHeroToggle).
                         Strzalki w lightboxie (data-lightbox-nav="przed-po") przelaczaja
                         miedzy PRZED/PO zamiast przewijac "galerie" (tu i tak jest 1 zdjecie). -->
                    <div class="hg-gallery-media-box hg-realizacja-hero-media hg-reveal"
                         id="hgRealizacjaHeroMedia"
                         data-lightbox-img="<?php echo esc_url($hg_after_full); ?>"
                         data-lightbox-after-full="<?php echo esc_url($hg_after_full); ?>"
                         <?php if ($hg_before_full) : ?>data-lightbox-before-full="<?php echo esc_url($hg_before_full); ?>" data-lightbox-nav="przed-po"<?php endif; ?>
                         data-lightbox-title="<?php the_title_attribute(); ?>"
                         data-lightbox-meta="<?php echo esc_attr(($model_label ? $model_label . ' &bull; ' : '') . ($service_type ?: 'Realizacja HI-GLOSS')); ?>"
                         data-lightbox-desc="<?php echo esc_attr($hg_lb_desc); ?>"
                         data-lightbox-hide-info="1">
                        <img id="hgRealizacjaHeroImg" src="<?php echo esc_url($hg_after_large); ?>"
                             data-after-src="<?php echo esc_url($hg_after_large); ?>"
                             data-after-full="<?php echo esc_url($hg_after_full); ?>"
                             <?php if ($hg_before_large) : ?>data-before-src="<?php echo esc_url($hg_before_large); ?>"<?php endif; ?>
                             <?php if ($hg_before_full) : ?>data-before-full="<?php echo esc_url($hg_before_full); ?>"<?php endif; ?>
                             alt="<?php the_title_attribute(); ?> — efekt PO">
                        <div class="hg-gallery-vignette"></div>
                        <span class="hg-realizacja-hero-tag" id="hgRealizacjaHeroTag">PO</span>
                        <button type="button" class="hg-gallery-zoom-btn" aria-label="Powiększ zdjęcie">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </button>
                        <?php if ($hg_before_full) : ?>
                        <button type="button" class="hg-realizacja-hero-toggle" id="hgRealizacjaHeroToggle" data-state="after" aria-label="Przełącz na zdjęcie PRZED">
                            <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 2.1l4 4-4 4M3 12.6v-1a4 4 0 0 1 4-4h14M7 21.9l-4-4 4-4M21 11.4v1a4 4 0 0 1-4 4H3"/></svg>
                            Zobacz PRZED
                        </button>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

    <div class="hg-container" style="margin-top: 3rem;">

            <!-- Uwaga: dedykowana sekcja PRZED/PO zostala usunieta stad — te sama funkcje
                 (podglad PO, przelacznik na PRZED, pelnoekranowy lightbox porownawczy)
                 pelni juz zdjecie w hero powyzej. Ponizej zostaje wylacznie OPIS. -->

            <!-- OPIS PROJEKTU (specyfikacja i CTA sa juz w hero powyzej — bez duplikacji
                 tresci trzymamy tu wylacznie opisowa czesc case-study). -->
            <div class="hg-editorial-card" style="margin-bottom: 3.5rem;">
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
