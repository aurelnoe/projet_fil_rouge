<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Services/serviceTypeActivite.php");
include_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Presentation/PresentationMission.php");

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
        
        echo searchMission($missions,$title);

    }//TRI PAR PAYS 
    else if (isset($_GET['idPays'])) {
        $missions = $newSearch->searchMissionByPays($_GET['idPays']);

        $pays = $newPays->searchById($_GET['idPays']);
        $title = ucfirst($pays->getNomPays());

        echo searchMission($missions,$title);
    }
    //TRI PAR TYPE FORMATION 
    else if (isset($_GET['typeFormation'])) {
        $missions = $newSearch->searchMissionByTypeFormation($_GET['typeFormation']);
        if ($_GET['typeFormation']==0) {
            $title = 'Missions à distance';
        }
        else {
            $title = 'Missions sur le terrain';
        }
        

        echo searchMission($missions,$title);
    }
    // else if (isset($_GET['idPays'])){
        
    //     $missions = $newSearch->searchMissionByPays($_GET['idPays']);

    //     $pays = $newPays->searchById($_GET['idPays']);
    //     $title = ucfirst($pays->getNomPays());

    //     echo searchMission($missions,$title);

    // }
}
?>