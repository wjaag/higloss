<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Sticky Navigation Header -->
<header class="hg-header">
    <div class="hg-container hg-header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS DESIGN" class="hg-logo-img">
        </a>

        <nav class="hg-nav-menu" id="hgNavMenu">
            <a href="<?php echo esc_url(home_url('/#uslugi')); ?>" class="hg-nav-link">Oferta Usług</a>
            <a href="<?php echo esc_url(home_url('/#przed-po')); ?>" class="hg-nav-link">Efekty (Przed/Po)</a>
            <a href="<?php echo esc_url(home_url('/#probnik')); ?>" class="hg-nav-link">Próbnik Folii</a>
            <a href="<?php echo esc_url(home_url('/#kalkulator')); ?>" class="hg-nav-link">Kalkulator Wyceny</a>
            <a href="<?php echo esc_url(home_url('/#realizacje')); ?>" class="hg-nav-link">Realizacje</a>
            <a href="<?php echo esc_url(home_url('/#o-firmie')); ?>" class="hg-nav-link">O nas</a>
            <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="hg-nav-link">Kontakt</a>
        </nav>

        <div class="hg-header-actions">
            <a href="tel:+48605088065" class="hg-btn hg-btn-outline" style="padding: 0.6rem 1.2rem; font-size: 0.85rem;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.79 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                605 088 065
            </a>
            <a href="<?php echo esc_url(home_url('/#kalkulator')); ?>" class="hg-btn hg-btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.85rem;">
                Wycena Online
            </a>
            <button class="hg-btn hg-btn-outline" id="hgNavToggle" style="display: none; padding: 0.6rem;" aria-label="Menu">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
        </div>
    </div>
</header>
