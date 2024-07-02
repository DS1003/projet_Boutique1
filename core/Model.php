namespace Core;

class Model {
    protected $pdo;

    public function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");
    }
}
