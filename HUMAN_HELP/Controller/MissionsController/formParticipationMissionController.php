<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Presentation/PresentationMission.php");

$newInscription = new ServiceMission();
$mission = $newInscription->searchById($_GET['idMission']);

echo formParticipationMission($mission);