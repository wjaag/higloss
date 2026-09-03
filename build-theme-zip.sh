#!/usr/bin/env bash
#
# Buduje paczkę motywu gotową do wgrania w WordPressie:
#   Panel WP -> Wygląd -> Motywy -> Dodaj nowy motyw -> Wyślij motyw -> dist/<slug>.zip
#
# Użycie:
#   ./build-theme-zip.sh                 # -> dist/higloss.zip   (folder motywu: higloss)
#   ./build-theme-zip.sh higloss2026     # -> dist/higloss2026.zip
#   ./build-theme-zip.sh higloss --with-docs   # dokłada też katalog seo-migration/
#
# WAŻNE: nazwa folderu w ZIPie = katalog motywu w wp-content/themes/.
# Żeby PODMIENIĆ istniejący motyw (a nie zainstalować drugi obok), podaj dokładnie taką
# nazwę, jaką ma obecnie wgrany motyw — wtedy WordPress zapyta o zastąpienie i zachowa
# przypisania menu oraz ustawienia motywu. Nazwę sprawdzisz w WP przez FTP/SFTP albo
# w Wygląd -> Edytor plików motywu (nagłówek „Motyw: ... /wp-content/themes/<slug>/”).
#
set -euo pipefail
cd "$(dirname "$0")"

SLUG="${1:-higloss}"
WITH_DOCS="${2:-}"
OUT="$PWD/dist/${SLUG}.zip"
STAGE="$(mktemp -d)"
trap 'rm -rf "$STAGE"' EXIT

if [[ "$SLUG" =~ [^A-Za-z0-9_-] ]]; then
    echo "Błędna nazwa katalogu motywu: $SLUG (dozwolone: litery, cyfry, - i _)" >&2
    exit 1
fi

mkdir -p dist "$STAGE/$SLUG"
rm -f "$OUT"

# Pakujemy wyłącznie pliki śledzone przez gita (bez .git, dist/ i plików roboczych).
count=0
while IFS= read -r -d '' f; do
    case "$f" in
        dist/*|build-theme-zip.sh) continue ;;
        seo-migration/*) [[ "$WITH_DOCS" == "--with-docs" ]] || continue ;;
    esac
    mkdir -p "$STAGE/$SLUG/$(dirname "$f")"
    cp -p "$f" "$STAGE/$SLUG/$f"
    count=$((count + 1))
done < <(git ls-files -z)

# Kontrola: paczka bez style.css nie przejdzie walidacji WordPressa.
if [[ ! -f "$STAGE/$SLUG/style.css" ]]; then
    echo "BŁĄD: brak style.css w paczce — WordPress odrzuci taki motyw." >&2
    exit 1
fi

( cd "$STAGE" && zip -qr -X "$OUT" "$SLUG" )

size=$(du -h "$OUT" | cut -f1)
entries=$(unzip -l "$OUT" | tail -1 | awk '{print $2}')
echo "Zbudowano: dist/${SLUG}.zip"
echo "  plików motywu : $count"
echo "  wpisów w zip  : $entries"
echo "  rozmiar       : $size"
echo "  katalog motywu: wp-content/themes/${SLUG}/"
echo
echo "Wgraj w WP: Wygląd -> Motywy -> Dodaj nowy motyw -> Wyślij motyw."
