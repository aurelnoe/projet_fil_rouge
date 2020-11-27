<?php
include_once("../../Controller/MissionsController/formParticipationMissionController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    
    <title>Formulaire de participation à une mission</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    //include("../Bases/navbar.php");
    ?>
    <div class="container col-12 col-md-6 pt-4 my-4 border rounded">

        <h1 class="my-3 text-center"><?php echo $mission->getTitreMission(); ?></h1>

        <form class="needs-validation p-3" action="../Autres/comment_ca_marche?action=participe&idMission=<?php echo $mission->getIdMission();?>" method="POST" novalidate>
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
    include("../Bases/footer.php") 
    ?>
</body>
</html>