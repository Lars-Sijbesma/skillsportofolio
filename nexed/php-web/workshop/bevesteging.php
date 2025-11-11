<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bevestiging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Bevestiging</h1>
    <p>Je hebt het formulier succesvol verzonden. Hier zijn je gegevens:</p>

    <?php

    $voornaam = htmlspecialchars($_POST['voornaam']);
    $achternaam = htmlspecialchars($_POST['achternaam']);
    $email = htmlspecialchars($_POST['email']);
    ?>



    <ul class="list-group">
        <li class="list-group-item"><strong>Voornaam:</strong> <?= $voornaam ?></li>
        <li class="list-group-item"><strong>Achternaam:</strong> <?= $achternaam ?></li>
        <li class="list-group-item"><strong>E-mailadres:</strong> <?= $email ?></li>
    </ul>

    <a href="contact.php" class="btn btn-secondary mt-3">Terug naar contactformulier</a>
</div>

</body>
</html>
