<?php

function dbConnect() {
$servername = "localhost";
$database = "classicmodels";
$dns = "mysql:host=$servername;dbname=$database";
$username = "root";
$password = "";

$conn = new PDO($dns, $username, $password);

return $conn;
}

$conn = dbConnect();
$stmt = $conn->prepare("SELECT * FROM customers WHERE Country = 'France'"); 
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();

foreach ($result as $record){
foreach($record as $key => $value) {
echo "$key: $value" . "<br>";
}
}

?>