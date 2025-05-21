<?php

class Database {
    private $host = 'mysql'; // DOCKER : utiliser le nom du service défini dans docker-compose.yml
    private $db_name = 'Gestion1_db';
    private $username = 'user';
    private $password = 'password';
    private $charset = 'utf8mb4';

    public $conn;

    public function getConnection() {
        $this->conn = null;

        $dsn = "mysql:host=mysql;port=3306;dbname=Gestion1_db";


        try {
            $this->conn = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }

        return $this->conn;
    }
}
