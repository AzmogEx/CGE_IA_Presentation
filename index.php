<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/assets/img/logo-cci-rounded.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Kit prévention</title>
</head>

<body>
    <!--NAVBAR-->
    <header></header>
    <!-- TITRE -->

    <div class="container mt-5">
        <div class="row justify-content-arround mb-5">
            <div class="col-2 col-sm-4 align">
                <img class="w-xl-100" src="./assets/img/logo_cci_gard_web.png" alt="logo-cci">
            </div>
            <div class="col-xl-8 col-sm-4">
                <h1 align="center" class="display-6 align-center archivo-black-regular">Kit de prévention sur les IA</h1>
            </div>
            <div class="col-xl-2 col-sm-4 align-items-center">
                <img class="w-xl-100" src="./assets/img/métropole.png" alt="logo-métropole">
            </div>
        </div>

        <!-- CARTES BENTO -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a data-bs-toggle="modal" data-bs-target="#decouvrirModal"><img class="card-img rounded-5" src="/assets/img/decouvrir.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a data-bs-toggle="modal" data-bs-target="#actualiteModal"><img class="card-img rounded-5" src="/assets/img/actualites.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a href="/assets/Quizz-IA-Table-Rondes-CCI-GARD.pdf" target="_blank"><img class="card-img rounded-5" src="/assets/img/quizz.png"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a data-bs-toggle="modal" data-bs-target="#listeiaModal"><img class="card-img rounded-5" src="/assets/img/listeia.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a data-bs-toggle="modal" data-bs-target="#dangerModal"><img class="card-img rounded-5" src="/assets/img/danger.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <div class="card-body">
                                <audio controls src="/assets/audio/capsule-deepfake.mp3"></audio>
                                <audio controls src="/assets/audio/capsule-soltani-nolwen.mp3"></audio>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a data-bs-toggle="modal" data-bs-target="#refModal"><img class="card-img rounded-5" src="/assets/img/ref.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a data-bs-toggle="modal" data-bs-target="#remplacementModal"><img class="card-img rounded-5" src="/assets/img/remplacement.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                        <div class="card clickable rounded-5">
                            <a data-bs-toggle="modal" data-bs-target="#videoModal"><img class="card-img rounded-5" src="/assets/img/kit-video.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2024 CCI GARD NIMES</p>
            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img class="bi me-2" src="/assets/img/logo_cci_gard_web.png" height="50" alt="" />
            </a>
            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="/index.php" class="nav-link px-2 text-body-secondary">Accueil</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Carte</a></li>
                <li class="nav-item"><a href="/faq.html" class="nav-link px-2 text-body-secondary">FAQ</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">A propos</a></li>
                <li class="nav-item"><a href="/partenaires.php" class="nav-link px-2 text-body-secondary">Partenaires</a>
                </li>
            </ul>
        </footer>
        <script src="/js/nav.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

<!-- MODAL DECOUVRIR -->
<?php include 'assets/modals/decouvrir.php' ?>
<?php include 'assets/modals/liste.php' ?>
<?php include 'assets/modals/actualite.php' ?>
<?php include 'assets/modals/danger.php' ?>
<?php include 'assets/modals/ref.php' ?>
<?php include 'assets/modals/remplacement.php' ?>
<?php include 'assets/modals/video.php' ?>




</html>