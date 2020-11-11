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

    <div class="col-12 col-md-5 container pt-4 my-4 border rounded">
        <h2>Formulaire modification d'article</h2>
        <div class="form-group">
            <label for="usr">Titre de l'article :</label>
            <input type="text" class="form-control" id="modifier_titre">
        </div>
        <div class="form-group">
            <label for="comment">Phrase d'accroche :</label>
            <input type="text" class="form-control" id="accroche">
        </div>
        <div class="form-group">
            <label for="comment">Article :</label>
            <textarea class="form-control" rows="5" id="article"></textarea>
        </div></br>           
        <div class="form-group my-4">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>                
        <div class="row my-3">
            <div class="col-md-5"><button type="button" class="btn btn-success float-left">Enrengistrer un brouillon</button></div>
            <div class="col-md-3 offset-md-3"><button type="button" class="btn btn-success float-right">Réinitialiser</button></div>
        </div>
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>

        