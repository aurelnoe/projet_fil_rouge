<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/serviceTypeActivite.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");
include_once("../../Presentation/PresentationMission.php");
// include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");

if (!empty($_GET)) 
{
    $newSearch = new ServiceMission();
    $newTypeActivite = new ServiceTypeActivite();
    $newPays = new ServicePays();

    //TRI PAR TYPE ACTIVITE  
    if (isset($_GET['idTypeActivite'])) {
        $missions = $newSearch->searchMissionByTypeActivite($_GET['idTypeActivite']);

        $typeActivite = $newTypeActivite->searchById($_GET['idTypeActivite']);
        $title = utf8_encode(ucfirst($typeActivite->getTypeActivite()));
        
        echo searchMission($missions,$typeActivite,$title);

    }//TRI PAR PAYS 
    else if (isset($_GET['idPays'])) {
        $missions = $newSearch->searchMissionByPays(1);

        $pays = $newPays->searchById($_GET['idPays']);
        $title = ucfirst($pays->getNomPays());

        echo searchMission($missions,$typeActivite,$title);
    }
    //TRI PAR TYPE FORMATION 
}
?>