<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="xcss/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="accueil">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="testcarte">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="meilleursproduits">Les meilleurs produits</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="nouveauxproduits">Nouveaux produits</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="ajoutarticle">Ajouter des articles</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Qui sommes nous?</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Magasin</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="touslesproduits">Tous les produits</a></li>
                                <li><hr class="dropdown-divider" /></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- TODO :: test -->
                    <form class="d-flex">
                        <a href="panier" class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Panier <!-- Donc ceci est le panier -->
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header>
        <!-- class="bg-dark py-5" -->
            <div style="text-align: center"><img src="XCSS\images\template.jpg" alt="Image" style="width:100%;height:400px;">
            </header>       
                <section id="content" class="py-5">
                    <div class="container">
                        <div class="row justify-content-center">
                        <div>
                            <div style="text-align:center">
                                <h1 class="display-4 fw-bolder"><?php  echo $title   ?></h1>
                                <?php  echo $content   ?>
                            </div>
                        </div>
                    </div>
                </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>