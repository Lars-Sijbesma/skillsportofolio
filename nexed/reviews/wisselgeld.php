<?php

define('DENOMINATIONS', [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5, 2, 1]);

function geldig_bedrag(array $args): float
{
    if (!isset($args[1])) {
        throw new Exception("Geen wisselgeld");
    }

    if (!is_numeric($args[1])) {
        throw new Exception("Geen wisselgeld");
    }

    if (floatval($args[1]) <= 0) {
        throw new Exception("Input moet een positief getal zijn");
    }

    return round(floatval($args[1]) * 20) / 20;
}

function bedrag_in_cent(float $bedrag): int
{
    return round($bedrag * 100);
}

function toon_wisselgeld(int $centen): void
{
    foreach (DENOMINATIONS as $waarde) {
        $aantal = floor($centen / $waarde);
        if ($aantal > 0) {
            if ($waarde >= 100) {
                echo $aantal . " x " . ($waarde / 100) . " euro\n";
            } else {
                echo $aantal . " x " . $waarde . " cent\n";
            }
            $centen -= $aantal * $waarde;
        }
    }
}

try {
    $bedrag = geldig_bedrag($argv);
    $centen = bedrag_in_cent($bedrag);
    toon_wisselgeld($centen);
} catch (Exception $e) {
    echo $e->getMessage() . "\n";
    exit(0);
}
