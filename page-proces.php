<?php
/**
 * Template Name: Podstrona Proces (SEO: jak wyglada oklejanie auta)
 *
 * Karty etapowe .hg-step-card (style: main.css) — panel boczny z czasem
 * i zakresem po stronie klienta. Fraza: "jak wyglada oklejanie auta".
 *
 * @package HiGloss2026
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

<main id="main-content" style="padding: 7.5rem 0 5rem; flex: 1;">
    <div class="hg-container">

        <!-- HERO BANNER -->
        <div class="hg-subpage-image-banner" style="--banner-accent: #25aae1; background-image: url('<?php echo esc_url($theme_uri . '/assets/images/gallery_ppf_application.webp'); ?>');">
            <div class="hg-subpage-banner-vignette"></div>
            <div class="hg-subpage-banner-content">
                <span class="hg-subpage-banner-badge">PROCES REALIZACJI &bull; STUDIO SZCZECIN / MIERZYN</span>
                <h1 class="hg-subpage-banner-title">
                    JAK WYGLĄDA <span style="color: #25aae1;">OKLEJANIE AUTA?</span>
                </h1>
                <p style="color: #cbd5e1; max-width: 640px; margin: 0.8rem 0 0; font-size: 0.95rem; line-height: 1.6;">
                    Od pierwszego telefonu do odbioru auta mija zwykle 3–5 dni roboczych. Znasz dokładnie, co dzieje się z Twoim samochodem na każdym etapie — bez niespodzianek i bez skrótów kosztem jakości.
                </p>
            </div>
        </div>

        <!-- 6 ETAPÓW -->
        <section style="margin-top: 3rem;" aria-labelledby="proces-kroki">
            <header class="hg-section-heading hg-reveal" style="margin-bottom: 1.8rem;">
                <div>
                    <p class="hg-kicker">Etap po etapie</p>
                    <h2 id="proces-kroki">6 kroków do auta<br><span>za którym się obejrzą.</span></h2>
                </div>
                <p>Jeden zespół prowadzi Twoje auto przez całość. Po każdym etapie wiesz, co zostało zrobione i co będzie dalej.</p>
            </header>

            <article class="hg-editorial-card hg-step-card hg-reveal">
                <figure class="hg-step-media"><img src="<?php echo esc_url($theme_uri . '/assets/images/proces_krok1.webp'); ?>" alt="Wycena zmiany koloru auta przez telefon — doradztwo studio HI-GLOSS" loading="lazy" decoding="async" width="640" height="400"></figure>
                <div>
                    <div class="hg-step-head">
                        <span class="hg-step-num">01</span>
                        <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v11H8l-4 4V5Z"/><path d="M8 9h8M8 12h5"/></svg></div>
                    </div>
                    <h3 class="hg-step-title">Kontakt i bezpłatna wycena</h3>
                    <p class="hg-step-text">Dzwonisz pod <strong>605 088 065</strong> albo zostawiasz zapytanie w formularzu — podajesz markę, model, rocznik i oczekiwany efekt. W odpowiedzi dostajesz widełki ceny, proponowany materiał i najbliższy wolny termin. Wycena nic nie kosztuje i do niczego nie zobowiązuje.</p>
                </div>
                <aside class="hg-step-aside">
                    <div class="hg-gallery-specs-row">
                        <span class="hg-gallery-spec-item">Czas: <strong>do 24 h</strong></span>
                        <span class="hg-gallery-spec-item">Ty podajesz: <strong>markę i model auta</strong></span>
                        <span class="hg-gallery-spec-item">Ty dostajesz: <strong>cenę + termin</strong></span>
                    </div>
                </aside>
            </article>

            <article class="hg-editorial-card hg-step-card hg-reveal">
                <figure class="hg-step-media"><img src="<?php echo esc_url($theme_uri . '/assets/images/proces_krok2.webp'); ?>" alt="Wzornik folii do zmiany koloru auta — dobór materiału 3M, Avery Dennison, Inozetek" loading="lazy" decoding="async" width="640" height="400"></figure>
                <div>
                    <div class="hg-step-head">
                        <span class="hg-step-num">02</span>
                        <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 16 8-12 8 12-8 4-8-4Z"/><path d="m8 14 4 2 4-2M12 4v12"/></svg></div>
                    </div>
                    <h3 class="hg-step-title">Dobór folii i projekt</h3>
                    <p class="hg-step-text">Przeglądamy razem <strong>wzorniki 3M, Avery Dennison i Inozetek</strong> — połysk, głęboki mat, satyna, struktury i kolory specjalne. Przy oklejaniu reklamowym przygotowujemy projekt graficzny i zaczynasz dopiero po Twojej akceptacji. Materiał rezerwujemy pod Twój termin.</p>
                </div>
                <aside class="hg-step-aside">
                    <div class="hg-gallery-specs-row">
                        <span class="hg-gallery-spec-item">Czas: <strong>1 spotkanie / online</strong></span>
                        <span class="hg-gallery-spec-item">Ty wybierasz: <strong>kolor i wykończenie</strong></span>
                        <span class="hg-gallery-spec-item">Ty dostajesz: <strong>rezerwację folii</strong></span>
                    </div>
                </aside>
            </article>

            <article class="hg-editorial-card hg-step-card hg-reveal">
                <figure class="hg-step-media"><img src="<?php echo esc_url($theme_uri . '/assets/images/proces_krok3.webp'); ?>" alt="Ręczne mycie i dekontaminacja lakieru przed oklejeniem auta folią" loading="lazy" decoding="async" width="640" height="400"></figure>
                <div>
                    <div class="hg-step-head">
                        <span class="hg-step-num">03</span>
                        <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v18M3 12h18"/><circle cx="12" cy="12" r="9"/></svg></div>
                    </div>
                    <h3 class="hg-step-title">Przygotowanie lakieru</h3>
                    <p class="hg-step-text">Ręczne mycie, <strong>dekontaminacja glinką</strong>, odtłuszczenie i inspekcja lakieru pod światłem. Jeśli powierzchnia wymaga korekty przed oklejeniem, mówimy to od razu i wyceniamy osobno — nigdy „po fakcie".</p>
                </div>
                <aside class="hg-step-aside">
                    <div class="hg-gallery-specs-row">
                        <span class="hg-gallery-spec-item">Czas: <strong>1 dzień</strong></span>
                        <span class="hg-gallery-spec-item">Zakres: <strong>mycie + glinka + odtłuszczenie</strong></span>
                        <span class="hg-gallery-spec-item">Ty dostajesz: <strong>ocenę stanu lakieru</strong></span>
                    </div>
                </aside>
            </article>

            <article class="hg-editorial-card hg-step-card hg-reveal">
                <figure class="hg-step-media"><img src="<?php echo esc_url($theme_uri . '/assets/images/proces_krok4.webp'); ?>" alt="Demontaż klamek i listew wg procedur fabrycznych podczas oklejania auta" loading="lazy" decoding="async" width="640" height="400"></figure>
                <div>
                    <div class="hg-step-head">
                        <span class="hg-step-num">04</span>
                        <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4L14 13l-3-3 3.7-3.7Z"/></svg></div>
                    </div>
                    <h3 class="hg-step-title">Demontaż wg procedur fabrycznych</h3>
                    <p class="hg-step-text">Zdejmujemy klamki, lusterka, listwy, lampy, a w pakietach premium także zderzaki — dokumentowanymi <strong>procedurami fabrycznymi</strong> producenta. Każdy element trafia na oznaczone miejsce. Dzięki temu folia zawija się głęboko pod osłony i efekt przypomina fabryczny lakier, a nie naklejkę.</p>
                </div>
                <aside class="hg-step-aside">
                    <div class="hg-gallery-specs-row">
                        <span class="hg-gallery-spec-item">Zakres: <strong>klamki / listwy / lampy</strong></span>
                        <span class="hg-gallery-spec-item">Premium: <strong>+ zderzaki</strong></span>
                        <span class="hg-gallery-spec-item">Efekt: <strong>„jak z lakierni"</strong></span>
                    </div>
                </aside>
            </article>

            <article class="hg-editorial-card hg-step-card hg-reveal">
                <figure class="hg-step-media"><img src="<?php echo esc_url($theme_uri . '/assets/images/proces_krok5.webp'); ?>" alt="Aplikacja folii winylowej w ogrzewanej hali — dwóch aplikatorów przy aucie" loading="lazy" decoding="async" width="640" height="400"></figure>
                <div>
                    <div class="hg-step-head">
                        <span class="hg-step-num">05</span>
                        <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 5.5 18.5 9.5M3 21l3.5-1 12-12a2.8 2.8 0 0 0-4-4l-12 12L3 21Z"/><path d="m13 6 4 4"/></svg></div>
                    </div>
                    <h3 class="hg-step-title">Aplikacja w ogrzewanej hali</h3>
                    <p class="hg-step-text">Oklejamy w zamkniętym, <strong>ogrzewanym pomieszczeniu</strong> — bez kurzu i wahania temperatur, które psują wiązanie kleju. Pilnujemy naprężeń folii na przetłoczeniach, zawijamy krawędzie elementów i <strong>nie tniemy po lakierze</strong> — docięcia wykonujemy na zdjętych częściach lub w kanalikach fabrycznych.</p>
                </div>
                <aside class="hg-step-aside">
                    <div class="hg-gallery-specs-row">
                        <span class="hg-gallery-spec-item">Czas: <strong>2–4 dni</strong></span>
                        <span class="hg-gallery-spec-item">Warunki: <strong>hala, kontrola temperatury</strong></span>
                        <span class="hg-gallery-spec-item">Zero: <strong>cięć po lakierze</strong></span>
                    </div>
                </aside>
            </article>

            <article class="hg-editorial-card hg-step-card hg-reveal">
                <figure class="hg-step-media"><img src="<?php echo esc_url($theme_uri . '/assets/images/proces_krok6.webp'); ?>" alt="Kontrola jakości folii pod światłem inspekcyjnym po oklejeniu auta" loading="lazy" decoding="async" width="640" height="400"></figure>
                <div>
                    <div class="hg-step-head">
                        <span class="hg-step-num">06</span>
                        <div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 4 4L19 6"/><circle cx="12" cy="12" r="10"/></svg></div>
                    </div>
                    <h3 class="hg-step-title">Kontrola jakości i odbiór</h3>
                    <p class="hg-step-text">Po wiązaniu kleju przeglądamy każdy detal przy świetle kontrolnym, domykamy montaż i myjemy auto na wydanie. Dostajesz <strong>instrukcję pielęgnacji</strong> (pierwsze 7 dni jest kluczowe — <a href="/pielegnacja-folii-po-oklejeniu/">mamy o tym artykuł</a>) oraz kartę gwarancyjną: do <strong>7 lat</strong> na folie kolorowe i do <strong>10 lat</strong> na folie PPF.</p>
                </div>
                <aside class="hg-step-aside">
                    <div class="hg-gallery-specs-row">
                        <span class="hg-gallery-spec-item">Kontrola: <strong>światło inspekcyjne</strong></span>
                        <span class="hg-gallery-spec-item">Gwarancja: <strong>7–10 lat</strong></span>
                        <span class="hg-gallery-spec-item">Ty dostajesz: <strong>auto + instrukcję</strong></span>
                    </div>
                </aside>
            </article>
        </section>

        <!-- OD CZEGO ZALEŻY TERMIN -->
        <div class="hg-editorial-card" style="margin-top: 3rem; padding: 2.2rem;">
            <span style="color: #25aae1; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                HARMONOGRAM
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.3rem, 2.5vw, 1.9rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.2rem;">
                Od czego zależy termin oklejenia?
            </h2>
            <ul style="color: #cbd5e1; line-height: 1.9; margin-left: 1.2rem; font-size: 0.98rem;">
                <li><strong style="color:#fff;">Wielkość i kształt auta</strong> — kompakt to mniej powierzchni niż duży SUV z licznymi przetłoczeniami.</li>
                <li><strong style="color:#fff;">Zakres demontażu</strong> — pełny demontaż zderzaków wydłuża pracę o ok. pół dnia, ale daje efekt lakierniczy.</li>
                <li><strong style="color:#fff;">Wybrana folia</strong> — wykończenia specjalne (struktury, flip-colory) wymagają więcej uwagi; kolory na zamówienie czekają na dostawę.</li>
                <li><strong style="color:#fff;">Stan lakieru</strong> — ewentualna korekta lub usunięcie starej folii dodajemy do harmonogramu, zawsze po Twojej akceptacji.</li>
            </ul>
        </div>

        <!-- STANDARDY -->
        <div class="hg-editorial-card" style="margin-top: 1.5rem; padding: 2.2rem;">
            <span style="color: #25aae1; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                W CENIE KAŻDEJ REALIZACJI
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.3rem, 2.5vw, 1.9rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.4rem;">
                Nasze standardy, nie dopłaty
            </h2>
            <div class="hg-gallery-specs-row" style="row-gap: 0.7rem;">
                <span class="hg-gallery-spec-item">Dekontaminacja <strong>glinką</strong></span>
                <span class="hg-gallery-spec-item">Demontaż <strong>wg procedur</strong></span>
                <span class="hg-gallery-spec-item">Zawinięcia <strong>krawędzi</strong></span>
                <span class="hg-gallery-spec-item">Kontrola przy <strong>świetle inspekcyjnym</strong></span>
                <span class="hg-gallery-spec-item">Instrukcja + <strong>karta gwarancyjna</strong></span>
            </div>
        </div>

        <!-- MINI FAQ -->
        <section style="margin-top: 3rem;" aria-labelledby="proces-faq">
            <header class="hg-section-heading hg-reveal" style="margin-bottom: 1.5rem;">
                <div>
                    <p class="hg-kicker">Pytania z warsztatu</p>
                    <h2 id="proces-faq">Najczęściej słyszymy<br><span>przed pierwszą wizytą.</span></h2>
                </div>
            </header>
            <div class="hg-gallery-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                <div class="hg-editorial-card" style="padding: 1.8rem;">
                    <h3 style="font-family: var(--hg-heading); color: #25aae1; font-size: 0.95rem; text-transform: uppercase; margin-bottom: 0.7rem;">Muszę jakoś przygotować auto?</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">Nie — mycie i całą dekontaminację wykonujemy u nas. Wystarczy, że przywozisz auto z w miarę pustym wnętrzem (demontujemy elementy nadwozia, ale nie sprzątamy kabiny).</p>
                </div>
                <div class="hg-editorial-card" style="padding: 1.8rem;">
                    <h3 style="font-family: var(--hg-heading); color: #25aae1; font-size: 0.95rem; text-transform: uppercase; margin-bottom: 0.7rem;">Zostaję bez auta na kilka dni — skąd wiadomo, co się z nim dzieje?</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">Na życzenie wysyłamy zdjęcia z postępu prac po każdym etapie. Auto stoi w zamkniętej, monitorowanej hali — odbierasz je umyte, z listą wykonanych czynności.</p>
                </div>
                <div class="hg-editorial-card" style="padding: 1.8rem;">
                    <h3 style="font-family: var(--hg-heading); color: #25aae1; font-size: 0.95rem; text-transform: uppercase; margin-bottom: 0.7rem;">Co jeśli coś się odklei po czasie?</h3>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.7; margin: 0;">To objęte gwarancją aplikacji — przyjeżdżasz, doklejamy / doklejamy element bez dyskusji. Gwarancja na folię to 7 lat (kolor) i 10 lat (PPF), a na wykonanie odpowiadamy własnym imieniem.</p>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <div class="hg-editorial-card" style="margin-top: 3rem; background: linear-gradient(135deg, rgba(14, 20, 30, 0.95), rgba(7, 10, 16, 0.95)); border: 1px solid rgba(37, 170, 225, 0.4); padding: 3rem; text-align: center;">
            <span style="color: #25aae1; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                KROK 01 ZAJMUJE CI 2 MINUTY
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.6rem, 3vw, 2.4rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1rem; letter-spacing: -0.02em;">
                ZACZYNAMY OD WYCENY &mdash; BEZPŁATNIE
            </h2>
            <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 680px; margin: 0 auto 2.2rem; line-height: 1.6;">
                Podaj markę i model auta oraz efekt, o którym myślisz. Odezwiemy się do 24 godzin z propozycją materiału, ceny i terminu.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="tel:+48605088065" class="hg-btn hg-btn-cyan" style="padding: 1rem 2rem; font-weight: 900;">
                    <svg class="hg-ui-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 7.18 2 2 0 0 1 4.11 5h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L8.09 12.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg> ZADZWOŃ: 605 088 065
                </a>
                <a href="<?php echo esc_url(home_url('/#wycena')); ?>" class="hg-btn hg-btn-outline" style="padding: 1rem 2rem; font-weight: 800;">
                    FORMULARZ WYCENY &rarr;
                </a>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>
