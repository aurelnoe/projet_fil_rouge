<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");



/************************** AJOUT MISSION ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
    if ($_GET['action'] == 'add')
    {
        if (!empty($_POST) && isset($_POST)) 
        {
            // echo'<pre>';
            // var_dump($_POST);
            // echo '</pre>';
            $titreArticle = utf8_decode($_POST['titreArticle']);
            $descriptionArticle = $_POST['descriptionArticle'];
            $dateArticle = $_POST['dateArticle'];
            $dateAjoutArticle = date("Y-m-d"); 
            $imageArticle = is_null($_POST['imageArticle']) ? 'NULL' : $_POST['imageArticle'];

            $article = new Blog();

            $article->setTitreArticle($titreArticle)
                    ->setDescriptionArticle($descriptionArticle)
                    ->setDateArticle($dateArticle)
                    ->setDateAjout($dateAjoutArticle)
                    ->setImageArticle($setImageArticle);

            $newAdd = new ServiceBlog();
            $newAdd->add($article);
        }
    }
    /************************** MODIFIE MISSION ***************************/
    else if($_GET['action'] == 'update' && isset($_GET['idArticle']))
    {
        if(!empty($_POST) && isset($_POST))
        {
            $titreArticle = utf8_decode($_POST['titreArticle']);
            $descriptionArticle = $_POST['descriptionArticle'];
            $dateArticle = $_POST['dateArticle'];
            $dateAjoutArticle = date("Y-m-d"); 
            $imageArticle = is_null($_POST['imageArticle']) ? 'NULL' : $_POST['imageArticle'];

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
    /**************************************** SUPPRIME MISSION ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idArticle'])) 
        {      
            $delete = new ServiceBlog();        
            $delete->delete($_GET['idArticle']);  
        }
    }
}

/******************************************** Afficher toutes les missions ***********************************************/
    $service = new ServiceBlog(); 
    $Allarticle = $service->searchAll();
