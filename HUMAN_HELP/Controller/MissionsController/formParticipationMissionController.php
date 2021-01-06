<?php
session_start();
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("../../Presentation/PresentationMission.php");

$newInscription = new ServiceMission();
$mission = $newInscription->searchById($_GET['idMission']);

echo formParticipationMission($mission);