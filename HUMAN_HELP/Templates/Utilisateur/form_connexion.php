<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Connexion</title>
</head>

<body>
    <?php
        include("../Bases/navbarDev.php");

        include("../Bases/header.php");

        include("../Bases/navbar.php");
    ?>
    <div class="container col-12 col-md-6 col-lg-4 pt-2 my-5 border rounded">

        <form class="form-signin m-auto text-center p-3 formConnexion" action="" method="POST">

            <div class="logo1 m-auto"></div>

            <h2 class="my-3 font-weight-normal">Connectez vous</h2>

            <div class="form-label-group my-4">
                <label for="mail" class="sr-only">Adresse mail</label>
                <input type="email" name="mail" class="form-control m-auto w-75" placeholder="email@mail.com" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
            </div>

            <div class="form-label-group my-4">
                <label for="password" class="sr-only">Mot de passe</label>
                <input type="password" name="password" class="form-control m-auto w-75" placeholder="mot de passe" required>
            </div>

            <button class="btn btnGreen btn-block mb-4 w-75" type="submit" value="Envoyer">Connexion</button>

        </form>
        
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>
