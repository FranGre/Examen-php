<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "batoiBook";

try {
    // Create connection
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Allows PDO throws exceptions 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}
//Iniciamos la sesión por el tema de mostrar los errores
if (!isset($_SESSION)) {
    session_start();
}