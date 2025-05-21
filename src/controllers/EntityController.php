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
    $stmt = $this->db->query("SELECT DATABASE() AS dbname");
    $dbname = $stmt->fetch(PDO::FETCH_ASSOC)['dbname'];
    echo "Base de données active : " . $dbname . "<br>";

    $stmt = $this->db->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo "Tables visibles : <pre>";
    print_r($tables);
    echo "</pre>";

    if (!in_array('clients', $tables)) {
        echo "<b>⚠️ La table 'clients' n'existe pas dans la base " . $dbname . "</b>";
        exit;
    }

    // Requête uniquement si la table existe
    $query = $this->db->query("SELECT * FROM clients");
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);
    include_once __DIR__ . '/../views/clients/list.php'; 
    return $clients;
}
}
