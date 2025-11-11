<?php

echo "Van welk getal wil je de faculteit weten?";

$getal = intval(readline("Van welk getal wil je de faculteit weten? "));

$res = 1;

for ($i = 1; $i <= $getal; $i++) {
    $res *= $i;
}

echo $res . PHP_EOL;

?>