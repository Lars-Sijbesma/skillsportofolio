<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="welkom.php" method="POST">
        <label for="voornaam" class="form-label">Voornaam</label>
        <input type="text" id="voornaam" name="voornaam"required><br>
        <label for="achternaam" class="form-label">Achternaam</label>
        <input type="text" id="achternaam" name="achternaam" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>