<?php
class Database {
    private $host = 'mysql';            // OK, nom du service Docker
    private $db_name = 'Gestion1_db'; // Vérifie que ce nom correspond à ta base dans docker-compose/init.sql
    private $username = 'user';         // OK si tu as bien ce user dans MySQL
    private $password = 'password';     // Idem
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset=utf8"; // charset dans le DSN
            $this->conn = new PDO($dsn, $this->username, $this->password);
            // Définir le mode d'erreur sur Exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
            exit; // arrêter le script si pas de connexion
        }
        return $this->conn;
    }
}
?>
