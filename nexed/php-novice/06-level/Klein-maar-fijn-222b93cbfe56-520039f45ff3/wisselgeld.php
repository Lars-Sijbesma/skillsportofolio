<?php

const MONEY_UNITS = [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5];

if ($argc < 2 || !is_numeric($argv[1])) {
    echo "Geen wisselgeld" . PHP_EOL;
    exit(0);
}

$bedrag = round(floatval($argv[1]) * 100);
$restbedrag = $bedrag;

foreach (MONEY_UNITS as $eenheid) {
    if ($restbedrag >= $eenheid) {
        $aantal = (int) floor($restbedrag / $eenheid);
        $restbedrag = fmod($restbedrag, $eenheid);


        if ($eenheid >= 100) {
            echo $aantal . " x " . ($eenheid / 100) . " euro" . PHP_EOL;
        } else {
            echo $aantal . " x " . $eenheid . " cent" . PHP_EOL;
        }
    }
}
?>