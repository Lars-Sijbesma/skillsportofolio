<?php

const MONEY_UNITS = [5000, 2000, 1000, 500, 200, 100, 50, 20, 10, 5];



function valideerInput($argc, $argv)
{
    if ($argc < 2 || !is_numeric($argv[1])) {
        throw new Exception("Geen wisselgeld");
    }
    $input = floatval($argv[1]);
    if ($input <= 0) {
        throw new Exception("Input moet een positief getal zijn");
    }
    return $input;
}

function berekenBedragInCenten($invoer)
{
    return (int) (round($invoer * 20) * 5);
}

function printWisselgeld($bedragInCenten)
{
    $restbedrag = $bedragInCenten;

    foreach (MONEY_UNITS as $eenheid) {
        if ($restbedrag >= $eenheid) {
            $aantal     = (int) floor($restbedrag / $eenheid);
            $restbedrag = fmod($restbedrag, $eenheid);

            if ($eenheid >= 100) {
                echo $aantal . " x " . ($eenheid / 100) . " euro" . PHP_EOL;
            } else {
                echo $aantal . " x " . $eenheid . " cent" . PHP_EOL;
            }
        }
    }
}

try {
    $invoer         = valideerInput($argc, $argv);
    $bedragInCenten = berekenBedragInCenten($invoer);
    printWisselgeld($bedragInCenten);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
?>