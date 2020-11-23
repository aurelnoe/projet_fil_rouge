<?php
include("C:/xampp/htdocs/HUMAN_HELP/Controller/ListeMissionController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Liste des missions</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="container p-0">
    
        <div class="col-12 col-md-4 m-auto">
            <a href="/HUMAN_HELP/Templates/Missions/liste_mission_pro.php" class="btn btnGreen w-100 my-2">Consulter mes missions</a>
        </div>
        
        <div class="col-12 col-md-4 m-auto">
            <div class="btn-group btnTypeFormation w-100 my-2">
                <button class="btn w-75">
                    Type de formation
                </button>
                <button type="button" class="btn btnGreen dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">          
                    <a class="dropdown-item" href="#"><strong> à distance</strong></a>
                    <a class="dropdown-item" href="#"><strong> sur le terrain</strong></a>
                </div>
            </div>     
        </div>

        <hr class="mt-3 mb-4">
        
        <h2 class="my-4 text-center">Trouver ma mission humanitaire</h2>

        <div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos id consequatur amet reprehenderit, ea velit dolorem repellat corrupti commodi? Vero molestias enim quas adipisci iusto cupiditate mollitia accusamus laboriosam velit.
            Laborum dicta obcaecati modi consequatur porro voluptatum libero non deserunt, ratione, dolore dolor, totam quod perspiciatis magni sed aperiam! Quam, quos fugiat doloremque laudantium possimus iusto voluptates quidem quibusdam non!
            Asperiores, nam, animi ad minus voluptates doloribus obcaecati ducimus unde dolorum vel voluptate nesciunt quaerat voluptatibus eos dignissimos. Quibusdam amet adipisci praesentium, magni voluptatibus facere temporibus obcaecati magnam velit doloremque?
            Quos maiores voluptatem eaque atque reprehenderit, porro quis necessitatibus magnam quasi vitae incidunt iure commodi, odio quo recusandae autem excepturi odit deserunt officiis. Iste, a veniam illo dolorum eaque deserunt?
        </div>

        <hr class="mt-3 mb-4">

        <!-- CAROUSEL --------------------------------------------------------------------------->
        <div class="col-12 border rounded p-0">
            <div id="carouselEnseignement" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                <div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselEnseignement" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselEnseignement" data-slide-to="1"></li>
                        <li data-target="#carouselEnseignement" data-slide-to="2"></li>
                    </ol>
                </div>
                <div class="carousel-inner w-100">

                    <h3>Médecine :</h3>

                    <div class="carousel-item active">
                        <div class="card-group">
                        <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>
                                        </div>                   
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>  
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselEnseignement" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselEnseignement" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>
                                        </div>                   
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>  
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselEnseignement" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselEnseignement" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div> 
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselEnseignement" role="button" data-slide="next">
                                <span class="" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselEnseignement" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <hr class="mt-4 mb-4">

        <div class="col-12 border rounded p-0">
            <div id="carouselConstruction" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                <div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselConstruction" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselConstruction" data-slide-to="1"></li>
                        <li data-target="#carouselConstruction" data-slide-to="2"></li>
                    </ol>
                </div>
                <div class="carousel-inner w-100">

                    <h3>Construction :</h3>

                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselConstruction" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselConstruction" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselConstruction" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselConstruction" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselConstruction" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselConstruction" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <hr class="mt-4 mb-4">

        <div class="col-12 border rounded p-0">
            <div id="carouselDonations" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                <div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselDonations" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselDonations" data-slide-to="1"></li>
                        <li data-target="#carouselDonations" data-slide-to="2"></li>
                    </ol>
                </div>
                <div class="carousel-inner w-100">

                    <h3>Donations :</h3>

                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselDonations" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselDonations" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselDonations" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselDonations" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselDonations" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselDonations" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <hr class="mt-4 mb-4">

        <div class="col-12 border rounded p-0">
            <div id="carouselMedecine" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                <div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselMedecine" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselMedecine" data-slide-to="1"></li>
                        <li data-target="#carouselMedecine" data-slide-to="2"></li>
                    </ol>
                </div>
                <div class="carousel-inner w-100">

                    <h3>Médecine :</h3>

                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselMedecine" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMedecine" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselMedecine" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMedecine" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselMedecine" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselMedecine" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <hr class="mt-4 mb-4">

        <div class="col-12 border rounded p-0">
            <div id="carouselTraduction" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                <div>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselTraduction" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselTraduction" data-slide-to="1"></li>
                        <li data-target="#carouselTraduction" data-slide-to="2"></li>
                    </ol>
                </div>
                <div class="carousel-inner w-100">

                    <h3>Traduction :</h3>

                    <div class="carousel-item active">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselTraduction" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselTraduction" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselTraduction" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselTraduction" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card-group">
                            <div class="row justify-content-between m-auto">
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : Développement numérique</h5>
                                            <p class="card-text">Type d'activité : informatique</p>
                                            <p class="card-text">Pays : Ghana (Afrique)</p>
                                            <p class="card-text">Date de début : 26 Mai 2021</p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card cardListeMission">
                                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre de la mission</h5>
                                            <p class="card-text">Type d'activité :</p>
                                            <p class="card-text">Pays :</p>
                                            <p class="card-text">Date de début :</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary">Voir la mission</a>
                                        </div>    
                                    </div>
                                </div>
                            </div>                     
                        </div>
                        <div class="row my-4">
                            <a class="carousel-control-prev" href="#carouselTraduction" role="button" data-slide="next">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselTraduction" role="button" data-slide="prev">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="mt-4 mb-4">
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>
    <script>
        $('.carousel').carousel({

            pause: "null"

        })

    </script>   