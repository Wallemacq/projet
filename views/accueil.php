<?php
// echo "Vous êtes sur la page d'accueil vous pouvez vous connecetez/ vous inscrire / ou directement aller dans le shop";

 if(empty($_SESSION['login'])) { ?>
    <a href="login.php">Connexion</a>
    <br>
    <a href="register.php">Créer un compte</a>
<?php } else { ?>
    Bienvenue <?php echo $_SESSION['login']; ?> !
    <br>
    <a href="logout.php">Déconnexion</a>
    <br>
    <a href="listing.php">Liste des utilisateurs</a>
<?php } ?>

<?php  
    $title = '<h1>Accueil</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>