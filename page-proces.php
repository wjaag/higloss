<?php
/**
 * Template Name: Podstrona Proces (6 krokow + standardy + CTA)
 *
 * Rozbudowana wersja sekcji #proces ze strony glownej — te same klasy
 * (hg-process-grid), idelly dla frazy "jak wyglada oklejanie auta".
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
                <span class="hg-subpage-banner-badge">JAK PRACUJEMY &bull; STUDIO SZCZECIN / MIERZYN</span>
                <h1 class="hg-subpage-banner-title">
                    PROCES <span style="color: #25aae1;">HI-GLOSS</span> KROK PO KROKU
                </h1>
                <p style="color: #cbd5e1; max-width: 640px; margin: 0.8rem 0 0; font-size: 0.95rem; line-height: 1.6;">
                    Przejrzysty harmonogram, jeden zespół odpowiedzialny za całość i auto wydawane z instrukcją pielęgnacji oraz gwarancją. Tak wygląda oklejenie Twojego samochodu u nas — od pierwszego telefonu do odbioru.
                </p>
            </div>
        </div>

        <!-- HARMONOGRAM W SKRÓCIE -->
        <div class="hg-editorial-card" style="padding: 1.6rem 2rem; margin-top: 1.5rem;">
            <div class="hg-gallery-specs-row" style="justify-content: center;">
                <span class="hg-gallery-spec-item">Wycena: <strong>do 24 h</strong></span>
                <span class="hg-gallery-spec-item">Przygotowanie: <strong>1 dzień</strong></span>
                <span class="hg-gallery-spec-item">Aplikacja: <strong>2–4 dni</strong></span>
                <span class="hg-gallery-spec-item">Auto gotowe: <strong>3–5 dni</strong></span>
            </div>
        </div>

        <!-- 6 KROKOW -->
        <section style="margin-top: 3rem;" aria-labelledby="proces-kroki">
            <header class="hg-section-heading hg-reveal" style="margin-bottom: 1.5rem;">
                <div>
                    <p class="hg-kicker">Etap po etapie</p>
                    <h2 id="proces-kroki">Od zapytania<br><span>do odbioru auta.</span></h2>
                </div>
                <p>Każdy etap realizacji jest zaplanowany i potwierdzany z Tobą. Bez niespodzianek, bez „szybkich skrótów" kosztem jakości.</p>
            </header>

            <ol class="hg-process-grid">
                <li class="hg-reveal"><span>01</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16v11H8l-4 4V5Z"/><path d="M8 9h8M8 12h5"/></svg></div><h3>Kontakt i wycena</h3><p>Dzwonisz pod 605 088 065 albo zostawiasz zapytanie w formularzu — podajesz markę, model, rocznik i oczekiwany efekt. <strong>Do 24 godzin</strong> wracamy z widełkami ceny i proponowanym terminem. Wycena jest bezpłatna i niezobowiązująca.</p></li>

                <li class="hg-reveal"><span>02</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m4 16 8-12 8 12-8 4-8-4Z"/><path d="m8 14 4 2 4-2M12 4v12"/></svg></div><h3>Dobór materiału i projekt</h3><p>Wspólnie wybieramy folię: na żywo przeglądasz <strong>wzorniki 3M, Avery Dennison i Inozetek</strong> — połysk, mat, satyna, struktury i kolory specjalne. Przy oklejaniu reklamowym przygotowujemy projekt graficzny do akceptacji przed drukiem.</p></li>

                <li class="hg-reveal"><span>03</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v18M3 12h18"/><circle cx="12" cy="12" r="9"/></svg></div><h3>Przygotowanie auta</h3><p>Ręczne mycie, <strong>dekontaminacja glinką</strong>, usunięcie osadów i odtłuszczenie powierzchni. Oceniamy stan lakieru — jeśli coś wymaga korekty przed oklejeniem, mówimy o tym od razu, a nie po fakcie.</p></li>

                <li class="hg-reveal"><span>04</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.7 6.3a4 4 0 0 0-5.4 5.4L3 18l3 3 6.3-6.3a4 4 0 0 0 5.4-5.4L14 13l-3-3 3.7-3.7Z"/></svg></div><h3>Demontaż elementów</h3><p>Zdejmujemy klamki, lusterka, listwy, lampy i — w pakietach premium — zderzaki, zgodnie z <strong>procedurami fabrycznymi</strong> producenta. Dzięki temu folia jest zawinięta głęboko pod elementy i efekt przypomina fabryczny lakier.</p></li>

                <li class="hg-reveal"><span>05</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 5.5 18.5 9.5M3 21l3.5-1 12-12a2.8 2.8 0 0 0-4-4l-12 12L3 21Z"/><path d="m13 6 4 4"/></svg></div><h3>Aplikacja folii</h3><p>Oklejamy w <strong>ogrzewanej, zamkniętej hali</strong> w kontrolowanych warunkach. Pilnujemy naprężeń folii na przetłoczeniach, zawijamy krawędzie i <strong>nie tniemy po lakierze</strong> — docięcia wykonujemy na elementach lub w kanalikach.</p></li>

                <li class="hg-reveal"><span>06</span><div class="hg-process-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12 4 4L19 6"/><circle cx="12" cy="12" r="10"/></svg></div><h3>Kontrola, odbiór i gwarancja</h3><p>Po wiązaniu kleju sprawdzamy każdy detal przy świetle kontrolnym. Przy odbiorze dostajesz <strong>instrukcję pielęgnacji</strong> (pierwsze 7 dni jest kluczowe) i kartę gwarancyjną: do <strong>7 lat</strong> na folie kolorowe, do <strong>10 lat</strong> na PPF.</p></li>
            </ol>
        </section>

        <!-- STANDARDY -->
        <div class="hg-editorial-card" style="margin-top: 3rem; padding: 2.2rem;">
            <span style="color: #25aae1; font-family: var(--hg-heading); font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.15em; display: block; margin-bottom: 0.8rem;">
                W CENIE KAŻDEJ REALIZACJI
            </span>
            <h2 style="font-family: var(--hg-heading); font-size: clamp(1.3rem, 2.5vw, 1.9rem); font-weight: 900; color: #ffffff; text-transform: uppercase; margin-bottom: 1.2rem;">
                Nasze standardy, nie dopłaty
            </h2>
            <ul style="color: #cbd5e1; line-height: 1.9; margin-left: 1.2rem; font-size: 0.98rem;">
                <li>Mycie ręczne i dekontaminacja glinką przed każdą aplikacją</li>
                <li>Demontaż klamek, listew i lamp wg procedur fabrycznych</li>
                <li>Zawinięcie krawędzi folii — bez widocznych „listew lakieru"</li>
                <li>Kontrola jakości po wiązaniu kleju, przy świetle kontrolnym</li>
                <li>Instrukcja pielęgnacji i karta gwarancyjna przy odbiorze</li>
            </ul>
        </div>

        <!-- CTA -->
        <div class="hg-editorial-card" style="margin-top: 2rem; background: linear-gradient(135deg, rgba(14, 20, 30, 0.95), rgba(7, 10, 16, 0.95)); border: 1px solid rgba(37, 170, 225, 0.4); padding: 3rem; text-align: center;">
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
