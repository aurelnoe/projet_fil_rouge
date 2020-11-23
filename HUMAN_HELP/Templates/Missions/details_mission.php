<?php
include_once("../../Controller/detailsMissionController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Détails de la mission</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
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
                <a href="/HUMAN_HELP/Templates/Missions/formulairesMission.php?action=update&idMission=<?php echo $mission->getIdMission();?>" class="btn btn-primary w-100">Modifier</a>
            </div>
            <form class="col-12 offset-md-6 col-md-3 my-2" action="?action=delete" method="POST">
                <button type="submit" class="btn btn-danger w-100">Supprimer</button>
            </form>
        </div>
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>