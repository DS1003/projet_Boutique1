<?php
namespace Core;

class Model {
    protected $pdo;

    public function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost;dbname=mydatabase", "mouhaleecr7", "seydiop@1723");
    }
}

