<?php

$leeftijd = readline("Voer je leeftijd in: ");


$huidigJaar = date("Y");
$geboortejaar = $huidigJaar - $leeftijd;


echo "Je bent waarschijnlijk geboren in: " . $geboortejaar;
