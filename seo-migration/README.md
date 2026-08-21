# SEO MIGRATION KIT — przejście Joomla → WordPress na tej samej domenie

Data przygotowania: **2026-08-20**
Stara strona: `hi-glossdesign.pl` (Joomla + JoomGallery), nowa: WordPress (ten motyw).
Domena **pozostaje bez zmian** — dzięki temu zachowujemy autorytet domeny.
Treści nie przenosimy 1:1 (decyzja: nowy content) — zabezpieczamy **adresy URL i linki zewnętrzne** przekierowaniami 301.

## Zawartość zestawu

| Plik | Do czego służy |
|---|---|
| `url-inventory.md` | Pełna inwentaryzacja starych URLi (crawl 20.08.2026 + sitemap.xml z 2015) z docelowym przekierowaniem każdej grupy |
| `htaccess.conf` | Gotowy blok reguł 301 — do wklejenia w dniu przełączenia |
| `README.md` | Ten plik — runbook dnia przełączenia |

## Mapa przekierowań w pigułce

Adresy, które **nie wymagają reguł** (slug identyczny na nowej stronie; WP sam doda trailing slash):

- `/` → `/`
- `/oferta` → `/oferta/`
- `/o-firmie` → `/o-firmie/`
- `/galeria` → `/galeria/`
- `/kontakt` → `/kontakt/`

Adresy wymagające 301:

| Stary URL (Joomla) | Nowy URL (WP) | Uzasadnienie |
|---|---|---|
| `/oferta/zmiana-koloru-auta` | `/zmiana-koloru/` | ta sama usługa |
| `/oferta/oklejanie-aut` (reklama/grafika/floty: DHL, Warta, Poczta Polska) | `/reklama/` | odpowiednik tematyczny |
| `/oferta/usługi-dodatkowe` (blacharka + przyciemnianie szyb) | `/detailing/` | odpowiednik tematyczny |
| `/galeria/zmiana-koloru-auta` + `?catpage=N` | `/galeria/` | kategoria galerii |
| `/galeria/oklejanie-aut` | `/galeria/` | kategoria galerii |
| ~80 pojedynczych realizacji `/galeria/**` | `/galeria/` | masowe, jedną regułą regex |
| `/galeria/image?view=image...` (endpointy miniaturek JoomGallery) | `/galeria/` | masowe, tą samą regułą |
| `/index.php?option=com_*` (legacy Joomli) | `/` | masowe, reguła na query string |

Stare tytuły SEO (dla porównania z nowymi — warto utrzymać zbliżone):

- `/` → "Hi-gloss oklejanie samochodów i szybka zmiana koloru auta - Szczecin"
- `/oferta` → "Oferta Hi-gloss, czyli oklejanie samochodów i zmiana koloru auta Szczecin"
- `/o-firmie` → "Reklama na samochodach Szczecin - Hi-Gloss Design"
- `/kontakt` → "Skontaktuj się z Hi-gloss w sprawie oklejania samochodu, zmiany koloru auta"
- `/galeria` → "Prace Hi-gloss – zobacz samemu jak działa oklejanie samochodów"

## Runbook dnia przełączenia (w tej kolejności)

**Przed (najlepiej już teraz):**
1. Zweryfikować domenę w **Google Search Console** (konto klienta) — żeby mieć punkt odniesienia: raport *Strony*, *Skuteczność* (kliknięcia per URL) i *Linki*. Eksport tych 3 raportów przed przełączeniem.
2. Pełny crawl starej Joomli tuż przed wyłączeniem (Screaming Frog, darmowy do 500 URL) i porównanie z `url-inventory.md` — łapiemy wszystko, co powstało po 20.08.2026.
3. Backup Joomli: pliki przez FTP + eksport bazy. Stare pliki można potem usunąć z serwera, backup trzymamy lokalnie.

**Przełączenie:**
4. Nowa strona (WP) wgrana na hosting klienta, certyfikat SSL aktywny, permalinki ustawione (`/%postname%/`), content finalny.
5. Wkleić blok z `htaccess.conf` do głównego `.htaccess` (webroot) **NAD sekcją `# BEGIN WordPress`**. Plik UTF-8 bez BOM.
6. Odpiąć/przekierować domenę na nowy hosting.

**Od razu po — weryfikacja (każdy punkt musi przejść):**
7. `curl -sI https://hi-glossdesign.pl/oferta/zmiana-koloru-auta | head -1` → `HTTP/2 301`, `Location: .../zmiana-koloru/`
8. `curl -sI "https://hi-glossdesign.pl/galeria/zmiana-koloru-auta/audi-a4-czarny-matcarbon" | head -1` → `301` → `/galeria/`
9. `curl -sI https://hi-glossdesign.pl/ | head -1` → `200`
10. `curl -sI http://www.hi-glossdesign.pl/ | head -2` → `301` prosto na `https://hi-glossdesign.pl/` (jeden skok)
11. **Ustawienia → Czytanie: odznaczone "Proś wyszukiwarki o nieindeksowanie tej witryny"** — to najczęstsza katastrofa migracyjna WP.
12. `robots.txt` i sitemap (Yoast/RankMath) odpowiadają poprawnie; sitemapę zgłosić w GSC.

**Po (4–8 tygodni):**
13. GSC: monitor raportu *Strony* + błędów 404. Każdy znaleziony 404 starego URLa = dorzucić regułę (wtyczka **Redirection** loguje 404 z automatu — polecam na okres przejściowy, nawet jeśli reguły siedzą w .htaccess).
14. Porównać *Skuteczność* tydzień do tygodnia. Normalne: wahania 2–6 tygodni, potem powrót.
15. Przekierowania trzymać **minimum rok**, najlepiej na zawsze.

## Uwagi techniczne

- Starą paginację `/galeria?catpage=N` obsługuje reguła na query string — zwykły `Redirect` jej nie łapie, dlatego jest osobny `RewriteCond`.
- `/oferta/usługi-dodatkowe` zawiera "ł" — reguła w .htaccess działa, bo Apache dopasowuje zdekodowaną ścieżkę; plik musi być UTF-8.
- Jeśli finalny hosting okaże się **nginx** (nie Apache/LiteSpeed), .htaccess nie zadziała — reguły trzeba przenieść do konfigu serwera albo obsłużyć wtyczką Redirection (pary są w `url-inventory.md`).
- Stare obrazki (`/images/...`) mogą umrzeć jako 404 — to normalne; jeżeli GSC pokaże, że generują ruch, kopiujemy wybrane do `wp-content/uploads/` i dorzucamy regułę.
