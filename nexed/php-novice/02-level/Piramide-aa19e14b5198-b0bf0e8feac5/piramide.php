<?php

echo "Hoeveel stapels hoog wordt de piramide?" . PHP_EOL;
$stapels = (int)readline("Hoeveel stapels hoog wordt de piramide? ");

$j = 0;
$n = "";

while ($j < $stapels) {
    $n .= "*";
    echo $n . PHP_EOL;
    $j++;
}

?>