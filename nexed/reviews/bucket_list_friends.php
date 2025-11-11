<?php

$dromen = [];

$aantal = readline("Hoeveel vrienden wil je toevoegen? ");

if (!is_numeric($aantal) || intval($aantal) <= 0) {
    echo "Voer een geldig positief getal in.\n";
    exit;
}

$aantal = intval($aantal);

for ($i = 1; $i <= $aantal; $i++) {
    $naam = readline("Wat is jouw naam? ");

    $droom = readline("Wat is jouw droom, $naam? ");

    $dromen[$naam] = $droom;
}

echo "\n Dromen \n";
foreach ($dromen as $naam => $droom) {
    echo "$naam's droom is: $droom\n";
}
?>
