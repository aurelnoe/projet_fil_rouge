<?php

include_once("../../Services/ServiceMission.php");

$newMission = new ServiceMission();
//$mission = $newMission->searchMissionByTypActivite($_GET['id_type_activite']);
$medecines = $newMission->searchMissionByTypActivite(1);
$donations = $newMission->searchMissionByTypActivite(2);
$enseignements = $newMission->searchMissionByTypActivite(3);
$construction = $newMission->searchMissionByTypActivite(4);
$traduction = $newMission->searchMissionByTypActivite(5);

?>