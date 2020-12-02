<?php 

function head()
{
    ?>
    <?php include("../../head.php"); ?>
    <script src="../Assets/jquery-3.5.1.min.js"></script>
    <script src="Assets/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <?php
}

function afficher()
{
    ?>   
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <?php echo head(); ?>
        </head>   
    <?php
}

function listeMissionsPro($missions) 
{
    echo afficher();
    ?> 
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container">
            <h2 class="text-center mt-5">Liste de vos missions:</h2>

            <hr class="my-4">

            <div class="card-group w-100">
                <div class="row mx-0 my-5 w-100">
                <?php 
                
                foreach($missions as $mission)
                {
                ?>
                    <div class="col-12 col-md-6 col-lg-5 m-auto my-1">
                        <div class="card cardListeMissionPro mx-auto">
                            <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" width="100" height="320" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Titre : <?php echo $mission->getTitreMission(); ?></h5>
                                <p class="card-text">Type d'activité : <?php echo $mission->getIdTypeActivite(); ?></p>
                                <p class="card-text">Pays : <?php echo $mission->getIdPays(); ?> (Afrique)</p>
                                <p class="card-text">Date de début : <?php echo $mission->getDateDebut()->format('d-m-Y'); ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="row m-auto">
                                    <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php?idMission=<?php echo $mission->getIdMission(); ?>" class="col-12 col-md-5 btn btn-primary my-1 w-100">Voir la mission</a>
                                    <a href="/HUMAN_HELP/Controller/MissionsController/listeMissionProController.php?action=delete&idMission=<?php echo $mission->getIdMission(); ?>"  class="col-12 offset-md-2 col-md-5 btn btn-danger my-1 w-100">Supprimer</a>
                                </div>                    
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                    
                </div>                     
            </div>

            <hr class="my-4">

            <div class="col-10 col-md-6 m-auto">
                <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/Controller/MissionsController/formulairesMissionController.php?action=add">Ajouter une nouvelle mission</a>
            </div>
            <div class="col-10 col-md-6 m-auto">
                <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/Controller/EtablissementsController/formulaireEtablissementController.php?action=update&idEtablissement=<?php echo $mission->getIdEtablissement(); ?>">Modifier les informations de l'établissement</a>
            </div>

        </div>
        <?php      
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
  <?php
}

function listeMissions($medecines=null,$donations=null,$enseignements=null,$constructions=null,$traductions=null)
{
    echo afficher();
    ?> 
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");
        
        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container p-0">
        
            <div class="col-12 col-md-4 m-auto">
                <a href="/HUMAN_HELP//Controller/MissionsController/listeMissionProController.php?idUtilisateur=" class="btn btnGreen w-100 my-2">Consulter mes missions</a>
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
                        <a href="/HUMAN_HELP/Controller/MissionsController/searchMissionsController.php?idTypeActivite=1"><h3>Médecine :</h3></a>
                        <div class="row justify-content-between m-auto">
                            <div class="col-12 col-md-6">
                            <?php
                            // $i=0;
                            // foreach ($medecines as $medecine) 
                            // {
                                ?>  
                                <?php // if($i==0){ ?><div class="item active"><?php //} ?>
                                <?php //if($i % 2 == 0){ ?><div class="item"><?php //}?>                       
                                        <div class="card cardListeMission">
                                            <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Titre : <?php //echo $medecine->getTitreMission(); ?></h5>
                                                <p class="card-text">Type d'activité : informatique</p>
                                                <p class="card-text">Pays : Ghana (Afrique)</p>
                                                <p class="card-text">Date de début : 26 Mai 2021</p>
                                            </div>                   
                                            <div class="card-footer">
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
                                            </div>                 
                                        </div>
                                <?php 
                            //     if($i % 4 != 0){ ?>
                                </div><?php // }?>
                            <?php  //$i++; 
                            // } 
                            ?>
                            </div>
                        </div>
                        <div class="row my-4 mx-0">
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

                    <a href="HUMAN_HELP/Controller/MissionsController/searchMissionsController.php?idTypeActivite=2"><h3>Donations :</h3></a>

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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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

                        <a href="/HUMAN_HELP/Controller/MissionsController/searchMissionsController.php?idTypeActivite=3"><h3>Enseignement :</h3></a>

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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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

                    <a href="/HUMAN_HELP/Controller/MissionsController/searchMissionsController.php?idTypeActivite=4"><h3>Construction :</h3></a>

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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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

                    <a href="/HUMAN_HELP/Controller/MissionsController/searchMissionsController.php?idTypeActivite=5"><h3>Traduction :</h3></a>

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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
                                                <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php" class="btn btn-primary">Voir la mission</a>
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
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
    <script>
        $('.carousel').carousel({

            pause: "null"

        })

    </script>  
<?php
}

function detailsMission($mission,string $typeFormation)
{
    echo afficher();
    ?> 
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container justify-content p-4">

            <h2 class="text-center my-2 pb-3 pt-3">Détails de la mission</h2>

            <hr class="mb-4 mt-2">
            <!-- section image details -->
            <div class="row h-25">
                <div class="col-10 col-md-5 m-auto p-0">
                    <img class="imageDetailsMission rounded border" width="100" height="360"/>
                    <hr class="hrGreen">
                </div>
                <div class="col-10 col-md-6">
                    <ul class="liDetailsMission">
                        <li><strong>Titre de la mission :</strong> <?php echo $mission->getTitreMission(); ?></li>
                        <li><strong>Type d'activité :</strong> <?php echo $mission->getIdTypeActivite(); ?></li>
                        <li><strong>Mission :</strong> <?php echo $typeFormation; ?></li>
                        <li><strong>Pays :</strong> <?php echo $mission->getIdPays(); ?> (Afrique)</li>
                        <li><strong>Organisateur :</strong> <?php echo $mission->getIdEtablissement(); ?></li>
                        <li><strong>Durée de la mission :</strong> <?php echo $mission->getDuree(); ?> jours</li>
                        <li><strong>Date début :</strong> <?php echo $mission->getDateDebut()->format('d-m-Y'); ?></li>
                    </ul>
                </div>
            </div>

            <hr class="mb-4 mt-4">
            <!-- description -->
            <h2 class="mb-4 mt-4">Description :</h2>

            <div class="mb-3"><?php echo $mission->getDescriptionMission(); ?></div>
                
            <hr class="mb-4 mt-5">

            <!-- COMMENTAIRES -->
            <div class="mb-4 pb-4">

                <h2 class="mb-4 mt-4">Commentaires :</h2>

                <div class="row border billet">
                    <div class="col-12 col-md-4">
                        <strong>@Maurice</strong>, 38 ans, Montpellier:<br>
                        Le 27/10/2020 11:59
                    </div>
                    <div class="col-12 my-2 col-md-8">
                        <div class="row">
                            <div class="col-1 p-0">
                                "
                            </div>
                            <div class="col-10 p-0">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, temporibus doloremque? Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            </div>
                            <div class="col-1 p-0">
                                "
                            </div>
                        </div>
                    </div>            
                </div>
                
                <div class="row border billet">
                    <div class="col-12 col-md-4">
                        <strong>@Bob</strong>, 72 ans, Toulouse:<br>
                        Le 01/11/2020 22:36
                    </div>
                    <div class="col-12 my-2 col-md-8">
                        <div class="row">
                            <div class="col-1 p-0">
                                "
                            </div>
                            <div class="col-10 p-0">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed, temporibus doloremque? 
                            </div>
                            <div class="col-1 p-0">
                                "
                            </div>
                        </div>
                    </div>            
                </div>

            </div>
        <!-- BOUTONS -->
            <hr class="mb-4">

            <div class="row mb-4">
                <div class="col-12 col-md-5 my-2">
                    <a href="/HUMAN_HELP/Templates/Autres/Comment_ca_marche.php?idMission=<?php echo $mission->getIdMission();?>" class="btn btnGreen w-100">Comment y participer ?</a>
                </div>
                <div class="col-12 offset-md-2 col-md-5 my-2">
                    <a href="/HUMAN_HELP/Templates/Contact/form_contact.php" class="btn btnGreen w-100">contactez nous</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-md-3 my-2">
                    <a href="/HUMAN_HELP/Controller/MissionsController/formulairesMissionController.php?action=update&idMission=<?php echo $mission->getIdMission();?>" class="btn btn-primary w-100">Modifier</a>
                </div>
                <form class="col-12 offset-md-6 col-md-3 my-2" action="?action=delete" method="POST">
                    <button type="submit" class="btn btn-danger w-100">Supprimer</button>
                </form>
            </div>
        </div>
        <?php      
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
<?php
}

function formulairesMission(string $title,$mission,string $titleBtn,string $action,int $idMission=null)
{
    echo afficher();
    ?>
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        
        ?>
        <div class="col-12 col-md-6 container pt-4 my-4 border rounded">

            <h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

            <form class="needs-validation p-3" action="/HUMAN_HELP//Controller/MissionsController/listeMissionProController.php?action=<?php echo $action; ?>" method="POST" novalidate>
                <input type="hidden" name="idMission" value="<?php echo isset($idMission) ? $idMission : '' ?>">

                <hr class="mb-4 mt-2">

                <div class="mb-3 form-group">
                    <label for="idEtablissement">Dénomination de l'établissement</label>
                    <input type="number" class="form-control" name="idEtablissement" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $mission->getIdEtablissement();}?>">
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label for="titreMission">Titre de la mission</label>
                    <input type="text" class="form-control" name="titreMission" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $mission->getTitreMission();}?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div> 
                <div class="row p-0 mb-3">
                    <div class="col-12 col-md-6 form-group w-50 pl-3">
                        <label class="h-50" for="idPays">Pays concerné</label>
                        <select type="number" name="idPays" class="custom-select list-group d-block h-50 w-100" required>
                        <option class="list-group-item" value="">Choisissez...</option>
                        <option value="1" class="list-group-item">Maroc</option>
                        <option value="2" class="list-group-item">Gabon</option>
                        <option value="3" class="list-group-item">Somalie</option>
                        <option value="4" class="list-group-item">Egypte</option>
                        <option value="5" class="list-group-item">Mali</option>
                        </select>
                        <div class="invalid-feedback">
                        Choisissez un pays valide.
                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6 w-50 form-group pl-3">
                        <label class=" h-50" for="idTypeActivite">Type d'activité</label>
                        <select name="idTypeActivite" class="custom-select list-group d-block h-50 w-100" required>
                            <option class="list-group-item" value="">Choisissez...</option>
                            <option  value="1" class="list-group-item">Médecine</option>
                            <option  value="2" class="list-group-item">Donations</option>
                            <option  value="3" class="list-group-item">Enseignement</option>
                            <option  value="4" class="list-group-item">Formation</option>
                            <option  value="5" class="list-group-item">Informatique</option>
                            <option  value="6" class="list-group-item">Traduction</option>
                            <option  value="7" class="list-group-item">Sportive</option>
                            <option  value="8" class="list-group-item">Aide juridique</option>
                            <option  value="9" class="list-group-item">Soutient psychologique</option>
                        </select>
                        <div class="invalid-feedback">
                            Ce champ est requis.
                        </div>
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label for="descriptionMission">Description de la mission</label>
                    <textarea type="textarea" class="form-control" name="descriptionMission" placeholder=""><?php echo ($_GET['action'] == 'update') ? $mission->getDescriptionMission() : ''; ?></textarea>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                <div class="d-block mb-3 form-group">
                    <label>Type de formation</label>
                    <div class="row">
                        <div class="custom-control custom-radio mx-4">
                            <input name="typeFormation" id="distance" value=0 type="radio" class="custom-control-input">
                            <label for="distance" class="custom-control-label">Distance</label>                       
                        </div>
                        <div class="custom-control custom-radio mx-2">
                            <input name="typeFormation" id="terrain" value=1 type="radio" class="custom-control-input">
                            <label for="terrain" class="custom-control-label">Sur le terrain</label>                       
                        </div>
                    </div>  
                </div>
                <div class="mb-3 form-group">
                    <label for="dateDebut">Date de début de la mission</label>
                    <div class="input-group"  data-provide="datepicker">
                        <input type="date" class="form-control" name="dateDebut" value="<?php echo ($_GET['action'] == 'update') ? $mission->getDateDebut()->format('Y-m-d') : ''; ?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label for="duree">Durée de la mission<span class="text-muted"> (en jour)</span></label>
                    <input type="number" class="form-control" name="duree" placeholder="" value="<?php echo ($_GET['action'] == 'update') ? $mission->getDuree() : ''; ?>">
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label for="imageMission">Ajouter une image</label>
                    <input type="file" class="form-control-file" name="imageMission" placeholder="" capture>
                </div>

                <hr class="mb-4 mt-4">
                
                <button class="btn btnGreen btn-lg btn-block mb-5" type="submit"><?php echo $titleBtn;?></button>
                <a href="listeMissionController.php" class="btn btn-primary w-100">Retour à la liste des missions</a>
            </form>   
        </div>
        <?php      
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
<?php
}

function searchMission($missions)
{
    echo afficher();
    ?>
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container text-center ">

            <h1 class="h1-select">Titre de la recherche<?php //echo $title; ?></h1>
            
            <hr class="my-4 hrGreen ">

            <div class="card-group my-4">
                <div class="row mx-0 my-2">
                <?php
                foreach ($missions as $mission) {
                    ?>
                    <div class="card card-select col-12 col-md-5">
                        <div class="card-body">
                            <img src="\HUMAN_HELP\images\enseignementThai.jpg" height="auto" width="100%" alt="">
                            <div class="text-card-select">
                                <div>
                                    <h2 class="my-2">Titre de la mission</h2>
                                    <p><?php echo $mission->getTitreMission(); ?>
                                    </p>
                                </div>
                                <div>
                                    <h2 class="my-2">Description</h2>
                                    <p><?php echo $mission->getDescriptionMission(); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="detailsMissionController.php?idMission=<?php echo $mission->getIdMission();?>" class="btn btn-primary my-1 col-12 col-md-6">Détails de la mission</a>
                        </div>
                    </div>
                    <?php
                }
                
                ?>                            
                
                </div>            
            </div>

            <a href="listeMissionController.php" class="btn btnGreen w-50 my-3">Retour à la liste des missions</a>

        </div>
        <?php      
            include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
    <?php
}

function formParticipationMission($mission)
{
    echo afficher();
    ?>
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");
        ?>
        <div class="container col-12 col-md-6 pt-4 my-4 border rounded">

            <h1 class="my-3 text-center"><?php echo $mission->getTitreMission(); ?></h1>

            <form class="needs-validation p-3" action="../../Templates/Autres/comment_ca_marche?action=participe&idMission=<?php echo $mission->getIdMission();?>" method="POST" novalidate>
                <h2 class="text-center my-2 pb-2">Inscrivez vous</h2>

                <hr class="mb-4 mt-2">
                
                <div class="d-block mb-3 form-group">
                    <label>Civilité</label>
                    <div class="row">
                        <div class="custom-control custom-radio mx-4">
                            <input name="civilite" id="monsieur" type="radio" class="custom-control-input">
                            <label for="monsieur" class="custom-control-label">Monsieur</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                            <input name="civilite" id="madame" type="radio" class="custom-control-input">
                            <label for="madame" class="custom-control-label">Madame</label>
                        </div>
                    </div>  
                </div>
                <div class="mb-3 form-group">
                    <label for="mail">Adresse mail</label>
                    <input name="mail" type="mail" class="form-control" placeholder="mail@mail.com" value="" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                <div class="mb-3 form-group date">
                        <label for="dateNaissance">Date de naissance</label>
                        <input name="dateNaissance" type="date" data-provide="datepicker" class="form-control" placeholder="jj/mm/aaaa" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <label for="message">Message</label>
                    <input name="message" type="textarea" class="form-control messageMission" placeholder="Ajouter un message"></input>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                
                <hr class="mb-4 mt-4">
                
                <button type="submit" class="btn btnGreen btn-lg btn-block mb-5">Envoyer</button>
                <a href="/HUMAN_HELP/Templates/Autres/Comment_ca_marche.php?idMission=<?php echo $mission->getIdMission();?>" class="btn btn-primary w-100">Retour aux informations</a>        </form>

        </div>
        <?php      
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
    <?php
}
