<?php
class ClientsController {
    private $clientModel;

    public function __construct($clientModel) {
        $this->clientModel = $clientModel;
    }

    public function index() {
        $clients = $this->clientModel->getAllClients();
        require 'views/clients/index.php';
    }

    public function create($username, $email, $password) {
        if ($this->clientModel->addClient($username, $email, $password)) {
            echo "Client added successfully!";
        } else {
            echo "Failed to add client.";
        }
    }
}
