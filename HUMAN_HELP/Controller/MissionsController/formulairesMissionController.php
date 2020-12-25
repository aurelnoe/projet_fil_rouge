<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("../../Services/ServiceTypeActivite.php");
require_once("../../Services/ServicePays.php");
include_once("../../Presentation/PresentationMission.php");

if (isset($_GET['action'])) 
{
    
    $newTypeActivite = new ServiceTypeActivite();
    $newPays = new ServicePays();

    if ($_GET['action'] == 'update' && isset($_GET['idMission'])) 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newMission = new ServiceMission();
        $mission = $newMission->searchById($_GET['idMission']);
        
        $title = 'Modification de la mission';
        $titleBtn = 'Modifier la mission';
        $action = 'update';
        $idMission = $_GET['idMission'];

        echo formulairesMission($title,$mission,$titleBtn,$action,$idMission,$newTypeActivite,$newPays);
        die;
    } 
    else if ($_GET['action'] == 'add') {
        $title = "Ajout d'une mission";
        $titleBtn = 'ajouter la mission';
        $action = 'add';
        echo formulairesMission($title,$affiche,$titleBtn,$action);
        die;
    }
}