
<?php
session_start();
ob_start(); // démarrer la session pour vérifier si l'utilisateur est connecté
?>

<form action=connexion method="post">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required>
        <br><br>
        <label for="motDePasse">Mot de passe :</label>
        <input type="password" id="motDePasse" name="motDePasse" required>
        <br><br>
        <input type="submit" value="Se connecter">
    </form>
    


<?php
$title = "se connecter";
$content = ob_get_clean();
include 'template.php';
?>