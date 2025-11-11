<?php
$result = "";
$error = "";

// Kijken of formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    // Checken of inputs getallen zijn
    if ($num1 === "" || $num2 === "") {
        $error = "Beide velden moeten ingevuld worden!";
    } elseif (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Voer alleen getallen in!";
    } else {
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        // Berekening uitvoeren
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 == 0) {
                    $error = "Delen door 0 is niet toegestaan!";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            case "%":
                if ($num2 == 0) {
                    $error = "Modulo door 0 is niet toegestaan!";
                } else {
                    $result = fmod($num1, $num2); // werkt ook met floats
                }
                break;
            default:
                $error = "Ongeldige operator!";
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
<h1>Calculator</h1>

<form method="post">
    <input type="text" name="num1" placeholder="Getal 1"
           value="<?= isset($_POST['num1']) ? htmlspecialchars($_POST['num1']) : '' ?>">
    <select name="operator">
        <option value="+" <?= (isset($_POST['operator']) && $_POST['operator'] == "+") ? "selected" : "" ?>>+</option>
        <option value="-" <?= (isset($_POST['operator']) && $_POST['operator'] == "-") ? "selected" : "" ?>>-</option>
        <option value="*" <?= (isset($_POST['operator']) && $_POST['operator'] == "*") ? "selected" : "" ?>>*</option>
        <option value="/" <?= (isset($_POST['operator']) && $_POST['operator'] == "/") ? "selected" : "" ?>>/</option>
        <option value="%" <?= (isset($_POST['operator']) && $_POST['operator'] == "%") ? "selected" : "" ?>>%</option>
    </select>
    <input type="text" name="num2" placeholder="Getal 2"
           value="<?= isset($_POST['num2']) ? htmlspecialchars($_POST['num2']) : '' ?>">
    <input type="submit" value="Bereken">
</form>

<?php if ($error) : ?>
    <p style="color:red;"><?= $error ?></p>
<?php elseif ($result !== "") : ?>
    <p><strong>Resultaat:</strong> <?= $result ?></p>
<?php endif; ?>
</body>
</html>
