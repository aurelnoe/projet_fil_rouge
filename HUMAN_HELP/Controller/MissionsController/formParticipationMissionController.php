<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Exceptions/ServiceException.php");
include_once(PATH_BASE . "/Presentation/PresentationMission.php");
$_GET = array_map('htmlentities',$_GET); 
$_COOKIE = array_map('htmlentities',$_COOKIE);
$_REQUEST = array_map('htmlentities',$_REQUEST);
$_POST = array_map('htmlentities',$_POST);
try {
    $newInscription = new ServiceMission();
    $mission = $newInscription->searchById($_GET['idMission']);
    
    echo formParticipationMission($mission);
} 
catch (ServiceException $se) {
    $newInscription = new ServiceMission();
    $mission = $newInscription->searchById($_GET['idMission']);
    
    echo formParticipationMission($mission,$se->getCode());
}