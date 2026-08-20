# Inwentaryzacja URLi starej strony (Joomla) — hi-glossdesign.pl

Źródła: crawl na żywo **2026-08-20** (9 stron paginacji galerii + strony główne) oraz `sitemap.xml` (datowana 2015-06-19 — nieaktualna, ale adresy mogą nadal siedzieć w indeksie Google).

Legenda kolumny „Cel": gdzie ląduje przekierowanie 301 po przełączeniu na WP.

## A. Strony główne (8)

| Stary URL | Cel | Sposób |
|---|---|---|
| `/` | `/` | bez reguły (ten sam adres) |
| `/oferta` | `/oferta/` | bez reguły (WP doda slash 301 z automatu) |
| `/o-firmie` | `/o-firmie/` | bez reguły |
| `/galeria` | `/galeria/` | bez reguły |
| `/kontakt` | `/kontakt/` | bez reguły |
| `/oferta/zmiana-koloru-auta` | `/zmiana-koloru/` | reguła 301 |
| `/oferta/oklejanie-aut` | `/reklama/` | reguła 301 |
| `/oferta/usługi-dodatkowe` | `/detailing/` | reguła 301 (uwaga: „ł" w ścieżce) |

## B. Kategorie galerii (2)

| Stary URL | Cel |
|---|---|
| `/galeria/zmiana-koloru-auta` | `/galeria/` (reguła masowa G) |
| `/galeria/oklejanie-aut` | `/galeria/` (reguła masowa G) |

## C. Realizacje — kategoria „Zmiana koloru auta" (73, potwierdzone crawlem)

Wszystkie → `/galeria/` (reguła masowa G: `^/galeria/.+`).

```
/galeria/zmiana-koloru-auta/audi-a7-niebieski-poysk
/galeria/zmiana-koloru-auta/mercedes-s-klasa-czarna-satyna
/galeria/zmiana-koloru-auta/bmw-x6-3m-atomic-teal
/galeria/zmiana-koloru-auta/ford-ranger-zielony-mat
/galeria/zmiana-koloru-auta/porsche-panamera-caociowe-zabezpieczenie-bezbarwn-foli-ochronn-ppf
/galeria/zmiana-koloru-auta/mercedesa-cla
/galeria/zmiana-koloru-auta/mercedes-e-klasa-czarna-satyna
/galeria/zmiana-koloru-auta/peugeot-3m-satin-shimmer-ocean
/galeria/zmiana-koloru-auta/volkswagen-nardo-grey
/galeria/zmiana-koloru-auta/steakhouse-evil-szczecin
/galeria/zmiana-koloru-auta/mercedes-s-oklejony-foli-ochronn-premium-shield
/galeria/zmiana-koloru-auta/mercedes-gle-oklejony-foli-ochronn
/galeria/zmiana-koloru-auta/nissan-juke-oklejenie-auta-foli-czarny-mat
/galeria/zmiana-koloru-auta/bmw-e90-oklejenie-auta-foli-blue-aluminium
/galeria/zmiana-koloru-auta/range-rover-evoque
/galeria/zmiana-koloru-auta/bmw-5-f10
/galeria/zmiana-koloru-auta/mercedes-glk-folia-zielona-pera
/galeria/zmiana-koloru-auta/mercedes-cl-63-amg
/galeria/zmiana-koloru-auta/bmw-x3-z-czarnego-na-biay-poysk
/galeria/zmiana-koloru-auta/bmw-6-oklejenie-auta-biay-poysk-dach-carbon-3d
/galeria/zmiana-koloru-auta/porsche-oklejenie-na-czarny-mat
/galeria/zmiana-koloru-auta/bmw-x5-czarny-mat
/galeria/zmiana-koloru-auta/vw-passat-cc-mariana-blue-oklejenie-auta
/galeria/zmiana-koloru-auta/honda-civic-oklejenie-auta-z-jasno-szary-na-ciemny-metalic
/galeria/zmiana-koloru-auta/astra-gtc-oklejenie-auta-z-zielony-mat-folia-na-blue-aluminium
/galeria/zmiana-koloru-auta/hyundai-i20-oklejenie-auta-z-szary-na-zielony-poysk
/galeria/zmiana-koloru-auta/reklama-na-pojedzie-samsung
/galeria/zmiana-koloru-auta/vw-touran-czarny-mat-carbon
/galeria/zmiana-koloru-auta/vw-touareg-z-oklejenie-z-niebieskiego-na-czarny-mat
/galeria/zmiana-koloru-auta/peugeot-307-cabrio-szary-mat
/galeria/zmiana-koloru-auta/oklejenie-grafika-samochodowa
/galeria/zmiana-koloru-auta/oklejenie-ford-transit-z-bialego-na-zolty
/galeria/zmiana-koloru-auta/toyoya-rav-4
/galeria/zmiana-koloru-auta/seat-leon-carbon-3d-czarny
/galeria/zmiana-koloru-auta/puegout-207
/galeria/zmiana-koloru-auta/porsche-cayenne-ze-srebrny-na-czarny-mat
/galeria/zmiana-koloru-auta/porsche-cayenne-carbon-3d
/galeria/zmiana-koloru-auta/opel-astra
/galeria/zmiana-koloru-auta/nissan-navara-olive-nato-mat
/galeria/zmiana-koloru-auta/mini-one
/galeria/zmiana-koloru-auta/mercedes-w210
/galeria/zmiana-koloru-auta/mercedes-vito
/galeria/zmiana-koloru-auta/mercedes-sl
/galeria/zmiana-koloru-auta/mazda-3
/galeria/zmiana-koloru-auta/mercedes-s-klasa-biala-perla-carbon
/galeria/zmiana-koloru-auta/mercedes-cls-carbon
/galeria/zmiana-koloru-auta/mercedes-b-klasa-czarny-mat-carbon
/galeria/zmiana-koloru-auta/lancia-ypsilon
/galeria/zmiana-koloru-auta/jaguar-x-type-night-blue-metaliccarbon
/galeria/zmiana-koloru-auta/hyundai-i30
/galeria/zmiana-koloru-auta/honda-prelude
/galeria/zmiana-koloru-auta/honda-civic-zielony-polyskcarbon
/galeria/zmiana-koloru-auta/golf-vi-carbon
/galeria/zmiana-koloru-auta/golf-iv-czerwony-polyskczarny-mat
/galeria/zmiana-koloru-auta/ford-mustang-szary-mat-metalic
/galeria/zmiana-koloru-auta/ford-mustang-czarny-poysk
/galeria/zmiana-koloru-auta/ford-mondeo-szary-metalic-pera
/galeria/zmiana-koloru-auta/ford-fiesta-carbon
/galeria/zmiana-koloru-auta/dodge-charger
/galeria/zmiana-koloru-auta/bmw-x6-carbon
/galeria/zmiana-koloru-auta/bmw-x5-carbon
/galeria/zmiana-koloru-auta/bmw-e60-m-pakiet-carbon
/galeria/zmiana-koloru-auta/bmw-6-biay-poysk
/galeria/zmiana-koloru-auta/bmw-5-oklejenie-z-granatowy-na-bialy-poysk
/galeria/zmiana-koloru-auta/bmw-5-e60-bialy-poysk-2
/galeria/zmiana-koloru-auta/bmw-5-e60-bialy-poysk
/galeria/zmiana-koloru-auta/bmw-5-czarny-polysk-czerwie
/galeria/zmiana-koloru-auta/bmw-1-carbon-czarny-poysk
/galeria/zmiana-koloru-auta/audi-rs4-czarny-poysk
/galeria/zmiana-koloru-auta/audi-q7-czarny-mat
/galeria/zmiana-koloru-auta/audi-a6-zielony-poysk-carbon
/galeria/zmiana-koloru-auta/audi-a6-czarny-poysk
/galeria/zmiana-koloru-auta/audi-a4-czarny-matcarbon
```

## D. Realizacje — kategoria „Oklejanie aut" (4, crawl)

```
/galeria/oklejanie-aut/reklama-tvp-szczecin
/galeria/oklejanie-aut/audi-a4-carbon
/galeria/oklejanie-aut/aprilla
/galeria/oklejanie-aut/audi-rs4
```

## E. Realizacje bez kategorii, wprost pod /galeria/ (3, crawl)

```
/galeria/audi-a3-oklejenie-auta-foli-perfect-satin-blue
/galeria/seat-leon
/galeria/toyota-cellica
```

## F. Tylko ze sitemap 2015 — nie potwierdzone w crawl (10)

Mogą być usunięte ze strony, ale nadal zaindeksowane w Google albo podlinkowane z zewnątrz → reguła masowa G je obejmie niezależnie od tego, czy są utrzymane.

```
/galeria/zmiana-koloru-auta/mazda-mpv-oklejenie-z-zielony-na-bialy-polysk
/galeria/zmiana-koloru-auta/yamaha
/galeria/zmiana-koloru-auta/dach-carbon-szklany-monza
/galeria/zmiana-koloru-auta/dhl-z-biaego-na-oty
/galeria/zmiana-koloru-auta/ford-s-max-carbon
/galeria/zmiana-koloru-auta/ford-c-max
/galeria/zmiana-koloru-auta/nissan-350z
/galeria/zmiana-koloru-auta/audi-q7-biay-polysk
/galeria/oklejanie-aut/astra-coupe
/galeria/porsche-cayenne
```

## G. Paginacja (śmieciowe duplikaty, ale zaindeksowane)

- `/galeria?catpage=1..9`
- `/galeria/zmiana-koloru-auta?catpage=1,2,4,5,6,8,9`

Obsługa: reguła `catpage` w htaccess.conf + reguła masowa G.

## H. Endpointy miniaturek JoomGallery (nie do uratowania)

`/galeria/image?view=image&format=raw&type=thumb&id=NNN` — dynamiczne miniatury. Reguła masowa G przekieruje je na `/galeria/`. Miniatur Google Grafika przeindeksuje z czasem na nowe.

## PODSUMOWANIE LICZB

- strony główne: **8** (3 wymagają reguł 301)
- kategorie galerii: **2**
- realizacje: **90** (80 crawl + 10 sitemap-only)
- paginacja + endpointy: obsłużone masowo
- **≈100+ starych adresów ogarniętych 5 regułami** w `htaccess.conf`
