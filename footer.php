<?php
/**
 * Dynamic Angled Performance Footer
 *
 * @package HiGloss2026
 */
?>

<footer class="hg-footer">
    <div class="hg-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        <div style="display: flex; align-items: center; gap: 0.8rem;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS" style="height: 32px; width: 32px; object-fit: contain;">
            <span style="font-family: var(--font-heading); font-weight: 900; color: #ffffff; letter-spacing: 0.08em;">HI-GLOSS DESIGN</span>
        </div>
        <p>&copy; <?php echo date('Y'); ?> <strong>HI-GLOSS DESIGN</strong> Szczecin - Mierzyn, ul. Podmiejska 4. Tel: <a href="tel:+48605088065" style="color: #00c2ff;">605 088 065</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
