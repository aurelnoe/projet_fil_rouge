<?php
function formulairesEtablissement(string $title,$etablissement=null,int $idEtablissement=null,int $idUtilisateur=null,array $allPays=null,string $titleBtn,string $action) 
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <?php include("../../head.php"); ?>
        </head> 
    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");
        ?>
        <div class="col-12 col-md-6 formEtablissement container p-4 mb-5 border rounded">

            <h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

            <form class="needs-validation p-3" action="/HUMAN_HELP/Controller/MissionsController/listeMissionProController.php?action=<?php echo $action; ?>" method="POST" novalidate>

                <input type="hidden" name="idEtablissement" value="<?php echo isset($idEtablissement) ? $idEtablissement : '' ?>">
                <input type="hidden" name="idUtilisateur" value="<?php echo isset($idUtilisateur) ? $idUtilisateur : $etablissement->getIdUtilisateur() ?>">

                <hr class="my-4">

                <div class="mb-3 form-group">
                    <label for="denomination">Dénomination de l'établissement</label>
                    <input type="text" class="form-control" name="denomination" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getDenomination();}?>">
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>
                <!--id_utilisateur à récupérer en GET apres connexion avant ajout -->
                
                <div class="mb-3 form-group">
                    <label for="mailEtablissement">Adresse mail</label>
                    <input name="mailEtablissement" type="mail" class="form-control" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getMailEtablissement();}?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div> 
                <div class="mb-3 form-group">
                    <label for="telEtablissement">Téléphone</label>
                    <input name="telEtablissement" type="number" class="form-control" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getTelEtablissement();}?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div> 
                <div class="mb-3 form-group">
                    <label for="adresseEtablissement">Numéro et libellé de la voie</label>
                    <input type="text" class="form-control" name="adresseEtablissement" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getAdresseEtablissement();}?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div> 
                <div class="row">
                    <div class="col-12 col-md-5 form-group">
                        <label for="villeEtablissement">Ville</label>
                        <input type="text" class="form-control" name="villeEtablissement" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getVilleEtablissement();}?>" required>
                        <div class="invalid-feedback">
                            Ce champ est requis.
                        </div>
                    </div> 
                    <div class="col-12 offset-md-2 col-md-5 form-group">
                        <label for="code_postalEtablissement">Code postal</label>
                        <input type="number" class="form-control" name="codePostalEtablissement" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $etablissement->getCodePostalEtablissement();}?>" required>
                        <div class="invalid-feedback">
                            Ce champ est requis.
                        </div>
                    </div>            
                </div>
                <div class="row p-0 mb-3">
                    <div class="form-group col-12 col-md-6 w-50 pl-3">
                        <label class="h-50" for="idPays">Pays concerné</label>
                        <select type="number" name="idPays" class="custom-select list-group d-block h-50 w-100" required>
                            <option class="list-group-item" value="">Choisissez...</option>
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
                </div>
                
                <hr class="mb-4 mt-4">
                
                <button class="btn btnGreen btn-lg btn-block mb-5" type="submit"><?php echo $titleBtn;?></button>
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