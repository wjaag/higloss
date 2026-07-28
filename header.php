<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700;900&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header -->
<header class="hg-header">
    <div class="hg-container hg-header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-logo">
            <svg width="32" height="32" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="40" height="40" rx="6" fill="#0B0E14" stroke="#00F0FF" stroke-width="2"/>
                <path d="M10 28L20 10L30 28H23.5L20 16L16.5 28H10Z" fill="#00F0FF"/>
            </svg>
            HI-GLOSS<span>DESIGN</span>
        </a>

        <nav class="hg-nav-menu" id="hgNavMenu">
            <a href="<?php echo esc_url(home_url('/#uslugi')); ?>" class="hg-nav-link">Usługi</a>
            <a href="<?php echo esc_url(home_url('/#realizacje')); ?>" class="hg-nav-link">Realizacje</a>
            <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-nav-link">Wycena & Kontakt</a>
        </nav>

        <div class="hg-header-actions">
            <a href="tel:+48605088065" class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.8rem;">
                605 088 065
            </a>
            <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-btn hg-btn-primary" style="padding: 0.5rem 1rem; font-size: 0.8rem;">
                Wycena Online
            </a>
        </div>
    </div>
</header>
