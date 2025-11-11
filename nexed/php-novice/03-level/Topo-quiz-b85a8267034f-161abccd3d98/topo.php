<?php

$vragen = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "de Verenigde Staten" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "Londen"
];

$score = 0;

echo "Welkom bij de hoofdstedenquiz!\n\n";


foreach ($vragen as $land => $hoofdstad) {
    echo "Wat is de hoofdstad van $land? ";
    $antwoord = trim(fgets(STDIN));

    if (strcasecmp($antwoord, $hoofdstad) === 0) {
        echo "Correct!" . PHP_EOL;
        $score++;
    } else {
        echo "Helaas, $antwoord is niet de hoofdstad van $land. Het correcte antwoord is $hoofdstad" . PHP_EOL;
    }
}

echo "Je hebt $score van de " . sizeof($vragen) . " goed geraden!" . PHP_EOL;
