<?php
ob_start();
?>

<form method="post" action="/add-article">
        <label for="nom_article">Nom de l'article:</label><br>
        <input type="text" id="nom_article" name="nom_article" required><br>
        <label for="prix">Prix:</label><br>
        <input type="text" id="prix" name="prix" pattern="[^a-zA-Z]+" required><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <label for="id_categorie">Catégorie:</label><br>
        <select id="id_categorie" name="id_categorie">
            <option value="1">Catégorie 1 (décoration)</option>
            <option value="2">Catégorie 2 (accessoire)</option>
        </select><br><br>
        <input type="submit" value="Ajouter">
    </form>

<?php  
    $title = "<h1>Ajout d'un article</h1>" ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>