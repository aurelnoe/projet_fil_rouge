<?php 
session_start();

include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceBlog.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceTypeActivite.php");

if (isset($_GET['action']) && $_GET['action'] == 'deconnection') {
    session_destroy();
    header('Location: ../index.php');
}
$service = new ServiceBlog(); 
$mission = new ServiceMission();
$newPays = new ServicePays();
$newTypeActivite = new ServiceTypeActivite();

$missionsADistance = $mission->searchMissionByTypeFormation(1);
$allMissions = $mission->searchAll();

$articles = $service->searchAll();