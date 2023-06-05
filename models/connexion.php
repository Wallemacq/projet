<?php

function connecterUtilisateur($login, $motDePasse) {
    // Remplacez ces valeurs par les informations de connexion à votre base de données
    $serveur = "localhost";
    $utilisateurDB = "votre_utilisateur";
    $motDePasseDB = "votre_mot_de_passe";
    $nomDB = "votre_base_de_donnees";

    try {
        // Création de la connexion PDO à la base de données
        $connexion = new PDO("mysql:host=$serveur;dbname=$nomDB", $utilisateurDB, $motDePasseDB);

        // Préparation de la requête SQL avec des paramètres pour éviter les attaques d'injection SQL
        $requete = "SELECT * FROM utilisateurs WHERE login = :login AND mot_de_passe = :motDePasse";
        $statement = $connexion->prepare($requete);
        $statement->bindParam(':login', $login);
        $statement->bindParam(':motDePasse', $motDePasse);

        // Exécution de la requête
        $statement->execute();


    }
}