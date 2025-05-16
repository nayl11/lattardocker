<?php
require_once __DIR__ . '/../../controllers/EntityController.php';

$entityController = new EntityController();
$clients = $entityController->getAllClients();
?>

<h2>Liste des Clients</h2>
<ul>
    <?php foreach ($clients as $client): ?>
        <li><?php echo htmlspecialchars($client['nom']); ?> - <?php echo htmlspecialchars($client['email']); ?></li>
    <?php endforeach; ?>
</ul>

<a href="form.php">Ajouter un client</a>
<a href="../../index.php">Retour à l'accueil</a>
