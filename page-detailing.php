<?php
/**
 * Template Name: Podstrona Usługi - Przyciemnianie Szyb & Detailing (SEO Expanded)
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 6.5rem 0 4rem; flex: 1;">
    <div class="hg-container">
        
        <!-- COMPACT HERO PHOTO BANNER WITH TITLE ON PHOTO -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #ff0055; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_detailing.webp'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge" style="color: #ff0055; border-color: #ff0055;">PRZYCIEMNIANIE SZYB &amp; DECHROMING SZCZECIN</span>
                <h1 class="hg-subpage-banner-title">
                    DETAILING &amp; <span style="color: #ff0055;">PRZYCIEMNIANIE SZYB</span>
                </h1>
            </div>
        </div>

        <!-- 2-COLUMN EDITORIAL CONTENT GRID WITH EXPANDED SEO CONTENT -->
        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 4rem;">
            
            <!-- LEFT COLUMN: PROMINENT EXPANDED SEO DESCRIPTION CARD -->
            <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                <h2 class="hg-editorial-title">
                    Szyby i dechroming
                </h2>

                <p class="hg-editorial-paragraph">
                    Oferujemy profesjonalne przyciemnianie szyb samochodowych atestowanymi foliami ceramicznymi i piecowymi. Folia redukuje nagrzewanie się wnętrza pojazdu w upalne dni, blokuje do 99% szkodliwego promieniowania UV oraz zapewnia prywatność i bezpieczeństwo pasażerów.
                </p>

                <p class="hg-editorial-paragraph">
                    Specjalizujemy się także w usłudze <strong>Dechromingu (Shadow Line)</strong> – oklejaniu chromowanych listew wokół szyb, grilla, lusterek i dyfuzorów na wysoki połysk lub głęboką satynową czerń. Zmienia to wygląd każdego auta na bardziej sportowy i drapieżny.
                </p>

                <div class="hg-editorial-highlight-box" style="--card-accent: #ff0055; background: rgba(255, 0, 85, 0.1);">
                    <strong style="color: #ff0055; display: block; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; font-family: 'Montserrat', sans-serif;">Atest Instytutu Szkła i Ceramiki (ISiC):</strong>
                    <span style="color: #ffffff; font-size: 0.98rem; line-height: 1.65; display: block;">Na wybraną usługę przyciemniania szyb wydajemy oficjalny atest homologacyjny, gwarantujący 100% legalności i spokój podczas przeglądów i kontroli drogowych.</span>
                </div>
            </div>

            <!-- RIGHT COLUMN: SPECYFIKACJA + PRZYKLADOWA REALIZACJA -->
            <div class="hg-service-side">
                <!-- KARTA: SPECYFIKACJA + CTA -->
                <div class="hg-specs-cta-card" style="--card-accent: #ff0055;">
                    <h3 class="hg-specs-title" style="border-color: #ff0055;">
                        SPECYFIKACJA DETAILINGU
                    </h3>

                    <div style="display: flex; flex-direction: column; gap: 1.25rem; color: #ffffff; margin-bottom: 2.2rem;">
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Szyby:</span>
                            <strong style="color: #ff0055; font-size: 1rem;">Folie Ceramiczne z Atestem</strong>
                        </div>

                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.08); padding-bottom: 0.6rem;">
                            <span style="color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.8rem;">Dechroming:</span>
                            <strong style="color: #ff0055; font-size: 1rem;">Shadow Line Black Gloss/Satin</strong>
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

        <!-- ROZSZERZONA TREŚĆ SEO: szyby / dechroming / detailing -->
        <div class="hg-editorial-card" style="--card-accent: #ff0055; margin-bottom: 2.8rem;">
            <h2 class="hg-editorial-title">
                Przyciemnianie szyb — skutecznie i zgodnie z przepisami
            </h2>

            <p class="hg-editorial-paragraph">
                Montujemy dwie klasy folii przyciemniających: <strong>ceramiczne</strong> (najwyższa redukcja nagrzewania wnętrza, pełna neutralność dla elektroniki i sygnału GPS) oraz <strong>piecowe</strong> (ekonomiczna, trwała barwa). Obie blokują do 99% promieniowania UV, chroniąc tapicerkę przed blaknięciem, a pasażerom zapewniając prywatność.
            </p>

            <p class="hg-editorial-paragraph">
                Szyby tylne i boczne tylne można przyciemniać bez ograniczeń — to tutaj najczęściej trafiają folie <strong>5%, 15% lub 35%</strong>. Przednia szyba czołowa i przednie szyby boczne mają wymogi przepuszczalności światła (odpowiednio min. 75% i 70%), dlatego na przód dobieramy wyłącznie jasne folie z homologacją albo szczerze odradzamy aplikację. Na życzenie domykamy usługę atestem, więc kontrola drogowa czy przegląd nie są problemem. Granice prawa i pomiary opisujemy szerzej w poradniku: <a href="/przyciemnianie-szyb-przepisy/">przyciemnianie szyb — co mówią przepisy</a>.
            </p>
        </div>

        <div class="hg-grid hg-grid-2" style="gap: 2.8rem; align-items: flex-start; margin-bottom: 4rem;">

            <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                <h3 class="hg-editorial-title">
                    Dechroming, detale i dodatki nadwozia
                </h3>

                <p class="hg-editorial-paragraph">
                    Usługa <strong>Shadow Line</strong> to oklejenie chromowanych listew wokół szyb, grilla, emblematów i progów folią w połysku, satynie lub czarnym macie — szybka, w pełni odwracalna zmiana charakteru auta. Popularne dodatki to także przyciemnianie lamp foliami Light i Dark Smoke, paski na masce oraz dach i lusterka w kolorze kontrastowym.
                </p>

                <p class="hg-editorial-paragraph">
                    Zobacz przykłady z naszej hali: <a href="/realizacja/mercedes-glk-przyciemnianie-lamp-i-dechroming-grila/">Mercedes GLK — przyciemnianie lamp i dechroming grila</a> oraz <a href="/realizacja/dodge-charger-paski-na-masce/">Dodge Charger — paski na masce</a>. Orientacyjny koszt mniejszych detali, jak dach czy lusterka, znajdziesz w artykule <a href="/ile-kosztuje-oklejenie-dachu-auta-folia/">ile kosztuje oklejenie dachu folią</a>.
                </p>
            </div>

            <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                <h3 class="hg-editorial-title">
                    Detailing i przygotowanie lakieru pod folię
                </h3>

                <p class="hg-editorial-paragraph">
                    Rzetelne przygotowanie to podstawa trwałej aplikacji: mycie z dekontaminacją, glinkowanie, usuwanie smoły i jednoetapowa korekta lakieru. Na życzenie zabezpieczamy lakier lub wnętrze powłoką ochronną. To samo przygotowanie wykonujemy przed każdym montażem <a href="/ppf/">bezbarwnej folii ochronnej PPF</a> oraz <a href="/zmiana-koloru/">całościowej zmiany koloru auta</a> — dlatego folia trzyma lata bez podpływania krawędzi.
                </p>

                <p class="hg-editorial-paragraph">
                    Jak dbać o auto po montażu folii, podpowiadamy w poradniku: <a href="/pielegnacja-folii-po-oklejeniu/">pielęgnacja folii po oklejeniu</a>. Drobiazgowy zakres prac omówimy telefonicznie — jeden dzień roboczy wystarcza na większość usług z tej strony.
                </p>
            </div>

        </div>

    </div>
    <!-- LOKALNE SEO: DETAILING SZCZECIN / MIERZYN -->
    <section class="hg-section" style="padding-top: 1rem;" aria-labelledby="det-local-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">Detailing blisko Ciebie</p>
                    <h2 id="det-local-title">Szyby, dechroming, detale.<br><span>Szczecin i Mierzyn.</span></h2>
                </div>
                <p>Większość usług z tej strony zamykamy w jeden dzień roboczy — auto zostawiasz rano w hali przy ul. Podmiejskiej 4 w Mierzynie, odbierasz po południu gotowe.</p>
            </header>

            <div class="hg-svc-chips">
                <article><h3>Mierzyn — hala studio</h3><p>ul. Podmiejska 4: ogrzewane stanowiska do aplikacji folii, formowanie szyb na gorąco i kontrola jakości pod lampami.</p></article>
                <article><h3>Szczecin</h3><p>Gumieńce, Bezrzecze, Pomorzany, Prawobrzeże, Centrum i Police — najczęstsze kierunki klientów szybowych i dechromingu.</p></article>
                <article><h3>Region</h3><p>Goleniów, Stargard, Gryfino i wybrzeże — przyjmujemy auta z całego województwa zachodniopomorskiego.</p></article>
                <article><h3>Atest i przepisy</h3><p>Na przód dobieramy wyłącznie folie z homologacją, a na życzenie wystawiamy atest — przegląd i kontrola drogowa bez stresu.</p></article>
                <article><h3>Wycena w 24 h</h3><p>Napisz, co Cię interesuje (szyby, dechroming, lampy, przygotowanie lakieru) — bezpłatną kalkulację dostaniesz tego samego lub następnego dnia.</p></article>
            </div>
        </div>
    </section>

    <!-- FOLIE CERAMICZNE VS PIECOWE -->
    <section class="hg-section" style="background: #070a0f;" aria-labelledby="det-compare-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">Warto wiedzieć</p>
                    <h2 id="det-compare-title">Ceramika czy piec?<br><span>Jaką folię wybrać.</span></h2>
                </div>
                <p>Obie klasy folii blokują do 99% UV i dają ten sam efekt wizualny. Różnica jest w komforcie termicznym i budżecie — dobieramy je do auta i Twoich oczekiwań.</p>
            </header>

            <div class="hg-grid hg-grid-2" style="gap: 2rem; align-items: stretch;">
                <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                    <h2 class="hg-editorial-title">Folie ceramiczne — komfort i technologia</h2>
                    <ul style="color: #e2e8f0; font-size: 1rem; line-height: 1.8; padding-left: 1.2rem; display: flex; flex-direction: column; gap: 0.55rem;">
                        <li><strong>Mniej nagrzane wnętrze:</strong> wysoka redukcja promieniowania IR — klimatyzacja pracuje lżej, a lato w aucie jest znośniejsze.</li>
                        <li><strong>Neutralne dla elektroniki:</strong> bez zakłóceń GPS, radia i czujników — bez metalizowanej warstwy.</li>
                        <li><strong>Najwyższa klarowność:</strong> brak efektu „mleka" nawet przy ciemniejszych procentach.</li>
                        <li><strong>Dla kogo:</strong> nowe auta, panoramiczne dachy i kierowcy jeżdżący dużo w słońcu.</li>
                    </ul>
                </div>
                <div class="hg-editorial-card" style="--card-accent: #ff0055;">
                    <h2 class="hg-editorial-title">Folie piecowe — klasyka w dobrej cenie</h2>
                    <ul style="color: #e2e8f0; font-size: 1rem; line-height: 1.8; padding-left: 1.2rem; display: flex; flex-direction: column; gap: 0.55rem;">
                        <li><strong>Niższy budżet:</strong> zwykle o 30-40% taniej od ceramiki przy tym samym efekcie wizualnym.</li>
                        <li><strong>Trwała, głęboka barba:</strong> sprawdzona technologia barwienia piecowego — kolor nie płowieje latami.</li>
                        <li><strong>Te same standardy:</strong> ochrona UV do 99%, prywatność i atest na życzenie.</li>
                        <li><strong>Dla kogo:</strong> auta codzienne i flotowe, gdzie liczy się wygląd i prywatność bez dopłaty za termikę.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCES DETAILINGU -->
    <section class="hg-section" aria-labelledby="det-process-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">Jak pracujemy</p>
                    <h2 id="det-process-title">Cztery etapy.<br><span>Zero kompromisów.</span></h2>
                </div>
                <p>Szyby, dechroming i detale rządzą się tymi samymi prawami co duże aplikacje: dobór, przygotowanie, montaż w warunkach i kontrola.</p>
            </header>

            <ul class="hg-process-grid">
                <li><span>01</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
                    <h3>Dobór i pomiar</h3>
                    <p>Ustalamy procent przepuszczalności zgodnie z przepisami (przód min. 75/70%) i dobieramy klasę folii do auta oraz budżetu.</p>
                </li>
                <li><span>02</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3s6 6.5 6 11a6 6 0 0 1-12 0c0-4.5 6-11 6-11Z"/></svg></div>
                    <h3>Przygotowanie</h3>
                    <p>Mycie i odtłuszczanie szyb, demontaż boczków i uszczelek tam, gdzie wymaga tego czysta krawędź folii.</p>
                </li>
                <li><span>03</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m12 3 9 5-9 5-9-5 9-5Z"/><path d="m3 13 9 5 9-5"/></svg></div>
                    <h3>Aplikacja</h3>
                    <p>Formowanie folii na gorąco i montaż w ogrzewanej hali — bez pęcherzy, pyłków i podwiniętych krawędzi.</p>
                </li>
                <li><span>04</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="m9 12 2 2 4-4"/></svg></div>
                    <h3>Kontrola i atest</h3>
                    <p>Inspekcja krawędzi, wskazówki pielęgnacji (7 dni bez myjni) i atest do folii na życzenie.</p>
                </li>
            </ul>
        </div>
    </section>

<?php get_template_part('template-parts/service-faq'); ?>
<?php get_template_part('template-parts/service-xlinks'); ?>

</main>

<?php get_footer(); ?>
