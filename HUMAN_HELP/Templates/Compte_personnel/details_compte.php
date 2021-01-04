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

    include("../Bases/navbar.php");
    ?>
    <div class="container">
        <div>
            <h2>Détail des informations personnelles</h2> <!-- FAIRE UN UL LI -->
        </div>
        <hr class="my-4">
        <div class="row">
            <div class="col-sm-12 m-5">
                <h3>Mes coordonnées:</h3>
                <div class="row">
                    <div class="col-9 mr-auto">
                        <p>Civilité :</p>
                        <p>Nom :</p>
                        <p>Prénom :</p>
                        <p>Date de naissance :</p>
                        <p>Adresse mail :</p>
                        <p>Numéro de téléphone :</p>
                    </div></br>
                    <div class="col-3">
                        <p>Monsieur</p>
                        <p>Dupont</p>
                        <p>Jean-Marc</p>
                        <p>02/12/1980</p>
                        <p>jmdupont@mail.com</p>
                        <p>0607080990</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 m-5">
                <h3>Votre adresse :</h3>
                <div class="row">
                    <div class="col-9 mr-auto">
                        <p>Numéro, libellé de la voie :</p>
                        <p><?php //$utilisateur->getVilleUtil(); ?></p>
                        <p>Code postale :</p>
                        <p>Complément d'adresse :</p>
                    </div>
                    <div class="col-3">
                        <p>24, rue Lointaine</p>
                        <p>Paris</p>
                        <p>75000</p>
                        <p>-</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-4">
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>