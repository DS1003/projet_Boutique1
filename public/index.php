<?php
require_once '../vendor/autoload.php';

use Core\App;

$app = new App();

require 'config/config.php';
require 'core/App.php';
require 'core/Controller.php';
require 'models/Clients.php';
require 'controllers/ClientsController.php';

$db = getDbConnection();
$clientModel = new Clients($db);
$clientController = new ClientsController($clientModel);

// Exemple pour afficher tous les clients
$clientController->index();

// Exemple pour ajouter un client
// $clientController->create('john_doe', 'john@example.com', 'password123');
