<?php
include_once("../../Controller/EtablissementsController/formulaireEtablissementController.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Formulaire ajout établissement</title>
    
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="col-12 col-md-6 container p-4 my-5 border rounded">

        <h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

        <form class="needs-validation p-3" action="/HUMAN_HELP/Templates/Missions/liste_mission_pro.php?action=<?php echo $action; ?>" method="POST" novalidate>

            <input type="hidden" name="idEtablissement" value="<?php echo isset($idEtablissement) ? $idEtablissement : '' ?>">
            <hr class="my-4">

            <div class="mb-3 form-group">
                <label for="denomination">Dénomination de l'établissement</label>
                <input type="text" class="form-control" name="denomination" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getDenomination();}?>">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <!--id_utilisateur à récupérer en GET apres connexion avant ajout -->
            <div class="mb-3 form-group">
                <label for="adresseEtablissement">Numéro et libellé de la voie</label>
                <input type="text" class="form-control" name="adresseEtablissement" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getAdresseEtablissement();}?>" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div> 
            <div class="row">
                <div class="col-12 col-md-5 form-group">
                    <label for="villeEtablissement">Ville</label>
                    <input type="text" class="form-control" name="villeEtablissement" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getVilleEtablissement();}?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div> 
                <div class="col-12 offset-md-2 col-md-5 form-group">
                    <label for="code_postalEtablissement">Code postal</label>
                    <input type="number" class="form-control" name="codePostalEtablissement" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getCodePostalEtablissement();}?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>            
            </div>
            <div class="mb-3 form-group">
                <label for="mailEtablissement">Adresse mail</label>
                <input name="mailEtablissement" type="mail" class="form-control" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getMailEtablissement();}?>" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div> 
            <div class="mb-3 form-group">
                <label for="telEtablissement">Téléphone</label>
                <input name="telEtablissement" type="number" class="form-control" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getTelEtablissement();}?>" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div> 
            <div class="row p-0 mb-3">
                <div class="form-group col-12 col-md-5">
                    <label class="h-50" for="id_pays">Pays</label>
                    <select name="idPays" class="list-group custom-select d-block h-50" required>
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
                
                <div class="form-group col-12 offset-md-2 col-md-5 ">
                    <label for="idUtilisateur" class=" h-50">Identifiant du professionnel</label>
                    <input name="idUtilisateur" type="number" class="form-control">
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
            </div>
            
            <hr class="mb-4 mt-4">
            
            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit"><?php echo $titleBtn;?></button>
        </form>   
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>