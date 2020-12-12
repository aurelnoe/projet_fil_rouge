<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");
include_once("../../Presentation/PresentationBlog.php");


/************************** AJOUT ARTICLE ***************************/
if (!empty($_GET['action']) && isset($_GET['action'])) {

    if (!empty($_POST) && isset($_POST)) 
    {

        if ($_GET['action'] == 'add') 
        {
            // echo'<pre>';
            // var_dump($_POST);
            // echo '</pre>';
            $titreArticle = utf8_decode(htmlentities($_POST['titreArticle']));
            $descriptionArticle = htmlentities($_POST['descriptionArticle']);
            $dateArticle = htmlentities($_POST['dateArticle']);
            $dateAjoutArticle = date("Y-m-d");
            $imageArticle = is_null($_POST['imageArticle']) ? 'NULL' : htmlentities($_POST['imageArticle']);

            $article = new Blog();

            $article->setTitreArticle($titreArticle)
                ->setDescriptionArticle($descriptionArticle)
                ->setDateArticle($dateArticle)
                ->setDateAjout($dateAjoutArticle)
                ->setImageArticle($imageArticle);

            $newAdd = new ServiceBlog();
            $newAdd->add($article);
        }

        /************************** MODIFIE ARTICLE ***************************/
        else if ($_GET['action'] == 'update' && isset($_POST['idArticle'])) 
        {
            $idArticle = htmlentities($_POST['idArticle']);
            $titreArticle = utf8_decode(htmlentities($_POST['titreArticle']));
            $descriptionArticle = htmlentities($_POST['descriptionArticle']);
            $dateArticle = htmlentities($_POST['dateArticle']);
            $dateAjoutArticle = date("Y-m-d");
            $imageArticle = is_null($_POST['imageArticle']) ? 'NULL' : htmlentities($_POST['imageArticle']);

            $article = new Blog();

            $article->setIdArticle($idArticle)
                    ->setTitreArticle($titreArticle)
                    ->setDescriptionArticle($descriptionArticle)
                    ->setDateArticle($dateArticle)
                    ->setDateAjout($dateAjoutArticle)
                    ->setImageArticle($imageArticle);

            $newUpdate = new ServiceBlog();
            $newUpdate->update($article); //

        }
    }
    /**************************************** SUPPRIME ARTICLE ************************/
    elseif ($_GET['action'] == 'delete') {
        if (!empty($_GET['idArticle'])) {
            $delete = new ServiceBlog();
            $delete->delete($_GET['idArticle']);
        }
    }
}

/******************************************** Afficher tous les articles ***********************************************/
$service = new ServiceBlog();
$articles = $service->searchAll();


echo listeArticle($articles);
