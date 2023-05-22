<?php
/**
 * Summary of ajoutarticles
 * @return array
 */
function ajoutarticles() {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=projetpdw;charset=utf8', 'root', '');
    $reponse = $bdd->query("INSERT INTO articles (nom_article, prix, description, id_categorie) VALUES (:nom_article, :prix, :description, :id_categorie)");
    $articles = $reponse->fetchAll();
    $reponse->closeCursor(); // Termine le traitement de la requête
    return $articles;
    }

?>
