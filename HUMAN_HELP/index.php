<!DOCTYPE html>
<html lang="en">
    
<head>
    <?php include("head.php"); ?>
</head>

<body>

    <?php include("Templates/Bases/navbarDev.php") ?>

    <?php include("Templates/Bases/header.php") ?>

    <?php include(getcwd().'/Templates/'.$_GET['q'].'.php') ?>
        
    <?php include("Templates/Bases/footer.php") ?>
    
</body>

</html>