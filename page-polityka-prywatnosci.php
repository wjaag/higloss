<?php
/**
 * Template Name: Podstrona Polityka Prywatności i RODO
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = HIGLOSS_THEME_URI;
?>

<main id="main-content" class="hg-landing">
    <section class="hg-hero hg-page-hero" aria-labelledby="hero-title">
        <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/ai_tile2_oferta.webp'); ?>" alt="" width="1408" height="768" fetchpriority="high">
        <div class="hg-hero-shade"></div>
        <div class="hg-hero-grid" aria-hidden="true"></div>
        <div class="hg-container hg-hero-inner">
            <div class="hg-hero-content">
                <p class="hg-eyebrow hg-reveal"><span></span> Dane osobowe i cookies</p>
                <h1 id="hero-title" class="hg-hero-title hg-reveal">Polityka<br><span>prywatności.</span></h1>
                <p class="hg-hero-lead hg-reveal">Jak przetwarzamy dane z formularza wyceny, kontaktów telefonicznych i plików cookies.</p>
            </div>
        </div>
    </section>

    <section class="hg-section">
        <div class="hg-container">
            <article class="hg-legal hg-reveal">
                <h2>1. Administrator danych osobowych</h2>
                <p>Administratorem danych zbieranych za pośrednictwem serwisu jest HI-GLOSS DESIGN, ul. Podmiejska 4, 72-006 Mierzyn / Szczecin, e-mail: <a href="mailto:biuro@hi-glossdesign.pl">biuro@hi-glossdesign.pl</a>, tel. <a href="tel:+48605088065">605 088 065</a>.</p>

                <h2>2. Cel i podstawa prawna przetwarzania</h2>
                <p>Dane osobowe (imię, numer telefonu, adres e-mail, dane pojazdu) przekazywane przez formularze kontaktowe przetwarzane są wyłącznie w celach:</p>
                <ul>
                    <li>udzielenia odpowiedzi na zapytanie ofertowe (art. 6 ust. 1 lit. b RODO),</li>
                    <li>przygotowania indywidualnej kalkulacji oklejania lub zabezpieczenia PPF,</li>
                    <li>realizacji usługi oraz wystawienia dokumentów księgowych i gwarancyjnych.</li>
                </ul>

                <h2>3. Pliki cookies</h2>
                <p>Serwis wykorzystuje pliki cookies w celu zapewnienia prawidłowego działania strony, zapamiętywania preferencji oraz w celach analitycznych. Ustawienia cookies można w każdej chwili zmienić w przeglądarce.</p>

                <h2>4. Prawa użytkownika</h2>
                <p>Przysługuje prawo dostępu do treści swoich danych, ich sprostowania, usunięcia, ograniczenia przetwarzania, przenoszenia oraz wniesienia sprzeciwu. W celu realizacji praw napisz na <a href="mailto:biuro@hi-glossdesign.pl">biuro@hi-glossdesign.pl</a>.</p>

                <div class="hg-svc-note">
                    <strong>Gwarancja bezpieczeństwa</strong>
                    <p>Twoje dane nie są udostępniane osobom trzecim w celach marketingowych. Dbamy o standard ochrony prywatności naszych klientów.</p>
                </div>
            </article>
        </div>
    </section>
</main>

<?php get_footer(); ?>
