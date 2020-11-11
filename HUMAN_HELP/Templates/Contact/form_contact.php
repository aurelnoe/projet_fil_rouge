<!DOCTYPE html>
<html lang="en">    
<head>
    <?php include("../../head.php"); ?>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleMoh.css">
    <title>Formulaire de contact</title>
</head>
<body>
    <?php
    include("../Bases/navbarDev.php");

    include("../Bases/header.php");

    include("../Bases/navbar.php");
    ?>
    <div class="col-12 col-md-6 col-lg-4 container p-4 my-4 border rounded">

            <h2 class="text-center my-2 pb-2">Formulaire de contact</h2>

            <form class="needs-validation p-3" action="" method="POST" novalidate>

                <hr class="mb-4 mt-2">

                <div class="mb-3 form-group">
                    <label for="ContactEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-auto mb-3 w-100">
                    <input type="email" class="form-control" id="ContactEmail" placeholder="Email" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
                    </div>
                </div>
                <div class="mb-3 form-group">
                    <div class="col-auto mb-2 w-100">
                        <label for="nomContact">Nom</label>
                        <input  name="nomContact" placeholder="Nom" class="form-control"  type="text" required> 
                    </div>
                </div>   
                <div class="mb-3 form-group">
                    <div class="col-auto mb-3 w-100">
                        <label for="prenomContact">Prénom</label>
                        <input  name="prenomContact" placeholder="Prénom" class="form-control"  type="text" required> 
                    </div>
                </div>            
                <div class="col-auto mb-3 w-50 form-group">
                        <label for="country">Pays</label>
                        <select class="custom-select d-block w-100" name="country" required>
                        <option value="">Choisissez...</option>
                        <option>France</option>
                        <option>Belgique</option>
                        <option>Suisse</option>
                        <option>Espagne</option>
                        <option>Italie</option>
                        </select>
                        <div class="invalid-feedback">
                        Choisissez un pays valide.
                        </div>
                </div>            
                <div class="col-auto mb-3 w-100">
                        <label for="NumContact">Téléphone</label>
                        <input class="form-control" type="tel" id="NumContact" name="NumContact" placeholder="Tél" required pattern="^0(6|7)[0-9]{8}$">
                </div>           
                <div class="mb-3 form-group">
                    <div class="col-auto mb-2 w-100">
                        <label for="objetContact">Objet</label>
                        <input  name="objetContact" placeholder="Objet" class="form-control"  type="text" required> 
                    </div>
                </div>
                <div class="d-block mb-3 form-group">
                    <label for="messageContact">Message</label>
                    <textarea type="textarea" class="form-control" name="messageContact" placeholder="Message"></textarea>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>

                <hr class="my-4">
                
                <button class="btn btnGreen btn-lg btn-block mb-5" type="submit">Nous contacter</button>
        </form>   
    </div>
    <?php      
    include("../Bases/footer.php") 
    ?>
</body>
</html>
