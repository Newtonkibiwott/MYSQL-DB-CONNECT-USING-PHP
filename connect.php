<?php

// Using PDO
$db_name_pdo = "mysql:host=localhost;dbname=YOUR_DB_NAME";
$username_pdo = "YOUR_USERNAME";
$password_pdo = "YOUR_PASSWORD";

$conn_pdo = new PDO($db_name_pdo, $username_pdo, $password_pdo);

// Using MySQLi
$servername_mysqli = "localhost";
$username_mysqli = "YOUR_USERNAME";
$password_mysqli = "YOUR_PASSWORD";
$dbname_mysqli = "YOUR_DB_NAME";

$conn_mysqli = new mysqli($servername_mysqli, $username_mysqli, $password_mysqli, $dbname_mysqli);

// Check connection
if ($conn_mysqli->connect_error) {
    die("Connection failed: " . $conn_mysqli->connect_error);
}

// The rest of your code goes here

?>
