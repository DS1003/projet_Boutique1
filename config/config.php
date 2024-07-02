<?php
// config.php

define('DB_HOST', '172.18.0.2');
define('DB_PORT', '5432');
define('DB_NAME', 'gestionBq');
define('DB_USER', 'postgres');
define('DB_PASS', 'seydiop@1723');

function getDbConnection() {
    $dsn = 'pgsql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
}