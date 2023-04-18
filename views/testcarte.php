<?php
$articles = getCartes();
while ($row = ($articles)) {
    echo "<div class='carte'>";
    echo "<h2>".$row['nom_article']."</h2>";
    echo "<p>".$row['description']."</p>";
    echo "<p>Prix : ".$row['prix']." €</p>";
    echo "</div>";
}



mysqli_close($conn);
?> 
<?php  
    $title = '<h1>Le teste carte</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>