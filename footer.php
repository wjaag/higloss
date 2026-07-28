<?php
/**
 * Ultra Premium Footer with "HI" Square Logo
 *
 * @package HiGloss2026
 */
?>

<footer class="hg-footer">
    <div class="hg-container" style="display: flex; flex-direction: column; align-items: center; gap: 1rem;">
        <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center; gap: 0.8rem;">
            <div style="width: 40px; height: 40px; border: 2.5px solid #25aae1; background: #000000; display: flex; align-items: center; justify-content: center; font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.25rem; color: #25aae1; flex-shrink: 0; box-shadow: 0 0 15px rgba(37, 170, 225, 0.4);">
                HI
            </div>
            <div style="display: flex; flex-direction: column; line-height: 1; text-align: left;">
                <span style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 1.15rem; color: #ffffff; letter-spacing: 0.05em; text-transform: uppercase;">HI-GLOSS</span>
                <span style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800; font-size: 0.7rem; color: #25aae1; letter-spacing: 0.2em; text-transform: uppercase; margin-top: 2px;">DESIGN</span>
            </div>
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
