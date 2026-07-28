<?php
/**
 * Premium 4-Tile Edition Footer
 *
 * @package HiGloss2026
 */
?>

<footer class="hg-footer">
    <div class="hg-container" style="display: flex; flex-direction: column; align-items: center; gap: 1rem;">
        <a href="<?php echo esc_url(home_url('/')); ?>" style="display: block;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS DESIGN" style="height: 42px; width: auto;">
        </a>
        <p>&copy; <?php echo date('Y'); ?> <strong>HI-GLOSS DESIGN</strong> Szczecin - Mierzyn, ul. Podmiejska 4. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>

<!-- Mobile Sticky Bar -->
<div class="hg-mobile-bar">
    <a href="tel:+48605088065" class="hg-m-btn highlight">
        📞 Zadzwoń
    </a>
    <a href="<?php echo esc_url(home_url('/#kalkulator')); ?>" class="hg-m-btn">
        ⚡ Wycena
    </a>
    <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-m-btn">
        🗺️ Dojazd
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
