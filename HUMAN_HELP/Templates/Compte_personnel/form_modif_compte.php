<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Formulaire informations personnelles</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="col-12 col-md-5 container pt-4 my-4 border rounded">
    <div>
        <h2 class="text-center">modification des informations personnelles</h2>
    </div>
    <hr class="my-4">
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Nom :</label>
                <input type="text" class="form-control" placeholder="nom">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Prénom :</label>
                <input type="text" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Addresse Email :</label>
                <input type="email" class="form-control"  placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Numéro de téléphone :</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Date de naissance :</label>
                <input type="text" class="form-control" placeholder="jj/mm/aaaa">
              </div>
            <div>
            <h4>Adresse Postale :</h4>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-5 col-form-label "><small>Num, Libellé voie :</small></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control">
                </div>
                <label class="col-sm-5 col-form-label"><small>Code Postale :</small></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="colFormLabel">
                </div>
                <label class="col-sm-5 col-form-label"><small>Adresse Compl. :</small></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control">
                </div>
                <label class="col-sm-5 col-form-label"><small>Mot de passe :</small></label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="********">
                </div>
            </div>               
          </div>
    </form>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>
    