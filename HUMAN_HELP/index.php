<?php
include_once("Controller/UtilisateurController.php");
include_once("Presentation/PresentationAccueil.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");

$service = new ServiceBlog(); 
$articles = $service->searchAll();

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
    echo accueil($articles); 
    ?>

<?php      
include("Templates/Bases/footer.php") 
?>
</body>
</html>