<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tafel Oefenen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="mb-4 text-center">Tafel Oefenen</h1>

        <?php
        $error = "";
        $resultaat = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $getal = $_POST["getal"];

            // Validatie
            if (empty($getal)) {
                $error = "Vul een getal in.";
            } elseif (!is_numeric($getal)) {
                $error = "Voer alleen cijfers in.";
            } else {
                // Geldig getal → bereken tafel
                $getal = (int)$getal;
                $resultaat .= "<h3 class='text-center'>De tafel van $getal:</h3>";
                $resultaat .= "<ul class='list-group mt-3'>";
                for ($i = 1; $i <= 10; $i++) {
                    $product = $getal * $i;
                    $resultaat .= "<li class='list-group-item'>$getal × $i = $product</li>";
                }
                $resultaat .= "</ul>";
            }
        }
        ?>

        <!-- Formulier -->
        <form method="POST" action="" class="mb-4">
            <div class="mb-3">
                <label for="getal" class="form-label">Welk getal wil je oefenen?</label>
                <input type="text" name="getal" id="getal" class="form-control" placeholder="Bijv. 7"
                       value="<?= isset($_POST['getal']) ? htmlspecialchars($_POST['getal']) : '' ?>">
            </div>
            <button type="submit" class="btn btn-primary w-100">Bereken tafel</button>
        </form>

        <!-- Foutmelding -->
        <?php if ($error): ?>
            <div class="alert alert-danger text-center"><?= $error ?></div>
        <?php endif; ?>

        <!-- Resultaat -->
        <?php if ($resultaat): ?>
            <div class="mt-4"><?= $resultaat ?></div>
        <?php endif; ?>

    </div>
</div>
</body>
</html>
