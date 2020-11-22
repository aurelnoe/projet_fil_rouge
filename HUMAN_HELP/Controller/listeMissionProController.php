<?php

include("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");

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
            $titreMission = utf8_decode($_POST['titre_mission']);
            $descriptionMission = $_POST['description_mission'];
            $typeFormation = $_POST['type_formation'];
            $imageMission = is_null($_POST['image_mission']) ? 'NULL' : $_POST['image_mission'];
            $dateDebut = $_POST['date_debut'];
            $duree = $_POST['duree'];
            $dateAjout = date("Y-m-d"); //TypeError: Return value of Mission::setDateAjout() must be an instance of Mission, instance of DateTime returned -> Mission.php on line 188
            $idPays = $_POST['id_pays'];
            $idEtablissement = $_POST['id_etablissement'];
            $idTypeActivite = $_POST['id_type_activite'];

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
    else if($_GET['action'] == 'update' && isset($_GET['id_mission']))
    {
        if(!empty($_POST) && isset($_POST))
        {
            $idMission = $_GET['id_mission'];
            $titreMission = $_POST['titre_mission'];
            $descriptionMission = $_POST['desccription_mission'];
            $typeFormation = $_POST['type_formation'];
            $imageMission = is_null($_POST['image_mission']) ? 'NULL' : $_POST['image_mission'];
            $dateDebut = $_POST['date_debut'];
            $duree = $_POST['duree'];
            $dateAjout = date("Y-m-d");
            $idPays = $_POST['id_pays'];
            $idEtablissement = $_POST['id_etablissement'];
            $idTypeActivite = $_POST['id_type_activite'];

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
                    ->setEtablissement($idEtablissement)
                    ->setIdTypeActivite($idTypeActivite);

            $newUpdate = new ServiceMission();
            $newUpdate->update($mission);//,$idmission
        }
    }
    /**************************************** SUPPRIME MISSION ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['id_mission'])) 
        {      
            $delete = new ServiceMission();        
            $delete->delete($_GET['id_mission']);  
        }
    }
}

$service = new ServiceMission();
$missions = $service->searchMissionByPro(1);


