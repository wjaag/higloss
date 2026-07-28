<?php
/**
 * Footer Template
 *
 * @package HiGloss2026
 */
?>

<!-- Footer -->
<footer class="hg-footer">
    <div class="hg-container">
        <div class="hg-footer-grid">
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>" style="display: block; margin-bottom: 1.25rem;">
                    <img src="<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/logo.png'); ?>" alt="HI-GLOSS DESIGN" style="height: 42px; width: auto;">
                </a>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem; line-height: 1.6;">
                    Specjalistyczne studio całościowej zmiany koloru aut, bezbarwnych folii ochronnych PPF oraz grafiki reklamowej dla flot w Szczecinie i Mierzynie.
                </p>
                <div style="display: flex; gap: 1rem;">
                    <a href="https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/" target="_blank" rel="noopener" class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.85rem;">
                        Facebook
                    </a>
                    <a href="mailto:biuro@hi-glossdesign.pl" class="hg-btn hg-btn-outline" style="padding: 0.5rem 1rem; font-size: 0.85rem;">
                        Email
                    </a>
                </div>
            </div>

            <div>
                <h4 style="font-family: var(--font-heading); font-size: 1.1rem; color: #fff; margin-bottom: 1.25rem;">Oferta Usług</h4>
                <ul style="display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.95rem; color: var(--text-muted);">
                    <li><a href="<?php echo esc_url(home_url('/#uslugi')); ?>">Całościowa Zmiana Koloru Auta</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#uslugi')); ?>">Bezbarwna Folia Ochronna PPF</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#uslugi')); ?>">Oklejanie Reklamowe & Floty</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#uslugi')); ?>">Przyciemnianie Szyb & Detailing</a></li>
                </ul>
            </div>

            <div>
                <h4 style="font-family: var(--font-heading); font-size: 1.1rem; color: #fff; margin-bottom: 1.25rem;">Godziny Otwarcia</h4>
                <ul style="display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.95rem; color: var(--text-muted);">
                    <li>Poniedziałek - Piątek: 08:00 - 17:00</li>
                    <li>Sobota: Na zapisy</li>
                    <li>Niedziela: Zamknięte</li>
                    <li style="margin-top: 0.5rem; color: var(--accent-cyan); font-weight: 700;">Studio Ogrzewane z Certyfikacją</li>
                </ul>
            </div>

            <div>
                <h4 style="font-family: var(--font-heading); font-size: 1.1rem; color: #fff; margin-bottom: 1.25rem;">Kontakt & Lokalizacja</h4>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 0.5rem;">
                    <strong>HI-GLOSS DESIGN</strong><br>
                    ul. Podmiejska 4<br>
                    72-006 Mierzyn / Szczecin
                </p>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 0.5rem;">
                    <strong>Tel:</strong> <a href="tel:+48605088065" style="color: var(--accent-cyan);">605 088 065</a> / <a href="tel:+48664129023" style="color: var(--accent-cyan);">664 129 023</a>
                </p>
                <p style="color: var(--text-muted); font-size: 0.95rem;">
                    <strong>Email:</strong> <a href="mailto:biuro@hi-glossdesign.pl" style="color: var(--accent-cyan);">biuro@hi-glossdesign.pl</a>
                </p>
            </div>
        </div>

        <div class="hg-footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> HI-GLOSS DESIGN Szczecin. Wszelkie prawa zastrzeżone.</p>
        </div>
    </div>
</footer>

<!-- Mobile Sticky Action Bar -->
<div class="hg-mobile-bar">
    <a href="tel:+48605088065" class="hg-m-btn highlight">
        📞 Zadzwoń
    </a>
    <a href="<?php echo esc_url(home_url('/#kalkulator')); ?>" class="hg-m-btn">
        ⚡ Wycena Online
    </a>
    <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-m-btn">
        🗺️ Dojazd
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
