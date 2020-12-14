<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceAvis.php");
// include_once("../../Presentation/PresentationAvis.php");

if (isset($_GET['action'])) 
{

    if ($_GET['action'] == 'update' && isset($_GET['idAvis'])) 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newAvis = new ServiceAvis();
        $avis = $newAvis->searchById($_GET['idAvis']);
        
        $title = 'Modifier commentaire';
        $titleBtn = 'Modifier le commentaire';
        $action = 'update';
        $idAvis = $_GET['idAvis'];

        
        die;
    } 
    else if ($_GET['action'] == 'add') {
        $title = "Ajout d'un commentaire";
        $titleBtn = 'ajouter le commentaire';
        $action = 'add';
       

        die;
    }
}