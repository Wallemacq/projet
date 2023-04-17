<?php
echo "Vous êtes sur la page d'accueil vous pouvez vous connecetez/ vous inscrire / ou directement aller dans le shop";
?> 
<?php  
    $title = '<h1>Accueil</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>