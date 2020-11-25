<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");

/************************** AJOUT MISSION ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
    if ($_GET['action'] == 'add')
    {
        if (!empty($_POST) && isset($_POST)) 
        {
            // echo'<pre>';
            // var_dump($_POST);
            // echo '</pre>';
            $titreMission = utf8_decode($_POST['titreMission']);
            $descriptionMission = $_POST['descriptionMission'];
            $typeFormation = $_POST['typeFormation'];
            $imageMission = is_null($_POST['imageMission']) ? 'NULL' : $_POST['imageMission'];
            $dateDebut = $_POST['dateDebut'];
            $duree = $_POST['duree'];
            $dateAjout = date("Y-m-d"); //TypeError: Return value of Mission::setDateAjout() must be an instance of Mission, instance of DateTime returned -> Mission.php on line 188
            $idPays = $_POST['idPays'];
            $idEtablissement = $_POST['idEtablissement'];
            $idTypeActivite = $_POST['idTypeActivite'];

            $mission = new Mission();

            $mission->setTitreMission($titreMission)
                    ->setDescriptionMission($descriptionMission)
                    ->setTypeFormation($typeFormation)
                    ->setImageMission($imageMission)
                    ->setDateDebut($dateDebut)
                    ->setDuree($duree)
                    ->setDateAjout($dateAjout);
            $mission->setIdPays($idPays)
                    ->setIdEtablissement($idEtablissement)
                    ->setIdTypeActivite($idTypeActivite);

            $newAdd = new ServiceMission();
            $newAdd->add($mission);
        }
    }
    /************************** MODIFIE MISSION ***************************/
    else if($_GET['action'] == 'update' && isset($_POST['idMission']))
    {
        if(!empty($_POST) && isset($_POST))
        {//var_dump($_POST);
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

            $newUpdate = new ServiceMission();
            $newUpdate->update($mission);//,$idmission
        }
    }
    /**************************************** SUPPRIME MISSION ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idMission'])) 
        {      
            $delete = new ServiceMission();        
            $delete->delete($_GET['idMission']);  
        }
    }
}

$service = new ServiceMission();
$missions = $service->searchMissionByPro(1);


