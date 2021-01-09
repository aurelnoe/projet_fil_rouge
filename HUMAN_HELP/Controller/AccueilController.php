<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
//var_dump(getcwd());
include_once(PATH_BASE . "/Services/serviceBlog.php");
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Services/serviceTypeActivite.php");

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