<?php

$array1 = readline("Wie zit er in de klas?" . PHP_EOL);
$array1 = explode(" ", $array1);

echo "Hoe heten de studenten?" . PHP_EOL;

foreach ($array1 as $naam) {
    echo $naam . PHP_EOL;
}
?>