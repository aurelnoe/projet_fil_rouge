<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("head.php"); ?>
</head>
<body>
    <?php    
    include("Templates/Bases/navbarDev.php");

    include("Templates/Bases/header.php");
    
    if (empty($_GET['q'])) {
        include("Templates/Bases/accueil.php");        
    }
    else {
        include(getcwd().'/Templates/'.$_GET['q'].'.php');
    }    
           
    include("Templates/Bases/footer.php") 
    ?>
</body>
</html>