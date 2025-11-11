<?php

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header('Location: success.php');
        exit;
    } else {

        $error = 'Ongeldig e‑mailadres. Probeer het opnieuw.';
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Aanmelden nieuwsbrief</title>
</head>
<body>
<p>Voer een email in</p>

<?php if ($error): ?>
    <p style="color:#262020;"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="email">Meld je aan voor de nieuwsbrief</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Aanmelden</button>
</form>
</body>
</html>
