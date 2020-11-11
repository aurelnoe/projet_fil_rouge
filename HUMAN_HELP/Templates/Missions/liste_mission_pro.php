<?php
include("../../Controller/formAjoutMissionController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Liste mission pro</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="container">
        <h2 class="text-center">Liste de vos missions:</h2>

        <hr class="my-4">

        <div class="card-group w-100">
            <div class="row m-0 w-100">
                <div class="col-12 col-md-6 col-lg-5 m-auto my-1">
                    <div class="card cardListeMissionPro mx-auto">
                        <img src="\HUMAN_HELP\images\informatiqueAfrique.jpg" width="100" height="320" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Titre : Développement numérique</h5>
                            <p class="card-text">Type d'activité : informatique</p>
                            <p class="card-text">Pays : Ghana (Afrique)</p>
                            <p class="card-text">Date de début : 26 Mai 2021</p>
                        </div>
                        <div class="card-footer">
                            <div class="row m-auto">
                                <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary my-1 col-12 col-md-5 w-100">Voir la mission</a>
                                <form class="col-12 offset-md-2 col-md-5 p-0 my-1" action="?action=delete">
                                    <button type="submit" class="btn btn-danger w-100" onsubmit="">Supprimer</button>
                                </form>
                            </div>                    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 m-auto my-1">
                    <div class="card cardListeMissionPro mx-auto">
                        <img src="\HUMAN_HELP\images\enseignementViet.jpg" width="100" height="320" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Titre de la mission</h5>
                            <p class="card-text">Type d'activité :</p>
                            <p class="card-text">Pays :</p>
                            <p class="card-text">Date de début :</p>                      
                        </div>
                        <div class="card-footer">
                            <div class="row m-auto">
                                <a href="/HUMAN_HELP/Templates/Missions/details_mission.php" class="btn btn-primary my-1 col-12 col-md-5 w-100">Voir la mission</a>
                                <form class="col-12 offset-md-2 col-md-5 p-0 my-1" action="?action=delete" method="POST">
                                    <button type="submit" class="btn btn-danger w-100" onsubmit="">Supprimer</button>
                                </form>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>                     
        </div>

        <hr class="my-4">

        <div class="col-10 col-md-6 m-auto">
            <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/Templates/Missions/form_ajout_mission.php">Ajouter une nouvelle mission</a>
        </div>

    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>