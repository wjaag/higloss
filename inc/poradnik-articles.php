<?php
/**
 * Poradnik — centralna definicja artykułów SEO (long-tail, lokalne frazy).
 *
 * Artykuły są publikowane jednorazowo przez inc/bootstrap-pages.php
 * (migracja v2, flaga opcji higloss_poradnik_seeded). Po publikacji
 * klient może je swobodnie edytować w WP-Admin — ten plik to zrodlo startowe.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Lista artykułów poradnika. Klucze: title, slug, excerpt, image (fallback z assets), content (HTML).
 *
 * @return array<int,array<string,string>>
 */
function higloss_poradnik_articles() {
    return array(

        // ---------------------------------------------------------- 1 — CENNIK ZMIANY KOLORU
        array(
            'title'   => 'Ile kosztuje zmiana koloru auta folią w 2026 roku? Cennik i czynniki wpływające na cenę',
            'slug'    => 'ile-kosztuje-zmiana-koloru-auta-folia',
            'image'   => 'gallery_bmw_m4_satin_black.webp',
            'excerpt' => 'Zmiana koloru auta folią kosztuje orientacyjnie od 5 500 zł (kompakt) do ok. 11 000 zł (duży SUV). Sprawdź, od czego zależy cena oklejenia i co dokładnie dostajesz w tej kwocie.',
            'content' => '
<h2>Od czego zależy cena zmiany koloru auta folią?</h2>
<p>To pytanie słyszymy w studiu najczęściej — i uczciwie: rozstrzał cenowy jest spory, bo <strong>każde auto i każdy projekt wyceniamy indywidualnie</strong>. Na ostateczną cenę oklejenia wpływa pięć głównych czynników:</p>
<ul>
<li><strong>Wielkość i kształt auta</strong> — kompakt to znacznie mniej materiału i robocizny niż duży SUV czy van, a skomplikowane przetłoczenia (spoilery, progi, wide-body) wydłużają pracę.</li>
<li><strong>Zakres demontażu</strong> — standard premium to zdjęcie klamek, luster, listew i lamp. Im szerzej demontujemy, tym lepszy (bardziej „lakierniczy") efekt końcowy.</li>
<li><strong>Rodzaj folii</strong> — folie kolorowe premium (3M 2080, Avery Dennison SWF, Inozetek) różnią się ceną; wykończenia specjalne (mat flip, struktura, kameleon) są droższe od klasycznego połysku.</li>
<li><strong>Stan lakieru</strong> — głębokie rysy, odpryski czy przebarwienia wymagają przygotowania powierzchni przed aplikacją.</li>
<li><strong>Udogodnienia dodatkowe</strong> — dechroming, oklejenie wnęk drzwiowych, progi, folia na dach w innym kolorze itp.</li>
</ul>

<h2>Orientacyjne widełki cenowe (2026)</h2>
<p>Poniższe kwoty dotyczą <strong>całościowej zmiany koloru folią premium</strong> z demontażem elementów, wykonanej w ogrzewanym pomieszczeniu przez doświadczonych aplikatorów:</p>
<table>
<thead><tr><th>Segment auta</th><th>Przykłady</th><th>Cena orientacyjna</th></tr></thead>
<tbody>
<tr><td>Miejskie / kompakt</td><td>Fiat 500, VW Polo, Toyota Yaris</td><td>5 500 – 7 000 zł</td></tr>
<tr><td>Sedan / kombi</td><td>BMW 3/5, Audi A4/A6, Tesla Model 3</td><td>6 500 – 8 500 zł</td></tr>
<tr><td>SUV / crossover</td><td>Audi Q5, BMW X5, Range Rover</td><td>7 500 – 11 000 zł</td></tr>
<tr><td>Duże auta / van / GT z demontażem rozszerzonym</td><td>Mercedes GLS, Porsche 911, Dodge RAM</td><td>od 9 000 zł</td></tr>
</tbody>
</table>
<p><em>Kwoty są orientacyjne i dotyczą regionu Szczecina. Dokładną wycenę przygotowujemy zawsze bezpłatnie po poznaniu modelu auta i wybranej folii.</em></p>

<h2>Co dokładnie dostajesz w tej cenie?</h2>
<ul>
<li>mycie i dekontaminację lakieru przed aplikacją,</li>
<li>demontaż klamek, luster, listew (zgodnie z procedurami fabrycznymi),</li>
<li>folię premium renomowanego producenta z gwarancją nawet do 7 lat,</li>
<li>aplikację z zawinięciem krawędzi — efekt zbliżony do fabrycznego lakieru,</li>
<li>kontrolę jakości po wiązaniu kleju i instrukcję pielęgnacji.</li>
</ul>

<h2>Folia czy lakier — co droższe?</h2>
<p>Konkurencyjne lakierowanie całego auta na dobrym poziomie to zwykle wydatek <strong>10 000 – 20 000 zł</strong> i jest nieodwracalny. Folia kosztuje mniej, a dodatkowo <strong>chroni oryginalny lakier</strong> i można ją w przyszłości usunąć — co realnie podnosi wartość auta przy odsprzedaży. Szerzej porównujemy to w artykule <a href="/oklejanie-auta-czy-lakierowanie/">oklejanie auta czy lakierowanie — co się bardziej opłaca</a>.</p>

<h2>Jak uzyskać dokładną wycenę?</h2>
<p>Najprościej: przygotuj <strong>markę, model, rocznik</strong> i zdjęcie wybranej folii (lub inspiracji) — wyślij je przez <a href="/#wycena">formularz wyceny</a> albo zadzwoń pod <strong>605 088 065</strong>. Możesz też wpaść do naszego studia w Mierzynie pod Szczecinem (ul. Podmiejska 4) — na miejscu pokażemy kolorowe wzorniki folii 3M, Avery Dennison i Inozetek. Szczegóły usługi znajdziesz na stronie <a href="/zmiana-koloru/">zmiana koloru auta</a>.</p>
',
        ),

        // ---------------------------------------------------------- 2 — PPF VS CERAMIKA
        array(
            'title'   => 'Folia PPF czy powłoka ceramiczna — co lepiej chroni lakier? Rzetelne porównanie',
            'slug'    => 'folia-ppf-czy-powloka-ceramiczna',
            'image'   => 'gallery_ppf_application.webp',
            'excerpt' => 'Folia PPF chroni lakier mechanicznie (odpryski, zarysowania), a ceramika chemicznie (brud, UV, chemię). To nie konkurenci, tylko drużyna — sprawdź, co wybrać dla swojego auta.',
            'content' => '
<h2>Dwie zupełnie różne technologie ochrony</h2>
<p>W internecie toczy się sztuczny „bój" PPF z ceramiką, a prawda jest prosta: <strong>te produkty robią dwie różne roboty</strong>. Folia PPF to fizyczna tarcza z poliuretanu, a powłoka ceramiczna to twarda, chemiczna warstwa ochronna. Jedno nie zastępuje drugiego.</p>

<h2>Czym jest folia PPF?</h2>
<p>PPF (Paint Protection Film) to przezroczysta, elastyczna folia poliuretanowa o grubości ok. <strong>180–200 mikronów</strong>, naklejana na lakier lub na folię zmieniającą kolor. Jej najważniejsze cechy:</p>
<ul>
<li><strong>ochrona mechaniczna</strong> — pochłania uderzenia kamieni, chroni przed odpryskami, zarysowaniami od kluczy, gałęzi i myjni automatycznych,</li>
<li><strong>samoregeneracja</strong> — drobne rysy znikają pod wpływem ciepła (słońce, ciepła woda),</li>
<li><strong>trwałość i gwarancja do 10 lat</strong> (np. STEK DYNOshield),</li>
<li>niewidoczna na aucie, dostępna też w wersji matowej (zmienia połysk lakieru na mat bez zmiany koloru).</li>
</ul>

<h2>Czym jest powłoka ceramiczna?</h2>
<p>Powłoka kwarcowa (tzw. ceramika) to ciekły preparat, który po aplikacji twardnieje i wiąże się z lakierem. Daje:</p>
<ul>
<li><strong>hydrofobowość</strong> — woda i brud spływają, auto wolniej się brudzi i łatwiej myje,</li>
<li>ochronę przed <strong>UV, solą drogową, chemią i ptasimi odchodami</strong> (krótkoterminowo),</li>
<li>głębię koloru i „szklany" połysk,</li>
<li>trwałość realnie 1–3 lata w zależności od produktu i pielęgnacji.</li>
</ul>
<p><strong>Czego ceramika NIE robi:</strong> nie zatrzyma kamienia wystrzelonego spod opony ciężarówki. Na odpryski i zarysowania mechaniczne nie ma wpływu.</p>

<h2>PPF czy ceramika — szybkie porównanie</h2>
<table>
<thead><tr><th>Cecha</th><th>Folia PPF</th><th>Powłoka ceramiczna</th></tr></thead>
<tbody>
<tr><td>Odpryski od kamieni</td><td><strong>Tak — pełna ochrona</strong></td><td>Nie</td></tr>
<tr><td>Zarysowania mechaniczne</td><td>Tak (self-healing)</td><td>Częściowo (mikrorysy)</td></tr>
<tr><td>Brud, owady, chemię</td><td>Tak</td><td><strong>Tak — świetna</strong></td></tr>
<tr><td>Hydrofobowość / łatwe mycie</td><td>Dobra (można dołożyć ceramikę)</td><td><strong>Bardzo dobra</strong></td></tr>
<tr><td>Trwałość</td><td>do 10 lat (gwarancja)</td><td>1–3 lata</td></tr>
<tr><td>Koszt (orientacyjnie)</td><td>od ~1 500 zł (strefy) do 15 000+ zł (całe auto)</td><td>ok. 800 – 2 500 zł</td></tr>
</tbody>
</table>

<h2>Najlepsza konfiguracja: PPF + ceramika</h2>
<p>W praktyce najczęściej rekomendujemy <strong>połączenie obu światów</strong>:</p>
<ul>
<li><strong>strefy newralgiczne lub Full Front w PPF</strong> (zderzak, maska, błotniki, słupki A, lustra, wnęki klamek, progi),</li>
<li><strong>ceramika na całość</strong> — również na folię PPF, dla hydrofobowości i łatwiejszego mycia.</li>
</ul>
<p>Tak zabezpieczone nowe auto po 5 latach użytkowania wygląda niemal jak z salonu, a jego wartość przy odsprzedaży jest zauważalnie wyższa.</p>

<h2>Co wybrać dla swojego auta?</h2>
<ul>
<li><strong>Dużo trasy, autostrady?</strong> PPF na przód to podstawa — zderzak i maska zbierają wszystko.</li>
<li><strong>Auto miejskie, garażowane?</strong> Często wystarczy dobra ceramika + ewentualnie wnęki klamek i krawędzie w PPF.</li>
<li><strong>Auto nowe, sportowe lub kolekcjonerskie?</strong> Rozważ Full Body PPF — to dziś standard ochrony aut premium.</li>
</ul>
<p>Pakiety i materiały opisujemy szczegółowo na stronie <a href="/ppf/">bezbarwne folie ochronne PPF</a>. Chcesz dobrać konfigurację pod swój styl jazdy? Zadzwoń pod <strong>605 088 065</strong> lub skorzystaj z <a href="/#wycena">bezpłatnej wyceny</a> — doradzimy konkretnie, bez sprzedażowej presji.</p>
',
        ),

        // ---------------------------------------------------------- 3 — SZYBY PRZEPISY
        array(
            'title'   => 'Przyciemnianie szyb w 2026 roku — co wolno, czego nie wolno i o co chodzi z atestem',
            'slug'    => 'przyciemnianie-szyb-przepisy',
            'image'   => 'ai_oferta_detailing.webp',
            'excerpt' => 'Przednia szyba musi przepuszczać min. 75% światła, a przednie boczne 70%. Tylne szyby możesz przyciemnić dowolnie. Wyjaśniamy przepisy, mandaty i rolę atestu folii.',
            'content' => '
<h2>Jak wyglądają przepisy w skrócie</h2>
<p>W Polsce obowiązują dwa przepisy rozporządzenia o warunkach technicznych pojazdów, które rozstrzygają całą sprawę:</p>
<ul>
<li><strong>przednia szyba (czołowa):</strong> przepuszczalność światła <strong>minimum 75%</strong> — w praktyce oznacza to, że żadna folia przyciemniająca nie jest legalna na całej powierzchni (dozwolony jest pasek u góry szyby o szerokości do 14 cm),</li>
<li><strong>przednie szyby boczne:</strong> przepuszczalność <strong>minimum 70%</strong> — również bardzo jasna granica, którą żadna sensowna folia przyciemniająca nie spełnia,</li>
<li><strong>szyby tylne i tylna:</strong> <strong>bez ograniczeń</strong> — możesz zastosować dowolnie ciemną folię (o ile auto ma obydwa lusterka zewnętrzne).</li>
</ul>
<p><strong>Cenna wskazówka:</strong> większość aut opuszcza fabrykę z szybami, które same w sobie przepuszczają ok. 80–85% światła. Dlatego nawet najjaśniejsza folia na przednie boczne szyby formalnie wyjdzie poza limit 70%. Jest to spór interpretacyjny od lat — ale mandat w Policji wystawia się za pomiar, nie za interpretację.</p>

<h2>Co grozi za zbyt ciemne przednie szyby?</h2>
<ul>
<li>mandat (zwykle <strong>500 zł</strong>) podczas kontroli z pomiarem przepuszczalności,</li>
<li>polecenie usunięcia folii (policjant może zażądać zdjęcia folii na miejscu lub zatrzymać dowód rejestracyjny do czasu usunięcia),</li>
<li>problemy na przeglądzie technicznym.</li>
</ul>

<h2>Po co jest atest folii?</h2>
<p>Folia z <strong>atestem (homologacją)</strong> umożliwia:</p>
<ul>
<li>legalny montaż na <strong>szybach tylnych</strong> w pojazdach kategorii N1 (dostawcze) — w N1 przyciemnianie tylnych szyb wymaga folii z atestem,</li>
<li>spokój podczas kontroli i przeglądu — dokument potwierdza parametry folii.</li>
</ul>
<p>W naszym studiu pracujemy wyłącznie na <strong>foliach z atestem</strong>, a po każdej aplikacji wystawiamy stosowne potwierdzenie — dokument warto wozić w aucie.</p>

<h2>Czy warto przyciemniać szyby mimo ograniczeń?</h2>
<p>Tak — bo legalna część (szyby tylne + tylna) daje konkretne korzyści:</p>
<ul>
<li><strong>komfort termiczny</strong> — dobre folie ceramiczne odcinają nawet 60–90% promieniowania IR: latem w aucie jest zauważalnie chłodniej, klimatyzacja pracuje lżej,</li>
<li><strong>ochrona UV</strong> do 99% — chroni skórę pasażerów i tapicerkę przed blaknięciem,</li>
<li>prywatność i bezpieczeństwo (mniej widać wnętrze, a w razie stłuczki szyba trzyma się w całości),</li>
<li>efekt estetyczny — przyciemnione tylne szyby „domykają" stylizację auta.</li>
</ul>

<h2>Jak robimy to w HI-GLOSS DESIGN</h2>
<p>Zawsze zaczynamy od rozmowy: mierzymy fabryczną przepuszczalność szyb, pokazujemy próbki folii o różnej ciemności i uczciwie mówimy, co jest legalne, a co już ryzykiem. Aplikujemy folie atermiczne i ceramiczne z filtrem IR oraz pełnym atestem. Szczegóły usługi: <a href="/detailing/">przyciemnianie szyb i detailing</a>. Pytania? <strong>605 088 065</strong> albo <a href="/kontakt/">kontakt przez stronę</a>.</p>
',
        ),

        // ---------------------------------------------------------- 4 — PIELĘGNACJA PO OKLEJENIU
        array(
            'title'   => 'Pierwsze 7 dni po oklejeniu auta — instrukcja pielęgnacji świeżej folii krok po kroku',
            'slug'    => 'pielegnacja-folii-po-oklejeniu',
            'image'   => 'gallery_audi_rs6_blue.webp',
            'excerpt' => 'Przez pierwszy tydzień po oklejeniu nie myj auta i nie jedź na myjnię automatyczną — klej musi związać. Pełna instrukcja pielęgnacji folii kolorowej i PPF od dnia odbioru.',
            'content' => '
<h2>Dlaczego pierwszy tydzień jest kluczowy?</h2>
<p>Po aplikacji folia jest przyklejona, ale <strong>klej dopiero dojrzewa</strong> — pełne związanie z lakierem następuje zwykle po 5–10 dniach (zależnie od temperatury). W tym czasie folia jest najbardziej wrażliwa na: ciśnienie wody, szczotki myjni, mocne pociągnięcia krawędzi i zamarzanie wody pod spodem. Kilka prostych zasad w tym okresie gwarantuje, że folia posłuży pełne 7–10 lat.</p>

<h2>Pierwsze 7 dni — zasady:</h2>
<ul>
<li><strong>Nie myj auta.</strong> Ani ręcznie, ani tym bardziej automatycznie. Woda pod ciśnieniem może podważyć krawędzie, a szczotki — zarysować świeżą powierzchnię.</li>
<li><strong>Unikaj myjni automatycznych do końca życia folii</strong> — nie tylko w pierwszym tygodniu. Waletowe szczotki powodują mikroodkształcenia krawędzi i matowienie.</li>
<li>Nie odklejaj i nie „przygładzaj" na siłę <strong>resztek wody i drobnych bąbelków</strong> — to pozostałość montażowa, która wyparuje sama w ciągu 1–3 tygodni (to normalne i przewidziane w procesie).</li>
<li>Unikaj jazdy wykutą na deszczu w pierwszych 48 h, jeśli to możliwe; po deszczu osusz osadniki (nie wycieraj krawędzi na sucho).</li>
<li>Zimą: folię aplikujemy w temperaturze kontrolowanej — po odbiorze trzymaj auto w garażu przynajmniej pierwszą dobę.</li>
</ul>

<h2>Jak myć auto w folii później (prawidłowa rutyna)?</h2>
<ul>
<li><strong>Mycie ręczne, aktywna piana</strong> + miękka rękawica; kosmetyki o neutralnym pH.</li>
<li>Myjnia ręczna: lanca z odległości <strong>min. 30–40 cm</strong>, nigdy prostopadle w krawędzie folii.</li>
<li>Osuszaj miękką mikrofibrą — nie „przeciągaj" przez krawędzie, tylko przykładaj i dociskaj.</li>
<li><strong>Owady i ptasie odchody usuwaj możliwie od razu</strong> (zwłaszcza latem) — to związki kwaśne, które przy dłuższym kontakcie potrafią odbarwić zarówno folię kolorową, jak i PPF.</li>
<li>Na folię (kolorową i PPF) można aplikować <strong>dedykowane woski syntetyczne lub ceramikę</strong>; wyjątek: folie matowe — na nie nie nakładamy niczego „nabłyszczającego", wyłącznie produkty do matów.</li>
</ul>

<h2>Zarysowałem folię — co teraz?</h2>
<ul>
<li>Na <strong>folii PPF</strong>: spokojnie — drobne rysy znikają same pod wpływem ciepła (słońce, ciepła woda z czajnika z bezpiecznej odległości).</li>
<li>Na <strong>folii kolorowej</strong>: drobne defekty można często usunąć polerką dla folii lub wymienić pojedynczy element (bez oklejania całego auta — to duża zaleta systemu).</li>
</ul>

<h2>Zima, sól i latem parking na słońcu</h2>
<p>Folia znosi warunki polskich dróg bardzo dobrze, ale: zimą zbieraj osady soli przy okazji każdej myci (kładą się na błotnikach i progach), a latem raz na jakiś czas przecieraj zabrudzenia organiczne. Garaż lub cień generalnie wydłużają życie folii i głębię koloru — jak z każdym lakierem.</p>

<p>Kompletna instrukcja plantacji trafia do każdego klienta przy odbiorze auta. Masz pytanie o swoją folię? Zadzwoń pod <strong>605 088 065</strong> lub zajrzyj do <a href="/zmiana-koloru/">naszej oferty zmiany koloru</a> i <a href="/ppf/">ochrony PPF</a>.</p>
',
        ),

        // ---------------------------------------------------------- 5 — FOLIA VS LAKIER
        array(
            'title'   => 'Oklejanie auta folią czy lakierowanie — co się bardziej opłaca w 2026 roku?',
            'slug'    => 'oklejanie-auta-czy-lakierowanie',
            'image'   => 'gallery_mercedes_g63_matt.webp',
            'excerpt' => 'Folia jest tańsza (6–11 tys. zł vs 10–20 tys. zł za lakier), gotowa w 3–5 dni zamiast 2–3 tygodni i chroni oryginalny lakier. Ale lakier też ma swoje zalety. Rzetelne porównanie.',
            'content' => '
<h2>Postawmy sprawę uczciwie</h2>
<p>Jako studio oklejania moglibyśmy napisać „folia wygrywa zawsze". Nie napiszemy — bo prawda, jak zwykle, zależy od sytuacji. Poniżej rzetelne porównanie obu rozwiązań punkt po punkcie, oparte na naszej codziennej praktyce.</p>

<h2>Koszt</h2>
<ul>
<li><strong>Folia (całościowa zmiana koloru, premium):</strong> orientacyjnie 5 500 – 11 000 zł w zależności od segmentu auta — <a href="/ile-kosztuje-zmiana-koloru-auta-folia/">dokładny cennik rozpisujemy tutaj</a>.</li>
<li><strong>Lakierowanie całego auta</strong> na poziomie, który nie będzie wyglądał gorzej niż fabryka: realnie 10 000 – 20 000+ zł. Tania „szybka malówka" za 4–5 tysięcy zazwyczaj kończy się spływami, skórką pomarańczy i odczuciem zmarnowanych pieniędzy.</li>
</ul>
<p><strong>Punkt dla folii</strong> — przy porównywalnym efekcie wizualnym.</p>

<h2>Czas realizacji</h2>
<ul>
<li><strong>Folia:</strong> standardowo 3–5 dni roboczych.</li>
<li><strong>Lakier:</strong> z rozbiórką, przygotowaniem i wykończeniem — 2–3 tygodnie, czasem więcej.</li>
</ul>
<p><strong>Punkt dla folii.</strong></p>

<h2>Odwracalność i wartość auta</h2>
<p>To najsilniejszy argument za folią i zarazem najczęściej pomijany:</p>
<ul>
<li>folię można po latach <strong>bezpiecznie usunąć</strong>, wracając do oryginalnego koloru,</li>
<li>przez cały czas eksploatacji folia <strong>chroni fabryczny lakier</strong> przed mikrorozsadami, UV i drobnymi odpryskami,</li>
<li>auto z nietkniętym, oryginalnym lakierem pod folią osiąga na rynku wtórnym <strong>zauważalnie wyższą cenę</strong> — kupujący nie musi wierzyć Ci na słowo, że „lakier oryginalny".</li>
</ul>
<p>Przemalowane auto z kolei z definicji przestaje mieć lakier fabryczny — i potencjalny kupiec zawsze zapyta „dlaczego było malowane?". <strong>Punkt dla folii.</strong></p>

<h2>Trwałość i możliwości</h2>
<ul>
<li>Dobra folia premium wytrzymuje <strong>7–10 lat</strong> (gwarancja producenta do 7 lat) — potem można okleić auto ponownie, w dowolnym kolorze, za ułamek ceny lakieru.</li>
<li>Lakieryk to wykończenie „na stałe" — przy poprawnej robocie wygląda dobrze latami, ale każda zmiana = nowe pełne lakierowanie.</li>
<li>Folia daje wykończenia niedostępne w lakiernictwie: <strong>głębokie satyny, maty, flip-colors, struktury, chrome-delete</strong> — i to w jednym procesie, bez osobnego pakietu.</li>
</ul>

<h2>Kiedy jednak lakier?</h2>
<p>Są sytuacje, w których sami kierujemy klienta do lakiernika:</p>
<ul>
<li><strong>rdza lub poważna naprawa blacharska</strong> — folia nie zakryje korozji ani nie wyrówna powierzchni; najpierw blacharka, potem folia,</li>
<li>auta <strong>klasyczne / konkursowe</strong>, gdzie doceniana jest oryginalność lakiernicza,</li>
<li>kiedy właściciel chce <strong>struktury lakieru ciekłego metalu / matowego MS (matt style)</strong> na lata bez wymiany.</li>
</ul>

<h2>Werdykt</h2>
<p>Dla 9 na 10 klientów pytających o zmianę koloru auta <strong>folia jest dziś rozwiązaniem racjonalnym</strong>: taniej, szybciej, odwracalnie, z ochroną oryginalnego lakieru i gwarancją. Lakierowanie zostawiamy przypadkom blacharskim i kolekcjonerskim.</p>
<p>Chcesz policzyć to dla swojego auta? Zostaw zapytanie przez <a href="/#wycena">formularz bezpłatnej wyceny</a> albo zadzwoń pod <strong>605 088 065</strong>. Zobacz też realne metamorfozy w naszej <a href="/galeria/">galerii realizacji</a>.</p>
',
        ),
    );
}

/**
 * Obrazek poradnika: featured image posta, a gdy go nie ma — statyczny asset
 * przypiety do sluga artykułu (spojny wyglad kart i naglowkow artykulow).
 *
 * @param int $post_id ID posta typu post.
 * @return string Absolutny URL obrazka.
 */
function higloss_poradnik_image($post_id) {
    if (has_post_thumbnail($post_id)) {
        $thumb = get_the_post_thumbnail_url($post_id, 'large');
        if ($thumb) {
            return $thumb;
        }
    }
    $slug   = get_post_field('post_name', $post_id);
    $assets = wp_list_pluck(higloss_poradnik_articles(), 'image', 'slug');
    $file   = isset($assets[$slug]) ? $assets[$slug] : 'gallery_bmw_m4_satin_black.webp';
    return HIGLOSS_THEME_URI . '/assets/images/' . $file;
}

/**
 * Szacowany czas czytania artykułu (w minutach), ~200 slow/min.
 *
 * @param string $content Tresc artykułu (HTML).
 * @return int Czas czytania w minutach, minimum 1.
 */
function higloss_reading_time($content) {
    $words = str_word_count(wp_strip_all_tags($content), 0, 'ąćęłńóśźżĄĆĘŁŃÓŚŹŻ');
    return max(1, (int) round($words / 200));
}
