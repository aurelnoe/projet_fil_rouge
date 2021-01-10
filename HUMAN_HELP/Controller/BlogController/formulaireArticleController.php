<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "Services/ServiceBlog.php");
include_once(PATH_BASE . "Presentation/PresentationBlog.php");

if (isset($_GET['action'])) 
{
    $newArticle = new ServiceBlog();

    if ($_GET['action'] == 'update' && isset($_GET['idArticle'])) 
    {  
        try{
             // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
            $article = $newArticle->searchById($_GET['idArticle']);
        
            $title = "Modification de l'article";
            $titleBtn = "Modifier l'article";
            $action = 'update';
            $idArticle = $_GET['idArticle'];
            $admin = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'admin';
            if($admin){
            echo formulaireArticle($title,$article,$titleBtn,$action,$idArticle); 
            }else{
                header('Location: ../../index.php');
            }
        }
        catch (ServiceException $se) {
            header('Location: ../../index.php');
        }
       
        
        
    } 
    else if ($_GET['action'] == 'add') {
        try{
             $title = "Ajouter un article";
            $titleBtn = "Ajouter l'article";
            $action = 'add';
            $admin = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'admin';
            if($admin){
                echo formulaireArticle($title,null,$titleBtn,$action);  
            }else{
                header('Location: ../../index.php');
            }
            
        }
        catch (ServiceException $se) {
            header('Location: ../../index.php');
        }
            
    }
}