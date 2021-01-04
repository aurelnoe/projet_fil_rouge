<?php
session_start();

include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceTypeActivite.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceEtablissement.php");
include_once("../../Presentation/PresentationMission.php");

if(!empty($_GET))
{
    $serviceMission = new ServiceMission(); 
    $newPays = new ServicePays();
    $newTypeActivite = new ServiceTypeActivite();
    $newEtablissement = new ServiceEtablissement();

    if (isset($_GET['idMission']) && empty($_GET['action'])) 
    {
        $mission = $serviceMission->searchById($_GET['idMission']);
    
        if ($mission->getTypeFormation() == 0) {
            $typeFormation = 'à distance';
        }else{
            $typeFormation = 'sur le terrain';
        }
        echo detailsMission($mission,$typeFormation,$newPays,$newTypeActivite,$newEtablissement);
    }

    elseif(!empty($_GET['action']) && isset($_GET['action']))
    {
        $_POST = array_map('htmlentities', $_POST);

        if (!empty($_POST) && isset($_POST)) 
        {
            if($_GET['action'] == 'update' && isset($_POST['idMission']))
            {         
                $idMission = $_POST['idMission'];
                $titreMission = $_POST['titreMission'];
                $descriptionMission = $_POST['descriptionMission'];
                $typeFormation = $_POST['typeFormation'];
                $imageMission = is_null($_POST['imageMission']) ? 'NULL' : $_POST['imageMission'];
                $dateDebut = $_POST['dateDebut'];
                $duree = $_POST['duree'];
                $dateAjout = date("Y-m-d");
                $idPays = (int)$_POST['idPays'];
                $idEtablissement = (int)$_POST['idEtablissement'];
                $idTypeActivite = (int)$_POST['idTypeActivite'];

                $mission = new Mission();
                $mission->setIdMission($idMission)
                        ->setTitreMission($titreMission)
                        ->setDescriptionMission($descriptionMission)
                        ->setTypeFormation($typeFormation)
                        ->setImageMission($imageMission)
                        ->setDateDebut($dateDebut)
                        ->setDuree($duree)
                        ->setDateAjout($dateAjout);
                $mission->setIdPays($idPays)
                        ->setIdEtablissement($idEtablissement)
                        ->setIdTypeActivite($idTypeActivite);

                $serviceMission->update($mission);

                $detailsMission = $serviceMission->searchById($idMission);
    
                if ($detailsMission->getTypeFormation() == 0) {
                    $typeFormation = 'à distance';
                }else{
                    $typeFormation = 'sur le terrain';
                }
                echo detailsMission($detailsMission,$typeFormation,$newPays,$newTypeActivite,$newEtablissement);
            }
        }
    }
}
