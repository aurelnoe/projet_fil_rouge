<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Services/ServiceAvis.php");
include_once(PATH_BASE . "/Services/ServiceBlog.php");
include_once(PATH_BASE . "/Presentation/PresentationBlog.php");

/************************** AJOUT Avis ***************************/
if (!empty($_GET['action']) && isset($_GET['action'])) {

    if (!empty($_POST) && isset($_POST)) 
    {
        if ($_GET['action'] == 'add') 
        {
            // echo'<pre>';
            // var_dump($_POST);
            // echo '</pre>';
            $auteur = utf8_decode(htmlentities($_POST['auteur']));
            $temoignage = htmlentities($_POST['temoignage']);
            $dateCommentaire = date("Y-m-d");
            $idUtilisateur =  htmlentities($_POST['idUtilisateur']);
            $idArticle = htmlentities($_POST['idArticle']);

            $avis = new Avis();

            $avis->setAuteur($auteur)
                ->setTemoignage($temoignage)
                ->setDateCommentaire($dateCommentaire)
                ->setIdUtilisateur($idUtilisateur)
                ->setIdArticle($idArticle);

            $newAdd = new ServiceAvis();
            try{
                $newAdd->add($avis);
            }
            catch (ServiceException $se) {
                header('Location: ../../index.php');
            }
            
        }
        /************************** MODIFIE AVIS ***************************/
        elseif ($_GET['action'] == 'update' && isset($_POST['idAvis'])) 
        { 
            
            $idAvis = htmlentities($_POST['idAvis']);
            $auteur = utf8_decode(htmlentities($_POST['auteur']));
            $temoignage = htmlentities($_POST['temoignage']);
            $dateCommentaire = date("Y-m-d");
            $idUtilisateur =  htmlentities($_POST['idUtilisateur']);
            $idArticle = htmlentities($_POST['idArticle']);

            $avis = new Avis();

            $avis->setIdArticle($idAvis)
                    ->setAuteur($auteur)
                    ->setTemoignage($temoignage)
                    ->setDateCommentaire($dateCommentaire)
                    ->setIdUtilisateur($idUtilisateur)
                    ->setIdArticle($idArticle);

            $newUpdate = new ServiceAvis();
            $service = new ServiceBlog();  
            try{
                $newUpdate->update($avis); 
                $article = $service->searchById($_GET['idArticle']);
                echo detailArticle($article,$avis);
            }
            catch (ServiceException $se) {
                header('Location: ../../index.php');
            }
              
        }
    }
    /**************************************** SUPPRIME AVIS ************************/
    elseif ($_GET['action'] == 'delete') {
        if (!empty($_GET['idAvis'])) {
            $delete = new ServiceAvis();
            $delete->delete($_GET['idAvis']);

            $service = new ServiceBlog(); 
            $avisService = new ServiceAvis(); 
            try{
                $article = $service->searchById($_GET['idArticle']);
                $avis = $avisService->searchByIdArticle($_GET['idArticle']);
    
                echo detailArticle($article,$avis);
            }
            catch (ServiceException $se) {
                header('Location: ../../index.php');
            }
           
        }
    }
}

/******************************************** AFFICHER TOUS LES AVIS ***********************************************/
    
// $service = new ServiceAvis();
// $avis = $service->searchALL();
// echo listeAvis($avis);
    $service = new ServiceBlog(); 
    $avisService = new ServiceAvis();
    try{
        $article = $service->searchById($_GET['idArticle']);
        $avis = $avisService->searchByIdArticle($_GET['idArticle']);
        echo detailArticle($article,$avis);
    }
    catch (ServiceException $se) {
        header('Location: ../../index.php');
    }
    
     
    
    
    