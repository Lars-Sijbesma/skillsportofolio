<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_POST['voornaam'] || empty($_POST['achternaam']))){
            echo "vul de verplichte velden in";
        }
    ?>
</body>
</html>