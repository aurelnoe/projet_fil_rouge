<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceAvis.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");
include_once("../../Presentation/PresentationBlog.php");


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
            $newAdd->add($avis);

        }

       
        /************************** MODIFIE AVIS ***************************/
        elseif ($_GET['action'] == 'update' && isset($_POST['idArticle'])) 
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
            $newUpdate->update($avis); //

        }
    }
    /**************************************** SUPPRIME AVIS ************************/
    elseif ($_GET['action'] == 'delete') {
        if (!empty($_GET['idAvis'])) {
            $delete = new ServiceAvis();
            $delete->delete($_GET['idAvis']);

            $service = new ServiceBlog(); 
            $article = $service->searchById($_GET['idArticle']);
            $avisService = new ServiceAvis(); 
            $avis = $avisService->searchByIdArticle($_GET['idArticle']);
    
    echo detailArticle($article,$avis);
        }
    }
}

/******************************************** AFFICHER TOUS LES AVIS ***********************************************/
    
// $service = new ServiceAvis();
// $avis = $service->searchALL();


// echo listeAvis($avis);
    $service = new ServiceBlog(); 
    $article = $service->searchById($_GET['idArticle']);
    
    $avisService = new ServiceAvis(); 
    $avis = $avisService->searchByIdArticle($_GET['idArticle']);
    
    echo detailArticle($article,$avis);
