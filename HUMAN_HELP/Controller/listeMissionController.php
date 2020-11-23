<?php

include_once("../../Services/ServiceMission.php");

$newMission = new ServiceMission();
//$mission = $newMission->searchMissionByTypeActivite($_GET['id_type_activite']);
$medecines = $newMission->searchMissionByTypeActivite(1);
$donations = $newMission->searchMissionByTypeActivite(2);
$enseignements = $newMission->searchMissionByTypeActivite(3);
$constructions = $newMission->searchMissionByTypeActivite(4);
$traductions = $newMission->searchMissionByTypeActivite(5);

?>