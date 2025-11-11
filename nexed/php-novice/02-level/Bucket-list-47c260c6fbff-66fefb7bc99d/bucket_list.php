<?php

$array1 = [];
$bucket = (int)readline("Hoeveel activiteiten wil je op je bucket list?");

if (!is_numeric($bucket)) {
    echo "dit is geen getal";
    exit();
}

for ($i = 1; $i <= $bucket; $i++) {
    $activiteit = readline("Activieteit $i: ");
    $array1[] = $activiteit;
}

echo implode(",", $array1);

?>