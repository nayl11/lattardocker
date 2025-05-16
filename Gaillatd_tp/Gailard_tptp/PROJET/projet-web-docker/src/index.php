<?php
require_once __DIR__ . '/controllers/EntityController.php';
require_once __DIR__ . '/controllers/RelatedEntityController.php';

// Création des contrôleurs
$entityController = new EntityController();
$relatedEntityController = new RelatedEntityController();

// Récupération de la liste des clients et rendez-vous
$clients = $entityController->getAllClients();
$appointments = $relatedEntityController->getAllAppointments();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Rendez-vous</title>
</head>
<body>
    <h1>Bienvenue dans le gestionnaire des rendez-vous</h1>
    
    <h2>Liste des clients</h2>
    <ul>
        <?php foreach ($clients as $client): ?>
            <li><?php echo htmlspecialchars($client['nom']); ?> - <?php echo htmlspecialchars($client['email']); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Liste des rendez-vous</h2>
    <ul>
        <?php foreach ($appointments as $appointment): ?>
            <li>Client ID: <?php echo htmlspecialchars($appointment['client_id']); ?>, Service: <?php echo htmlspecialchars($appointment['service']); ?>, Date: <?php echo htmlspecialchars($appointment['date']); ?> à <?php echo htmlspecialchars($appointment['heure']); ?></li>
        <?php endforeach; ?>
    </ul>

    <h3><a href="addClient.php">Ajouter un client</a></h3>
    <h3><a href="addAppointment.php">Ajouter un rendez-vous</a></h3>
</body>
</html>
