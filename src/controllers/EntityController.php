<?php
require_once __DIR__ . '/../models/Entity.php';
require_once __DIR__ . '/../config/database.php';

class EntityController {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllClients() {
        $query = $this->db->query("SELECT * FROM clients");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addClient($nom, $email, $telephone) {
        $stmt = $this->db->prepare("INSERT INTO clients (nom, email, telephone) VALUES (?, ?, ?)");
        return $stmt->execute([$nom, $email, $telephone]);
    }
}
