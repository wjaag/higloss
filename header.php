<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800;900&family=Plus+Jakarta+Sans:wght@500;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header class="hg-header">
    <div class="hg-container hg-header-inner">
        <!-- Official Client Logo -->
        <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS DESIGN" class="hg-logo-img">
        </a>

        <nav class="hg-nav-menu" id="hgNavMenu">
            <a href="<?php echo esc_url(home_url('/#o-firmie')); ?>" class="hg-nav-link">O firmie</a>
            <a href="<?php echo esc_url(home_url('/#oferta')); ?>" class="hg-nav-link">Oferta</a>
            <a href="<?php echo esc_url(home_url('/#realizacje')); ?>" class="hg-nav-link">Galeria</a>
            <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="hg-nav-link">Kontakt</a>
        </nav>

        <div class="hg-header-actions">
            <a href="tel:+48605088065" class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.8rem;">
                605 088 065
            </a>
            <a href="<?php echo esc_url(home_url('/#kalkulator')); ?>" class="hg-btn hg-btn-cyan" style="padding: 0.5rem 1rem; font-size: 0.8rem;">
                Wycena Online
            </a>
        </div>
    </div>
</header>
