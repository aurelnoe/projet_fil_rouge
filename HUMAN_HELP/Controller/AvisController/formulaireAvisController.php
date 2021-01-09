<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Services/ServiceAvis.php");
include_once(PATH_BASE . "/Services/ServiceBlog.php");
include_once(PATH_BASE . "Presentation/PresentationBlog.php");

if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'update' && isset($_GET['idAvis'])) 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newAvis = new ServiceAvis();
        $avis = $newAvis->searchById($_GET['idAvis']);

        $newArticle = new ServiceBlog();
        $article = $newArticle->searchById($_GET['idArticle']);
        
        var_dump($avis);
        // $title = 'Modifier commentaire';
        // $titleBtn = 'Modifier le commentaire';
        // $action = 'update';
        $idArticle = $_GET['idArticle'];
        $idAvis = $_GET['idAvis'];
        $temoignage=$avis->getTemoignage();

        echo detailArticle($article,$avis,$temoignage);
      
        die;
    } 
    // else if ($_GET['action'] == 'add') {
    //     $title = "Ajout d'un commentaire";
    //     $titleBtn = 'ajouter le commentaire';
    //     $action = 'add';
       
    //     echo FormulaireAvis();
    //     die;
    // }
}