<?php
function loginold($username, $password) {
    // Connexion à la base de données avec PDO
    $pdo = new PDO('mysql:host=localhost;dbname=nomdelabasededonnees;charset=utf8', 'utilisateur', 'motdepasse');
    
    // Préparation de la requête pour récupérer les informations de l'utilisateur
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    // Vérification du mot de passe
    if ($user && password_verify($password, $user['password'])) {
        // Si le mot de passe est correct, on retourne les informations de l'utilisateur
        return $user;
    } else {
        // Si le mot de passe est incorrect, on retourne false
        return false;
    }
}

function login() {
$pdo = new PDO('mysql:host=localhost;dbname=projetpdw;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM USER WHERE login = "'.$_POST['login'].'"');
$user = $reponse->fetch();
if($user && password_verify($_POST['password'], $user['password'])) {
    $_SESSION['login'] = $user['login'];
    header('Location: /exercice8');
    exit();
}
}
?>