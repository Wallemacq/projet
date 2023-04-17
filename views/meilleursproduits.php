<?php
echo "Vous êtes sur la page des meilleurs produits";
?> 
<?php  
    $title = '<h1>Voici les meilleurs produits</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>