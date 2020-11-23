<?php
include("C:/xampp/htdocs/HUMAN_HELP/Controller/PaysMissionController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Types activites</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="container text-center">

        <h1 class="h1-select"><?php echo "Maroc :"; ?></h1>
        
        <hr class="my-4 hrGreen ">

        <div class="card-group my-4">
            <div class="row mx-0 my-2">
                <?php 
                    foreach ($missions as $mission) {
                        ?>
                        <div class="card card-select col-12 col-md-5">
                            <div class="card-body">
                                <img src="\HUMAN_HELP\images\enseignementThai.jpg" height="300px" width="100%" alt="">
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
                                <a href="details_mission.php?idMission=<?php echo $mission->getIdMission();?>" class="btn btn-primary my-1 col-12 col-md-6">Détails de la mission</a>
                            </div>
                        </div>
                    <?php
                    }
                ?>         
            </div>
        </div>

        <a href="liste_mission.php" class="btn btnGreen w-100 my-3">Retour à la liste des missions</a>
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>
