<?php
/**
 * Shared cinematic layout for service subpages.
 *
 * Expects $hg_service array defined by the calling template.
 *
 * @package HiGloss2026
 */

if (!defined('ABSPATH') || empty($hg_service) || !is_array($hg_service)) {
    return;
}

$s         = $hg_service;
$theme_uri = HIGLOSS_THEME_URI;
$slug      = $s['slug'] ?? '';
$catalog   = array(
    'zmiana-koloru' => array(
        'kicker' => 'Car wrapping',
        'title'  => 'Całościowa zmiana koloru',
        'img'    => 'ai_oferta_zmiana_koloru.webp',
    ),
    'ppf'           => array(
        'kicker' => 'Paint Protection Film',
        'title'  => 'Bezbarwne folie PPF',
        'img'    => 'ai_oferta_ppf.webp',
    ),
    'reklama'       => array(
        'kicker' => 'Fleet branding',
        'title'  => 'Reklama i branding flot',
        'img'    => 'ai_oferta_reklama.webp',
    ),
    'detailing'     => array(
        'kicker' => 'Finishing touch',
        'title'  => 'Szyby, dechroming i detailing',
        'img'    => 'ai_oferta_detailing.webp',
    ),
);
$icons = array(
    'chat'    => '<path d="M4 5h16v11H8l-4 4V5Z"/><path d="M8 9h8M8 12h5"/>',
    'layers'  => '<path d="m4 16 8-12 8 12-8 4-8-4Z"/><path d="m8 14 4 2 4-2M12 4v12"/>',
    'pen'     => '<path d="M14.5 5.5 18.5 9.5M3 21l3.5-1 12-12a2.8 2.8 0 0 0-4-4l-12 12L3 21Z"/><path d="m13 6 4 4"/>',
    'check'   => '<path d="m5 12 4 4L19 6"/><circle cx="12" cy="12" r="10"/>',
    'shield'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>',
    'car'     => '<rect x="1.5" y="4" width="14" height="12" rx="1"/><path d="M16 8h4l3 3.5V16h-7V8Z"/><circle cx="6" cy="19" r="1.8"/><circle cx="18.5" cy="19" r="1.8"/>',
    'sun'     => '<circle cx="12" cy="12" r="4"/><path d="M12 3v2M12 19v2M5 12H3M21 12h-2M6.2 6.2l1.4 1.4M16.4 16.4l1.4 1.4M6.2 17.8l1.4-1.4M16.4 7.6l1.4-1.4"/>',
    'droplet' => '<path d="M12 3c4 5.5 7 9 7 12a7 7 0 1 1-14 0c0-3 3-6.5 7-12Z"/>',
);
?>

<main id="main-content" class="hg-landing hg-service-page">
    <section class="hg-hero hg-page-hero" aria-labelledby="hero-title">
        <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/' . $s['hero_image']); ?>" alt="" width="1408" height="768" fetchpriority="high">
        <div class="hg-hero-shade"></div>
        <div class="hg-hero-grid" aria-hidden="true"></div>

        <div class="hg-container hg-hero-inner">
            <div class="hg-hero-content">
                <p class="hg-eyebrow hg-reveal"><span></span> <?php echo esc_html($s['eyebrow']); ?></p>
                <h1 id="hero-title" class="hg-hero-title hg-reveal"><?php echo $s['title_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
                <p class="hg-hero-lead hg-reveal"><?php echo esc_html($s['lead']); ?></p>
                <div class="hg-hero-actions hg-reveal">
                    <a href="#wycena" class="hg-btn hg-btn-primary"><?php echo esc_html($s['cta_primary']); ?> <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                    <a href="#realizacje" class="hg-btn hg-btn-ghost">Zobacz realizacje <svg class="hg-ui-icon hg-ui-icon--arrow-down" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M6 13.5l6 6 6-6"/></svg></a>
                </div>
            </div>

            <?php if (!empty($s['proof'])) : ?>
                <div class="hg-hero-proof hg-reveal" role="group" aria-label="Kluczowe parametry usługi">
                    <?php foreach ($s['proof'] as $proof) : ?>
                        <div><strong><?php echo esc_html($proof[0]); ?></strong><span><?php echo $proof[1]; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if (!empty($s['materials'])) : ?>
        <section class="hg-material-strip" aria-label="Materiały stosowane w studio">
            <div class="hg-container">
                <p><?php echo esc_html($s['materials_label'] ?? 'Pracujemy na sprawdzonych systemach'); ?></p>
                <div class="hg-material-list">
                    <?php foreach ($s['materials'] as $material) : ?>
                        <span><?php echo $material; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="hg-feature-split" id="opis" aria-labelledby="about-title">
        <div class="hg-feature-media hg-reveal">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/' . $s['intro_image']); ?>" alt="<?php echo esc_attr($s['intro_image_alt'] ?? ''); ?>" width="1408" height="768" loading="lazy">
            <div class="hg-feature-label"><span><?php echo esc_html($s['intro_label'][0]); ?></span> <?php echo esc_html($s['intro_label'][1]); ?></div>
        </div>
        <div class="hg-feature-copy">
            <div class="hg-reveal">
                <p class="hg-kicker"><?php echo esc_html($s['intro_kicker']); ?></p>
                <h2 id="about-title"><?php echo $s['intro_title_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
                <p class="hg-feature-lead"><?php echo esc_html($s['intro_lead']); ?></p>
                <?php foreach ($s['intro_copy'] as $paragraph) : ?>
                    <p><?php echo $paragraph; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endforeach; ?>
            </div>

            <?php if (!empty($s['specs'])) : ?>
                <ul class="hg-svc-specs hg-reveal">
                    <?php foreach ($s['specs'] as $label => $value) : ?>
                        <li><span><?php echo esc_html($label); ?></span><strong><?php echo esc_html($value); ?></strong></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if (!empty($s['highlight'])) : ?>
                <div class="hg-svc-note hg-reveal">
                    <strong><?php echo esc_html($s['highlight']['title']); ?></strong>
                    <p><?php echo esc_html($s['highlight']['text']); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php if (!empty($s['packages'])) : ?>
        <section class="hg-section hg-process" id="pakiety" aria-labelledby="packages-title">
            <div class="hg-container">
                <header class="hg-section-heading hg-reveal">
                    <div>
                        <p class="hg-kicker"><?php echo esc_html($s['packages_kicker']); ?></p>
                        <h2 id="packages-title"><?php echo $s['packages_title_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
                    </div>
                    <p><?php echo esc_html($s['packages_lead']); ?></p>
                </header>
                <ol class="hg-process-grid hg-process-grid--3">
                    <?php foreach ($s['packages'] as $index => $package) :
                        $icon = $icons[$package['icon'] ?? 'shield'] ?? $icons['shield'];
                        ?>
                        <li class="hg-reveal">
                            <span><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                            <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $icon; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></svg></div>
                            <h3><?php echo esc_html($package['title']); ?></h3>
                            <p><?php echo esc_html($package['text']); ?></p>
                        </li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($s['chips'])) : ?>
        <section class="hg-section" id="wykonczenia" aria-labelledby="chips-title">
            <div class="hg-container">
                <header class="hg-section-heading hg-reveal">
                    <div>
                        <p class="hg-kicker"><?php echo esc_html($s['chips_kicker']); ?></p>
                        <h2 id="chips-title"><?php echo $s['chips_title_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
                    </div>
                    <p><?php echo esc_html($s['chips_lead']); ?></p>
                </header>
                <div class="hg-svc-chips">
                    <?php foreach ($s['chips'] as $chip) : ?>
                        <article class="hg-reveal">
                            <h3><?php echo esc_html($chip['title']); ?></h3>
                            <p><?php echo esc_html($chip['text']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (!empty($s['works'])) : ?>
        <section class="hg-section hg-portfolio" id="realizacje" aria-labelledby="portfolio-title">
            <div class="hg-container">
                <header class="hg-section-heading hg-reveal">
                    <div>
                        <p class="hg-kicker"><?php echo esc_html($s['works_kicker'] ?? 'Wybrane realizacje'); ?></p>
                        <h2 id="portfolio-title"><?php echo $s['works_title_html'] ?? 'Samochody mówią<br><span>za nas.</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
                    </div>
                    <p><?php echo esc_html($s['works_lead'] ?? 'Ten sam standard wykonania — niezależnie od zakresu prac.'); ?></p>
                </header>
                <div class="hg-work-grid">
                    <?php foreach ($s['works'] as $index => $work) :
                        $img    = $theme_uri . '/assets/images/' . $work['img'];
                        $before = !empty($work['before']) ? $theme_uri . '/assets/images/' . $work['before'] : '';
                        ?>
                        <a class="hg-work-card hg-reveal" href="<?php echo esc_url(home_url('/galeria')); ?>" data-category="<?php echo esc_attr($slug); ?>" data-lightbox-img="<?php echo esc_url($img); ?>" data-lightbox-before="<?php echo $before ? esc_url($before) : ''; ?>" data-lightbox-title="<?php echo esc_attr($work['title']); ?>" data-lightbox-meta="<?php echo esc_attr($work['meta']); ?>" data-lightbox-link="<?php echo esc_url(home_url('/#wycena')); ?>">
                            <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($work['title']); ?>" width="1408" height="768" loading="lazy">
                            <span class="hg-work-overlay"></span>
                            <span class="hg-work-index"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
                            <span class="hg-work-meta"><?php echo esc_html($work['meta']); ?></span>
                            <span class="hg-work-title"><strong><?php echo esc_html($work['title']); ?></strong><small><?php echo esc_html($work['sub']); ?></small></span>
                            <span class="hg-work-arrow" aria-hidden="true"><svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <div class="hg-reveal" style="text-align:center;margin-top:2.5rem;">
                    <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-btn hg-btn-outline">Pełna galeria realizacji <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="hg-section" aria-labelledby="more-services-title">
        <div class="hg-container">
            <header class="hg-section-heading hg-reveal">
                <div>
                    <p class="hg-kicker">W tym samym studio</p>
                    <h2 id="more-services-title">Inne<br><span>możliwości.</span></h2>
                </div>
                <p>Każdy projekt możemy połączyć — zmiana koloru z PPF, branding z dechromingiem, szyby z detalem wnętrza.</p>
            </header>
            <div class="hg-svc-siblings">
                <?php foreach ($catalog as $key => $item) :
                    if ($key === $slug) {
                        continue;
                    }
                    ?>
                    <a class="hg-svc-sibling hg-reveal" href="<?php echo esc_url(home_url('/' . $key)); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/' . $item['img']); ?>" alt="" width="1408" height="768" loading="lazy">
                        <span class="hg-svc-sibling-copy">
                            <small><?php echo esc_html($item['kicker']); ?></small>
                            <strong><?php echo esc_html($item['title']); ?></strong>
                        </span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="hg-cta-band" aria-label="Zaproszenie do kontaktu">
        <div class="hg-cta-track" aria-hidden="true">
            <?php
            $ticker = $s['ticker'] ?? array('Zmień kolor', 'Chroń lakier', 'Wyróżnij markę');
            for ($i = 0; $i < 2; $i++) :
                foreach ($ticker as $word) :
                    ?>
                    <span><?php echo esc_html($word); ?></span><i></i>
                    <?php
                endforeach;
            endfor;
            ?>
        </div>
        <div class="hg-container hg-cta-content hg-reveal">
            <p><?php echo esc_html($s['cta_band_kicker'] ?? 'Masz pomysł na swoje auto?'); ?></p>
            <h2><?php echo esc_html($s['cta_band_title'] ?? 'My wiemy, jak go zrealizować.'); ?></h2>
            <a href="#wycena" class="hg-btn hg-btn-primary">Porozmawiajmy o projekcie <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </section>

    <?php if (!empty($s['faq'])) : ?>
        <section class="hg-section hg-faq" aria-labelledby="faq-title">
            <div class="hg-container hg-faq-layout">
                <header class="hg-faq-heading hg-reveal">
                    <p class="hg-kicker"><?php echo esc_html($s['faq_kicker'] ?? 'Warto wiedzieć'); ?></p>
                    <h2 id="faq-title">Najczęstsze<br><span>pytania.</span></h2>
                    <p>Nie widzisz odpowiedzi? Zadzwoń — dobierzemy rozwiązanie do Twojego auta.</p>
                    <a href="tel:+48605088065" class="hg-text-link">605&nbsp;088&nbsp;065 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                </header>
                <div class="hg-accordion hg-reveal">
                    <?php foreach ($s['faq'] as $index => $item) : ?>
                        <details <?php echo 0 === $index ? 'open' : ''; ?>>
                            <summary><?php echo esc_html($item['q']); ?><span></span></summary>
                            <div><p><?php echo esc_html($item['a']); ?></p></div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    get_template_part(
        'template-parts/quote-block',
        null,
        array(
            'quote_service'    => $s['form_service'] ?? '',
            'quote_show_map'   => false,
            'quote_kicker'     => $s['quote_kicker'] ?? 'Wycena',
            'quote_title_html' => $s['quote_title_html'] ?? 'Zacznijmy<br><span>Twój projekt.</span>',
            'quote_lead'       => $s['quote_lead'] ?? 'Podaj markę, model i oczekiwany efekt. Wrócimy z zakresem, materiałem i terminem.',
        )
    );
    ?>
</main>
