<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Controller/AvisController/formulaireAvisController.php");
require("../../Presentation/PresentationCommun.php");

function formulaireArticle(string $title, $article=null, string $titleBtn, string $action, int $idArticle = null)
{
    echo head();
?>

    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container col-12 col-md-6 pt-4 my-4 border rounded">

            <h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

            <form class="needs-validation  p-3" action="/HUMAN_HELP//Controller/BlogController/listeBlogController.php?action=<?php echo $action; ?>" method="POST" novalidate>
                <input type="hidden" name="idArticle" value="<?php echo isset($idArticle) ? $idArticle : '' ?>">

                <hr class="mb-4 mt-2">

                <div class="mb-3 form-group">
                    <label for="titleArticle">Titre de l'article</label>
                    <input type="text" class="form-control" name="titreArticle" placeholder="" value="<?php if (($_GET['action']) == 'update') {
                                                                                                            echo $article->getTitreArticle();
                                                                                                        } ?>" required>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>

                <div class="mb-3 form-group">
                    <label for="descriptionArticle">Description de l'article</label>
                    <textarea type="textarea" class="form-control" name="descriptionArticle" placeholder=""><?php echo ($_GET['action'] == 'update') ? $article->getDescriptionArticle() : ''; ?></textarea>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>

                <div class="mb-3 form-group">
                    <label for="imageArticle">Ajouter une image</label>
                    <input type="file" class="form-control-file" name="imageArticle" placeholder="" capture>
                </div>

                <div class="mb-3 form-group">
                    <label for="dateArticle">Date de l'article</label>
                    <div class="input-group date" data-provide="datepicker">
                        <input type="date" class="form-control" name="dateArticle" placeholder="jj/mm/aaaa" value="<?php echo ($_GET['action'] == 'update') ? $article->getDateArticle()->format('Y-m-d') : ''; ?>" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        Ce champ est requis.
                    </div>
                </div>

                <hr class="mb-4 mt-4">

                <button class="btn btnGreen btn-lg btn-block mb-5" type="submit"><?php echo $titleBtn; ?></button>
                <a href="listeBlogController.php" class="btn btn-primary w-100">Retour à la liste des articles</a>
            </form>
        </div>
        <?php
        include("../../Templates/Bases/footer.php")
        ?>
    </body>

    </html>
<?php
}

function listeArticle($articles,$admin)
{
    echo head();
?>

    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container">
            <h2 class="text-center my-4">Liste des articles</h2>
            <?php

            foreach ($articles as $article) {
            ?>
                <div class="card cardBorder m-auto px-0 col-12 my-5">
                    <div class="row card-body">

                        <div class="col-12 col-md-6">
                            <img class="card-img-top" src="\HUMAN_HELP\images\enseignementViet.jpg" width="" height="" alt="Card image">
                            <hr class="my-2">
                        </div>

                        <div class="col-12 col-md-6">
                            <h4>Date : <?php echo $article->getDateArticle()->format('d-m-Y'); ?> </h4>
                            <hr class="my-2">
                            <div>
                                <h4>Description</h4>
                                <p><?php echo $article->getDescriptionArticle(); ?>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-center w-100">
                        <h4 class="card-title"><?php echo $article->getTitreArticle() ?></h4>
                        <div class="m-auto my-1">
                            <a href="/HUMAN_HELP/Controller/BlogController/detailsBlogController.php?idArticle=<?php echo $article->getIdArticle(); ?>" class="btn btnGreen w-50">Lire l'article</a>
                        </div>
                        <?php if($admin){ ?>
                        <div class="m-auto">
                        <a href="/HUMAN_HELP/Controller/BlogController/listeBlogController.php?action=delete&idArticle=<?php echo $article->getIdArticle(); ?>" class="btn btn-danger w-50">Supprimer</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <hr class="my-4">

            <?php
            }
            ?>
        </div>
        <?php if($admin){ ?>
        <div class="col-10 col-md-6 m-auto">
            <a class="btn btnGreen w-100 mb-4" href="/HUMAN_HELP/Controller/BlogController/formulaireArticleController.php?action=add">Ajouter un nouvel article</a>
        </div>
        <?php } ?>
        <?php
        include("../../Templates/Bases/footer.php")
        ?>
    </body>

    </html>
<?php
}

function detailArticle($article,$avis,$temoignage=null,$admin=null)
{
    echo head();
?>

    <body>
        <?php
        include("../../Templates/Bases/navbarDev.php");

        include("../../Templates/Bases/navbar.php");
        ?>
        <div class="container">


            <h2 class="text-center my-5"><?php echo $article->getTitreArticle(); ?></h2>

            <div class="p-2">
                <p>
                    <?php echo $article->getDescriptionArticle(); ?>
                </p>
            </div>


            <hr class="my-4">

            <div class="row my-4 m-auto">
                <div class="*col-12 col-md-6 m-auto">
                    <h3>Description :</h3>
                    <p>
                        <?php echo $article->getDescriptionArticle(); ?>
                    </p>
                    <p>Date : <?php echo $article->getDateArticle()->format('d-m-Y'); ?> </p>
                </div>
                <div class="col-12 col-md-6 col-lg-5 m-auto p-0">
                    <img class="rounded border w-100" src="\HUMAN_HELP\images\informatiqueAfrique.jpg" height="360" width="420" alt="" />
                    <hr class="hrGreen">
                </div>
            </div>
           

            <hr class="my-4">

            <div class="text-center my-3">
                <a href="listeBlogController.php" class="btn btnGreen w-50">Retour à la liste des articles</a>
            </div>
            <?php if($admin){ ?>
            <div class="offset-4">
                <a href="/HUMAN_HELP/Controller/BlogController/formulaireArticleController.php?action=update&idArticle=<?php echo $article->getIdArticle(); ?>" class="btn btn-primary col-12 col-md-3 my-2 w-50">Modifier</a>
                <a href="/HUMAN_HELP/Controller/BlogController/listeBlogController.php?action=delete&idArticle=<?php echo $article->getIdArticle(); ?>" class="btn btn-danger col-12 col-md-3 my-2 w-50">Supprimer</a>
            </div> 
            <?php } ?>
            <?php 
                echo FormulaireAvis($article->getIdArticle(),$temoignage); 
                
                echo listeAvis($avis,$article->getIdArticle());
            
            
            ?>
        </div>

        </div>
        <?php
        include("../../Templates/Bases/footer.php")
        ?>
    </body>

    </html>
<?php
}

function FormulaireAvis(int $idArticle,$temoignage=null)
{
?>
    <div class="container col-12 col-md-10 pt-2 my-2 border rounded">

    <h2 class="text-center my-2 pb-2">Commenter l'article</h2>

        <form class="col-5 offset-3" action="/HUMAN_HELP//Controller/AvisController/listeAvisController.php?action=<?php  if ((!empty($temoignage))) { echo "update";}else{echo "add";} ?>&idArticle=<?php echo $idArticle; ?>" method="POST">
        <input type="hidden" name="idArticle" value="<?php echo $idArticle; ?>">
        <input type="hidden" name="auteur" value="TestAuteur2">
        <input type="hidden" name="dateCommentaire" value="<?php echo date("F j, Y, g:i a");?>">
        <input type="hidden" name="idUtilisateur" value="1">
        <textarea class="col mb-3 offset-2" name="temoignage" id="temoignage" placeholder="Ecrivez votre commentaire..."> <?php  if ((!empty($temoignage))) { echo $temoignage;} ?></textarea>
            <button class="btn btnGreen btn-lg btn-block mb-3 offset-2" type="submit">Poster un commentaire</button>
        </form>

    </div>
<?php
}
function listeAvis($avis,$idArticle)
{

?> 
<?php if(!empty($avis)){?>
<h1 style="font-size: 24px;">Commentaires : </h1>
<?php } ?>
    <div>
    <?php ?>
        <?php foreach ($avis as $commentaire){?>
        
            <?php $newTemoignage="";?>
            <div style="background: #eee ; border-radius:10px;">
                <p><span style="font-weight: bold;"> De <?php echo $commentaire->getAuteur(); ?> :</span><span id="modifTemoignage"> <?php echo $commentaire->getTemoignage(); ?></span> . </br> <span style="font-size:12px;"> Le <?php echo $commentaire->getDateCommentaire()->format('d-m-Y'); ?></span> </p>
            </div>
            <div>
            <a href="/HUMAN_HELP/Controller/AvisController/listeAvisController.php?action=delete&idAvis=<?php echo $commentaire->getIdAvis(); ?>&idArticle=<?php echo $idArticle; ?>" class="btn btn-danger w-25">Supprimer</a>
            <a href="/HUMAN_HELP/Controller/AvisController/listeAvisController.php?action=add&idAvis=<?php echo $commentaire->getIdAvis(); ?>&idArticle=<?php echo $idArticle; ?>&temoignage=<?php echo $newTemoigange; ; ?>" class="btn btn-success w-25">Modifier</a>
            </div>

            <hr class="my-4">

        <?php }?>

    </div>
    <script>
    
    var temoignage = document.getElementById("modifTemoignage");
    console.log(temoignage);
    
    temoignage.addEventListener('click', function (e){

        this.setAttribute('data-clicked','yes');
        this.setAttribute('data-text',this.innerHTML);

        var input = document.createElement("input");
            input.type = "text";
            input.value = this.innerHTML;         // garder la valeur de la cellule dans l'input
        
    

            input.onblur = function() {               // onblur éxécute le code quand la personne sort d'un input il y a aussi change et focusOut
            var temoignage = input.parentElement;
            var originalText = input.parentElement.getAttribute("data-text");
            var currentText = this.value;

            if(originalText != currentText) {
                temoignage.removeAttribute('data-clicked');
                temoignage.removeAttribute('data-text');
                temoignage.innerHTML = currentText;
            }
        }


        this.innerHTML = "";                      // clear la td quand on clique

        var myClickedElement = e.target;
        myClickedElement.appendChild(input);
        this.firstElementChild.select();          // select la valeur par défaut du input l'élément sélectonné
    })



</script>
<?php
}
?>

