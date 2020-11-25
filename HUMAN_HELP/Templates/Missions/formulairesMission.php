<?php
include("C:/xampp/htdocs/HUMAN_HELP/Controller/MissionsController/formulairesMissionController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Formulaire mission</title>
    
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    
    ?>
    <div class="col-12 col-md-6 container pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

        <form class="needs-validation p-3" action="/HUMAN_HELP/Templates/Missions/liste_mission_pro.php?action=<?php echo $action; ?>" method="POST" novalidate>
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
                    <option class="list-group-item">Choisissez...</option>
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
                <textarea type="textarea" class="form-control" name="descriptionMission" placeholder=""><?php if(($_GET['action']) == 'update'){echo $mission->getDescriptionMission();}?></textarea>
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
                    <input type="date" class="form-control" name="dateDebut" value="<?php if(($_GET['action']) == 'update') {echo $mission->getDateDebut()->format('Y-m-d');}?>">
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
                <input type="number" class="form-control" name="duree" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $mission->getDuree();}?>">
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
            <a href="liste_Mission.php" class="btn btn-primary w-100">Retour à la liste des missions</a>
        </form>   
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>