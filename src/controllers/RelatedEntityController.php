<?php
require_once __DIR__ . '/../models/RelatedEntity.php';
require_once __DIR__ . '/../config/database.php';

class RelatedEntityController {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllAppointments() {
        $query = $this->db->query("SELECT * FROM appointments");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addAppointment($client_id, $date, $heure, $service, $commentaire) {
        $stmt = $this->db->prepare("INSERT INTO appointments (client_id, date, heure, service, commentaire) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$client_id, $date, $heure, $service, $commentaire]);
    }
}
