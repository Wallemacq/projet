<?php
function getarticles() {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=projetpdw;charset=utf8', 'root', '');
    $reponse = $bdd->query('SELECT nom_article,prix,description,image FROM article');
    $articles = $reponse->fetchAll();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $articles;
    }

?>

