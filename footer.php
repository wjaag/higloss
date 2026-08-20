<?php
/**
 * Site footer.
 *
 * @package HiGloss2026
 */

$is_landing = is_front_page();
$footer_section_url = static function ($section) use ($is_landing) {
    return $is_landing ? '#' . $section : home_url('/#' . $section);
};
?>

<footer class="hg-footer">
    <div class="hg-container">
        <div class="hg-footer-main">
            <div class="hg-footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-brand-logo" aria-label="HI-GLOSS DESIGN — strona główna">
                    <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="" width="52" height="52">
                    <span class="hg-brand-copy"><strong>HI-GLOSS<span>DESIGN</span></strong><small>Car wrapping studio</small></span>
                </a>
                <p>Całościowe oklejanie pojazdów, folie ochronne PPF i branding flot w Szczecinie i Mierzynie.</p>
                <div class="hg-footer-socials" role="group" aria-label="Media społecznościowe">
                    <a href="https://www.instagram.com/higlossdesign/" target="_blank" rel="noopener noreferrer" aria-label="Instagram HI-GLOSS DESIGN">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" class="hg-icon-fill"/></svg>
                    </a>
                    <a href="https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/" target="_blank" rel="noopener noreferrer" aria-label="Facebook HI-GLOSS DESIGN">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 2-5 5v2H6v4h3v7h4v-7h3.2l.8-4h-4V9c0-.7.3-1 1-1Z" class="hg-icon-fill"/></svg>
                    </a>
                </div>
                <a class="hg-google-proof hg-google-proof--mini" href="https://www.google.com/maps/search/?api=1&query=HI-GLOSS+DESIGN+Podmiejska+4+Mierzyn" target="_blank" rel="noopener noreferrer" aria-label="Opinie naszych klientów — wysoki ranking HI-GLOSS DESIGN w Google">
                    <span class="hg-google-proof-star" aria-hidden="true">
                        <svg class="hg-ui-icon hg-ui-icon--fill" viewBox="0 0 24 24"><path d="m12 2.6 2.92 5.98 6.58.94-4.77 4.63 1.14 6.55L12 17.5l-5.87 3.2 1.14-6.55L2.5 9.52l6.58-.94L12 2.6Z"/></svg>
                    </span>
                    <span class="hg-google-proof-copy">
                        <small>Opinie naszych klientów</small>
                        <strong>Wysoki ranking w Google</strong>
                    </span>
                </a>
            </div>

            <div class="hg-footer-column">
                <p>Na skróty</p>
                <a href="<?php echo esc_url($footer_section_url('oferta')); ?>">Oferta</a>
                <a href="<?php echo esc_url($footer_section_url('realizacje')); ?>">Realizacje</a>
                <a href="<?php echo esc_url($footer_section_url('o-nas')); ?>">O nas</a>
                <a href="<?php echo esc_url($footer_section_url('proces')); ?>">Jak pracujemy</a>
            </div>

            <div class="hg-footer-column">
                <p>Kontakt</p>
                <a href="tel:+48605088065">+48&nbsp;605&nbsp;088&nbsp;065</a>
                <a href="tel:+48664129023">+48&nbsp;664&nbsp;129&nbsp;023</a>
                <a href="mailto:biuro@hi-glossdesign.pl">biuro@hi-glossdesign.pl</a>
                <a href="https://www.google.com/maps/dir/?api=1&destination=Podmiejska+4%2C+72-006+Mierzyn" target="_blank" rel="noopener noreferrer">Podmiejska 4, Mierzyn <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
            </div>

            <div class="hg-footer-column hg-footer-cta">
                <p>Twój projekt</p>
                <span>Masz pomysł? Sprawdźmy, jak możemy go zrealizować.</span>
                <a href="<?php echo esc_url($footer_section_url('wycena')); ?>" class="hg-text-link">Bezpłatna wycena <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
            </div>
        </div>

        <div class="hg-footer-bottom">
            <p>&copy; <?php echo esc_html(date('Y')); ?> HI-GLOSS DESIGN. Wszelkie prawa zastrzeżone.</p>
            <a href="<?php echo esc_url(home_url('/polityka-prywatnosci')); ?>">Polityka prywatności i RODO</a>
        </div>
    </div>
</footer>

<nav class="hg-mobile-actions" aria-label="Szybki kontakt">
    <a href="tel:+48605088065">
        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Zadzwoń
    </a>
    <a href="<?php echo esc_url(home_url('/#wycena')); ?>">Bezpłatna wycena <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
</nav>

<?php wp_footer(); ?>
</body>
</html>
