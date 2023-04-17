<?php
echo "Vous êtes sur la page de votre panier";
?> 
<?php  
    $title = '<h1>Voici vote panier</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>