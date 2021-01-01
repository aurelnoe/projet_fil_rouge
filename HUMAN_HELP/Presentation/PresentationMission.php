<?php 

function afficher()
{
    ?>   
    <!DOCTYPE html>
    <html lang="en">
        <head>
        <?php include("../../head.php"); ?>
        </head>   
    <?php
}

function listeMissionsPro($missions,$newTypeActivite=null,$newPays=null) 
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
                            <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" width="100" height="320" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Titre : <?php echo utf8_encode($mission->getTitreMission()); ?></h5>
                                <p class="card-text">Type d'activité : <?php echo utf8_encode($newTypeActivite->searchNameById($mission->getIdTypeActivite())); ?></p>
                                <p class="card-text">Pays : <?php echo $newPays->searchNameById($mission->getIdPays()); ?> (<?php echo $newPays->searchContinentById($mission->getIdPays()); ?>)</p>
                                <p class="card-text">Date de début : <?php echo $mission->getDateDebut()->format('d-m-Y'); ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="row m-auto">
                                    <a href="/HUMAN_HELP/Controller/MissionsController/detailsMissionController.php?idMission=<?php echo $mission->getIdMission(); ?>" 
                                        class="col-12 col-md-5 btn btn-primary my-1 w-100">
                                        Voir la mission
                                    </a>
                                    <a href="/HUMAN_HELP/Controller/MissionsController/listeMissionProController.php?action=delete&idMission=<?php echo $mission->getIdMission(); ?>"  
                                        class="col-12 col-md-5 btn btn-danger my-1 w-100">
                                        Supprimer
                                    </a>
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
                <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/Controller/MissionsController/formulairesMissionController.php?action=add">
                    Ajouter une nouvelle mission
                </a>
            </div>
            <div class="col-10 col-md-6 m-auto">
                <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/Controller/EtablissementsController/formulaireEtablissementController.php?action=update&idEtablissement=<?php echo $mission->getIdEtablissement(); ?>">
                    Modifier les informations de l'établissement
                </a>
            </div>

        </div>
        <?php      
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
  <?php
}

function listeMissions($medecines=null,$donations=null,$enseignements=null,$constructions=null,$traductions=null,$newtypeActivite=null,$newPays=null)
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
                <a href="/HUMAN_HELP//Controller/MissionsController/listeMissionProController.php?idUtilisateur=" class="btn btnGreen w-100 my-2">
                    Consulter mes missions
                </a>
            </div>
            
            <div class="col-12 col-md-4 m-auto">
                <div class="btn-group btnTypeFormation w-100 my-2">
                    <div class="btn w-75">
                        <strong>Type de formation</strong>
                    </div>
                    <div class="dropdown">
                        <a class="btn btnGreen dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">          
                            <a class="dropdown-item" href="searchMissionsController.php?typeFormation=0">
                                <strong> à distance</strong>
                            </a>
                            <a class="dropdown-item" href="searchMissionsController.php?typeFormation=1">
                                <strong> sur le terrain</strong>
                            </a>
                        </div>
                    </div>
                </div>     
            </div>

            <hr class="mt-3 mb-4">
            
            <h1 class="my-5 px-3">Trouver ma mission humanitaire</h1>

            <hr class="hrTitreListeMission ml-3">

            <div class="p-3">
                <p>
                    Human Helps vous propose tout types de missions humanitaires que se soit à distance ou sur le terrain et dans tous les secteurs.
                </p>
                <p>
                    Vous souhaitez donner de votre temps, de vos vacances et participer à une mission humanitaire ou réaliser votre stage dans un cadre humanitaire sérieux, alors votre candidature nous intéresse.
                </p>
                <p>
                    Si vous étiez venus chercher un voyage humanitaire, vous repartirez avec une mission concrète à effectuer pour aider les populations que nous soutenons.
                </p>
                <p>
                    Vous intégrerez alors des équipes bénévoles (médicales, paramédicales ou chantiers humanitaires) pour une mission humanitaire de 15 jours ou un stage de plusieurs mois.            </div>
                </p>

            <hr class="mt-3 mb-4">

            <!-- CAROUSEL --------------------------------------------------------------------------->
            <div class="col-12 border rounded p-0">
                <div id="carouselMedecine" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                    
                    <ol class="carousel-indicators">
                        <?php foreach ($medecines as $key => $medecine) {
                            ?>
                            <li data-target="#carouselMedecine" data-slide-to="<?php echo $key; ?>"
                            <?php echo ($key==0) ? 'class="active"' : '' ?>></li>
                            <?php
                        } ?>
                    </ol>
                    <div class="text-center mx-auto my-1">
                        <a class="button btn pb-1 w-25" href="searchMissionsController.php?idTypeActivite=1">
                            <h3>Médecine</h3>
                        </a>
                    </div>
                    <div class="carousel-inner w-100">
                            <?php
                            if (!empty($medecines)) {
                                foreach ($medecines as $key => $medecine) 
                                {
                                    ?>                  
                                    <div class="carousel-item <?php echo ($key==0) ? 'active' : ''; ?> mb-5">
                                        <div class="card cardListeMission col-10 col-md-6 p-0">
                                            <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Titre : <?php echo utf8_encode($medecine->getTitreMission()); ?></h5>
                                                <p class="card-text">Type d'activité : <?php echo utf8_encode($newtypeActivite->searchNameById($medecine->getIdTypeActivite())); ?></p>
                                                <p class="card-text">Pays : <?php echo $newPays->searchNameById($medecine->getIdPays()); ?> (<?php echo $newPays->searchContinentById($medecine->getIdPays()); ?>)</p>
                                                <p class="card-text">Date de début : <?php echo $medecine->getDateDebut()->format('d-m-Y'); ?></p>
                                            </div>                   
                                            <div class="card-footer">
                                                <a href="detailsMissionController.php?idMission=<?php echo $medecine->getIdMission(); ?>" class="btn btn-primary">Voir la mission</a>
                                            </div>                 
                                        </div>
                                    </div>
                                <?php  
                                } ?>
                                <div class="row my-4 mx-0">
                                    <a class="carousel-control-prev" href="#carouselMedecine" role="button" data-slide="next">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselMedecine" role="button" data-slide="prev">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>                   
                            <?php
                            }else {
                            ?>
                                <div class="my-5 py-5 text-center">Pas de mission dans la catégorie médecine pour le moment</div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
            </div>

            <hr class="mt-4 mb-4">

            <div class="col-12 border rounded p-0">
                <div id="carouselDonations" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                    <ol class="carousel-indicators">
                        <?php foreach ($donations as $key => $donation) {
                            ?>
                            <li data-target="#carouselDonations" data-slide-to="<?php echo $key; ?>"
                            <?php echo ($key==0) ? 'class="active"' : '' ?>></li>
                            <?php
                        } ?>
                    </ol>
                    <div class="text-center mx-auto my-1">
                        <a class="button btn pb-1 w-25" href="searchMissionsController.php?idTypeActivite=2">
                            <h3>Donations</h3>
                        </a>
                    </div>
                    
                    <div class="carousel-inner w-100">

                        <?php 
                        if (!empty($donations)) {
                            foreach ($donations as $key => $donation) {
                            ?>
                            <div class="carousel-item <?php echo ($key==0) ? 'active' : ''; ?> mb-5">
                                <div class="card-group">
                                    <div class="card cardListeMission col-10 col-md-6 p-0">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : <?php echo utf8_encode($donation->getTitreMission()); ?></h5>
                                            <p class="card-text">Type d'activité : <?php echo utf8_encode($newtypeActivite->searchNameById($donation->getIdTypeActivite())); ?></p>
                                            <p class="card-text">Pays : <?php echo $newPays->searchNameById($donation->getIdPays()); ?> (<?php echo $newPays->searchContinentById($donation->getIdPays()); ?>)</p>
                                            <p class="card-text">Date de début : <?php echo $donation->getDateDebut()->format('d-m-Y'); ?></p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="detailsMissionController.php?idMission=<?php echo $donation->getIdMission(); ?>" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>                  
                                </div>
                            </div>
                            <?php  
                            }
                            ?>
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
                        <?php
                        }else {
                            ?>
                            <div class="my-3 py-3 text-center">Pas de mission dans la catégorie donation pour le moment</div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <hr class="mt-4 mb-4">

            <div class="col-12 border rounded p-0">
                <div id="carouselEnseignement" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                    <ol class="carousel-indicators">
                        <?php foreach ($enseignements as $key => $enseignement) {
                            ?>
                            <li data-target="#carouselEnseignement" data-slide-to="<?php echo $key; ?>"
                            <?php echo ($key==0) ? 'class="active"' : '' ?>></li>
                            <?php
                        } ?>
                    </ol>
                    <div class="text-center mx-auto my-1">
                        <a class="button btn pb-1 w-25" href="searchMissionsController.php?idTypeActivite=3">
                            <h3>Enseignement</h3>
                        </a>
                    </div>
                    <div class="carousel-inner w-100">
                        <?php 
                        if (!empty($enseignements)) {
                            
                            foreach ($enseignements as $key => $enseignement) {
                            ?>
                                <div class="carousel-item <?php echo ($key==0) ? 'active' : ''; ?> mb-5">
                                    <div class="card cardListeMission col-10 col-md-6 p-0">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : <?php echo utf8_encode($enseignement->getTitreMission()); ?></h5>
                                            <p class="card-text">Type d'activité : <?php echo utf8_encode($newtypeActivite->searchNameById($enseignement->getIdTypeActivite())); ?></p>
                                            <p class="card-text">Pays : <?php echo $newPays->searchNameById($enseignement->getIdPays()); ?> (<?php echo $newPays->searchContinentById($enseignement->getIdPays()); ?>)</p>
                                            <p class="card-text">Date de début : <?php echo $enseignement->getDateDebut()->format('d-m-Y'); ?></p>                                        
                                        </div>
                                        <div class="card-footer">
                                            <a href="detailsMissionController.php?idMission=<?php echo $donation->getIdMission(); ?>" class="btn btn-primary">Voir la mission</a>
                                        </div>
                                    </div>
                                </div>
                            <?php  
                            }
                            ?>
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
                        <?php
                        }else {
                        ?>
                            <div class="my-3 py-3 text-center">Pas de mission dans la catégorie enseignement pour le moment</div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <hr class="mt-4 mb-4">

            <div class="col-12 border rounded p-0">
                <div id="carouselConstructions" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                    
                    <ol class="carousel-indicators">
                        <?php foreach ($constructions as $key => $construction) {
                            ?>
                            <li data-target="#carouselConstructions" data-slide-to="<?php echo $key; ?>"
                            <?php echo ($key==0) ? 'class="active"' : '' ?>></li>
                            <?php
                        } ?>
                    </ol>
                    <div class="text-center mx-auto my-1">
                        <a class="button btn pb-1 w-25" href="searchMissionsController.php?idTypeActivite=4">
                            <h3>Construction</h3>
                        </a>
                    </div>
                    <div class="carousel-inner w-100">
                            <?php
                        if (!empty($constructions)) 
                        {
                            foreach ($constructions as $key => $construction) 
                            {   ?>                  
                                <div class="carousel-item <?php echo ($key==0) ? 'active' : ''; ?> mb-5">
                                    <div class="card cardListeMission col-10 col-md-6 p-0">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : <?php echo utf8_encode($construction->getTitreMission()); ?></h5>
                                            <p class="card-text">Type d'activité : <?php echo utf8_encode($newtypeActivite->searchNameById($construction->getIdTypeActivite())); ?></p>
                                            <p class="card-text">Pays : <?php echo $newPays->searchNameById($construction->getIdPays()); ?> (<?php echo $newPays->searchContinentById($construction->getIdPays()); ?>)</p>
                                            <p class="card-text">Date de début : <?php echo $construction->getDateDebut()->format('d-m-Y'); ?></p>
                                        </div>                   
                                        <div class="card-footer">
                                            <a href="detailsMissionController.php?idMission=<?php echo $construction->getIdMission(); ?>" class="btn btn-primary">Voir la mission</a>
                                        </div>                 
                                    </div>
                                </div>
                            <?php 
                            }
                            ?>
                            <div class="row my-4 mx-0">
                                <a class="carousel-control-prev" href="#carouselConstructions" role="button" data-slide="next">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselConstructions" role="button" data-slide="prev">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div> 
                        <?php                  
                        }else {
                            ?>
                            <div class="my-3 py-3 text-center">Pas de mission dans la catégorie construction pour le moment</div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <hr class="mt-4 mb-4">

            <div class="col-12 border rounded p-0">
                <div id="carouselTraductions" class="carousel carouselListeMission slide" data-ride="carousel" data-interval="10000">
                    
                    <ol class="carousel-indicators">
                        <?php foreach ($traductions as $key => $traduction) {
                            ?>
                            <li data-target="#carouselTraductions" data-slide-to="<?php echo $key; ?>"
                            <?php echo ($key==0) ? 'class="active"' : '' ?>></li>
                            <?php
                        } ?>
                    </ol>
                    <div class="text-center mx-auto my-1">
                        <a class="button btn pb-1 w-25" href="searchMissionsController.php?idTypeActivite=5">
                            <h3>Traductions</h3>
                        </a>
                    </div>
                    <div class="carousel-inner w-100">
                        <?php
                        if (!empty($traductions)) {
                            foreach ($traductions as $key => $traduction) 
                            {
                                ?>                  
                                <div class="carousel-item <?php echo ($key==0) ? 'active' : ''; ?> mb-5">
                                    <div class="card cardListeMission col-10 col-md-6 p-0">
                                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" class="card-img-top" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">Titre : <?php echo utf8_encode($traduction->getTitreMission()); ?></h5>
                                            <p class="card-text">Type d'activité : <?php echo utf8_encode($newtypeActivite->searchNameById($traduction->getIdTypeActivite())); ?></p>
                                            <p class="card-text">Pays : <?php echo $newPays->searchNameById($traduction->getIdPays()); ?> (<?php echo $newPays->searchContinentById($traduction->getIdPays()); ?>)</p>
                                            <p class="card-text">Date de début : <?php echo $traduction->getDateDebut()->format('d-m-Y'); ?></p>
                                        </div>                   
                                        <div class="card-footer">
                                            <a href="detailsMissionController.php?idMission=<?php echo $traduction->getIdMission(); ?>" class="btn btn-primary">Voir la mission</a>
                                        </div>                 
                                    </div>
                                </div>
                            <?php  
                            }       
                            ?>             
                            <div class="row my-4 mx-0">
                                <a class="carousel-control-prev" href="#carouselTraductions" role="button" data-slide="next">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselTraductions" role="button" data-slide="prev">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div> 
                            <?php                  
                        }else 
                        {   ?>
                            <div class="my-3 py-3 text-center">Pas de mission dans la catégorie traduction pour le moment</div>
                            <?php
                        }
                        ?>
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

<?php
}

function detailsMission($mission,string $typeFormation,$newPays=null,$newTypeActivite=null,$newEtablissement=null)
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
                        <li><strong>Type d'activité :</strong> <?php echo utf8_encode($newTypeActivite->searchNameById($mission->getIdTypeActivite())); ?></li>
                        <li><strong>Mission :</strong> <?php echo $typeFormation; ?></li>
                        <li><strong>Pays :</strong> <?php echo $newPays->searchNameById($mission->getIdPays()); ?> (<?php echo $newPays->searchContinentById($mission->getIdPays()); ?>)</li>
                        <li><strong>Organisateur :</strong> <?php echo utf8_encode($newEtablissement->searchNameById($mission->getIdEtablissement())); ?></li>
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

function formulairesMission(string $title,$mission=null,string $titleBtn,string $action,int $idMission=null,$allPays,$allTypeActivite,$idEtablissement=null)
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

            <form class="needs-validation p-3" action="/HUMAN_HELP/Controller/MissionsController/listeMissionProController.php?action=<?php echo $action; ?>" method="POST" novalidate>
                <input type="hidden" name="idMission" value="<?php echo isset($idMission) ? $idMission : '' ?>">

                <hr class="mb-4 mt-2">

                <input type="hidden" name="idEtablissement" value="<?php echo isset($idEtablissement) ? $idEtablissement : 1 ?>">
                    
                <div class="mb-3 form-group">
                    <label for="titreMission">Titre de la mission</label>
                    <input type="text" class="form-control" name="titreMission" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $mission->getTitreMission();}?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div> 
                <div class="row p-0 mb-3">
                    <div class="form-group col-12 col-md-6 w-50 pl-3">
                        <label class="h-50" for="idPays">Pays concerné</label>
                        <select type="number" name="idPays" class="custom-select list-group d-block h-50 w-100" required>
                            <option class="list-group-item" value="">Choisissez...</option>
                            <?php foreach ($allPays as $pays) : ?>
                                <option value="<?php echo $pays->getIdPays(); ?>" class="list-group-item">
                                    <?php echo $pays->getNomPays(); ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            Choisissez un pays valide.
                        </div>
                    </div>
                    
                    <div class="form-group col-12 col-md-6 w-50 pl-3">
                        <label class=" h-50" for="idTypeActivite">Type d'activité</label>
                        <select name="idTypeActivite" class="custom-select list-group d-block h-50 w-100" required>
                            <option class="list-group-item" value="">Choisissez...</option>
                            <?php foreach ($allTypeActivite as $typeActivite) : ?>
                                <option value="<?php echo $typeActivite->getIdTypeActivite(); ?>" class="list-group-item">
                                    <?php echo utf8_encode($typeActivite->getTypeActivite()); ?>
                                </option>
                            <?php endforeach ?>
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
                        <div class="custom-control custom-radio col-10 col-md-3 mx-4">
                            <input name="typeFormation" id="distance" value=0 type="radio" class="custom-control-input">
                            <label for="distance" class="custom-control-label">Distance</label>                       
                        </div>
                        <div class="custom-control custom-radio col-10 col-md-3 mx-2">
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

function searchMission($missions,$title=null)
{
    echo afficher();
    ?>
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");
        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container text-center ">

            <h1 class="h1-select"><?php echo $title; ?></h1>
            
            <hr class="my-4 hrGreen ">

            <?php
                if (!empty($missions)) 
                {   ?>
                    <div class="card-group my-4">
                        <div class="row mx-0 my-2">
                    <?php
                    foreach ($missions as $mission) {
                        ?>
                        <div class="card card-select col-12 col-md-5">
                            <div class="card-body">
                                <img src="\HUMAN_HELP\images\enseignementThai.jpg" height="auto" width="100%" alt="">
                                <div class="text-card-select">
                                    <div class="text-center mx-auto my-1">
                                        <h2 class="my-2">Titre de la mission</h2>
                                        <p><?php echo $mission->getTitreMission(); ?>
                                        </p>
                                    </div>
                                    <div class="text-center mx-auto my-1">
                                        <h2 class="my-2">Description</h2>
                                        <p><?php echo $mission->getDescriptionMission(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="detailsMissionController.php?idMission=<?php echo $mission->getIdMission();?>" class="btn btn-primary my-1 col-12 col-md-6">
                                    Détails de la mission
                                </a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </div>            
                </div>
                <?php
                }else {
                ?>
                    <div class="my-3 py-3 text-center">Pas de mission dans la catégorie recherchée pour le moment</div>
                <?php
                }
                ?>  

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
