<?php
/**
 * Hi-GLOSS DESIGN theme bootstrap.
 *
 * functions.php becomes the theme entrypoint while the legacy feature layer
 * is moved intact to inc/legacy-functions.php for a behaviour-safe refactor.
 */
if (!defined('ABSPATH')) {
    exit;
}

require_once HIGLOSS_THEME_DIR . '/inc/legacy-functions.php';
require_once HIGLOSS_THEME_DIR . '/inc/seo-compat.php';
