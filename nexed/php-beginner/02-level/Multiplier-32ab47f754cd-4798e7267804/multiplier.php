<?php

echo "Geef me een nummer" . PHP_EOL;
$string1 = readline();
echo "Geef me nog een nummer" . PHP_EOL;
$string2 = readline();

if (!is_numeric($string1) || !is_numeric($string2)) {
    echo "Dat is geen getal!" . PHP_EOL;
    exit(1);
}

$int1 = intval($string1);
$int2 = intval($string2);

$result = $int1 * $int2;

echo "Uw resultaat: " . $result . PHP_EOL;

?>