<?php

if ($argc < 2) {
    echo "geen wisselgeld";
    exit(0);
}

$bedrag = intval($argv[1]);

$munten = $bedrag;

echo "$munten x 1 euro" . PHP_EOL;
?>