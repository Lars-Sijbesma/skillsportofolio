<?php

$dier = [
    "naam" => "Bello",
    "soort" => "hond",
    "leeftijd" => 5,
    "gewicht" => 20
];


if ($dier["leeftijd"] < 1) {
    $dier["beoordeling"] = "Jong dier";
} elseif ($dier["leeftijd"] <= 7) {
    $dier["beoordeling"] = "Volwassen dier";
} else {
    $dier["beoordeling"] = "Oud dier";
}


foreach ($dier as $waarde) {
    echo $waarde . "\n";
}


