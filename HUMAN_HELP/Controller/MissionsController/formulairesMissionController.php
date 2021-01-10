<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start(); 
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Services/serviceTypeActivite.php");
require_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Exceptions/ServiceException.php");
include_once(PATH_BASE . "/Presentation/PresentationMission.php");
$_GET = array_map('htmlentities',$_GET); 
$_COOKIE = array_map('htmlentities',$_COOKIE);
$_REQUEST = array_map('htmlentities',$_REQUEST);
$_POST = array_map('htmlentities',$_POST);
if (isset($_GET['action'])) 
{ 
    $newTypeActivite = new ServiceTypeActivite();
    $newPays = new ServicePays();
    $allPays = $newPays->searchAll();
    $allTypeActivite = $newTypeActivite->searchAll();

    if ($_GET['action'] == 'update' && isset($_GET['idMission'])) 
    {  
        try {
            $newMission = new ServiceMission();
            $mission = $newMission->searchById($_GET['idMission']);
            
            $title = 'Modification de la mission';
            $titleBtn = 'Modifier la mission';
            $action = 'update';
            $idMission = $_GET['idMission'];
            $idEtablissement = $mission->getIdEtablissement();
            $professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';
            if ($professionnel) {
                echo formulairesMission($title,$mission,$titleBtn,$action,$idMission,$allPays,$allTypeActivite,$idEtablissement,$newPays,$newTypeActivite);
                die;         
            }else {
                header("Location: ../UtilisateurController/FormulairesUtilisateurController.php?action=formAjout");
                die;
            }
        } 
        catch (ServiceException $se) {
            $newMission = new ServiceMission();
            $mission = $newMission->searchById($_GET['idMission']);
            
            $title = 'Modification de la mission';
            $titleBtn = 'Modifier la mission';
            $action = 'update';
            $idMission = $_GET['idMission'];
            $idEtablissement = $mission->getIdEtablissement();
            $professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';
            if ($professionnel) {
                echo formulairesMission($title,$mission,$titleBtn,$action,$idMission,$allPays,$allTypeActivite,$idEtablissement,$newPays,$newTypeActivite,$se->getCode());
                die;         
            }else {
                header("Location: ../UtilisateurController/FormulairesUtilisateurController.php?action=formAjout");
                die;
            }
        }
    } 
    else if ($_GET['action'] == 'add' && isset($_GET['idEtablissement'])) 
    {
        try {
            $title = "Ajout d'une mission";
            $titleBtn = 'ajouter la mission';
            $action = 'add';
            $idEtablissement = $_GET['idEtablissement'];
    
            echo formulairesMission($title,null,$titleBtn,$action,null,$allPays,$allTypeActivite,$idEtablissement,null,null);
            die;
            
        } catch (ServiceException $se) {
            $title = "Ajout d'une mission";
            $titleBtn = 'ajouter la mission';
            $action = 'add';
            $idEtablissement = $_GET['idEtablissement'];
    
            echo formulairesMission($title,null,$titleBtn,$action,null,$allPays,$allTypeActivite,$idEtablissement,null,null,$se->getCode());
            die;
        }
    }
}