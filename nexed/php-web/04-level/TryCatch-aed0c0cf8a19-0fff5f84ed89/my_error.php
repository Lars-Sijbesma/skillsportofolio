<?php

function countDown($getal)
{
    if ($getal < 0 || $getal > 10) {
        throw new exception("getal $getal is out of range");
    }
    return true;
}

try {
    countDown(15);
    echo 'If you see this your number is either to high or too low, keep it within 1 and 10' . PHP_EOL;
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage() . PHP_EOL;
}

?>