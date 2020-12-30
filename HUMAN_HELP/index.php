<?php
include_once("Controller/UtilisateurController.php");
include_once("Presentation/PresentationAccueil.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");
?>
<!DOCTYPE html>
<html lang="en">    
<head>
    <link rel="stylesheet" type="text/css" href="Assets/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="Assets/styleMoh.css">
    <?php include("head.php"); ?>
</head>
<body>
    <?php
    include("Templates/Bases/navbarDev.php");

    include("Templates/Bases/navbar.php");
    ?>
    <head><title>ACCUEIL</title></head>

    <?php 
    $service = new ServiceBlog(); 
    $articles = $service->searchAll();
    echo accueil($articles); ?>

<?php      
include("Templates/Bases/footer.php") 
?>
</body>
</html>