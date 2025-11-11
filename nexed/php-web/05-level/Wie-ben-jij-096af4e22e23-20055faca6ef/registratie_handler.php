<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["Username"]);
    $email = htmlspecialchars($_POST["Email"]);
    $age = htmlspecialchars($_POST["Age"]);
} else {
    header("location: index.php");
    exit();
}

?>

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

<h1>Forum Registratie </h1>
<p>Username: <?= $username ?> <br></p>
<p>Email: <?= $email ?> <br></p>
<p>Age: <?= $age ?> <br></p>
</body>
</html>
