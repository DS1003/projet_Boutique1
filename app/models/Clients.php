<?php
namespace App\Models;

use Core\Model;
use PDO;

class Clients {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllClients() {
        $stmt = $this->db->prepare('SELECT * FROM clients');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addClient($username, $email, $password) {
        $stmt = $this->db->prepare('INSERT INTO clients (username, email, password) VALUES (?, ?, ?)');
        return $stmt->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT)]);
    }
}