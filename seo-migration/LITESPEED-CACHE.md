# LiteSpeed Cache — konfiguracja produkcyjna (cyber_Folks)

Hosting cyber_Folks pracuje na serwerze **LiteSpeed**, więc wtyczka LiteSpeed Cache
dostaje prawdziwy server-side cache (szybszy niż jakakolwiek inna wtyczka cache).
Czas pracy: ~10 minut. Wszystko klikane w WP-Admin, bez edycji plików.

---

## 1. Instalacja

1. **Wtyczki → Dodaj nową** → szukaj `LiteSpeed Cache` (autor: LiteSpeed Technologies)
2. **Zainstaluj → Włącz**
3. Po włączeniu może pojawić się propozycja połączenia z QUIC.cloud — **pomiń** (nie jest potrzebne)

## 2. Cache (zakładka: LiteSpeed Cache → Pamięć podręczna)

| Sekcja | Ustawienie | Wartość |
|---|---|---|
| Cache | Enable Cache | **ON** (domyślnie) |
| TTL | Default Public TTL | 604800 (domyślne, zostaw) |
| Purge | Purge All On Upgrade | **ON** (domyślnie) |
| Exclude | *(nic nie wykluczamy)* | — |
| ESI | Enable ESI | **OFF** |

> Formularz wyceny działa przez `admin-ajax.php` (POST) — LiteSpeed go nie cachuje,
> więc żadnych wykluczeń nie trzeba.

## 3. Optymalizacja strony (LiteSpeed Cache → Optymalizacja strony)

### Ustawienia CSS
| Opcja | Wartość | Dlaczego |
|---|---|---|
| CSS Minify | **ON** | mniejsze pliki |
| CSS Combine | **OFF** | mamy HTTP/2, łączenie szkodzi |
| UCSS / CCSS | **OFF** | wymaga QUIC.cloud, ryzyko migotania styli |
| Load CSS Asynchronously | **OFF** | bez tego — inaczej FOUC przy wejściu |
| Font Display Optimization | Default (Swap) | zostaw |

### Ustawienia JS
| Opcja | Wartość |
|---|---|
| JS Minify | **ON** |
| JS Combine | **OFF** |
| Load JS Deferred | **Deferred** |
| Load Inline JS | Default |
| JS Delayed / Delay JS | **OFF** (na start — może opóźniać menu mobilne) |

### Multimedia
| Opcja | Wartość |
|---|---|
| Lazy Load Images | **ON** |
| LQIP (placeholder) | OFF |
| WebP Replacement | **OFF** — nasze grafiki są już w WebP |
| Add Missing Sizes | **ON** |
| Lazy Load Iframes | ON (mapa Google na /kontakt) |

### Lokalizacja / inne
- Gravatar Cache: **OFF** (nie używamy komentarzy)
- Image Optimization (zakładka): **OFF** (wymaga QUIC.cloud; obrazki już zoptymalizowane ręcznie)
- Crawler: **OFF** (darmowy crawler nie działa na współdzielonym hostingu)

## 4. Weryfikacja (2 min)

1. **LiteSpeed Cache → Toolbox → Purge All**
2. Otwórz stronę w trybie incognito → **Ctrl+F5** → sprawdź wygląd (menu, galeria, formularz)
3. Wyślij testowe zapytanie przez formularz wyceny → mail musi dojść na biuro@
4. Terminal / narzędzia deweloperskie → nagłówki odpowiedzi strony:
   ```
   X-LiteSpeed-Cache: hit
   ```
   (przy pierwszym wejściu będzie `miss`, przy drugim `hit` — to jest właśnie cache)
5. PageSpeed Insights (pagespeed.web.dev) → wpisz `https://hi-glossdesign.pl` →
   wynik powinien wyraźnie skoczyć (TTFB spada do ~100–300 ms)

## 5. Gdy coś wygląda dziwnie po włączeniu

Kolejność ratunkowa:
1. **Purge All** (99% problemów = stary cache)
2. Wyłącz **CSS Minify** → Purge → sprawdź
3. Wyłącz **JS Deferred** → Purge → sprawdź
4. Jak nadal źle: wyłącz wtyczkę — strona wraca do stanu sprzed, napisz do mnie którą opcję cofać

---

*Przygotowane: 2026-08-27, pod instalację produkcyjną hi-glossdesign.pl (cyber_Folks).*
