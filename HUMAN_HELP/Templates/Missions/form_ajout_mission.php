<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla&display=swap" rel="stylesheet"> 

    <title>Formulaire d'ajout d'une mission</title>
</head>
<body>
<?php include("../Bases/navbar.php") ?>

    <div class="container w-25 pt-4 my-4 border rounded">

        <h2 class="pb-3">Ajouter une nouvelle mission</h2>

        <form class="needs-validation" action="" method="POST" novalidate>
            <div class="mb-3">
                <label for="denomination">Dénomination sociale</label>
                <input type="text" class="form-control" name="denomination" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="mb-3">
                <label for="title">Titre de la mission</label>
                <input type="text" class="form-control" name="title" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>          
            <div class="mb-3">
                <label for="email">Adresse mail</label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            <div class="row">
                <div class="col-auto mb-3 w-50">
                    <label for="country">Pays concerné</label>
                    <select class="custom-select d-block w-100" name="country" required>
                    <option value="">Choisissez...</option>
                    <option>Mali</option>
                    <option>Gabon</option>
                    <option>Somalie</option>
                    <option>Egypte</option>
                    <option>Maroc</option>
                    </select>
                    <div class="invalid-feedback">
                    Choisissez un pays valide.
                    </div>
                </div>
                <div class="col-auto mb-3 w-50">
                    <label for="activity">Type d'activité de la mission</label>
                    <select class="custom-select d-block w-100" name="activity" required>
                        <option value="">Choisissez...</option>
                        <option>Médecine</option>
                        <option>Enseignement</option>
                        <option>Donations</option>
                        <option>Traduction</option>
                        <option>Construction</option>
                        <option>Sportive</option>
                        <option>Aide juridique</option>
                        <option>Soutient psychologique</option>
                        <option>Aide administrative</option>
                    </select>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="descriptionMission">Description de la mission</label>
                <textarea type="textarea" class="form-control" name="descriptionMission" placeholder=""></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="d-block mb-3">
                <label>Type de formation</label>
                <div class="row">
                    <div class="custom-control custom-radio mx-4">
                        <input name="TypeForm" id="distance" type="radio" class="custom-control-input" checked required>
                        <label class="custom-control-label" for="distance">Distance</label>
                    </div>
                    <div class="custom-control custom-radio mx-2">
                        <input name="TypeForm" id="terrain" type="radio" class="custom-control-input" required>
                        <label class="custom-control-label" for="terrain">Sur le terrain</label>
                    </div>
                </div>  
            </div>

            <div class="mb-3">
                <label for="dateMission">Date de début de la mission</label>
                <div class="input-group date"  data-provide="datepicker">
                    <input type="date" class="form-control" name="dateMission" placeholder="jj/mm/aaaa" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="mb-3">
                <label for="dureeMission">Durée de la mission<span class="text-muted"> (en jour)</span></label>
                <input type="number" class="form-control" name="dureeMission" placeholder="">
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>
            <div class="mb-3">
                <label for="imageMission">Ajouter une image</label>
                <input type="file" class="form-control" name="imageMission" placeholder="" capture>
            </div>

            <hr class="mb-4 mt-4">
            <button class="btn btn-primary btn-lg btn-block mb-5" type="submit">Ajouter une mission</button>
        </form>
    </div>
</body>
</html>