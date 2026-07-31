<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800;900&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Navbar -->
<header class="hg-header">
    <div class="hg-container hg-header-inner">
        <!-- Official Logo Image + Brand Title & Subtitle -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-brand-logo" style="display: flex; align-items: center; gap: 0.85rem;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS" class="hg-logo-standalone">
            <div style="display: flex; flex-direction: column; line-height: 1.1; text-align: left;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.15rem; color: #ffffff; letter-spacing: 0.05em; text-transform: uppercase;">HI-GLOSSDESIGN</span>
                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 600; font-size: 0.72rem; color: #94a3b8; margin-top: 2px;">Całościowe oklejanie pojazdów</span>
            </div>
        </a>

        <!-- Navigation Menu -->
        <nav class="hg-nav-menu" id="hgNavMenu">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-nav-link">HOME</a>
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-nav-link">OFERTA</a>
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-nav-link">GALERIA</a>
            <a href="<?php echo esc_url(home_url('/o-firmie')); ?>" class="hg-nav-link">O FIRMIE</a>
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-nav-link">KONTAKT</a>
        </nav>

        <!-- Burger Toggle for Mobile -->
        <button class="hg-burger-btn" id="hgNavToggle" aria-label="Menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        </button>
    </div>
</header>
