<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Infos personnelles</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="container col-12 col-md-6 pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2">Ajouter une nouvelle actualité</h2>

        <form class="needs-validation  p-3" action="" method="POST" novalidate>

            <hr class="mb-4 mt-2">

            <div class="mb-3 form-group">
                <label for="titleArticle">Titre de l'article</label>
                <input type="text" class="form-control" name="titleArticle" placeholder="" value="" required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="row">
                <div class="col-auto mb-3 form-group w-100">
                    <label for="countryArticle">Pays concerné</label>
                    <select class="list-group custom-select d-block w-50" name="countryArticle" required>
                    <option class="list-group-item" value="">Choisissez...</option>
                    <option class="list-group-item">Mali</option>
                    <option class="list-group-item">Gabon</option>
                    <option class="list-group-item">Somalie</option>
                    <option class="list-group-item">Egypte</option>
                    <option class="list-group-item">Maroc</option>
                    </select>
                    <div class="invalid-feedback">
                        Choisissez un pays valide.
                    </div>
                </div>
            </div>

            <div class="mb-3 form-group">
                <label for="descriptionArticle">Description de l'article</label>
                <textarea type="textarea" class="form-control" name="descriptionArticle" placeholder=""></textarea>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="mb-3 form-group">
                <label for="imageArticle">Ajouter une image</label>
                <input type="file" class="form-control-file" name="imageArticle" placeholder="" capture>
            </div>

            <div class="mb-3 form-group">
                <label for="dateArticle">Date de l'article</label>
                <div class="input-group date"  data-provide="datepicker">
                    <input type="date" class="form-control" name="dateArticle" placeholder="jj/mm/aaaa" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <hr class="mb-4 mt-4">

            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Ajouter un article</button>
            
        </form>
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>

