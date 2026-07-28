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
        <!-- Square-Outline "hi" Logo Component -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-logo-brand" style="display: flex; align-items: center; gap: 0.8rem;">
            <div style="width: 44px; height: 44px; border: 2.5px solid #000000; background: #ffffff; display: flex; align-items: center; justify-content: center; font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.35rem; color: #25aae1; flex-shrink: 0; box-shadow: 2px 2px 0px #000000;">
                hi
            </div>
            <div style="display: flex; flex-direction: column; line-height: 1;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.25rem; color: #000000; letter-spacing: 0.05em; text-transform: uppercase;">HI-GLOSS</span>
                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; font-size: 0.72rem; color: #25aae1; letter-spacing: 0.22em; text-transform: uppercase; margin-top: 3px;">DESIGN</span>
            </div>
        </a>

        <nav class="hg-nav-menu" id="hgNavMenu">
            <a href="<?php echo esc_url(home_url('/#uslugi')); ?>" class="hg-nav-link">Usługi</a>
            <a href="<?php echo esc_url(home_url('/#realizacje')); ?>" class="hg-nav-link">Realizacje</a>
            <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-nav-link">Wycena & Kontakt</a>
        </nav>

        <div class="hg-header-actions">
            <a href="tel:+48605088065" class="hg-btn" style="background:#000; color:#fff; border: 2px solid #000; padding: 0.5rem 1rem; font-size: 0.8rem;">
                605 088 065
            </a>
            <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-btn hg-btn-crimson" style="padding: 0.5rem 1rem; font-size: 0.8rem;">
                Szybka Wycena
            </a>
        </div>
    </div>
</header>
