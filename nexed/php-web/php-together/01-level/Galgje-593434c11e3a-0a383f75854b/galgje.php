<?php
session_start();
// Functie om een willekeurig woord te kiezen
function RandomWord()
{
    $words = ['software', 'developer', 'programming', 'interface', 'application','wordpress'];
    return $words[array_rand($words)];
}

// functie om het huidige woord weer te geven met geraden letters
function DisplayWord()
{
    if (!isset($_SESSION["geraden_letter"])) {
        return;
    }
    $display = '';
    $word = $_SESSION['word'];
    foreach (str_split($word) as $letter) {
        if (in_array($letter, $_SESSION['geraden_letter'])) {
            $display .= $letter . ' ';
        } else {
            $display .= '_ ';
        }
    }
    return trim($display);
}

// Functie alphabet knoppen weergeven
function Alphabet()
{
    $letters = range('A', 'Z');
    foreach ($letters as $letter) {
        $lowerLetter = strtolower($letter);
        if (isset($_SESSION['geraden_letter']) && in_array($lowerLetter, $_SESSION['geraden_letter'])) {
            echo"<button disabled>$letter</button> ";
        } else {
            echo"<form method='post' class='alphabet'>
                <input type='hidden' class='alphabet' name='letter' value='$lowerLetter'>
                <button type='submit'>$letter</button>
            </form> ";
        }
    }
}

// Reset knop
if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: galgje.php");
    exit();
}

// Woord kiezen
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['choice'])) {
    $_SESSION['choice'] = $_POST['choice'];
    if ($_POST['choice'] === 'eigen' && !empty($_POST['eigen_word'])) {
        $_SESSION['word'] = strtolower($_POST['eigen_word']);
    } elseif ($_POST['choice'] === 'random') {
        $_SESSION['word'] = RandomWord();
    }
    $_SESSION['geraden_letter'] = [];
    $_SESSION['attempts'] = 6; // Aantal pogingen
}

// Letter raden
if (isset($_POST['letter']) && isset($_SESSION['word'])) {
    $letter = strtolower($_POST['letter']);
    if (!in_array($letter, $_SESSION['geraden_letter'])) {
        $_SESSION['geraden_letter'][] = $letter;
        if (strpos($_SESSION['word'], $letter) === false) {
            $_SESSION['attempts']--;
            if ($_SESSION["attempts"] == 0) {
                $_SESSION["current_hangman"] = "img/hangman_finish.png";
            } else {
                $_SESSION["current_hangman"] = "img/hangman_" . (6 - $_SESSION["attempts"]) . ".png";
            }
        }
    }
}


    
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galgje</title>
    <style>
        body {
            background-color: #99a;
            text-align: center;
        }
        .alphabet {
            display: inline;
            margin: 2px;
        }
        
    </style>
</head>
<body>
    <h1>Galgje</h1>
    <?php if (!isset($_SESSION['choice'])) :?>
        <p>Welcome to the Hangman game!</p>
        <form method="post">
            <button type="submit" name="choice" value="eigen">Choose your own word</button>
            <button type="submit" name="choice" value="random">Use a random word</button>
        </form>

    <?php elseif ($_SESSION["choice"] === "eigen" && !isset($_SESSION['word'])) :?>
        <p>Please enter your word</p>
        <form method="post">
            <input type="password" name="eigen_word" placeholder="Geheim woord" required>
            <button type="submit" name="choice" value="eigen">Play with this word</button>
        </form>
        <form method="post">
            <button type="submit" name="reset">Back</button>
        </form>
    
    <?php elseif (isset($_SESSION['word'])) :?>
        <p>Word: <?php echo DisplayWord()?></p>
        <?php
        if (isset($_SESSION["current_hangman"])) {
            echo "<img src='" . $_SESSION['current_hangman'] . "'/>";
        }
        ?>
        <p>Attempts left: <?php echo $_SESSION['attempts']?></p>
        <?php
        if ($_SESSION['attempts'] <= 0) {
            echo "<p>💀 You lost! The word was '<strong>{$_SESSION['word']}</strong>'.</p>";
        } elseif (!str_contains(DisplayWord(), '_')) {
            echo "<p>🎉 You won! The word was '<strong>{$_SESSION['word']}</strong>'.</p>";
        } else {
            Alphabet();
        }
        ?>
        <form method="post">
            <button type="submit" name="reset">Reset Game</button>
        </form>
    
    <?php endif; ?>


</body>
</html>