<?php 

function head()
{
    ?>
    <?php include("../head.php"); ?>
    <script src="../Assets/jquery-3.5.1.min.js"></script>
    <script src="Assets/script.js"></script>
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

function formulaireArticle(string $title,$article,string $titleBtn,string $action,int $idArticle=null)
{
    echo afficher();
    ?>
<body>
    <?php
    include("../Templates/Bases/navbarDev.php");

    include("../Templates/Bases/header.php");

    include("../Templates/Bases/navbar.php");
    ?>
    <div class="container col-12 col-md-6 pt-4 my-4 border rounded">

        <h2 class="text-center my-2 pb-2"><?php echo $title; ?></h2>

        <form class="needs-validation  p-3" action="/HUMAN_HELP//Controller/listeBlogController.php?action=<?php echo $action; ?>"method="POST" novalidate>
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
            
        </form>
    </div>
    <?php      
   include("../Templates/Bases/footer.php")
    ?>
</body>
</html>
<?php
}
?>
