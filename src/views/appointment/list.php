<?php
require_once __DIR__ . '/../../controllers/RelatedEntityController.php';

$relatedEntityController = new RelatedEntityController();
$appointment = $relatedEntityController->getAllAppointment();
?>

<h2>Liste des Rendez-vous</h2>
<ul>
    <?php foreach ($appointments as $appointment): ?>
        <li>Client ID: <?php echo htmlspecialchars($appointment['client_id']); ?>, Service: <?php echo htmlspecialchars($appointment['service']); ?>, Date: <?php echo htmlspecialchars($appointment['date']); ?> à <?php echo htmlspecialchars($appointment['heure']); ?></li>
    <?php endforeach; ?>
</ul>

<a href="form.php">Ajouter un rendez-vous</a>
<a href="../../index.php">Retour à l'accueil</a>
