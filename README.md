# Hi-Gloss Design 2026 - WordPress Theme

Ultra-nowoczesny, dedykowany motyw WordPress stworzony dla studia car wrappingu, folii ochronnych PPF oraz reklamy mobilnej **Hi-Gloss Design** w Szczecinie i Mierzynie.

## 🚀 Cechy Motywu 2026

- **Design System**: Dark Luxury Carbon (`#090C12`) z elektrycznymi błękitami (`#00C2FF`) i efektem Glassmorphism.
- **Interaktywny Before/After Slider**: Porównanie lakieru seryjnego z folią satynową / PPF.
- **Wirtualny Próbnik Wykończeń Folii**: Podgląd efektów Połysk, Satyna Black, Carbon 3D, Kameleon, Nardo Mat.
- **3-Krokowy Kalkulator Wyceny Online**: Szacowanie kosztów + automatyczne zapytanie AJAX na e-mail biura.
- **Portfolio z Filtrowaniem**: Podział na Zmiana Koloru, Bezbarwne PPF, Reklama & Floty.
- **SEO Schema.org (AutoBodyShop / LocalBusiness)**: Automatyczne mikrodane JSON-LD wspierające pozycjonowanie w Google.
- **Mobile Action Bar**: Pływający pasek akcji z szybkim dzwonieniem i nawigacją dla smartfonów.

## 📁 Struktura Plików

```
higloss/
├── assets/
│   ├── css/main.css       # Główne style CSS (Glassmorphism, Grid, Slider, Calculator)
│   └── js/main.js         # Logika Vanilla JS dla suwaka, kalkulatora i filtrów
├── .github/workflows/
│   └── deploy.yml         # Automated GitHub Actions FTP Deployment to InfinityFree
├── style.css              # Nagłówek motywu WordPress i zmienne CSS
├── functions.php          # CPT Realizacje, rejestracja menu, AJAX Quote handler, Schema.org
├── header.php             # Pływająca nawigacja z blurem i logo SVG
├── footer.php             # Stopka z danymi teleadresowymi Mierzyna i Mobile Action Bar
├── front-page.php         # Dedykowany Landing Page 2026
├── page.php               # Domyślny szablon strony
├── single-realizacje.php  # Szablon pojedynczego wpisu realizacji
└── landing-preview.html   # Statyczny podgląd HTML
```

## ⚙️ Wdrażanie (GitHub Actions)

Motyw posiada skonfigurowany plik CI/CD w `.github/workflows/deploy.yml`, który przy każdym `git push` na gałąź `main` automatycznie publikuje najnowsze pliki na serwer FTP.

---
© 2026 Hi-Gloss Design Szczecin. Wszelkie prawa zastrzeżone.
