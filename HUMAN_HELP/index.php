<?php
include_once("Controller/AccueilController.php");
include_once("Presentation/PresentationAccueil.php");

?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("head.php"); ?>
</head>
<body>
    <?php
    include("Templates/Bases/navbarDev.php");

    include("Templates/Bases/navbar.php");
    ?>
    <head><title>ACCUEIL</title></head>

    <?php 
    echo accueil($articles,$missionsADistance,$allMissions,$newTypeActivite,$newPays); 
    ?>

<?php      
include("Templates/Bases/footer.php") 
?>
</body>
</html>