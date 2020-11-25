<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");

$newInscription = new ServiceMission();
$mission = $newInscription->searchById($_GET['idMission']);