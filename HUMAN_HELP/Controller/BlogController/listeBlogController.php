<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "Services/ServiceBlog.php");
include_once(PATH_BASE . "Presentation/PresentationBlog.php");

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
            try{
                 $newAdd->add($article);
            }
            catch (ServiceException $se) {
                header('Location: ../../index.php');
            }
           
        }
 
        /************************** MODIFIE ARTICLE ***************************/
        elseif ($_GET['action'] == 'update' && isset($_POST['idArticle'])) 
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
            try{
                $newUpdate->update($article); 
            }
            catch (ServiceException $se) {
                header('Location: ../../index.php');
            }
            
        }
    }
    /**************************************** SUPPRIME ARTICLE ************************/
    elseif ($_GET['action'] == 'delete') {
        if (!empty($_GET['idArticle'])) {
            $delete = new ServiceBlog();
            try{
                $admin = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'admin';
                if($admin){
                    $delete->delete($_GET['idArticle']);
                }else{
                    header('Location: ../../index.php');
                }
            }
            catch (ServiceException $se) {
                header('Location: ../../index.php');
            }
            
        }
    }
}

/******************************************** Afficher tous les articles ***********************************************/
$service = new ServiceBlog();
try{
    $articles = $service->searchAll();
    $admin = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'admin';
    echo listeArticle($articles,$admin);
}
catch (ServiceException $se) {
    header('Location: ../../index.php');
}

