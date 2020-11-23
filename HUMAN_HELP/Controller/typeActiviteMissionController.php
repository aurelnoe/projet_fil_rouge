<?php
include("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");

$newSearch = new ServiceMission();
$missions = $newSearch->searchMissionByTypeActivite(1);

?>