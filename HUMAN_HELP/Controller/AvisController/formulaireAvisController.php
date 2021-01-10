<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Services/ServiceAvis.php");
include_once(PATH_BASE . "/Services/ServiceBlog.php");
include_once(PATH_BASE . "Presentation/PresentationBlog.php");

if (isset($_GET['action'])) 
{ 
    $newAvis = new ServiceAvis();
    $newArticle = new ServiceBlog();

    if ($_GET['action'] == 'update' && isset($_GET['idAvis'])) 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
       try{
            $avis = $newAvis->searchById($_GET['idAvis']);
            $article = $newArticle->searchById($_GET['idArticle']); 
            $idArticle = $_GET['idArticle'];
            $idAvis = $_GET['idAvis'];
            $temoignage=$avis->getTemoignage();

            echo detailArticle($article,$avis,$temoignage);
       }
       catch (ServiceException $se) {
        header('Location: ../../index.php');
        }
        
        
        // var_dump($avis);
        // $title = 'Modifier commentaire';
        // $titleBtn = 'Modifier le commentaire';
        // $action = 'update';
       
    } 
    // else if ($_GET['action'] == 'add') {
    //     $title = "Ajout d'un commentaire";
    //     $titleBtn = 'ajouter le commentaire';
    //     $action = 'add';
       
    //     echo FormulaireAvis();
    //     die;
    // }
}