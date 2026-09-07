<?php
/**
 * Template Name: Podstrona Usługi - Szkolenia Car Wrapping (Szczecin / Mierzyn)
 *
 * Layout w jezyku design-systemu landingu (hg-section / hg-process-grid / hg-svc-chips),
 * zeby sekcje wykorzystywaly pelna szerokosc strony jak na stronie glownej.
 *
 * @package HiGloss2026
 */

get_header();
?>

<main style="padding: 7.5rem 0 0; flex: 1;">
    <div class="hg-container">

        <!-- COMPACT HERO PHOTO BANNER WITH TITLE ON PHOTO -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #8b5cf6; background-image: url('<?php echo esc_url(HIGLOSS_THEME_URI . '/assets/images/ai_oferta_szkolenia.webp'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">SZKOLENIA CAR WRAPPINGU SZCZECIN - MIERZYN</span>
                <h1 class="hg-subpage-banner-title">
                    PROFESJONALNE <span style="color: #8b5cf6;">SZKOLENIA CAR WRAPPINGU</span>
                </h1>
                <p style="color: #cbd5e1; max-width: 640px; margin: 0.8rem 0 0; font-size: 0.95rem; line-height: 1.6;">
                    Praktyczne szkolenia z oklejania aut w ogrzewanej hali w Mierzynie: na prawdziwych samochodach,
                    foliach premium i w małych grupach. Dla warsztatów, detailerów i osób, które startują w branży.
                </p>
            </div>
        </div>

        <!-- STATS / PROOF STRIP -->
        <div class="hg-gallery-hero-strip">
            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <div>
                    <strong>15 lat</strong>
                    <small>praktyki w oklejaniu</small>
                </div>
            </div>

            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div>
                    <strong>Max 4 os.</strong>
                    <small>na trenera</small>
                </div>
            </div>

            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12l2-5h14l2 5v5h-3m-12 0H3v-5Zm4 0h10"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
                </div>
                <div>
                    <strong>100%</strong>
                    <small>praktyki na autach</small>
                </div>
            </div>

            <div class="hg-gallery-hero-metric">
                <div class="hg-gallery-hero-metric-icon">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.5 13 17 22l-5-3-5 3 1.5-9"/></svg>
                </div>
                <div>
                    <strong>Certyfikat</strong>
                    <small>+ materiały w cenie</small>
                </div>
            </div>
        </div>
    </div>

    <!-- PROGRAM: CZTERY MODULY -->
    <section class="hg-section hg-services" id="program" aria-labelledby="szkolenia-program-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">01 · Program</p>
                    <h2 id="szkolenia-program-title">Cztery moduły.<br><span>Od zera do wdrożenia.</span></h2>
                </div>
                <p>Każdy moduł kończysz z oklejonym elementem lub całym autem i listą kontrolną do powtórzenia we własnym warsztacie. Możesz zacząć od podstaw albo wejść od razu w specjalizację.</p>
            </header>

            <ul class="hg-process-grid">
                <li><span>M1</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18v3h3l6.3-6.3a4 4 0 0 0 5.4-5.4l-2.9 2.9-2.1-2.1 2.9-2.9Z"/></svg></div>
                    <h3>Podstawy car wrappingu</h3>
                    <p>Przygotowanie lakieru, narzędzia, cięcie i praca na krzywiznach. Pierwszy element oklejasz jeszcze przed południem.</p>
                </li>
                <li><span>M2</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3l7 7-7 7-7-7 7-7Z"/></svg></div>
                    <h3>Całościowa zmiana koloru</h3>
                    <p>Demontaż elementów, zawijanie folii w głąb, wykończenia krawędzi i kontrola jakości jak przy zleceniu komercyjnym.</p>
                </li>
                <li><span>M3</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                    <h3>Ochrona PPF</h3>
                    <p>Folia poliuretanowa: strefy aplikacji, praca z samoregeneracją i wykończenia, których nie widać gołym okiem.</p>
                </li>
                <li><span>M4</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M1 8h13v8H1zM14 11h4l3 3v2h-7"/><circle cx="6" cy="18" r="1.6"/><circle cx="17.5" cy="18" r="1.6"/></svg></div>
                    <h3>Reklama i branding flot</h3>
                    <p>Wielkoformatowa grafika, druk i aplikacja na pojazdach firmowych — moduł także dla działów marketingu.</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- DZIEN SZKOLENIA -->
    <section class="hg-section" style="background: #070a0f;" aria-labelledby="szkolenia-dzien-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">02 · Rytm dnia</p>
                    <h2 id="szkolenia-dzien-title">Tak wygląda<br><span>dzień szkolenia.</span></h2>
                </div>
                <p>Teorii jest dokładnie tyle, ile trzeba, żeby praktyka była bezpieczna dla auta i folii. Resztę dnia kleisz — pod okiem trenera, na prawdziwym samochodzie.</p>
            </header>

            <ul class="hg-process-grid hg-process-grid--3">
                <li><span>08:30</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V2H6.5A2.5 2.5 0 0 0 4 4.5v15Z"/><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"/></svg></div>
                    <h3>Teoria i dobór materiałów</h3>
                    <p>Rodzaje folii wylewanych, narzędzia, temperatury i plan cięcia — na przykładzie aut, które tego dnia oklejamy.</p>
                </li>
                <li><span>10:00</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 12l2-5h14l2 5v5h-3m-12 0H3v-5Zm4 0h10"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg></div>
                    <h3>Praktyka przy aucie</h3>
                    <p>Przygotowanie pojazdu, aplikacja na elementach, praca opalarką i rakelką. Każdy uczestnik klei samodzielnie.</p>
                </li>
                <li><span>15:00</span>
                    <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.5 13 17 22l-5-3-5 3 1.5-9"/></svg></div>
                    <h3>Wykończenia i certyfikat</h3>
                    <p>Zawijanie w głąb, kontrola jakości pod lampami, omówienie błędów i certyfikat z planem wdrożenia u siebie.</p>
                </li>
            </ul>
        </div>
    </section>

    <!-- CO ZAPEWNIAMY -->
    <section class="hg-section" aria-labelledby="szkolenia-zapewniamy-title">
        <div class="hg-container">
            <header class="hg-section-heading">
                <div>
                    <p class="hg-kicker">03 · W cenie</p>
                    <h2 id="szkolenia-zapewniamy-title">Przyjeżdżasz.<br><span>Resztę masz na miejscu.</span></h2>
                </div>
                <p>Nie musisz mieć własnego sprzętu ani auta — wszystko, czego potrzebuje aplikator, czeka przygotowane w hali.</p>
            </header>

            <div class="hg-svc-chips">
                <article><h3>Prawdziwe auto</h3><p>Na każdy moduł ćwiczymy na realnym samochodzie z naszej hali, nie na płaskiej blasze.</p></article>
                <article><h3>Folie i narzędzia</h3><p>Folie premium 3M / Avery / Hexis, rakelki, noże i opalarki — komplet sprzętu w cenie szkolenia.</p></article>
                <article><h3>Materiały</h3><p>Skrócona teoria, checklista wdrożeniowa i lista materiałów z hurtowni, z którymi pracujemy.</p></article>
                <article><h3>Certyfikat</h3><p>Imienny certyfikat ukończenia modułu oraz konsultacje po wdrożeniu — piszesz, odpowiadamy.</p></article>
                <article><h3>Zaplecze</h3><p>Kawa, obiad, parking i szatnia na miejscu w Mierzynie; pomagamy znaleźć nocleg w okolicy.</p></article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <div class="hg-container" style="padding-bottom: 4rem;">
        <div class="hg-editorial-card" style="--card-accent: #8b5cf6; background: linear-gradient(135deg, rgba(14, 20, 30, 0.95), rgba(7, 10, 16, 0.95)); border: 1px solid rgba(139, 92, 246, 0.4); padding: 3rem; text-align: center;">
            <span style="color: #8b5cf6; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                NAJBLIŻSZE TERMINY &bull; HALA MIERZYN
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem; letter-spacing: -0.02em;">
                ZAREZERWUJ MIEJSCE W NAJBLIŻSZEJ EDYCJI
            </h2>
            <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 680px; margin: 0 auto 2.2rem; line-height: 1.6;">
                Grupy zamykamy przy 4 osobach, dlatego terminy rozchodzą się szybko. Zadzwoń albo napisz,
                jaki moduł Cię interesuje — wyślemy program i wolne daty.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+48605088065" class="hg-btn" style="background: #8b5cf6; border-color: #8b5cf6; color: #000000; padding: 1rem 2rem; font-weight: 900;">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> ZADZWOŃ: 605 088 065
                </a>
                <a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="hg-btn hg-btn-outline" style="padding: 1rem 2rem; font-weight: 800;">
                    ZAPYTAJ O TERMIN &rarr;
                </a>
            </div>
        </div>
    </div>

<?php get_template_part('template-parts/service-faq'); ?>
<?php get_template_part('template-parts/service-xlinks'); ?>

</main>

<?php get_footer(); ?>
