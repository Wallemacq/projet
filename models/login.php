<?php
// Configuration de la base de données
$host = 'localhost';
$dbName = 'projetpdw';
$username = 'root';
$password = '';

// Fonction de connexion à votre compte
function seConnecter($login, $password) {
    global $host, $dbName, $username, $password;
    
    try {
        // Connexion à la base de données avec PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
        
        // Préparation de la requête SQL pour vérifier les identifiants
        $query = $pdo->prepare("SELECT COUNT(*) AS count FROM users WHERE login = :login AND password = :password");
        $query->bindParam(':login', $login);
        $query->bindParam(':password', $password);
        
        // Exécution de la requête
        $query->execute();
        
        // Récupération du résultat
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($result['count'] > 0) {
            return true; // Connexion réussie
        } else {
            return false; // Identifiants incorrects
        }
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
        return false; // Erreur de connexion à la base de données
    }
}

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    
    // Appel de la fonction de connexion
    if (seConnecter($login, $password)) {
        // Redirection vers la page accueil.php
        header("Location: accueil.php");
        exit; // Terminer le script après la redirection
    } else {
        echo "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>