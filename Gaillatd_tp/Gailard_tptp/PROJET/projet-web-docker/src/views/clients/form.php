<?php
require_once __DIR__ . '/../../controllers/EntityController.php';

$entityController = new EntityController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    if ($entityController->addClient($nom, $email, $telephone)) {
        echo "Client ajouté avec succès!";
    } else {
        echo "Erreur lors de l'ajout du client.";
    }
}
?>

<form method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telephone">Téléphone :</label>
    <input type="text" id="telephone" name="telephone" required><br><br>

    <button type="submit">Ajouter Client</button>
</form>

<a href="../../index.php">Retour à l'accueil</a>
