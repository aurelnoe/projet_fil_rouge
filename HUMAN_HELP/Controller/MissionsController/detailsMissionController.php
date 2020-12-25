<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceTypeActivite.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceEtablissement.php");
include_once("../../Presentation/PresentationMission.php");

if(!empty($_GET) && isset($_GET['idMission']))
{
    $service = new ServiceMission(); 
    $newPays = new ServicePays();
    $newTypeActivite = new ServiceTypeActivite();
    $newEtablissement = new ServiceEtablissement();

    $mission = $service->searchById($_GET['idMission']);

    if ($mission->getTypeFormation() == 1) {
        $typeFormation = 'distance';
    }else{
        $typeFormation = 'terrain';
    }
    echo detailsMission($mission,$typeFormation,$newPays,$newTypeActivite,$newEtablissement);
}

