<?php
/**
 * Template Name: Podstrona O Firmie
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = HIGLOSS_THEME_URI;
?>

<main id="main-content" class="hg-landing">
    <section class="hg-hero hg-page-hero" aria-labelledby="hero-title">
        <img class="hg-hero-media" src="<?php echo esc_url($theme_uri . '/assets/images/ai_tile1_pasja.webp'); ?>" alt="" width="1408" height="768" fetchpriority="high">
        <div class="hg-hero-shade"></div>
        <div class="hg-hero-grid" aria-hidden="true"></div>
        <div class="hg-container hg-hero-inner">
            <div class="hg-hero-content">
                <p class="hg-eyebrow hg-reveal"><span></span> HI-GLOSS DESIGN · Szczecin / Mierzyn</p>
                <h1 id="hero-title" class="hg-hero-title hg-reveal">Pasja do grafiki.<br><span>Rzemiosło w detalach.</span></h1>
                <p class="hg-hero-lead hg-reveal">Od 15 lat oklejamy pojazdy w Szczecinie. Zaczynaliśmy od grafiki samochodowej — dziś robimy kompletne zmiany koloru, ochronę PPF i floty, w tej samej hali i z tą samą odpowiedzialnością za krawędź.</p>
                <div class="hg-hero-actions hg-reveal">
                    <a href="#o-nas" class="hg-btn hg-btn-primary">Nasza historia <svg class="hg-ui-icon hg-ui-icon--arrow-down" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M6 13.5l6 6 6-6"/></svg></a>
                    <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-btn hg-btn-ghost">Bezpłatna wycena <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
                </div>
            </div>
            <div class="hg-hero-proof hg-reveal" role="group" aria-label="Studio w liczbach">
                <div><strong>15</strong><span>lat historii<br>HI-GLOSS</span></div>
                <div><strong>500<sup>+</sup></strong><span>zrealizowanych<br>projektów</span></div>
                <div><strong>40<sup>+</sup></strong><span>aut we flocie<br>DHL Courier</span></div>
            </div>
        </div>
    </section>

    <section class="hg-feature-split" id="o-nas" aria-labelledby="about-title">
        <div class="hg-feature-media hg-reveal">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/historia_firmy.webp'); ?>" alt="Studio HI-GLOSS DESIGN — praca nad samochodem" width="1408" height="768" loading="lazy">
            <div class="hg-feature-label"><span>HI-GLOSS STUDIO</span> Szczecin · Mierzyn</div>
        </div>
        <div class="hg-feature-copy">
            <div class="hg-reveal">
                <p class="hg-kicker">O nas</p>
                <h2 id="about-title">Nie zostawiamy<br><span>nic przypadkowi.</span></h2>
                <p class="hg-feature-lead">Specjalizujemy się w całościowym oklejaniu pojazdów i grafice samochodowej. Łączymy kreatywne podejście z techniczną precyzją — przy zmianie koloru albo ochronie lakieru efekt końcowy nie może być dziełem przypadku.</p>
                <p>Pracujemy w ogrzewanej pracowni w Mierzynie, zapewniając folii właściwe warunki aplikacji. Przed pracą przygotowujemy auto, a gdy projekt tego wymaga — demontujemy klamki, lampy, lusterka i inne elementy, żeby krawędź była czysta i trwała.</p>
                <p>Technologia i materiały zmieniały się na przestrzeni lat. Standard wykonania oraz odpowiedzialność za każdy detal pozostały takie same.</p>
            </div>
            <div class="hg-history hg-reveal" role="group" aria-label="15 lat historii HI-GLOSS">
                <div class="hg-history-figure">
                    <strong>15</strong>
                    <span>lat historii<br>HI-GLOSS</span>
                </div>
                <p class="hg-history-note">Doświadczenie, które widać w każdym detalu — od grafiki samochodowej po kompleksową ochronę lakieru.</p>
            </div>
            <div class="hg-feature-points hg-reveal">
                <div><span>01</span><p><strong>Własne zaplecze</strong>Druk wielkoformatowy i precyzyjne plotery tnące na miejscu.</p></div>
                <div><span>02</span><p><strong>Kontrolowane warunki</strong>Ogrzewana, przygotowana do aplikacji pracownia.</p></div>
                <div><span>03</span><p><strong>Materiały premium</strong>System dobierany do auta, efektu i sposobu użytkowania.</p></div>
                <div><span>04</span><p><strong>Pełne przygotowanie</strong>Dbałość o lakier, demontaż i bezpieczne wykończenie detali.</p></div>
            </div>
        </div>
    </section>

    <section class="hg-cta-band" aria-label="Zaproszenie do kontaktu">
        <div class="hg-cta-track" aria-hidden="true">
            <span>Szczecin</span><i></i><span>Mierzyn</span><i></i><span>15 lat</span><i></i><span>Szczecin</span><i></i><span>Mierzyn</span><i></i>
        </div>
        <div class="hg-container hg-cta-content hg-reveal">
            <p>Chcesz zobaczyć halę albo folie na żywo?</p>
            <h2>Zapraszamy do Mierzyna.</h2>
            <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-primary">Umów wizytę <svg class="hg-ui-icon hg-ui-icon--arrow-ne" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
