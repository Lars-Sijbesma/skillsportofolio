

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="tafel">Tafel:</label><br>
    <input type="number" id="tafel" name="tafel"><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST["tafel"])) {
    $getal = (int)$_POST["tafel"];
    echo "<h2>Tafel van $getal:</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $resultaat = $getal * $i;
        echo "<li>$getal × $i = $resultaat</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
