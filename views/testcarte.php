   
    <?php
    Echo 'Testcartes';
    $articles = getAllArticles();

    foreach ($articles as $article) {
    ?>
    <div class="card h-100">
        <!-- Product image-->
        <img class="card-img-top" src="XCSS\images\<?php echo $article->image; ?>" alt="<?php echo $article->nom_article; ?>" />
        <!-- Product details-->
        <div class="card-body p-4">
            <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder"><?php echo $article->nom_article; ?></h5>
                <!-- Product reviews-->
                <div class="d-flex justify-content-center small text-warning mb-2">
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>
                    <div class="bi-star-fill"></div>   
                    <div class="bi-star-fill"></div>
                </div>
                <!-- Product description-->
                <p><?php echo $article->description; ?></p>
                <!-- Product price-->
                <?php echo $article->prix; ?>
            </div>
        </div>
        <!-- Product actions-->
        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
        </div>
    </div>
    <?php
    }?> 


<?php  
    $title = '<h1>Le teste carte</h1>' ;
    $content = ob_get_clean();
    include 'template.php' ; 
    
?>