<?php

if ($argc < 2) {
    echo "Geen tijd meegegeven" . PHP_EOL;
    exit(1);
}

$totaalSeconden = 0;

for ($i = 1; $i < $argc; $i++) {
    $invoer = $argv[$i];
    $eenheid = strtolower(substr($invoer, -1));
    $getal = (int)$invoer;

    switch ($eenheid) {
        case 'd':
            $totaalSeconden += $getal * 86400;
            break;
        case 'u':
            $totaalSeconden += $getal * 3600;
            break;
        case 'm':
            $totaalSeconden += $getal * 60;
            break;
        case 's':
            $totaalSeconden += $getal;
            break;
        default:
            break;
    }
}

echo $totaalSeconden . " seconden" . PHP_EOL;
?>