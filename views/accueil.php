<?php
// echo "Vous êtes sur la page d'accueil vous pouvez vous connecetez/ vous inscrire / ou directement aller dans le shop";

 if(empty($_SESSION['login'])) { ?>
 <a href="connexion">
  <img src="XCSS\images\Aconnexion.png" alt="connexion" />
  
</a>
    <br><br>
    <a href="inscription" >
   <img src="XCSS\images\Ainscription.png" alt="Inscription" onclick="window.location.href='inscription.php'"/>
</a>
<?php } else { ?>
    Bienvenue <?php echo $_SESSION['login']; ?> !
    <br>
    <br>
    <a href="logout">
  <img src="XCSS\images\Adeconnexion.png" alt="Deconnexion" />
</a>
    <a href="listing">Liste des utilisateurs</a>
<?php } ?>

<?php  
    $title = '<h1>Accueil</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>