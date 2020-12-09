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

function formulaireArticle(string $title,$article,string $titleBtn,string $action,int $idArticle=null)
{
    echo afficher();
    ?>
<body>
    <?php
    include("../../Templates/Bases/navbarDev.php");

    include("../../Templates/Bases/header.php");

    include("../../Templates/Bases/navbar.php");
    ?>
    <div class="container col-12 col-md-6 pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

        <form class="needs-validation  p-3" action="/HUMAN_HELP//Controller/BlogController/listeBlogController.php?action=<?php echo $action; ?>"method="POST" novalidate>
        <input type="hidden" name="idArticle" value="<?php echo isset($idArticle) ? $idArticle : '' ?>">

            <hr class="mb-4 mt-2">

            <div class="mb-3 form-group">
                <label for="titleArticle">Titre de l'article</label>
                <input type="text" class="form-control" name="titreArticle" placeholder="" value="<?php if(($_GET['action']) == 'update'){echo $article->getTitreArticle();}?>"required>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <div class="mb-3 form-group">
                <label for="descriptionArticle">Description de l'article</label>
                <textarea type="textarea" class="form-control" name="descriptionArticle" placeholder=""><?php echo ($_GET['action'] == 'update') ? $mission->getDescriptionArticle() : ''; ?></textarea>
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
                <div class="input-group date"  data-provide="datepicker">
                    <input type="date" class="form-control" name="dateArticle" placeholder="jj/mm/aaaa" value="<?php echo ($_GET['action'] == 'update') ? $mission->getDateArticle()->format('Y-m-d') : ''; ?>" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="invalid-feedback">
                    Ce champ est requis.
                </div>
            </div>

            <hr class="mb-4 mt-4">

            <button class="btn btnGreen btn-lg btn-block mb-5" type="submit"><?php echo $titleBtn;?></button>
            <a href="" class="btn btn-primary w-100">Retour à la liste des articles</a>
        </form>
    </div>
    <?php      
   include("../../Templates/Bases/footer.php")
    ?>
</body>
</html>
<?php
}

function listeArticle($articles)
{
    echo afficher();
    ?>
<body>
    <?php
    include("../../Templates/Bases/navbarDev.php");

    include("../../Templates/Bases/header.php");

    include("../../Templates/Bases/navbar.php");
    ?>
<div class="container">
        <h2 class="text-center my-4">Liste des articles</h2>
            <?php 
                
                foreach($articles as $article)
                {
            ?>
        <div class="card cardBorder m-auto px-0 col-12 my-5">
            <div class="row card-body">
            
                <div class="col-12 col-md-6">
                    <img class="card-img-top" src="\HUMAN_HELP\images\enseignementViet.jpg" width="" height="" alt="Card image">
                    <hr class="my-2">
                </div>
                
                <div class="col-12 col-md-6">
                    <h4>Date :  <?php echo $article->getDateArticle()->format('d-m-Y'); ?> </h4>
                    <hr class="my-2">
                    <div>
                        <h4>Description</h4> 
                        <p><?php echo $article->getDescriptionArticle(); ?> 
                        </p>
                    </div>
                </div>
            
            </div>
            
            <div class="card-footer text-center w-100">
                <h4 class="card-title"><?php echo $article->getTitreArticle()?></h4>
                <div class="m-auto">
                <a href="/HUMAN_HELP/Controller/BlogController/detailsBlogController.php?idArticle=<?php echo $article->getIdArticle(); ?>"  class="btn btnGreen w-50">Lire l'article</a>
                </div>
            </div>
        </div>

        <hr class="my-4">

       <?php
                }
            ?>
    </div>
    <?php      
    include("../../Templates/Bases/footer.php") 
    ?>
</body>
</html>
<?php 
}
?>