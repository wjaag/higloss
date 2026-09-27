<?php
/**
 * Template Name: Podstrona Usługi - Dechroming / Shadow Line (SEO Expanded)
 *
 * Wydzielona z dawnej wspolnej strony /detailing (szyby + dechroming) —
 * patrz higloss_legacy_detailing_redirect() w functions.php.
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 6.5rem 0 4rem; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO PHOTO BANNER WITH TITLE ON PHOTO -->
        <?php
        get_template_part('template-parts/subpage-banner', null, array(
            'accent' => '#ff0055',
            'image'  => HIGLOSS_THEME_URI . '/assets/images/ai_oferta_dechroming.webp',
            'badge'  => 'DECHROMING &bull; SHADOW LINE SZCZECIN - MIERZYN',
            'title'  => 'DECHROMING <span>SHADOW LINE</span>',
        ));
        ?>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID WITH EXPANDED SEO CONTENT -->
        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 4rem;">

            <!-- LEFT COLUMN: PROMINENT EXPANDED SEO DESCRIPTION CARD -->
            <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                <h2 class="hg-editorial-title">
                    Dechroming, czyli Shadow Line
                </h2>

                <p class="hg-editorial-paragraph">
                    Specjalizujemy się w usłudze <strong>Dechromingu (Shadow Line)</strong> — oklejaniu chromowanych listew wokół szyb, grilla, lusterek i dyfuzorów na wysoki połysk lub głęboką satynową czerń. Zmienia to wygląd każdego auta na bardziej sportowy i drapieżny, a cała operacja jest w pełni odwracalna.
                </p>

                <p class="hg-editorial-paragraph">
                    Popularne dodatki do dechromingu to również przyciemnianie lamp foliami Light i Dark Smoke, paski na masce oraz dach i lusterka w kolorze kontrastowym — wszystko oklejamy w jednym dniu roboczym, w ogrzewanej hali w Mierzynie.
                </p>

                <div class="hg-editorial-highlight-box" style="--card-accent: #ff0055; background: rgba(255, 0, 85, 0.1);">
                    <strong style="color: #ff0055; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Pełna odwracalność:</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Folia Shadow Line po zdjęciu nie zostawia śladów na oryginalnym chromie ani lakierze, o ile był wcześniej w dobrym stanie — możesz bezpiecznie wrócić do fabrycznego wyglądu w dowolnym momencie.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: SPECYFIKACJA + PRZYKLADOWA REALIZACJA -->
            <div class="hg-service-side">
                <!-- KARTA: SPECYFIKACJA + CTA -->
                <div class="hg-specs-cta-card" style="--card-accent: #ff0055;">
                    <h3 class="hg-specs-title" style="border-color: #ff0055;">
                        SPECYFIKACJA DECHROMINGU
                    </h3>

                    <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2.2rem;">
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Wykończenie:</span>
                            <strong style="color: #ff0055; font-size: 1rem;">Shadow Line Black Gloss/Satin</strong>
                        </div>

                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Zakres:</span>
                            <strong style="color: #ffffff; font-size: 1rem;">Listwy, grill, lampy, dach, lusterka</strong>
                        </div>

                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Czas Usługi:</span>
                            <strong style="color: #ffffff; font-size: 1rem;">1 Dzień Roboczy</strong>
                        </div>
                    </div>

                    <!-- CALL CTA BUTTON -->
                    <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn" style="background: #ff0055; color: #ffffff; border: 2px solid #ff0055; width: 100%; justify-content: center; font-size: 0.95rem; font-weight: 900; text-align: center; padding: 1.1rem;">
                        <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> ZADZWOŃ: 605 088 065 <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h16M14 6l6 6-6 6"/></svg>
                    </a>
                </div>

                <!-- KARTA: PRZYKLADOWA REALIZACJA TEJ USLUGI -->
                <?php get_template_part('template-parts/service-realizacje'); ?>
            </div>

        </div>

        <!-- ROZSZERZONA TREŚĆ SEO: dechroming i detale nadwozia -->
        <div class="hg-editorial-card" style="--card-accent: #ff0055; margin-bottom: 2.8rem;">
            <h2 class="hg-editorial-title">
                Dechroming, detale i dodatki nadwozia
            </h2>

            <p class="hg-editorial-paragraph">
                Usługa <strong>Shadow Line</strong> to oklejenie chromowanych listew wokół szyb, grilla, emblematów i progów folią w połysku, satynie lub czarnym macie — szybka, w pełni odwracalna zmiana charakteru auta. Popularne dodatki to także przyciemnianie lamp foliami Light i Dark Smoke, paski na masce oraz dach i lusterka w kolorze kontrastowym.
            </p>

            <p class="hg-editorial-paragraph">
                Zobacz przykłady z naszej hali: <a href="/realizacja/mercedes-glk-przyciemnianie-lamp-i-dechroming-grila/">Mercedes GLK — przyciemnianie lamp i dechroming grila</a> oraz <a href="/realizacja/dodge-charger-paski-na-masce/">Dodge Charger — paski na masce</a>. Orientacyjny koszt mniejszych detali, jak dach czy lusterka, znajdziesz w artykule <a href="/ile-kosztuje-oklejenie-dachu-auta-folia/">ile kosztuje oklejenie dachu folią</a>.
            </p>

            <p class="hg-editorial-paragraph">
                Jeśli szukasz też przyciemnienia szyb, to osobna usługa z własnymi wymogami prawnymi — zobacz stronę <a href="/przyciemnianie-szyb/">przyciemnianie szyb</a>.
            </p>
        </div>

    </div>
    <!-- LOKALNE SEO: DECHROMING SZCZECIN / MIERZYN -->
    <section class="hg-section" style="padding-top: 1rem;" aria-labelledby="dech-local-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">Dechroming blisko Ciebie</p>
                    <h2 id="dech-local-title">Listwy, lampy, detale.<br><span>Szczecin i Mierzyn.</span></h2>
                </div>
                <p>Większość usług z tej strony zamykamy w jeden dzień roboczy — auto zostawiasz rano w hali przy ul. Podmiejskiej 4 w Mierzynie, odbierasz po południu gotowe.</p>
            </header>

            <div class="hg-svc-chips">
                <article><h3>Mierzyn — hala studio</h3><p>ul. Podmiejska 4: ogrzewane stanowiska do aplikacji folii i kontrola jakości pod lampami.</p></article>
                <article><h3>Szczecin</h3><p>Gumieńce, Bezrzecze, Pomorzany, Prawobrzeże, Centrum i Police — najczęstsze kierunki klientów dechromingu.</p></article>
                <article><h3>Region</h3><p>Goleniów, Stargard, Gryfino i wybrzeże — przyjmujemy auta z całego województwa zachodniopomorskiego.</p></article>
                <article><h3>Odwracalność</h3><p>Folia Shadow Line nie ingeruje w oryginalny chrom ani lakier — w każdej chwili możesz wrócić do fabrycznego wyglądu.</p></article>
                <article><h3>Wycena w 24 h</h3><p>Napisz, co Cię interesuje (listwy, grill, lampy, dach, lusterka) — bezpłatną kalkulację dostaniesz tego samego lub następnego dnia.</p></article>
            </div>
        </div>
    </section>

    <!-- PROCES DECHROMINGU -->
    <section class="hg-section" style="background: #070a0f;" aria-labelledby="dech-process-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">Jak pracujemy</p>
                    <h2 id="dech-process-title">Cztery etapy.<br><span>Zero kompromisów.</span></h2>
                </div>
                <p>Dechroming rządzi się tymi samymi prawami co duże aplikacje: dobór, przygotowanie, montaż w warunkach i kontrola.</p>
            </header>

            <ul class="hg-process-grid">
                <li><span>01</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
                    <h3>Dobór i wycena</h3>
                    <p>Ustalamy zakres (listwy, grill, lampy, dach, lusterka) i wykończenie — połysk, satyna lub czarny mat.</p>
                </li>
                <li><span>02</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3s6 6.5 6 11a6 6 0 0 1-12 0c0-4.5 6-11 6-11Z"/></svg></div>
                    <h3>Przygotowanie</h3>
                    <p>Mycie i odtłuszczanie elementów, a tam gdzie trzeba — demontaż listwy lub emblematu dla czystej krawędzi folii.</p>
                </li>
                <li><span>03</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="m3 13 9 5 9-5"/></svg></div>
                    <h3>Aplikacja</h3>
                    <p>Formowanie folii na gorąco i montaż w ogrzewanej hali — bez pęcherzy, pyłków i podwiniętych krawędzi.</p>
                </li>
                <li><span>04</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="m9 12 2 2 4-4"/></svg></div>
                    <h3>Kontrola jakości</h3>
                    <p>Inspekcja krawędzi pod lampami kontrolnymi i wskazówki pielęgnacji (7 dni bez myjni).</p>
                </li>
            </ul>
        </div>
    </section>

<?php get_template_part('template-parts/service-faq'); ?>
<?php get_template_part('template-parts/service-xlinks'); ?>

</main>

<?php get_footer(); ?>
