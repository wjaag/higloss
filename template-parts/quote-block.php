<?php
/**
 * Shared quote / contact block used on the landing and service pages.
 *
 * @package HiGloss2026
 *
 * @var string $quote_service   Preselected service option value.
 * @var bool   $quote_show_map  Whether to render the map under the form.
 * @var string $quote_kicker
 * @var string $quote_title_html Trusted heading markup (br/span only).
 * @var string $quote_lead
 */

if (!defined('ABSPATH')) {
    exit;
}

$args             = (isset($args) && is_array($args)) ? $args : array();
$quote_service    = $args['quote_service'] ?? ($quote_service ?? '');
$quote_show_map   = $args['quote_show_map'] ?? ($quote_show_map ?? false);
$quote_kicker     = $args['quote_kicker'] ?? ($quote_kicker ?? 'Kontakt');
$quote_title_html = $args['quote_title_html'] ?? ($quote_title_html ?? 'Zacznijmy<br><span>Twój projekt.</span>');
$quote_lead       = $args['quote_lead'] ?? ($quote_lead ?? 'Opowiedz nam o aucie i oczekiwanym efekcie. Wrócimy z rekomendacją zakresu, materiału i orientacyjnym terminem.');
$instagram_url    = 'https://www.instagram.com/higlossdesign/';
$facebook_url     = 'https://www.facebook.com/Hi-gloss-design-Szczecin-239982882747453/';
$service_options  = array(
    'Całościowa zmiana koloru'           => 'Całościowa zmiana koloru',
    'Bezbarwna folia PPF'                => 'Bezbarwna folia PPF',
    'Reklama i branding floty'           => 'Reklama i branding floty',
    'Przyciemnianie szyb / dechroming'   => 'Szyby / dechroming',
    'Inna usługa'                        => 'Inna usługa',
);
?>

<section class="hg-contact" id="kontakt" aria-labelledby="contact-title">
    <div class="hg-container">
        <header class="hg-section-heading hg-contact-heading hg-reveal">
            <div>
                <p class="hg-kicker"><?php echo esc_html($quote_kicker); ?></p>
                <h2 id="contact-title"><?php echo $quote_title_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
            </div>
            <p><?php echo esc_html($quote_lead); ?></p>
        </header>

        <div class="hg-contact-grid" id="wycena">
            <div class="hg-contact-panel hg-reveal">
                <p class="hg-contact-label">HI-GLOSS DESIGN</p>
                <a class="hg-contact-phone" href="tel:+48605088065">605&nbsp;088&nbsp;065 <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>

                <div class="hg-contact-details">
                    <div><span>Studio</span><a href="https://www.google.com/maps/dir/?api=1&destination=Podmiejska+4%2C+72-006+Mierzyn" target="_blank" rel="noopener noreferrer">ul. Podmiejska 4<br>72-006 Mierzyn / Szczecin</a></div>
                    <div><span>E-mail</span><a href="mailto:biuro@hi-glossdesign.pl">biuro@hi-glossdesign.pl</a></div>
                    <div><span>Godziny</span><p>Pon.–Pt. 09:00–17:00<br>Sobota: po umówieniu</p></div>
                </div>

                <a class="hg-google-proof" href="https://www.google.com/maps/search/?api=1&query=HI-GLOSS+DESIGN+Podmiejska+4+Mierzyn" target="_blank" rel="noopener noreferrer" aria-label="Opinie naszych klientów — wysoki ranking HI-GLOSS DESIGN w Google">
                    <span class="hg-google-proof-star" aria-hidden="true">
                        <svg class="hg-ui-icon hg-ui-icon--fill" viewBox="0 0 24 24"><path d="m12 2.6 2.92 5.98 6.58.94-4.77 4.63 1.14 6.55L12 17.5l-5.87 3.2 1.14-6.55L2.5 9.52l6.58-.94L12 2.6Z"/></svg>
                    </span>
                    <span class="hg-google-proof-copy">
                        <small>Opinie naszych klientów</small>
                        <strong>Wysoki ranking w Google</strong>
                    </span>
                    <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg>
                </a>

                <div class="hg-contact-socials">
                    <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" class="hg-icon-fill"/></svg>
                        <span>Instagram<small>@higlossdesign</small></span>
                    </a>
                    <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer">
                        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V4h-3c-3.3 0-5 2-5 5v2H6v4h3v7h4v-7h3.2l.8-4h-4V9c0-.7.3-1 1-1Z" class="hg-icon-fill"/></svg>
                        <span>Facebook<small>Hi-gloss design Szczecin</small></span>
                    </a>
                </div>
            </div>

            <div class="hg-form-panel hg-reveal">
                <div class="hg-form-heading">
                    <span>Bezpłatna wycena</span>
                    <h3>Opowiedz nam o swoim aucie</h3>
                </div>
                <form class="hg-quote-form" id="hgQuoteForm" novalidate>
                    <div class="hg-form-row">
                        <label><span>Imię i nazwisko</span>
                            <input type="text" name="name" autocomplete="name" placeholder="Jan Kowalski">
                        </label>
                        <label><span>Numer telefonu <em>*</em></span>
                            <input type="tel" name="phone" autocomplete="tel" inputmode="tel" placeholder="600 000 000" required>
                        </label>
                    </div>
                    <div class="hg-form-row">
                        <label><span>Adres e-mail</span>
                            <input type="email" name="email" autocomplete="email" placeholder="jan@email.pl">
                        </label>
                        <label><span>Interesująca usługa <em>*</em></span>
                            <select name="service" required>
                                <option value="">Wybierz usługę</option>
                                <?php foreach ($service_options as $value => $label) : ?>
                                    <option value="<?php echo esc_attr($value); ?>" <?php selected($quote_service, $value); ?>><?php echo esc_html($label); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </div>
                    <label><span>Auto i oczekiwany efekt</span>
                        <textarea name="notes" rows="4" placeholder="Marka, model, rocznik i krótki opis projektu..."></textarea>
                    </label>
                    <input type="text" name="website" class="hg-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">
                    <label class="hg-consent">
                        <input type="checkbox" name="consent" value="1" required>
                        <span>Wyrażam zgodę na kontakt w sprawie wyceny. Zapoznałem/am się z <a href="<?php echo esc_url(home_url('/polityka-prywatnosci')); ?>">polityką prywatności</a>. <em>*</em></span>
                    </label>
                    <div class="hg-form-submit">
                        <button type="submit" class="hg-btn hg-btn-primary">Wyślij zapytanie <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></button>
                        <p>Pola oznaczone * są wymagane.</p>
                    </div>
                    <div class="hg-form-status" id="hgFormStatus" role="status" aria-live="polite"></div>
                </form>
            </div>
        </div>

        <?php if ($quote_show_map) : ?>
            <div class="hg-map hg-reveal">
                <iframe title="Mapa dojazdu do HI-GLOSS DESIGN w Mierzynie" src="https://www.google.com/maps?q=Podmiejska+4,+72-006+Mierzyn&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                <div class="hg-map-caption">
                    <span>53.4275° N · 14.4711° E</span>
                    <a href="https://www.google.com/maps/dir/?api=1&destination=Podmiejska+4%2C+72-006+Mierzyn" target="_blank" rel="noopener noreferrer">Wyznacz trasę <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
