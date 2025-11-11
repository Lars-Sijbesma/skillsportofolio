<?php

$albums = [
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10
];
echo "Het albumoverzicht:" . PHP_EOL;

foreach ($albums as $album => $prijs) {
    echo "$album kost €$prijs" . PHP_EOL;
}
$totaal = array_sum($albums);

$a_albums = count($albums);
$mid = $totaal / $a_albums;

echo "Het totaalbedrag van alle albums is €$totaal";
echo "De gemiddelde prijs van alle albums is €$mid"
?>