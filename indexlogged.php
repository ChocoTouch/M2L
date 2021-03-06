<?php

session_start()

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Site de la M2L</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><img src="css/ressources/m2l_logo.jpg" width="100px" height="100px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">Présentation</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="gestionAdh.php">Gestion des Adhérents</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Site officiel de la Maison des Ligues de Lorraine (M2L)</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Répertorie les espaces et les services des différentes ligues sportives régionales de Lorraine et plus encore...</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="about.html">Présentation</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="gestionAdh.php">Gestion des adhérents</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="css/ressources/Kid_soccer.jpg" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Présentation rapide de la Maison des Ligues de Lorraine</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                                    <h2 class="h5">Personnel</h2>
                                    <p class="mb-0">Un personnel très complet et divers satisfaisant tout les besoins.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                    <h2 class="h5">Locaux</h2>
                                    <p class="mb-0">Des salles de reunions, une salle multimédia, un amphithéatre ainsi qu'une salle de convivialité sont tous disponible à la location.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Materiel</h2>
                                    <p class="mb-0">La M2L fournis divers équipements: bureaux, imprimantes, ordinateurs ...</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Service</h2>
                                    <p class="mb-0">De multiples services sont proposés tel que l'acces internet, le système de réservation de salle et bien d'autres...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Dernieres Infos</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="css/ressources/news1.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Bilan</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="https://www.france24.com/fr/sports/20220316-ligue-des-champions-qui-sont-les-huit-qualifi%C3%A9s-pour-les-quarts-de-finale"><h5 class="card-title mb-3">Ligue des champions : qui sont les huit qualifiés pour les quarts de finale ?</h5></a>
                                    <p class="card-text mb-0">Avec la conclusion, mercredi, des huitièmes de finale entre la Juventus Turin et Villareal et celui entre Chelsea et Lille, on connaît désormais l'ensemble des qualifiés pour les quarts de finale de la Ligue des champions.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <div class="fw-bold">Romain HOUEIX</div>
                                                <div class="text-muted">March 16, 2022 &middot; 1 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="css/ressources/news2.png" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Emiliano Sala probablement inconscient au moment de sa mort, selon un tribunal britannique</h5></a>
                                    <p class="card-text mb-0">Un jury britannique a conclu, jeudi, que le footballeur Emiliano Sala est mort dans le crash de son avion dans la Manche début 2019 probablement inconscient après avoir été intoxiqué au monoxyde de carbone.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <div class="fw-bold">FRANCE 24</div>
                                                <div class="text-muted">March 17, 2022 &middot; 2 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="css/ressources/news3.png" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Compte-rendu</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Ligue des champions : Chelsea enterre les espoirs de remontada de Lille</h5></a>
                                    <p class="card-text mb-0">Comme au match aller (2-0), Chelsea a pris le meilleur sur un Losc (1-2), au jeu pourtant agréable. La France n'a plus de représentant en Ligue des champions.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <div class="fw-bold">Romain HOUEIX</div>
                                                <div class="text-muted">March 16, 2022 &middot; 3 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Call to action-->

                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="fw-bolder m-0 text-white">&copy; M2L</div><div class="fw-normal m-0 text-white">La Maison des Ligues de Lorraine (M2L) a pour mission <br> de fournir des espaces et des services aux différentes ligues <br> sportives régionales de Lorraine et à d’autres structures hébergées.</div></div>
                    <div class="col-auto">
                        <a class="link-light fw-bolder" href="indexlogged.php">Accueil</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light fw-bolder" href="about.html">Présentation</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light fw-bolder" href="contact.html">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
