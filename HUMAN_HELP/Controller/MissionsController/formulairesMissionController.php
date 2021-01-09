<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start(); 
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Services/serviceTypeActivite.php");
require_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Presentation/PresentationMission.php");

if (isset($_GET['action'])) 
{ 
    $newTypeActivite = new ServiceTypeActivite();
    $newPays = new ServicePays();
    $allPays = $newPays->searchAll();
    $allTypeActivite = $newTypeActivite->searchAll();

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
        $idEtablissement = $mission->getIdEtablissement();

        echo formulairesMission($title,$mission,$titleBtn,$action,$idMission,$allPays,$allTypeActivite,$idEtablissement,$newPays,$newTypeActivite);
        die;
    } 
    else if ($_GET['action'] == 'add' && isset($_GET['idEtablissement'])) 
    {
        $title = "Ajout d'une mission";
        $titleBtn = 'ajouter la mission';
        $action = 'add';
        $idEtablissement = $_GET['idEtablissement'];

        echo formulairesMission($title,null,$titleBtn,$action,null,$allPays,$allTypeActivite,$idEtablissement,null,null);
        die;
    }
}