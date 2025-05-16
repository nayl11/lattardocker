<?php
require_once __DIR__ . '/../../controllers/RelatedEntityController.php';

$relatedEntityController = new RelatedEntityController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $client_id = $_POST['client_id'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $service = $_POST['service'];
    $commentaire = $_POST['commentaire'];

    if ($relatedEntityController->addAppointment($client_id, $date, $heure, $service, $commentaire)) {
        echo "Rendez-vous ajouté avec succès!";
    } else {
        echo "Erreur lors de l'ajout du rendez-vous.";
    }
}
?>

<form method="POST">
    <label for="client_id">Client ID :</label>
    <input type="number" id="client_id" name="client_id" required><br><br>

    <label for="date">Date :</label>
    <input type="date" id="date" name="date" required><br><br>

    <label for="heure">Heure :</label>
    <input type="time" id="heure" name="heure" required><br><br>

    <label for="service">Service :</label>
    <input type="text" id="service" name="service" required><br><br>

    <label for="commentaire">Commentaire :</label>
    <textarea id="commentaire" name="commentaire"></textarea><br><br>

    <button type="submit">Ajouter Rendez-vous</button>
</form>

<a href="../../index.php">Retour à l'accueil</a>
