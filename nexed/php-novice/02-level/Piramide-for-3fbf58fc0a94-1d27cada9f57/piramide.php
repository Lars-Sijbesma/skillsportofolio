<?php

 echo("Hoeveel stapels hoog wordt de piramide?") . PHP_EOL;
$stapels =  (int)readline("Hoevoeel stapels hoog wordt de piramide? ") . PHP_EOL;

for ($i = 0; $i < $stapels; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}
?>