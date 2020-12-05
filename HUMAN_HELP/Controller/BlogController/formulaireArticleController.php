<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");
include_once("../../Presentation/PresentationBlog.php");

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

        echo formulaireArticle($title,$Article,$titleBtn,$action,$idArticle);
        die;
    } 
    else if ($_GET['action'] == 'add') {
        $title = "Ajouter un article";
        $titleBtn = "ajouter l'article";
        $action = 'add';
        echo formulaireArticle($title,$affiche,$titleBtn,$action);
        die;
    }
}