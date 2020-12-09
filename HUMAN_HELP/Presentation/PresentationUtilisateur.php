<?php 

function head()
{
    ?>
    <?php include("../head.php"); ?>
    <script src="../Assets/jquery-3.5.1.min.js"></script>
    <script src="../Assets/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../Assets/style.css">
    <link rel="stylesheet" type="text/css" href="../Assets/styleAurel.css">
    <link rel="stylesheet" type="text/css" href="../Assets/styleSamir.css">
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

function connexion() 
{
    echo afficher();
    ?> 
    <div class="container col-12 col-md-6 col-lg-4 pt-2 my-5 border rounded">

        <form class="form-signin m-auto text-center p-3 formConnexion" action="UtilisateurController.php?action=connexion" method="POST">

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
}

function formulairesUtilisateur(string $title,$utilisateur,string $titleBtn,string $action)
{
    echo afficher();
    ?>
    <body>
        <?php
        include("../Templates/Bases/navbarDev.php");

        include("../Templates/Bases/navbar.php");
        
        ?>
        <div class="col-12 col-md-5 container pt-4 my-4 border rounded">

            ​<h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

            ​<form class="form p-3" action="UtilisateurController.php?action=<?php echo $action; ?>" method="POST" novalidate>
                        ​
                <hr class="mb-4 mt-2">

                <div class="d-block mb-3 form-group">
                    <label for="idRole">Role</label>
                    <div class="row">
                        <div class="custom-control custom-radio mx-4">
                            <input name="idRole" value="1" id="particulier" type="radio" class="custom-control-input" checked required>
                            <label for="particulier" class="custom-control-label">Particulier</label>
                        </div>
                        <div class="custom-control custom-radio mx-2">
                            <input name="idRole" value="2" id="Professionnel" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="professionnel">Professionnel</label>
                        </div>
                    </div>  
                </div>

                <div class="mb-3 form-group">
                    <label for="nomUtil">Nom</label>
                    <input type="text" class="form-control" name="nomUtil" placeholder="" value="<?php echo ($_GET['action'] == 'update') ? $mission->getNomUtilisateur() : ''; ?>" required>
                </div>
            ​
                <div class="mb-3 form-group">
                    <label for="prenom">prénom</label>
                    <input type="text" class="form-control" name="prenomUtil" placeholder="" value="<?php echo ($_GET['action'] == 'update') ? $mission->getPrenomUtilisateur() : ''; ?>" required>
                </div>   

                <div class="mb-3 form-group">
                    <label for="dateNaissance">Date de naissance</label>
                    <div class="input-group date"  data-provide="datepicker">
                        <input type="date" class="form-control" name="dateNaissance" placeholder="jj/mm/aaaa" value="<?php if(($_GET['action']) == 'update'){echo $utilisateur->getDateNaissance();}?>" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                        
                <div class="mb-3 form-group">
                    <label for="mailUtil">email</label>
                    <input type="email" name="mailUtil" value="<?php if(($_GET['action']) == 'update'){echo $utilisateur->getEmailUtil();}?>" class="form-control" id="emailUser" aria-describedby="emailHelp" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
                </div>

                <div class="mb-3 form-group">
                    <label for="passwordUtil">Mot de passe</label>
                    <input type="password" name="passwordUtil" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3 form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">se souvenirs de moi</label>
                </div>

                <div class="mb-3 form-group">
                    <label for="adresseUtil">Num et libellé de la voie</label>
                    <input type="text" class="form-control" name="adresseUtil" id="adresseUtil">
                </div>

                <div class="form-row">

                    <div class="col-md-6 mb-3 form-group">
                        <label for="villeUtil">Ville</label>
                        <input type="text" class="form-control" name="villeUtil" id="villeUtil" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="codePostalUtil">Code postal</label>
                        <input name="codePostalUtil" type="number" class="form-control" id="codePostalUtil" value="<?php echo ($_GET['action'] == 'update') ? $utilisateur->getCodePostalUtil() : ''; ?>" required>
                    </div>
                </div>

                <div class="col-12 col-md-6 form-group w-50 pl-3">
                    <label class="h-50" for="idPays">Pays concerné</label>
                    <select type="number" name="idPays" class="custom-select list-group d-block h-50 w-100" required>
                        <option class="list-group-item" value="">Choisissez...</option>
                        <option value="1" class="list-group-item">Maroc</option>
                        <option value="2" class="list-group-item">Gabon</option>
                        <option value="3" class="list-group-item">Somalie</option>
                        <option value="4" class="list-group-item">Egypte</option>
                        <option value="5" class="list-group-item">Mali</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="telUtil">Numéro de téléphone:</label>    ​
                    <input class="form-control" type="phone" id="phone" name="telUtil" value="<?php echo ($_GET['action'] == 'update') ? $utilisateur->getTelUtil() : ''; ?>">
                </div>  

                <hr class="mb-4 mt-4">
                
                <button class="btn btnGreen btn-lg btn-block mb-5 w-100 text-center mx-auto" type="submit"><?php echo $titleBtn;?></button>
                <div class="w-100 m-auto text-center">
                    <a href="../index.php" class="btn btn-primary w-100 text-center mx-auto">Retour à l'accueil</a>    
                </div>

            </form>
        </div>
        <?php      
        include("../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
<?php
}

function modifMotDePasse()
{
    echo afficher();
    ?>
    <body>
        <?php
        include("../Templates/Bases/navbarDev.php");

        include("../Templates/Bases/header.php");

        include("../Templates/Bases/navbar.php");
        ?>

        <div class="col-md-6 col-lg-4 container pt-2 my-5 border rounded">

        <form class="form-signin m-auto text-center p-3 formConnexion" action="../index.php" method="POST">

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
    <?php
}
