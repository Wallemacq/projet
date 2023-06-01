
<?php
session_start(); // démarrer la session pour vérifier si l'utilisateur est connecté
ob_start();
?>

<!-- Formulaire HTML pour la connexion -->
<form method="POST" action="">
    <label for="login">Login :</label>
    <input type="text" id="login" name="login" required><br><br>
    
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Se connecter">
</form>

<?php
$title = "Se connecter";
$content = ob_get_clean();
include 'template.php';
?>