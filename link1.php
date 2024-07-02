<?php
$host = 'localhost';
$db = 'nom_de_ta_base';
$user = 'postgres';
$pass = 'postgres';
$dsn = "mysql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
