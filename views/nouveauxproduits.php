<?php
echo "Vous êtes sur la page des nouveaux produits";
?> 
<?php  
    $title = '<h1>les nouveaux produits</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>