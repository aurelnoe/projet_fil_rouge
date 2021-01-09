<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "Services/ServiceBlog.php");
include_once(PATH_BASE . "Presentation/PresentationBlog.php");

if (isset($_GET['action'])) 
{
    if ($_GET['action'] == 'update' && isset($_GET['idArticle'])) 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newArticle = new ServiceBlog();
        $article = $newArticle->searchById($_GET['idArticle']);
        
        $title = "Modification de l'article";
        $titleBtn = "Modifier l'article";
        $action = 'update';
        $idArticle = $_GET['idArticle'];

        echo formulaireArticle($title,$article,$titleBtn,$action,$idArticle);   
    } 
    else if ($_GET['action'] == 'add') {
        
        $title = "Ajouter un article";
        $titleBtn = "Ajouter l'article";
        $action = 'add';
        echo formulaireArticle($title,null,$titleBtn,$action);       
    }
}