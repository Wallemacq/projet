<?php
echo "Vous êtes sur la page des produits.";
?> 
<?php  
    $title = '<h1>Voici les produits</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>