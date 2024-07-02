namespace App\Models;

use Core\Model;

class User extends Model {
    public function getUsers() {
        $stmt = $this->pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
