<?php

if (isset($_POST["Username"])) {
    echo " Welcome," . $_POST["Username"] . " ";
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

<form method="post" action="registratie_handler.php">
    <label for="Username"> Username </label>
    <input type="text" id="Username" name="Username" placeholder="Username"><br>
    <label for="Email"> Email </label>
    <input type="Email" id="Email" name="Email" placeholder="Email"><br>
    <label for="Age"> Age </label>
    <input type="text" id="Age" name="Age" placeholder="Age"><br>
    <input type="submit" value="Submit">

</form>

</body>
</html>