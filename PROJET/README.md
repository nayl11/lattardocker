# Application Web Docker PHP/MySQL

Cette application démontre l'utilisation de Docker pour déployer une architecture web complète avec PHP et MySQL.

## Structure du projet

- `docker-compose.yml`: Configuration des services Docker
- `docker/`: Fichiers de configuration Docker
  - `php/`: Configuration du conteneur PHP/Apache
  - `mysql/`: Configuration et initialisation MySQL
- `src/`: Code source de l'application PHP (architecture MVC)
  - `config/`: Configuration de l'application
  - `controllers/`: Contrôleurs MVC
  - `models/`: Modèles de données
  - `views/`: Templates d'affichage

## Prérequis

- Docker
- Docker Compose

## Installation

1. Clonez ce dépôt
2. Lancez les conteneurs avec `docker-compose up -d`
3. Accédez à l'application via `http://localhost:8080`

## Fonctionnalités

- Gestion des clients (liste, ajout, modification, suppression)
- Gestion des commandes (liste, ajout, modification, suppression)
- Relation entre clients et commandes

## Technologies utilisées

- Docker & Docker Compose
- PHP 8.1
- Apache
- MySQL 8.0
- Bootstrap 5
# Projet_docker




# Gestion des Rendez-vous - Projet Docker

## Description
Ce projet permet de gérer les rendez-vous pour une petite entreprise de services tels que des coiffeurs, réparateurs ou consultants. Il utilise Docker pour déployer une architecture multi-conteneurs, avec un serveur PHP, une base de données MySQL, et un système MVC pour gérer les interactions entre les clients et leurs rendez-vous.

## Fonctionnalités
- **Gestion des clients** : Ajout et affichage des informations sur les clients.
- **Gestion des rendez-vous** : Ajout et affichage des rendez-vous avec les détails du client, du service, de la date et de l'heure.
- **Interface utilisateur** : Formulaires HTML pour ajouter et afficher des clients et des rendez-vous.

## Installation
1. Clonez ce dépôt sur votre machine locale :
   ```bash
   git clone <url-du-repository>


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


projet/
├── docker-compose.yml        # Fichier de configuration Docker Compose
├── src/
│   ├── config/
│   │   └── database.php      # Paramètres de connexion à la base de données
│   ├── controllers/
│   │   ├── EntityController.php   # Logique pour gérer les clients
│   │   └── RelatedEntityController.php   # Logique pour gérer les rendez-vous
──│css/
│   └── styles.css            # Fichier CSS pour la mise en forme
│   ├          
│   ├── models/
│   │   ├── Entity.php        # Modèle pour les clients
│   │   └── RelatedEntity.php # Modèle pour les rendez-vous
│   ├── views/
│   │   ├── appoinment/
│   │   │   ├── form.php      # Formulaire pour ajouter un client
│   │   │   └── list.php      # Liste des clients
│   │   └── clients/
│   │       ├── form.php      # Formulaire pour ajouter un rendez-vous
│   │       └── list.php      # Liste des rendez-vous
│   └── index.php             # Page d'accueil
├── docker-compose.yml
│            
└── README.md                 # Documentation du projet
