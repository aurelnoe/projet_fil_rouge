<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
// include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceTypeActivite.php");
// include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");

if (!empty($_GET) && isset($_GET['action'])) 
{
    //TRI PAR TYPE ACTIVITE  
    if (isset($_GET['idTypeActivite']) && $_GET['action'] == 'typeActivite') {
        $newSearch = new ServiceMission();
        $missions = $newSearch->searchMissionByTypeActivite($_GET['idTypeActivite']);

        // $newTypeActivite = new ServiceTypeActivite();
        // $typeActivite = $newTypeActivite->searchById($_GET['idTypeActivite']);
        // $title = ucfirst($typeActivite->getTypeActivite());

    }//TRI PAR PAYS 
    else if (isset($_GET['idPays']) && $_GET['action'] == '') {
        $newSearch = new ServiceMission();
        $missions = $newSearch->searchMissionByPays(1);

        // $newPays = new ServicePays();
        // $pays = $newPays->searchById($_GET['idPays']);
        // $title = ucfirst($pays->getPays());
    }
    //TRI PAR TYPE FORMATION 
}
?>