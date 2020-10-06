<?php
require "./src/informations.php";
require "./src/mailto.php";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Franck Malecki - Ambassadeur d'un mode de vie sain et actif</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <!--<a class="navbar-brand js-scroll-trigger" href="#page-top">Franck Malecki</a>-->
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>

                    <a class="mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                </div>

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">À propos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Opportunités</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">TA SEULE LIMITE</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">C'EST TOI</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">ça m'intéresse</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">FRANCK MALECKI</h2>
                        <p class="text-white-50">
                            Le jour de mes 20 ans j'ai eu un déclic, j'ai observé mon corps dans un miroir et je me suis senti déçu.<br><br>
                            Je pesais 60kg pour 1m80, je manquais d'énergie et j'avais un mauvais cardio.<br>
                            C'est là que j'ai compris que j'avais un objectif à atteindre, que le corps dont je rêvais n'allait pas tomber du ciel et qu'il fallait que je me donne les moyens de l'obtenir.<br>
                            Depuis ce jour est né une détermination sans faille pour construire et façonner mon corps. Et je peux dire aujourd'hui que j'ai apprivoisé ce style de vie, car oui ... c'en est un !<br><br>
                            Bref, mon résultat actuel ?<br>
                            J'ai pris environ 15kg de muscles, j'ai gagné en énergie, en cardio et mon mental n'est clairement plus le même !
                        </p>
                    </div>
                </div>
                <!-- <img class="img-fluid" src="assets/img/ipad.png" alt="" /> -->
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-5 mb-lg-5">
                    <div class="col-xl-8 col-lg-7">

                        <div class="d-flex flex-row">
                            <div class="min-h-50 w-75 d-flex align-items-center justify-content-center">
                                <p class="position-absolute m-0 text-white" id="nutri">80% NUTRITION</p>
                                <div class="h-100 w-100 bg-primary" id="nutrition"></div>
                            </div>
                            <div class="w-25 d-flex align-items-center justify-content-center">
                                <p class="position-absolute m-0 text-white " id ="spo">20% SPORT</p>
                                <div class="h-100 w-100 bg-grey" id="sport"></div>
                            </div>
                        </div>
                        <!-- <div class="d-flex align-items-center justify-content-center"><h1 id="resul"></h1></div> -->
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>100% RÉSULTAT</h4>
                            <p class="text-black-50 mb-0">Les moyens que j'ai mis en oeuvre ?<br>Je te les partagerai volontier.
                                Ce sera un réel plaisir de t'aider à améliorer ta vie car oui, il ne s'agit pas ici que d'un physique, c'est aussi ta confiance en toi, ton énergie, bref ton bien être !</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">CHALLENGER</h4>
                                    <p class="mb-0 text-white-90"></p>
                                    <ul class="mb-0 text-white-50 list-unstyled">
                                        <li>Objectif physique</li>
                                        <li>Groupes de motivation</li>
                                        <li>Suivi autour de ta routine sportive et nutritionnelle</li>
                                    </ul>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">AMBASSADEUR</h4>
                                    <p class="mb-0 text-white-50"></p>
                                    <ul class="mb-0 text-white-50 list-unstyled">
                                        <li>Compléments de revenus voire bien plus</li>
                                        <li>Remise en forme de personne motivée en équipe</li>
                                        <li>Entrepreneur, leader d'une équipe d'indépendants</li>
                                    </ul>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Tu veux plus d'info ?</h2>
                        <form class="form-group d-flex flex-column" action="">
                            <div class="d-flex flex-rown">
                            <input class="form-control flex-fill mr-2 mb-3" name="msg_email" id="msg_email" type="email" placeholder="Email ..." />
                            <select class="form-control flex-fill ml-2 mb-3 text-primary" name="msg_sujet" id="msg_sujet">
                                <option class="text-primary">Prise de masse</option>
                                <option class="text-primary">Perte de poids</option>
                            </select>
                            </div>
                            <textarea class="form-control flex-fill mr-0 mr-sm-2 mb-3" name="msg_contenu" id="msg_contenu" type="text" placeholder="Message ..."></textarea>
                            <button class="btn btn-primary mx-auto mt-2" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Adresse</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><?php echo $address; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!"><?php echo $email; ?></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Téléphone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><?php echo $phone; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#https://www.facebook.com/franckmalecki"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="https://www.instagram.com/franck.mlk/?hl=fr"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © Jean-Baptiste Loup 2020</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
