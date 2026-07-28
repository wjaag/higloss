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
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hg-logo" style="margin-bottom: 1.25rem;">
                    HI-GLOSS<span>DESIGN</span>
                </a>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
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
                    <li><a href="<?php echo esc_url(home_url('/#uslugi')); ?>">Oklejanie Motocykli i Łodzi</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#uslugi')); ?>">Przyciemnianie Szyb & Detailing</a></li>
                </ul>
            </div>

            <div>
                <h4 style="font-family: var(--font-heading); font-size: 1.1rem; color: #fff; margin-bottom: 1.25rem;">Godziny Otwarcia</h4>
                <ul style="display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.95rem; color: var(--text-muted);">
                    <li>Poniedziałek - Piątek: 08:00 - 17:00</li>
                    <li>Sobota: Na zapisy</li>
                    <li>Niedziela: Zamknięte</li>
                    <li style="margin-top: 0.5rem; color: var(--accent-blue); font-weight: 600;">Studio Ogrzewane z Certyfikacją</li>
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
                    <strong>Tel:</strong> <a href="tel:+48605088065" style="color: var(--accent-blue);">605 088 065</a> / <a href="tel:+48664129023" style="color: var(--accent-blue);">664 129 023</a>
                </p>
                <p style="color: var(--text-muted); font-size: 0.95rem;">
                    <strong>Email:</strong> <a href="mailto:biuro@hi-glossdesign.pl" style="color: var(--accent-blue);">biuro@hi-glossdesign.pl</a>
                </p>
            </div>
        </div>

        <div class="hg-footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> HI-GLOSS DESIGN Szczecin. Wszelkie prawa zastrzeżone. Nowoczesny motyw godny 2026 r.</p>
        </div>
    </div>
</footer>

<!-- Mobile Sticky Action Bar -->
<div class="hg-mobile-bar">
    <a href="tel:+48605088065" class="hg-m-btn highlight">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.79 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Zadzwoń
    </a>
    <a href="<?php echo esc_url(home_url('/#kalkulator')); ?>" class="hg-m-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="16" y1="14" x2="16" y2="18"/><path d="M16 10h.01"/><path d="M12 10h.01"/><path d="M8 10h.01"/><path d="M12 14h.01"/><path d="M8 14h.01"/><path d="M12 18h.01"/><path d="M8 18h.01"/></svg>
        Szybka Wycena
    </a>
    <a href="https://maps.google.com/?q=Podmiejska+4+Mierzyn" target="_blank" rel="noopener" class="hg-m-btn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Dojazd
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
