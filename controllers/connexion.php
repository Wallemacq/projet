<?php
include 'models/connexion.php';
session_start(); //si session_start n'est pas appelé par le routeur ou autre
if(isset($_SESSION['login']))
{
    header('Location: /');
    exit();
}
elseif(isset($_POST['login']) && isset($_POST['motDePasse']))
{
        $login = $_POST['login'];
        $password = $_POST['motDePasse'];
        $connexion = connecterUtilisateur($login, $password);
        if($connexion == true)
        {
            $_SESSION['login'] = $login;
            header('Location: /testcarte');
            exit();
        }
        else
        {
            // Erreur de connexion login/pass incorrect
        }
}
include 'views/connexion.php';
?>
 