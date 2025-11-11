<?php

function dbConnect()
{
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


$stmt = $conn->query("SELECT VERSION() AS version");


$result = $stmt->fetch(PDO::FETCH_ASSOC);


echo "De MySQL versie is: " . $result['version'];

?>
