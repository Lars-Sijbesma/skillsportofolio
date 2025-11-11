<?php

$aantal_mensen = readline("Hoeveel vrienden zal ik vragen om hun dromen? ");
$lijst = [];

for ($i = 0; $i < $aantal_mensen; $i++) {
    $naam = readline("Wat is de naam van vriend " . ($i + 1) . "? ");
    $aantal_dromen = readline("Hoeveel dromen wil $naam opgeven? ");

    $dromen = [];

    for ($j = 0; $j < $aantal_dromen; $j++) {
        $droom = readline("Wat is droom " . ($j + 1) . " van $naam? ");
        $dromen[] = $droom;
    }

    $lijst[$naam] = $dromen;
}

echo "\n--- Overzicht van alle dromen ---\n";
foreach ($lijst as $persoon => $dromen) {
    echo "$persoon heeft de volgende dromen:\n";
    foreach ($dromen as $droom) {
        echo "- $droom\n";
    }
    echo "\n";
}
