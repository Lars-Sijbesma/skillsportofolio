<?php

$vraag = (int)readline("Hoeveel mensen zal ik vragen om hun droom?");
$dromen = [];
$namen = [];

for ($i = 1; $i <= $vraag; $i++) {
    $naam = readline("Wat is de naam van persoon $i? ");
    $namen[$i] = $naam;
    $droom = readline("Hoeveel dromen gaat persoon " . $i . " opgeven? " . PHP_EOL);
    for ($j = 1; $j <= $droom; $j++) {
        echo "Wat is droom " . $j . PHP_EOL;
        $dromen[$i][] = readline();
    }
}

echo PHP_EOL . "Overzicht van alle dromen:" . PHP_EOL;

foreach ($dromen as $persoon => $lijst) {
    $naam = $namen[$persoon];
    echo "$naam heeft de volgende dromen:" . PHP_EOL;

    foreach ($lijst as $index => $droom) {
        echo "  - Droom " . ($index + 1) . ": $droom" . PHP_EOL;
    }
    echo PHP_EOL;
}
?>