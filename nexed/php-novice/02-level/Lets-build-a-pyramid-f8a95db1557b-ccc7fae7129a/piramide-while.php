<?php

echo "Hoeveel stapels hoog wordt de piramide?" . PHP_EOL;
$stapels =  (int)readline("Hoevoeel stapels hoog wordt de piramide? ") . PHP_EOL;

$i = $stapels;
$a = "*";

for ($j = 0; $j < $i; $j++) {

    $n = "";

    for ($k = 0; $k <= $j; $k++) {
        $n .= $a;
    }

    echo $n .  PHP_EOL;

}



?>
