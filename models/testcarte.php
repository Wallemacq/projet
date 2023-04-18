<?php
function getAllArticles() {
    $host = "localhost";
    $dbname = "projetpdw";
    $username = "root";
    $password = "";

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES => false,
        );
        $pdo = new PDO($dsn, $username, $password, $options);
        
        $stmt = $pdo->query("SELECT nom_article, prix, description, image FROM article");
        $articles = $stmt->fetchAll();
        return $articles;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>