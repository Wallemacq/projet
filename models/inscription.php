<?php function login() {
$bdd = new PDO('mysql:host=127.0.0.1;dbname=cours;charset=utf8', 'root', '');
    $reponse = $bdd->prepare('SELECT * FROM user WHERE login = :login');
    $reponse->execute(array(':login' => $_POST['login']));
    $user = $reponse->fetch();
    if ($user and password_verify($_POST['password'], $user['password'])) {
        session_start();
        $_SESSION['login'] = $user['login'];
        header('Location: accueil.php');
        exit();
    }
}