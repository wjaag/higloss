# HI-GLOSS DESIGN — WordPress Theme 3.0

Dedykowany, jednopłaszczyznowy motyw dla studia car wrappingu **HI-GLOSS DESIGN** w Szczecinie i Mierzynie.

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
assets/js/main.js          # menu, reveal, aktywne sekcje, FAQ i formularz
functions.php              # assety, CPT, AJAX, Schema.org
landing-preview.html       # podgląd bez instalacji WordPressa
```

## Deployment

Workflow `.github/workflows/deploy.yml` publikuje wyłącznie push na `main`. Gałęzie testowe nie uruchamiają automatycznego wdrożenia produkcyjnego.
