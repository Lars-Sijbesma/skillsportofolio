<?php
// Start de sessie (altijd boven HTML!)
session_start();

// Kijk of er al een sessie-variabele 'page_counter' bestaat
if (isset($_SESSION['page_counter'])) {
    // Bestaat → waarde +1 verhogen
    $_SESSION['page_counter']++;
} else {
    // Bestaat nog niet → beginnen bij 1
    $_SESSION['page_counter'] = 1;
}

// Teller uit sessie halen
$count = $_SESSION['page_counter'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bezoekersteller met Sessie</title>
</head>
<body>
<h2>Deze pagina is <strong><?php echo $count; ?></strong> keer bezocht tijdens deze sessie.</h2>
<p>Ververs de pagina om de teller te verhogen.</p>
</body>
</html>
