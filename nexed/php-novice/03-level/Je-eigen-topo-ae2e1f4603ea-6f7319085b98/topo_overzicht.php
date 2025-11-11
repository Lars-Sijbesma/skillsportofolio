<?php

$namen = [];
$vraag = (int)readline("Hoeveel landen wil je toevoegen? ");
$land2 = [];

for ($i = 0; $i < $vraag; $i++) {
    $land = readline("Welk land wil je toevoegen? ") . PHP_EOL;
    $hoofstad = readline("Wat is de hoofdstad van $land?") . PHP_EOL;

    $land2[$land] = $hoofstad;
}
echo "De volgende landen en steden zitten in de database:" . PHP_EOL;

foreach ($land2 as $land => $hoofstad) {
    echo $land . " " . $hoofstad . PHP_EOL;
}
?>