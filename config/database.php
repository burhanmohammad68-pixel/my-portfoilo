<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$dbname = "portfolio_db";
$username = "root";
$password = "";

try {

    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "";

} catch (PDOException $e) {

    die("Database Error: " . $e->getMessage());

}

?>