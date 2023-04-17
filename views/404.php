<?php
echo "error404 : cette page n'existe pas";
?> 
<?php  
    $title = '<h1>ERROR 404</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>