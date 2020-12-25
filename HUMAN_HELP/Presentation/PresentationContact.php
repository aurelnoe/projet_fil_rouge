<?php

function head()
{
?>
    <?php include("../../head.php"); ?>
    <script src="../Assets/jquery-3.5.1.min.js"></script>
    <script src="Assets/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../../Assets/styleSamir.css">
<?php
}

function afficher()
{
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php echo head(); ?>
    </head>
<?php
}
function formulaireContact()
{
    echo afficher();
?>
 <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
    <div class="container col-12 col-md-6 pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2">Formulaire de contact</h2>

        <form class="needs-validation p-3" action="/HUMAN_HELP//Controller/ContactController/contactController.php?action=send" method="POST"" method="POST" novalidate>

            <hr class="mb-4 mt-2">

            <div class="mb-3 form-group">
                <label for="ContactEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-auto mb-3 w-100">
                    <input type="email" class="form-control" name="ContactEmail" placeholder="Email" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
                </div>
            </div>
            <div class="mb-3 form-group">
                <div class="col-auto mb-2 w-100">
                    <label for="nomContact">Nom</label>
                    <input name="nomContact" placeholder="Nom" class="form-control" type="text" required>
                </div>
            </div>
            <div class="mb-3 form-group">
                <div class="col-auto mb-3 w-100">
                    <label for="prenomContact">Prénom</label>
                    <input name="prenomContact" placeholder="Prénom" class="form-control" type="text" required>
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
                    <input name="objetContact" placeholder="Objet" class="form-control" type="text" required>
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
        include("../../Templates/Bases/footer.php")
        ?>
    </body>
    </html>
<?php
}
?>