-- Création de la table clients
CREATE TABLE IF NOT EXISTS clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    email VARCHAR(100),
    telephone VARCHAR(20)
);

-- Création de la table appointments
CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT,
    date DATE,
    heure TIME,
    service VARCHAR(100),
    commentaire TEXT,
    FOREIGN KEY (client_id) REFERENCES clients(id)
);

-- Insertion de données clients
INSERT INTO clients (nom, email, telephone) VALUES
('Dupont', 'jean.dupont@email.com', '0123456789'),
('Martin', 'sophie.martin@email.com', '0987654321'),
('Dubois', 'pierre.dubois@email.com', '0678123456'),
('Lefebvre', 'marie.lefebvre@email.com', '0654321879');

-- Insertion de données rendez-vous
INSERT INTO appointments (client_id, date, heure, service, commentaire) VALUES
(1, '2023-05-10', '14:30:00', 'Consultation', 'confirmé'),
(2, '2023-05-12', '09:15:00', 'Suivi', 'confirmé'),
(1, '2023-05-15', '16:45:00', 'Diagnostic', 'confirmé'),
(3, '2023-05-18', '11:20:00', 'Traitement', 'annulé'),
(4, '2023-05-20', '13:10:00', 'Consultation', 'annulé');
