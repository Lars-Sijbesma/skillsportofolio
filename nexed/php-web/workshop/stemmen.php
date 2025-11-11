<?php

echo "Hoe oud ben je?" . PHP_EOL;
$string1 = readline();


$leeftijd = floatval($string1);

if ($leeftijd >= 18) {
    echo "Je mag stemmen";
} else {
    echo "helaas je mag nog niet stemmen";
}
?>