<?php
include_once("../../Services/ServiceMission.php");
include_once("../../Services/serviceTypeActivite.php");
require_once("../../Services/ServicePays.php");
include_once("../../Presentation/PresentationMission.php");

$newMission = new ServiceMission();
$newtypeActivite = new ServiceTypeActivite();
$newPays = new ServicePays();
//$typeActivite = $newtypeActivite->searchById($_GET['id_type_activite']);

$medecines = $newMission->searchMissionByTypeActivite(1);
$donations = $newMission->searchMissionByTypeActivite(2);
$enseignements = $newMission->searchMissionByTypeActivite(3);
$constructions = $newMission->searchMissionByTypeActivite(4);
$traductions = $newMission->searchMissionByTypeActivite(5);

echo listeMissions($medecines,$donations,$enseignements,$constructions,$traductions,$newtypeActivite,$newPays);

?>