<?php

$array1 = [];
$bucket = readline("Hoeveel vrienden zal ik vragen om hun dromen?");

if (!is_numeric($bucket)) {
    echo "dit is geen getal";
    exit();
}

$bucket = (int)$bucket;


for ($i = 0; $i < $bucket; $i++) {
    $naam = readline("Wat is jouw naam? ");
    $droom = readline("Wat is jouw droom? ");
    $array1[$naam] = $droom;
}


echo PHP_EOL;
foreach ($array1 as $naam => $droom) {
    echo "$naam heeft dit als droom: $droom" . PHP_EOL;
}
?>
