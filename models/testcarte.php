<?php

function getCartes() {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=cours;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT nom_article,prix,description,image FROM article');
    $articles = $reponse->fetchAll();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $articles;
    }

function deleteUser() {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=cours;charset=utf8', 'root', 'password');
    $reponse = $bdd->prepare('DELETE FROM user WHERE id = :id');
    $reponse->execute(array(':id' => $_GET['id']));
}    

?>
