# HI-GLOSS DESIGN — WordPress Theme 4.0 „DIMENSION”

Dedykowany, jednopłaszczyznowy motyw dla studia car wrappingu **HI-GLOSS DESIGN** w Szczecinie i Mierzynie.

## Motyw 3D „DIMENSION” (od wersji 4.0)

Warstwa profesjonalnej głębi 3D dokładana na istniejący design system
(`theme-3d.css` + `theme-3d.js` ładowane po `landing.css` / `main.js`):

- **scena hero w perspektywie** — kursor obraca całość, a warstwy (foto, siatka,
  nagłówek, panel dowodowy) rozłożone są w osi Z,
- **tilt kart** usług i realizacji z refleksem światła (glare) i parallaxem
  warstw wewnątrz karty,
- **wytłaczane przyciski** (extrusion + press-down), chipy materiałowe i filtrów,
- **parallax scrolla** dla mediów i pasów tła oraz kaskada głębi procesu,
- **elewacja i światło** — czterostopniowa skala cieni, krawędzie oświetlone
  od góry, fazowane pola formularza,
- statyczny podgląd bez WordPressa: `theme-3d-preview.html`.

Warstwa jest w 100% progresywna: bez JavaScriptu strona renderuje się jak
poprzednia wersja płaska, a cały ruch wyłącza się przy `prefers-reduced-motion`
oraz na urządzeniach dotykowych (pozostaje statyczna głębia cieni).

## Landing page

Strona główna składa informacje z dotychczasowych podstron w jeden, spójny lejek:

1. pełnoekranowy hero z głównym CTA,
2. oferta: zmiana koloru, PPF, branding flot, szyby/dechroming/detailing,
3. prezentacja studia i przewag,
4. czteroetapowy proces współpracy,
5. dynamiczne portfolio z CPT `realizacje`,
6. FAQ,
7. dane kontaktowe, mapa i formularz bezpłatnej wyceny.

Nawigacja prowadzi do sekcji strony głównej. Stare podstrony i pojedyncze realizacje pozostają dostępne, więc istniejące adresy i treści SEO nie są usuwane.

## Najważniejsze elementy

- responsywny design od 320 px do szerokich ekranów,
- dostępna nawigacja mobilna, skip-link i widoczne focus states,
- obsługa `prefers-reduced-motion`,
- linki i ikony Instagram/Facebook,
- mobilny pasek „Zadzwoń / Bezpłatna wycena”,
- formularz AJAX zabezpieczony nonce i honeypotem,
- dynamiczne realizacje z danymi pojazdu i usługi,
- Schema.org `AutoBodyShop` z katalogiem usług i profilami social,
- lokalne obrazy z lazy loadingiem (poza hero),
- statyczny podgląd w `landing-preview.html`.

## Struktura

```text
front-page.php             # produkcyjny landing WordPress
header.php / footer.php    # one-page navigation i rozbudowana stopka
assets/css/main.css        # style bazowe i zgodność starych szablonów
assets/css/landing.css     # design system i pełny landing
assets/css/theme-3d.css    # warstwa 3D „DIMENSION” (głębia, elewacja, tilt)
assets/js/main.js          # menu, reveal, aktywne sekcje, FAQ i formularz
assets/js/theme-3d.js      # silnik 3D: tilt, parallax, reflektor ambient
functions.php              # assety, CPT, AJAX, Schema.org
landing-preview.html       # podgląd bez instalacji WordPressa
theme-3d-preview.html      # podgląd warstwy 3D bez instalacji WordPressa
```

## Deployment

Workflow `.github/workflows/deploy.yml` publikuje wyłącznie push na `main`. Gałęzie testowe nie uruchamiają automatycznego wdrożenia produkcyjnego.
