<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/serviceTypeActivite.php");
include_once("../../Presentation/PresentationMission.php");
// include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");

if (!empty($_GET)) 
{
    //TRI PAR TYPE ACTIVITE  
    if (isset($_GET['idTypeActivite'])) {
        $newSearch = new ServiceMission();
        $missions = $newSearch->searchMissionByTypeActivite($_GET['idTypeActivite']);
        
        echo searchMission($missions);

        // $newTypeActivite = new ServiceTypeActivite();
        // $typeActivite = $newTypeActivite->searchById($_GET['idTypeActivite']);
        // $title = ucfirst($typeActivite->getTypeActivite());

    }//TRI PAR PAYS 
    else if (isset($_GET['idPays'])) {
        $newSearch = new ServiceMission();
        $missions = $newSearch->searchMissionByPays(1);

        echo searchMission($missions);
        // $newPays = new ServicePays();
        // $pays = $newPays->searchById($_GET['idPays']);
        // $title = ucfirst($pays->getPays());
    }
    //TRI PAR TYPE FORMATION 
}
?>