# PLAN WDROŻENIA — nowa strona Hi-Gloss Design (WP) bez utraty pozycjonowania

Data: **2026-08-20** | Cel: bezpieczne przełączenie domeny `hi-glossdesign.pl` z Joomli na WordPress + fundament pod **podbudowę pozycji** klienta.

Dwa cele, dwie różne mechaniki — ważne, żeby ich nie mylić:

1. **Obrona pozycji** (fazy 0–3): domena zostaje, adresy zabezpieczone 301, bez noindexa → utrzymujemy to, co jest.
2. **Atak / podbudowa** (faza 4): nowa treść, szybkość, lokalne SEO, opinie → to dopiero podnosi pozycje. 301 samo w sobie niczego nie podbija, tylko nie psuje.

Powiązane dokumenty w tym katalogu: `url-inventory.md` (inwentarz ~100 starych URLi), `htaccess.conf` (reguły 301), `README.md` (runbook operacyjny dnia przełączenia z komendami weryfikacyjnymi).

---

## FAZA 0 — Przygotowanie (od zaraz, 1–2 tygodnie; NIE wymaga hostingu klienta)

**Krok 1. Punkt odniesienia w Google Search Console.**
Zweryfikować własność domeny (konto Google klienta). Jeśli klient nie ma GSC — założyć i zweryfikować już teraz, żeby Google zbierał dane przed zmianą. Eksport zapisać jako baseline:
- raport **Strony** (co zaindeksowane),
- **Skuteczność** — ostatnie 12–16 mies., wymiar: strony + frazy (kliknięcia, wyświetlenia, CTR, pozycja),
- **Linki** (co ma backlinki → priorytet ochrony).

**Krok 2. Mapa słów kluczowych.**
Frazy lokalne, podział na strony (1 fraza główna + 2–4 poboczne na stronę):

| Strona | Fraza główna (propozycja) | Frazy poboczne |
|---|---|---|
| `/` | oklejanie aut Szczecin | zmiana koloru auta Szczecin |
| `/zmiana-koloru/` | zmiana koloru auta folią Szczecin | całościowe oklejanie samochodu, folia mat/carbon |
| `/ppf/` | folia ochronna PPF Szczecin | zabezpieczenie lakieru folią |
| `/reklama/` | oklejanie reklamowe samochodów Szczecin | reklama na samochodzie, oklejanie floty |
| `/detailing/` | przyciemnianie szyb Szczecin | detailing aut Szczecin |
| `/galeria/` | realizacje oklejania aut | (zbiera long tail z podstron realizacji) |

Walidacja wolumenów: Keyword Planner / Senuto (trial) / podpowiedzi Google. **Zatwierdzenie przez nas przed krokiem 3.**

**Krok 3. Content freeze na stagingu.**
Zatwierdzenie finalnych tekstów + dopasowanie `<title>`, meta description i H1 na każdej stronie do mapy fraz (krok 2). Title starej strony dla porównania są w `README.md` — podobieństwo pomaga, ale priorytet ma mapa fraz.

**Krok 4. Audyt techniczny nowej strony (na stagingu).**
Checklista: unikalny title i meta na każdej stronie? Jeden H1 na stronę? Alty zdjęć? JSON-LD LocalBusiness w motywie — zweryfikować dane (telefon, adres, geo)? Open Graph? PageSpeed Insights (orientacyjnie — darmowy staging zafałszowuje wynik, użyć jako sanity-check, nie wyroczni).

**Krok 5. Świeży crawl starej Joomli — tuż przed przełączeniem.**
Screaming Frog (darmowy do 500 URL). Porównać z `url-inventory.md` (crawl z 20.08.2026) — dorzucić do reguł wszystko, co powstało później.

**Krok 6. Wybór strategii przełączenia** — po poznaniu hostingu (faza 1), ale decyzję trzeba podjąć świadomie:
- **Strategia A** — ten sam hosting: WP budowany w podkatalogu `/nowa` (z noindex!), w dniu X pliki Joomli → do katalogu backupowego poza webroot, WP → do webroot. DNS nietknięte, przestój minuty.
- **Strategia B** — osobny hosting: pełny setup na nowym serwerze, test przez wpis w `hosts`, przełączenie = zmiana rekordów DNS klienta. Propagacja do 24 h (obniżyć TTL dzień wcześniej).

---

## FAZA 1 — Hosting klienta (po otrzymaniu danych dostępowych; 2–3 dni robocze)

**Krok 7. Audyt hostingu (30 min):** Apache czy nginx (czy `.htaccess` zadziała — jeśli nginx: reguły do configu albo wtyczka Redirection), PHP ≥ 8.0, wersja MySQL/MariaDB, certyfikat SSL (Let's Encrypt?), miejsce na koncie, FTP/SSH, phpMyAdmin, czy domena jest przypięta do tego konta (dla strategii A).

**Krok 8. Backup Joomli — bez tego nie ruszamy dalej.**
Wszystkie pliki przez FTP + eksport bazy (.sql przez phpMyAdmin). Dwie kopie lokalnie. To jest plan awaryjny "powrót do Joomli w 30 minut".

**Krok 9. Postawienie WP na docelowym hostingu** (wg wybranej strategii A/B):
świeża instalacja WP → motyw z repo (git/FTP) → wtyczki: Rank Math lub Yoast (sitemap + canonicale), Redirection (log 404 w okresie przejściowym), WP Super Cache lub odpowiednik (świeży hosting ≠ staging — wydajność liczy się na produkcji) → treści zatwierdzone w kroku 3 → realizacje CPT załadowane z opisami (patrz krok 21).

**Krok 10. Testy przed-przełączeniowe (na tymczasowym adresie/podkatalogu):** wszystkie strony 200, zdjęcia WebP się ładują, formularz wyceny **faktycznie wysyła wiadomość na tej infrastrukturze** (wysłać test i potwierdzić odbiór na skrzynce admina), HTTPS działa, permalinki `/%postname%/`.

**Krok 11. Przygotować finalny `.htaccess`** = blok z `htaccess.conf` NAD sekcją `# BEGIN WordPress`. Plik UTF-8 bez BOM. Trzymać gotowy "pod ręką".

---

## FAZA 2 — Dzień przełączenia (30–60 min; wieczór/noc, mały ruch)

**Krok 12. Przełączenie** (A: podmiana katalogów / B: DNS). Szczegóły operacyjne i komendy: `README.md` (runbook) — tam jest pełna sekwencja.

**Krok 13. Wklejenie bloku 301** do webroot `.htaccess` + zapis permalinków w WP (odświeża reguły).

**Krok 14. SERIA WERYFIKACYJNA (blokująca — nie kończymy, póki nie przejdzie):**
- [ ] `/` → 200
- [ ] 3 próbkowe stare URLe z każdej grupy reguł → 301 we właściwe miejsce (podstrona ofertowa → usługa, realizacja → /galeria/, `?catpage=`, `?option=com_`)
- [ ] `http://www.hi-glossdesign.pl/` → JEDEN skok do `https://hi-glossdesign.pl/`
- [ ] **noindex WYŁĄCZONY** (Ustawienia → Czytanie) — podwójna kontrola
- [ ] sitemap.xml odpowiada 200 i zawiera nowe strony
- [ ] formularz — test wysłania i odbioru
- [ ] ręczny przegląd 10–15 najważniejszych starych URLi w przeglądarce

**Krok 15. GSC:** zgłosić nową sitemapę. („Zmiana adresu" NIE jest potrzebna — domena się nie zmienia.)

---

## FAZA 3 — Monitoring (tydzień 0–8)

| Kiedy | Co |
|---|---|
| Tydz. 1 (codziennie) | GSC: raport Strony (błędy 404 / soft 404), Crawl stats; log 404 w Redirection — każdy stary URL z 404 dostaje regułę w ciągu 48 h |
| Tydz. 2 | PageSpeed/CWV już na produkcji; jeśli TTFB > 600 ms — cache/CDN, eskalacja hostingu |
| Tydz. 4 | Raport porównawczy z baseline: kliknięcia, wyświetlenia, pozycje per fraza. Norma: wahania; czerwona flaga: spadek kliknięć > 30% przez 2+ tyg. |
| Tydz. 8 | Decyzja o zamknięciu monitorowania intensywnego; przekierowania zostają na zawsze |

---

## FAZA 4 — Podbudowa pozycji (od miesiąca 1, działania ciągłe) — **to jest ta „kluczowa" część**

**Krok 21. Realizacje jako maszynka SEO.** Każda realizacja CPT = mini case study: tytuł z frazą („Zmiana koloru BMW X5 na czarny mat — Szczecin"), 150–300 słów opisu (marka, folia, zakres prac), alty ze słowami kluczowymi, link wewnętrzny do odpowiedniej usługi. Cel: 2 nowe realizacje/mies. — ten sam content klient i tak wrzuca na social media, tylko tu pracuje dla Google.

**Krok 22. Google Business Profile + NAP.** Zaktualizować profil (kategorie: car wrapping / detailing; zdjęcia nowych realizacji co miesiąc; opis z frazami; link do strony). NAP (nazwa-adres-telefon) ujednolicony w katalogach (Panorama Firm, PKT, branżowe). To dla fraz lokalnych często ważniejsze niż sama strona.

**Krok 23. Opinie Google.** Stały proces: prośba po każdej realizacji (SMS/mail z linkiem do opinii). Cel: +2–4 opinie/mies. Wpływa na mapy lokalne i CTR.

**Krok 24. Poradniki (long tail).** 1 artykuł/mies., tematy z pytaniami klientów: „Ile kosztuje zmiana koloru auta folią?", „PPF czy powłoka ceramiczna?", „Jak pielęgnować folię?", „Czy oklejenie auta jest legalne / formalności". Każdy poradnik linkuje do usługi i realizacji.

**Krok 25. Link building lokalny.** Kluby motoryzacyjne, fora (stopki/profile), współprace z detailingowymi studiami i lakierniami (wymiana linków), lokalne portale (materiał + link), katalogi branżowe.

**Krok 26. Raportowanie dla klienta.** Co miesiąc: pozycje fraz z mapy (krok 2), ruch organiczny, zapytania z formularza, wykonane działania. Kwartalnie: przegląd mapy fraz i plan na kolejny kwartał.

---

## Ryzyka i zabezpieczenia

| Ryzyko | Skutek | Zabezpieczenie |
|---|---|---|
| Zostawiony noindex po przełączeniu | wypadnięcie z Google w dniach | punkt blokujący w kroku 14 |
| Brak backupu Joomli | brak odwrotu | krok 8 blokujący fazę 2 |
| Reguły 301 nie działają (nginx) | masowe 404 starych URLi | audyt krok 7; fallback: wtyczka Redirection (pary w `url-inventory.md`) |
| Hosting klienta wolny | gorsze CWV niż stara strona | test w kroku 10; cache; decyzja o zmianie hostingu PRZED przełączeniem |
| Chainy przekierowań | rozcieńczenie mocy linków | cele reguł wskazują adresy kanoniczne (https, bez-www) — max 2 skoki |
| Nowe treści słabsze niż stare na frazę konkurencyjną | spadek pozycji danej strony | mapa fraz (krok 2) + title ze starej strony jako punkt odniesienia |

## Miernik sukcesu (KPI)

| KPI | Baseline (krok 1) | Cel |
|---|---|---|
| Kliknięcia organiczne / mies. | z eksportu GSC | ≥ baseline po 2 mies.; +20–30% po 6 mies. |
| Frazy w TOP10 (mapa fraz) | z eksportu | +5 fraz/2 mies. od startu fazy 4 |
| Zapytania z formularza / mies. | 0 (nowy kanał) | narastająco |
| Opinie Google | stan bieżący | +2–4/mies. |

---

## Podział odpowiedzialności

- **Agencja (my):** kroki 2–6, 9–15, 21, 24, 26; nadzór nad 16–20
- **Klient / właściciel domeny:** krok 1 (dostęp/akceptacja GSC), krok 7 (dane hostingu + ewent. DNS), krok 22–23 (obsługa profilu i prośby o opinie — przygotowujemy linki/materiały), dostarczanie zdjęć realizacji do kroku 21
