<?php

function Artikel($lijst, $artikel) {
    $lijst[] = $artikel;
    return $lijst;
}

// Functie om de boodschappenlijst te printen
function printLijst($lijst) {
    echo "\n--- Boodschappenlijst ---\n";
    foreach ($lijst as $item) {
        echo "- " . $item . "\n";
    }
}


$boodschappen = [];

while (true) {

    $artikel = readline("Wat wil je op het boodschappenlijstje zetten? ");
    $boodschappen = Artikel($boodschappen, $artikel);


    $meer = readline("Wil je nog een artikel toevoegen? (ja/nee): ");
    if ($meer != "ja") {
        break;
    }
}


printLijst($boodschappen);
