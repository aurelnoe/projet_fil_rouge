<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Formulaire de modification du mot de passe</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>

    <div class="col-md-6 col-lg-4 container pt-2 my-5 border rounded">

    <form class="form-signin m-auto text-center p-3 formConnexion" action="../../Sources/recuperation.php" method="POST">

        <div class="logo1 mb-4"></div>

        <h1 class="h3 mb-3 font-weight-normal">Modifier votre mot de passe</h1>

        <div class="form-label-group mb-4">
            <label for="password" class="sr-only">Ancien mot de passe</label>
            <input type="password" name="password" class="form-control inputConnexion" placeholder="Ancien mot de passe" required>
        </div>

        <div class="form-label-group mb-4">
            <label for="newPassword" class="sr-only">Nouveau mot de passe</label>
            <input type="password" name="newPassword" class="form-control inputConnexion" placeholder="Nouveau mot de passe" required>
        </div>

        <div class="form-label-group mb-4">
            <label for="confirmPassword" class="sr-only">Confirmer mot de passe</label>
            <input type="password" name="confirmPassword" class="form-control inputConnexion" placeholder="Confirmer mot de passe" required>
        </div>

        <button class="btn btnGreen btn-block mb-4" type="submit" value="Envoyer">Enregistrement des modifications</button>

    </form>
        
    </div>

    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>

