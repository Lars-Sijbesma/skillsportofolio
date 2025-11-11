<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-sm bg-primary mt-2">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                </li>
            </ul>
        </div>

    </nav>


    <header class="row mt-2">
        <div class="col-md-12 bg-primary">
            <p class="h1">Hello, World</p>
        </div>
    </header>



    <main>
      <div class="column"></div>
        <form action="bevesteging.php" method="post">
        <label for="voornaam" >Voornaam</label>
        <input type="text"  id="voornaam" name="voornaam" required>
        <label for="achternaam" >Achternaam</label>
        <input type="text"  id="achternaam" name="achternaam" required>
        <label for="email" >E-mailadres</label>
        <input type="email"  id="email" name="email" required>
        <button type="submit">Verzenden</button>
        </form>
    </main>

</div>
</body>
</html>