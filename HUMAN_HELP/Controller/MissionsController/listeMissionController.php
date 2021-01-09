<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Services/serviceTypeActivite.php");
require_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Presentation/PresentationMission.php");

$newMission = new ServiceMission();
$newtypeActivite = new ServiceTypeActivite();
$newPays = new ServicePays();

$medecines = $newMission->searchMissionByTypeActivite(1);
$donations = $newMission->searchMissionByTypeActivite(2);
$enseignements = $newMission->searchMissionByTypeActivite(3);
$constructions = $newMission->searchMissionByTypeActivite(4);
$traductions = $newMission->searchMissionByTypeActivite(5);

$professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';

echo listeMissions($medecines,$donations,$enseignements,$constructions,$traductions,$newtypeActivite,$newPays,$professionnel);

?>