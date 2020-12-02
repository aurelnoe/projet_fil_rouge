<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("../../Presentation/PresentationMission.php");

$newMission = new ServiceMission();
//$mission = $newMission->searchMissionByTypeActivite($_GET['id_type_activite']);
$medecines = $newMission->searchMissionByTypeActivite(1);
$donations = $newMission->searchMissionByTypeActivite(2);
$enseignements = $newMission->searchMissionByTypeActivite(3);
$constructions = $newMission->searchMissionByTypeActivite(4);
$traductions = $newMission->searchMissionByTypeActivite(5);

echo listeMissions($medecines,$donations,$enseignements,$constructions,$traductions);

?>