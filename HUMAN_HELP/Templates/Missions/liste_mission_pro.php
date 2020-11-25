<?php
include_once("../../Controller/MissionsController/listeMissionProController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <title>Liste mission pro</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    //include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="container">
        <h2 class="text-center">Liste de vos missions:</h2>

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
                                <a href="/HUMAN_HELP/Templates/Missions/details_mission.php?idMission=<?php echo $mission->getIdMission(); ?>" class="col-12 col-md-5 btn btn-primary my-1 w-100">Voir la mission</a>
                                <a href="liste_mission_pro.php?action=delete&idMission=<?php echo $mission->getIdMission(); ?>"  class="col-12 offset-md-2 col-md-5 btn btn-danger my-1 w-100">Supprimer</a>
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
            <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/Templates/Missions/formulairesMission.php?action=add">Ajouter une nouvelle mission</a>
        </div>

    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>