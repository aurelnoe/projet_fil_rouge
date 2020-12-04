<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");
include_once("../Presentation/PresentationBlog.php");


/************************** AJOUT ARTICLE ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
    if ($_GET['action'] == 'add')
    {
        if (!empty($_POST) && isset($_POST)) 
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
    }
    /************************** MODIFIE ARTICLE ***************************/
    else if($_GET['action'] == 'update' && isset($_GET['idArticle']))
    {
        if(!empty($_POST) && isset($_POST))
        {
            $titreArticle = utf8_decode(htmlentities($_POST['titreArticle']));
            $descriptionArticle = htmlentities($_POST['descriptionArticle']);
            $dateArticle = htmlentities($_POST['dateArticle']);
            $dateAjoutArticle = date("Y-m-d"); 
            $imageArticle = is_null($_POST['imageArticle']) ? 'NULL' : htmlentities($_POST['imageArticle']);

            $mission = new Mission();

            $article->setTitreArticle($titreArticle)
                    ->setDescriptionArticle($descriptionArticle)
                    ->setDateArticle($dateArticle)
                    ->setDateAjout($dateAjoutArticle)
                    ->setImageArticle($setImageArticle);

            $newUpdate = new ServiceBlog();
            $newUpdate->update($article);//,$idmission
        }
    }
    /**************************************** SUPPRIME ARTICLE ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idArticle'])) 
        {      
            $delete = new ServiceBlog();        
            $delete->delete($_GET['idArticle']);  
        }
    }
}

/******************************************** Afficher tous les articles ***********************************************/
    $service = new ServiceBlog(); 
    $Allarticle = $service->searchAll();
