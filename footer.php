<?php
/**
 * Minimal Footer with Subtle Brand Logo & Subtitle
 *
 * @package HiGloss2026
 */
?>

<footer class="hg-footer">
    <div class="hg-container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem;">
        <!-- Subtly Placed Logo + Brand Text in Footer -->
        <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center; gap: 0.75rem; text-decoration: none;">
            <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS" style="height: 36px; width: 36px; object-fit: contain; opacity: 0.9;">
            <div style="display: flex; flex-direction: column; line-height: 1.1; text-align: left;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 800; font-size: 0.92rem; color: #ffffff; letter-spacing: 0.05em; text-transform: uppercase;">HI-GLOSSDESIGN</span>
                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 600; font-size: 0.68rem; color: #64748b; margin-top: 1px;">Całościowe oklejanie pojazdów</span>
            </div>
        </a>

        <!-- Right Copyright Line -->
        <p style="margin: 0; color: #94a3b8; font-size: 0.82rem;">
            &copy; <?php echo date('Y'); ?> <strong>HI-GLOSS DESIGN</strong> Szczecin - Mierzyn, ul. Podmiejska 4. Tel: <a href="tel:+48605088065" style="color: #25aae1;">605 088 065</a>
        </p>
    </div>
</footer>

<!-- Mobile Sticky Action Bar -->
<div class="hg-mobile-bar">
    <a href="tel:+48605088065" class="hg-m-btn highlight">
        📞 Zadzwoń
    </a>
    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-m-btn">
        ⚡ Wycena
    </a>
    <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-m-btn">
        🗺️ Dojazd
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
