<?php
/**
 * Dyskretne linkowanie wewnetrzne na stronach uslug:
 * usluga -> artykuly FAQ (cenniki/poradniki) + przykladowe realizacje.
 * Sciezka ringu: usluga -> FAQ -> realizacja -> usluga.
 *
 * @package HiGloss2026
 */

$slug = get_post_field('post_name', get_queried_object_id());

$links_map = array(
    'zmiana-koloru' => array(
        array('Ile kosztuje zmiana koloru auta folią?', '/ile-kosztuje-zmiana-koloru-auta-folia/'),
        array('Mat, satyna czy połysk — jaką folię wybrać?', '/folia-matowa-satyna-czy-polysk/'),
        array('Realizacja: BMW X7 — zmiana koloru', '/realizacja/bmw-x7-zmiana-koloru/'),
        array('Realizacja: Ford Mustang w zielonym macie', '/realizacja/ford-mustang-zielony-mat-calosciowa-zmiana-koloru/'),
    ),
    'ppf' => array(
        array('Ile kosztuje folia PPF — cennik', '/ile-kosztuje-folia-ppf-cennik/'),
        array('Folia PPF czy powłoka ceramiczna?', '/folia-ppf-czy-powloka-ceramiczna/'),
        array('Realizacja: Porsche Cayman S — pełna ochrona PPF', '/realizacja/porsche-cayman-s-ochrona-lakieru-folia-ppf/'),
        array('Realizacja: Mercedes GLE — ochrona lakieru PPF', '/realizacja/mercedes-gle-ochrona-lakieru-folia-ppf/'),
    ),
    'reklama' => array(
        array('Jak długo trzyma się folia na aucie?', '/jak-dlugo-trzyma-sie-folia/'),
        array('Demontaż folii — kiedy i jak', '/demontaz-folii-z-auta/'),
        array('Realizacja: Ford Transit — branding dla DHL', '/realizacja/ford-transit-branding-dhl/'),
        array('Realizacja: Volvo — branding firmowy Waterdrop', '/realizacja/volvo-branding-auta-firmy-waterdrop/'),
    ),
    'detailing' => array(
        array('Przyciemnianie szyb — co mówią przepisy', '/przyciemnianie-szyb-przepisy/'),
        array('Jak dbać o folię po oklejeniu auta', '/pielegnacja-folii-po-oklejeniu/'),
        array('Realizacja: Mercedes GLK — lampy i dechroming', '/realizacja/mercedes-glk-przyciemnianie-lamp-i-dechroming-grila/'),
        array('Realizacja: Dodge Charger — paski na masce', '/realizacja/dodge-charger-paski-na-masce/'),
    ),
);

if (empty($links_map[$slug])) {
    return;
}
?>
<div class="hg-container">
    <p class="hg-xlinks">
        <span class="hg-xlinks-label">Czytaj i zobacz też:</span>
        <?php foreach ($links_map[$slug] as $i => $l) : ?>
            <?php if ($i) : ?><span class="hg-xlinks-sep" aria-hidden="true">·</span><?php endif; ?>
            <a href="<?php echo esc_url($l[1]); ?>"><?php echo esc_html($l[0]); ?></a>
        <?php endforeach; ?>
    </p>
</div>
