<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#05070b">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
    <!-- Style ladowane normalnie (enqueue w functions.php) -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="hg-skip-link" href="#main-content"><?php esc_html_e('Przejdź do treści', 'higloss2026'); ?></a>

<header class="hg-header" id="siteHeader">
    <div class="hg-container hg-header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-brand-logo" aria-label="HI-GLOSS DESIGN — strona główna">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS DESIGN — studio car wrappingu Szczecin Mierzyn" class="hg-logo-standalone" width="52" height="52">
            <span class="hg-brand-copy">
                <strong>HI-GLOSS<span>DESIGN</span></strong>
                <small>Car wrapping studio</small>
            </span>
        </a>

        <nav class="hg-nav-menu" id="hgNavMenu" aria-label="Nawigacja główna">
            <a href="<?php echo esc_url(home_url('/oferta/')); ?>" class="hg-nav-link">Oferta</a>
            <a href="<?php echo esc_url(home_url('/proces/')); ?>" class="hg-nav-link">Proces</a>
            <a href="<?php echo esc_url(home_url('/galeria/')); ?>" class="hg-nav-link">Realizacje</a>
            <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="hg-nav-link">FAQ</a>
            <a href="<?php echo esc_url(home_url('/o-firmie/')); ?>" class="hg-nav-link">O nas</a>
            <a href="<?php echo esc_url(home_url('/kontakt/')); ?>" class="hg-nav-link">Kontakt</a>
            <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-nav-cta">Bezpłatna wycena <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>

            <div class="hg-nav-socials" role="group" aria-label="Media społecznościowe">
                <a href="https://www.instagram.com/higlossdesign/" target="_blank" rel="noopener noreferrer" aria-label="Instagram HI-GLOSS DESIGN">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" class="hg-icon-fill"/></svg>
                </a>
                <a href="https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/" target="_blank" rel="noopener noreferrer" aria-label="Facebook HI-GLOSS DESIGN">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 2-5 5v2H6v4h3v7h4v-7h3.2l.8-4h-4V9c0-.7.3-1 1-1Z" class="hg-icon-fill"/></svg>
                </a>
            </div>
        </nav>

        <button class="hg-burger-btn" id="hgNavToggle" type="button" aria-label="Otwórz menu" aria-controls="hgNavMenu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>
