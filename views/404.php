<?php
echo "error404 : cette page n'existe pas";
?> 
<?php  
    $title = '<h1>Exercice9</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>