
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
    <title>Formulaire d'ajout d'une mission</title>
    
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="col-12 col-md-6 container pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2">Ajouter une nouvelle mission</h2>

        <form class="needs-validation p-3" action="/HUMAN_HELP/Templates/Missions/liste_mission_pro.php?action=add" method="POST" novalidate>

            <hr class="mb-4 mt-2">

            <div class="mb-3 form-group">
                <label for="id_etablissement">Dénomination de l'établissement</label>
                <input type="text" class="form-control" name="id_etablissement" placeholder="" value="">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="title">Titre de la mission</label>
                <input type="text" class="form-control" name="titre_mission" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div> 
            <div class="row p-0 mb-3">
                <div class="col-12 col-md-6 form-group w-50 pl-3">
                    <label class="h-50" for="id_pays">Pays concerné</label>
                    <select class="custom-select list-group d-block h-50 w-100" required>
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
                
                <div class="col-12 col-md-6 w-50 form-group pl-3">
                    <label class=" h-50" for="id_type_activite">Type d'activité</label>
                    <select class="custom-select list-group d-block h-50 w-100" name="id_type_activite" required>
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
            <div class="mb-3 form-group">
                <label for="descriptionMission">Description de la mission</label>
                <textarea type="textarea" class="form-control" name="description_mission" placeholder=""></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="d-block mb-3 form-group">
                <label>Type de formation</label>
                <div class="row">
                    <div class="custom-control custom-radio mx-4">
                        <input name="type_formation" id="distance" value=0 type="radio" class="custom-control-input">
                        <label for="distance" class="custom-control-label">Distance</label>                       
                    </div>
                    <div class="custom-control custom-radio mx-2">
                        <input name="type_formation" id="terrain" value=1 type="radio" class="custom-control-input">
                        <label for="terrain" class="custom-control-label">Sur le terrain</label>                       
                    </div>
                </div>  
            </div>
            <div class="mb-3 form-group">
                <label for="date_debut">Date de début de la mission</label>
                <div class="input-group"  data-provide="datepicker">
                    <input type="date" class="form-control" name="date_debut" placeholder="jj/mm/aaaa" required>
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
                <input type="number" class="form-control" name="duree" placeholder="">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="mb-3 form-group">
                <label for="image_mission">Ajouter une image</label>
                <input type="file" class="form-control-file" name="image_mission" placeholder="" capture>
            </div>

            <hr class="mb-4 mt-4">
            
            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Ajouter une mission</button>
        </form>   
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>