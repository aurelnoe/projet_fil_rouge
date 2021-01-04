<?php 
session_start();
include_once("Services/ServiceBlog.php");
include_once("Services/ServiceMission.php");
include_once("Services/ServicePays.php");
include_once("Services/ServiceTypeActivite.php");

$service = new ServiceBlog(); 
$mission = new ServiceMission();
$newPays = new ServicePays();
$newTypeActivite = new ServiceTypeActivite();

$missionsADistance = $mission->searchMissionByTypeFormation(1);
$allMissions = $mission->searchAll();

$articles = $service->searchAll();