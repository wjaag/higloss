<?php
/**
 * Front page hero.
 *
 * @package HiGloss2026
 */
$theme_uri = HIGLOSS_THEME_URI;
$facebook_url = 'https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/';
$instagram_url = 'https://www.instagram.com/higlossdesign/';
?>
<section class="hg-hero" aria-labelledby="hero-title">
    <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/ai_oferta_zmiana_koloru.webp'); ?>" alt="" width="1408" height="768" fetchpriority="high">
    <div class="hg-hero-shade"></div>
    <div class="hg-hero-grid" aria-hidden="true"></div>
    <div class="hg-container hg-hero-inner">
        <div class="hg-hero-content">
            <p class="hg-eyebrow hg-reveal"><span></span> Studio car wrappingu · Szczecin / Mierzyn</p>
            <h1 id="hero-title" class="hg-hero-title hg-reveal">Twoje auto.<br><span>Nowy charakter.</span></h1>
            <p class="hg-hero-lead hg-reveal">Całościowe oklejanie pojazdów, bezbarwne folie ochronne PPF i branding flot. Precyzyjna aplikacja, materiały premium i efekt dopracowany w każdym detalu.</p>
            <div class="hg-hero-actions hg-reveal">
                <a href="#wycena" class="hg-btn hg-btn-primary">Wyceń swój projekt <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                <a href="<?php echo esc_url(home_url('/galeria/')); ?>" class="hg-btn hg-btn-ghost">Zobacz realizacje <svg class="hg-ui-icon hg-ui-icon--arrow-down" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M6 13.5l6 6 6-6"/></svg></a>
            </div>
        </div>
        <div class="hg-hero-proof hg-reveal" role="group" aria-label="Najważniejsze informacje o studio">
            <div><strong>500<sup>+</sup></strong><span>zrealizowanych<br>projektów</span></div>
            <div><strong>40<sup>+</sup></strong><span>aut we flocie<br>DHL Courier</span></div>
            <div><strong>10</strong><span>lat gwarancji<br>na wybrane folie</span></div>
        </div>
    </div>
    <div class="hg-social-rail" role="group" aria-label="Media społecznościowe">
        <span>Obserwuj nas</span><i></i>
        <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram HI-GLOSS DESIGN"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" class="hg-icon-fill"/></svg></a>
        <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook HI-GLOSS DESIGN"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 2-5 5v2H6v4h3v7h4v-7h3.2l.8-4h-4V9c0-.7.3-1 1-1Z" class="hg-icon-fill"/></svg></a>
    </div>
    <a class="hg-scroll-cue" href="#oferta"><span></span> Poznaj nasze możliwości</a>
</section>
