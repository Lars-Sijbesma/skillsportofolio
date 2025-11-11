<?php

if ($argc < 2) {
    echo "Gebruik: php tijd.php [tijdduur, zoals 123d]" . PHP_EOL;
    exit(1);
}

$invoer = $argv[1];


$eenheid = strtolower(substr($invoer, -1));

$getal = (int)$invoer;

switch ($eenheid) {
    case 'd':
        $seconden = $getal * 86400;
        break;
    case 'u':
        $seconden = $getal * 3600;
        break;
    case 'm':
        $seconden = $getal * 60;
        break;
    case 's':
        $seconden = $getal;
        break;
    default:
        echo "Fout: Onbekende eenheid. Gebruik d, u, m of s." . PHP_EOL;
        exit(1);
}

echo $seconden . " seconden" . PHP_EOL;
?>