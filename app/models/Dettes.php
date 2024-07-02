<?php
namespace App\Models;

use Core\Model;

class Dettes extends Model {
    public function getUsers() {
        $stmt = $this->pdo->prepare("SELECT * FROM dettes");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
