<?php

if ($argc < 3) {
    echo "Gebruik: php begroeting.php [naam] [leeftijd]" . PHP_EOL;
    exit(1);
}

$naam = $argv[1];
$leeftijd = $argv[2];

echo "Hallo, $naam! Je bent $leeftijd jaar oud." . PHP_EOL;
