```<?php

function dbConnect() {
    $servername = "localhost";
    $database = "netland";
    $dns = "mysql:host=$servername;dbname=$database";
    $username = "bit_academy";
    $password = "bit_academy";

    try {
        $conn = new PDO($dns, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Verbinding mislukt: " . $e->getMessage());
    }
}

$conn = dbConnect();

echo "<h1>Netland Beheerpagina</h1>";

/* --- SERIES --- */
echo "<h2>Series</h2>";

$stmt = $conn->query("SELECT title, rating FROM series");
$series = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($series as $serie) {
    echo "Titel: " . htmlspecialchars($serie['title']) . " — Rating: " . htmlspecialchars($serie['rating']) . "<br>";
}

/* --- MOVIES --- */
echo "<h2>Films</h2>";

$stmt = $conn->query("SELECT title, length_in_minutes FROM movies");
$movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($movies as $movie) {
    echo "Titel: " . htmlspecialchars($movie['title']) . " — Duur: " . htmlspecialchars($movie['length_in_minutes']) . " minuten<br>";
}



?>
```