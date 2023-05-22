<?php
ob_start();
?>

<div class="row">
    <?php foreach ($articles as $article) : ?>
        <div class="col-md-4">
            <div class="card mx-auto" style="width: 18rem;">
            <img class="card-img-top" src="XCSS/images/<?php echo $article['image']; ?>" alt="<?php echo $article['nom_article']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $article['nom_article']; ?></h5>
                    <p class="card-text"><?php echo $article['description']; ?></p>
                    <p class="card-text"><?php echo $article['prix'] . ' €'; ?></p>
                    <a href="panier.php?id=" class="btn btn-primary">Acheter</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php
$title = '<h1>Le teste carte</h1>' ;
$content = ob_get_clean();
include 'template.php' ;

?>
