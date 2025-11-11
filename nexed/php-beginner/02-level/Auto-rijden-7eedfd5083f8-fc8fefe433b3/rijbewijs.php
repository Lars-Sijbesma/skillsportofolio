<?php

echo "Hoe oud ben je?" . PHP_EOL;
$string1 = readline();


$leeftijd = floatval($string1);

if ($leeftijd >= 16.5) {
    echo "Je mag beginnen met autorijden!";
} else {
    echo "helaas je mag nog niet beginnen met autorijden";
}
?>