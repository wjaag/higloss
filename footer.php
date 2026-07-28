<?php
/**
 * Minimal Footer with Standalone Logo Image
 *
 * @package HiGloss2026
 */
?>

<footer class="hg-footer">
    <div class="hg-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS" style="height: 36px; width: 36px; object-fit: contain;">
        </a>
        <p>&copy; <?php echo date('Y'); ?> <strong>HI-GLOSS DESIGN</strong> Szczecin - Mierzyn, ul. Podmiejska 4. Tel: <a href="tel:+48605088065" style="color: #00c2ff;">605 088 065</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
