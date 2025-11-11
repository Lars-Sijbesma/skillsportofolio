<?php

if ($argc < 2) {
    echo "geen wisselgeld";
    exit(0);
}

$bedrag = intval($argv[1]);


$tien = floor($bedrag / 10);
$bedrag = $bedrag % 10;


$vijf = floor($bedrag / 5);
$bedrag = $bedrag % 5;


$twee = floor($bedrag / 2);
$bedrag = $bedrag % 2;


$een = $bedrag;


if ($tien > 0) {
    echo "$tien x 10 euro" . PHP_EOL;
}
if ($vijf > 0) {
    echo "$vijf x 5 euro" . PHP_EOL;
}
if ($twee > 0) {
    echo "$twee x 2 euro" . PHP_EOL;
}
if ($een > 0) {
    echo "$een x 1 euro" . PHP_EOL;
}
?>