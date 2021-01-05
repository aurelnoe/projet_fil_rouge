<?php


include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/serviceTypeActivite.php");

$newPays = new ServicePays();
$allPays = $newPays->searchAll();

$newTypeActivite = new ServiceTypeActivite();
$allTypeActivite = $newTypeActivite->searchAll();

