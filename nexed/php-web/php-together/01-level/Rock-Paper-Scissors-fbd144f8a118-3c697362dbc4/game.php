<?php
session_start();


function formulier($speler) 
{
    echo '<form action="" method="get">
          <label for="keuze' . $speler . '"></label>
          <select name="speler' . $speler . '" id="keuze' . $speler . '">
              <option value="steen">Steen</option>
              <option value="papier">Papier</option>
              <option value="schaar">Schaar</option>
          </select>
          <input type="submit" value="Selecteer">
          </form>';
}

// reset knop
if (isset($_GET['reset'])) {
    session_destroy();
    header("Location: game.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Steen Papier Schaar</title>
</head>
<body>
    <h1>Steen Papier Schaar</h1>

    <?php
    // Opslaan keuzes in sessie
    if (isset($_GET['speler1'])) {
        $_SESSION['speler1'] = $_GET['speler1'];
    }
    if (isset($_GET['speler2'])) {
        $_SESSION['speler2'] = $_GET['speler2'];
    }

    // Stap 1: Speler 1 kiest
    if (!isset($_SESSION['speler1'])) {
        echo "<p><strong>Speler 1: ";
        formulier(1);
    } elseif (!isset($_SESSION['speler2'])) {
        // Stap 2: Toon keuze speler 1 + formulier speler 2
        echo "<p><strong>Speler 1: " . ucfirst(htmlspecialchars($_SESSION['speler1'])) . "</strong></p>";
        echo "<p><strong>Speler 2: ";
        formulier(2);
    } else {
        // Stap 3: Toon beide keuzes
        echo "<p><strong>Speler 1: " . ucfirst(htmlspecialchars($_SESSION['speler1'])) . "</strong></p>";
        echo "<p><strong>Speler 2: " . ucfirst(htmlspecialchars($_SESSION['speler2'])) . "</strong></p>";


        // Reset-knop om opnieuw te spelen
        echo '<form method="get">
                 <button type="submit" name="reset">Reset Game</button>
              </form>';
    }
    
    ?>
    
</body>
</html>
