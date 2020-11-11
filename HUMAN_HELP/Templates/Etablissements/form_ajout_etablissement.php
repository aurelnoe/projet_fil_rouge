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

        <h2 class="text-center my-2 pb-2">Ajouter un établissement</h2>

        <form class="needs-validation p-3" action="/HUMAN_HELP/Templates/list_mission_pro.php?action=add" method="POST" novalidate>

            <hr class="my-4">

            <div class="mb-3 form-group">
                <label for="id_etablissement">Dénomination de l'établissement</label>
                <input type="text" class="form-control" name="denomination" placeholder="" value="">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <!--id_utilisateur à récupérer en GET apres connexion avant ajout -->
            <div class="mb-3 form-group">
                <label for="adresse_etablissement">Numéro et libellé de la voie</label>
                <input type="text" class="form-control" name="adresse_etablissement" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div> 
            <div class="row">
                <div class="col-12 col-md-5 form-group">
                    <label for="ville_etablissement">Ville</label>
                    <input type="text" class="form-control" name="ville_etablissement" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div> 
                <div class="col-12 offset-md-2 col-md-5 form-group">
                    <label for="code_postal_etablissement">Code postal</label>
                    <input type="number" class="form-control" name="code_postal_etablissement" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>            
            </div>
            <div class="mb-3 form-group">
                <label for="mail_etablissement">Adresse mail</label>
                <input type="mail" class="form-control" name="mail_etablissement" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div> 
            <div class="mb-3 form-group">
                <label for="tel_etablissement">Téléphone</label>
                <input type="number" class="form-control" name="tel_etablissement" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div> 
            <div class="row p-0 mb-3">
                <div class="col-12 col-md-5 form-group">
                    <label class="h-50" for="id_pays">Pays</label>
                    <select class="list-group custom-select d-block h-50" required>
                    <option class="list-group-item" value="">Choisissez...</option>
                    <option name="id_pays" value=1 class="list-group-item">Maroc</option>
                    <option name="id_pays" value=2 class="list-group-item">Gabon</option>
                    <option name="id_pays" value=3 class="list-group-item">Somalie</option>
                    <option name="id_pays" value=4 class="list-group-item">Egypte</option>
                    <option name="id_pays" value=5 class="list-group-item">Mali</option>
                    </select>
                    <div class="invalid-feedback">
                    Choisissez un pays valide.
                    </div>
                </div>
                
                <div class="form-group col-12 offset-md-2 col-md-5 ">
                    <label class=" h-50" for="id_type_activite">Type d'activité</label>
                    <select class="list-group custom-select d-block h-50" name="id_type_activite" required>
                        <option class="list-group-item" value="">Choisissez...</option>
                        <option name="id_type_activite" value=1 class="list-group-item">Médecine</option>
                        <option name="id_type_activite" value=2 class="list-group-item">Donations</option>
                        <option name="id_type_activite" value=3 class="list-group-item">Enseignement</option>
                        <option name="id_type_activite" value=4 class="list-group-item">Formation</option>
                        <option name="id_type_activite" value=5 class="list-group-item">Informatique</option>
                        <option name="id_type_activite" value=6 class="list-group-item">Traduction</option>
                        <option name="id_type_activite" value=7 class="list-group-item">Sportive</option>
                        <option name="id_type_activite" value=8 class="list-group-item">Aide juridique</option>
                        <option name="id_type_activite" value=9 class="list-group-item">Soutient psychologique</option>
                    </select>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
            </div>
            
            <hr class="mb-4 mt-4">
            
            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Ajouter un établissement</button>
        </form>   
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>