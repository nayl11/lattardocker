<?php
require_once __DIR__ . '/controllers/EntityController.php';
require_once __DIR__ . '/controllers/RelatedEntityController.php';

$entityController = new EntityController();
$relatedEntityController = new RelatedEntityController();

$clients = $entityController->getAllClients();
$appointments = $relatedEntityController->getAllAppointments();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestion des Rendez-vous</title>
    <link rel="stylesheet" href="../css/styles.css" />
</head>
<body>
    <h1>Bienvenue dans le gestionnaire des rendez-vous</h1>

    <h2>Liste des clients</h2>
    <ul>
        <?php foreach ($clients as $client): ?>
            <li><?= htmlspecialchars($client['nom']) ?> - <?= htmlspecialchars($client['email']) ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Liste des rendez-vous</h2>
    <ul>
        <?php foreach ($appointments as $appointment): ?>
            <li>
                Client ID : <?= htmlspecialchars($appointment['client_id']) ?>,
                Service : <?= htmlspecialchars($appointment['service']) ?>,
                Date : <?= htmlspecialchars($appointment['date']) ?> à <?= htmlspecialchars($appointment['heure']) ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3><a href="views/clients/form.php">Ajouter un client</a></h3>
    <h3><a href="views/appoinment/form.php">Ajouter un rendez-vous</a></h3>
</body>
</html>
