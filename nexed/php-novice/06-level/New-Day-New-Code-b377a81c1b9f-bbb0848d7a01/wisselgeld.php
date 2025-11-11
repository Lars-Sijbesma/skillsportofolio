<?php

const MONEY_UNITS = [50, 20, 10, 5, 2, 1];


if ($argc < 2 || !is_numeric($argv[1])) {
    echo "Geen wisselgeld" . PHP_EOL;
    exit(0);
}

$restbedrag = intval($argv[1]);


foreach (MONEY_UNITS as $eenheid) {
    if ($restbedrag >= $eenheid) {
        $aantal = (int) floor($restbedrag / $eenheid);

        $restbedrag = $restbedrag % $eenheid;

        echo $aantal . " x " . $eenheid . " euro" . PHP_EOL;
    }
}
?>