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

<!-- Header (Navbar with ONLY standalone logo.png on left) -->
<header class="hg-header">
    <div class="hg-container hg-header-inner">
        <!-- Standalone Official Logo Image (NO TEXT) -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-brand-logo">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS" class="hg-logo-standalone">
        </a>

        <!-- Navigation Menu -->
        <nav class="hg-nav-menu" id="hgNavMenu">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-nav-link">HOME</a>
            <a href="<?php echo esc_url(home_url('/o-firmie')); ?>" class="hg-nav-link">O FIRMIE</a>
            <a href="<?php echo esc_url(home_url('/oferta')); ?>" class="hg-nav-link">OFERTA</a>
            <a href="<?php echo esc_url(home_url('/galeria')); ?>" class="hg-nav-link">GALERIA</a>
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-nav-link">KONTAKT</a>
        </nav>
    </div>
</header>
