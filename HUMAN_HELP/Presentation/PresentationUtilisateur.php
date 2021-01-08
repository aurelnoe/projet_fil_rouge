<?php 
require("../../Presentation/PresentationCommun.php");

function connexion($message=null,$errorCode=null) 
{
    if ($errorCode == 1081) {
        
        echo "<div class='alert alert-danger text-center'>$message</div>";
    }
    echo head();
    ?> 
    <?php
        include("../../Templates/Bases/navbarDev.php");
        include("../../Templates/Bases/navbar.php");
    ?>
    <body>
        <div class="container col-12 col-md-6 col-lg-4 pt-2 my-5 borderGreen rounded">

            <form class="form-signin m-auto text-center p-3 formConnexion" action="UtilisateurController.php?action=connexion" method="POST">

                <div class="logo1 m-auto"></div>

                <h2 class="my-3 font-weight-normal">Connectez vous</h2>

                <div class="form-label-group my-4">
                    <label for="mailUtil" class="sr-only">Adresse mail</label>
                    <input type="email" name="mailUtil" class="form-control m-auto w-75" placeholder="email@mail.com" required>
                </div>

                <div class="form-label-group my-4">
                    <label for="password" class="sr-only">Mot de passe</label>
                    <input type="password" name="password" class="form-control m-auto w-75" placeholder="mot de passe" required>
                </div>

                <button class="btn btnGreen btn-block mb-4 w-75" type="submit" value="Envoyer">Connexion</button>

            </form>
        </div>
        <?php      
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
<?php
}

function formulairesUtilisateur(string $title,$utilisateur=null,string $titleBtn,string $action,array $allPays=null)
{
    echo head();
    ?>
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");
        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="col-12 col-md-5 container my-4 borderGreen rounded">    
            
            ​<form class="form p-4" action="UtilisateurController.php?action=<?php echo $action; ?>" method="POST" novalidate>
                ​<h2 class="text-center pb-2"><?php echo $title; ?></h2>
                        ​
                <hr class="mb-4">

                <div class="d-block mb-2 form-group">
                    <label for="idRole">Role</label>
                    <div class="row">
                        <div class="custom-control col-4 col-md-3 custom-radio mx-4">
                            <input name="idRole" value="1" id="particulier" type="radio" class="custom-control-input">
                            <label for="particulier" class="custom-control-label">Particulier</label>
                        </div>
                        <div class="custom-control col-4 col-md-3 custom-radio mx-2">
                            <input name="idRole" value="2" id="professionnel" type="radio" class="custom-control-input">
                            <label for="professionnel" class="custom-control-label">Professionnel</label>
                        </div>
                    </div>  
                </div>

                <div class="form-group mb-0">
                    <label for="nomUtil">Nom</label>
                    <input type="text" class="form-control" name="nomUtil" placeholder="" value="<?php echo ($_GET['action'] == 'update') ? $mission->getNomUtilisateur() : ''; ?>" required>
                </div>
            ​
                <div class="mb-2 form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenomUtil" placeholder="" value="<?php echo ($_GET['action'] == 'update') ? $mission->getPrenomUtilisateur() : ''; ?>" required>
                </div>   

                <div class="mb-2 form-group">
                    <label for="dateNaissance">Date de naissance</label>
                    <div class="input-group date"  data-provide="datepicker">
                        <input type="date" class="form-control" name="dateNaissance" placeholder="jj/mm/aaaa" value="<?php if(($_GET['action']) == 'update'){echo $utilisateur->getDateNaissance();}?>" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                        
                <div class="mb-2 form-group">
                    <label for="mailUtil">email</label>
                    <input type="email" name="mailUtil" value="<?php if(($_GET['action']) == 'update'){echo $utilisateur->getEmailUtil();}?>" class="form-control" id="emailUser" aria-describedby="emailHelp" required pattern="^\w{2,}@\w{2,}\.\w{2,}$">
                </div>

                <div class="form-group">
                    <label for="telUtil">Numéro de téléphone:</label>    ​
                    <input class="form-control" type="phone" id="phone" name="telUtil" value="<?php echo ($_GET['action'] == 'update') ? $utilisateur->getTelUtil() : ''; ?>">
                </div>  

                <div class="mb-2 form-group">
                    <label for="passwordUtil">Mot de passe</label>
                    <input type="password" name="passwordUtil" class="form-control" id="password">
                </div>

                <div class="mb-2 form-group">
                    <label for="adresseUtil">Num et libellé de la voie</label>
                    <input type="text" class="form-control" name="adresseUtil" id="adresseUtil">
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-2 form-group">
                        <label for="villeUtil">Ville</label>
                        <input type="text" class="form-control" name="villeUtil" id="villeUtil" required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="codePostalUtil">Code postal</label>
                        <input name="codePostalUtil" type="number" class="form-control" id="codePostalUtil" value="<?php echo ($_GET['action'] == 'update') ? $utilisateur->getCodePostalUtil() : ''; ?>" required>
                    </div>
                </div>

                <div class="form-group col-12 col-md-6 w-50 pl-0">
                    <label class="h-50" for="idPays">
                        Pays de résidence
                    </label>
                    <select type="number" name="idPays" class="custom-select list-group d-block h-50 w-100" required>
                        <option class="list-group-item" value="<?php echo (($_GET['action']) == 'update') ? $mission->getIdPays() : '' ?>">
                            <?php echo (($_GET['action']) == 'update') ? $newPays->searchNameById($mission->getIdPays()) : 'Choisissez...' ?>
                        </option>
                        <?php foreach ($allPays as $pays) : ?>
                            <option value="<?php echo $pays->getIdPays(); ?>" class="list-group-item">
                                <?php echo $pays->getNomPays(); ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                    <div class="invalid-feedback">
                        Choisissez un pays valide.
                    </div>
                </div>

                <div class="mb-2 form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">se souvenirs de moi</label>
                </div>

                <hr class="mb-4 mt-4">
                
                <button class="btn btnGreen btn-lg btn-block mb-5 w-100 text-center mx-auto" type="submit">
                    <?php echo $titleBtn;?>
                </button>
                <div class="w-100 m-auto text-center">
                    <a href="../index.php" class="btn btn-primary w-100 text-center mx-auto">Retour à l'accueil</a>    
                </div>
            </form>
        </div>
        <?php      
        include("../../Templates/Bases/footer.php") 
        ?>
    </body>
    </html>
<?php
}

function modifMotDePasse()
{
    echo head();
    ?>
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
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


