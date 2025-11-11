<?php
// Kijk of er al een cookie is met de naam 'page_counter'
if (isset($_COOKIE['page_counter'])) {
    // Cookie bestaat → waarde +1 verhogen
    $count = (int)$_COOKIE['page_counter'] + 1;
} else {
    // Cookie bestaat nog niet → beginnen bij 1
    $count = 1;
}

// Zet of vernieuw de cookie, geldig voor 30 dagen (tijd in seconden)
setcookie('page_counter', $count, time() + (30 * 24 * 60 * 60));

// Toon de tellerwaarde
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bezoekersteller met Cookie</title>
</head>
<body>
<h2>Deze pagina is <strong><?php echo $count; ?></strong> keer bezocht door jou.</h2>
<p>Ververs de pagina om de teller te verhogen.</p>
</body>
</html>
