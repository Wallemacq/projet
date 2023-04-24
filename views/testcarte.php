<?php
foreach ($articles as $article):?>
<div class="card" style="width: 18rem;">
<img class="card-img-top" src="XCSS/images/" alt="Card image cap">
<div class="card-body">
<h5 class="card-title"><?php echo $article['nom_article']; ?></h5>
<p class="card-text"><?php echo $article['description']; ?></p>
<p class="card-text"><?php echo $article['prix'] . "€" ; ?></p>
<a href="#" class="btn btn-primary">Ajouter au panier</a>
</div>
</div>
<?php endforeach; ?>


<?php
 $title = '<h1>Le teste carte</h1>' ;
$content = ob_get_clean();
include 'template.php' ;

?>
