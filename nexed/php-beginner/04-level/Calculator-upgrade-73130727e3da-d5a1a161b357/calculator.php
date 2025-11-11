<?php

echo "Welke operatie wil je uitvoeren? (+, -, %)";
$op = readline();

if ($op != "+" && $op != "-" && $op != "%") {
    echo "Dat is geen geldige operatie!";
    exit;
}

$getal1string = readline();
$getal2string = readline();

if (!is_numeric($getal1string) || !is_numeric($getal2string)) {
    echo "Dat is geen getal!";
    exit;
}

$getal1 = intval($getal1string);
$getal2 = intval($getal2string);

$res = 0;

if ($op == "+") {
    $res = $getal1 + $getal2;
} else if ($op == "-") {
    $res = $getal1 - $getal2;
} else if ($op == "%") {
    $res = $getal1 % $getal2;
}

echo $res;

?>