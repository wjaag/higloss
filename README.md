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
- lokalne obrazy z lazy loadingiem (poza hero).

## Struktura

```text
front-page.php             # produkcyjny landing WordPress
header.php / footer.php    # one-page navigation i rozbudowana stopka
assets/css/main.css        # style bazowe i zgodność starych szablonów
assets/css/landing.css     # design system i pełny landing
assets/js/main.js          # menu, reveal, aktywne sekcje, FAQ i formularz
functions.php              # assety, CPT, AJAX, Schema.org
build-theme-zip.sh         # budowanie paczki ZIP motywu do wgrania w WP
template-parts/            # FAQ, linkowanie wewnętrzne, karta realizacji usługi
```

## Deployment

Wdrożenie ręczne: paczka ZIP motywu wgrywana w panelu WordPressa
(**Wygląd → Motywy → Dodaj nowy motyw → Wyślij motyw**).

### Pobranie paczki z gałęzi GitHub

`Code → Download ZIP` na wybranej gałęzi daje archiwum całego repo z **jednym katalogiem
głównym** — czyli w strukturze, którą WordPress przyjmuje przy wgrywaniu motywu.
Katalogiem motywu w `wp-content/themes/` stanie się jednak nazwa tego katalogu,
np. `higloss-main` albo `higloss-<nazwa-galezi>`.

- **Nazwa zgodna z obecnym katalogiem motywu** → WordPress zaproponuje zastąpienie
  istniejącej wersji i zachowa przypisania menu oraz ustawienia motywu.
- **Nazwa inna niż obecna** → motyw zainstaluje się obok dotychczasowego; trzeba go
  aktywować i ponownie przypisać menu (Wygląd → Menu → Zarządzanie lokalizacjami),
  bo przypisania lokalizacji trzymane są per katalog motywu. Treści (strony, CPT
  `realizacje`, opcje) nie są ruszane.

Żeby podmienić motyw 1:1, po pobraniu rozpakuj archiwum, zmień nazwę katalogu głównego
na nazwę obecnie wgranego motywu i spakuj ponownie — albo zbuduj paczkę skryptem (niżej).

### Budowanie paczki skryptem

```bash
./build-theme-zip.sh higloss               # -> dist/higloss.zip
./build-theme-zip.sh higloss --with-docs   # dodatkowo katalog seo-migration/
```

Skrypt pakuje pliki motywu śledzone przez gita w jeden katalog główny o podanej nazwie
(bez `.git` i — domyślnie — bez wewnętrznej dokumentacji `seo-migration/`, która nie powinna
leżeć pod publicznym adresem `wp-content/themes/<slug>/seo-migration/`).
Katalog `dist/` jest w `.gitignore` — paczki buduj lokalnie, nie commituj ich do repo.

Wersje CSS/JS są wersjonowane przez `filemtime()`, więc po wgraniu paczki przeglądarki
pobiorą nowe pliki bez ręcznego czyszczenia cache (przy włączonym cache stron, np. LiteSpeed,
warto jeszcze zrobić „Purge All"). Numer wersji motywu (`style.css` oraz `HIGLOSS_VERSION`
w `functions.php`) warto podnieść przy każdej zmianie — pozwala to rozpoznać w panelu,
która paczka jest wgrana.
