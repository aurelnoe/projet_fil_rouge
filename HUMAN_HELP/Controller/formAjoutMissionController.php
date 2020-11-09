<?php

include_once("Modele/MissionMysqliDAO.php");

/************************** AJOUT MISSION ***************************/
if(!empty($_GET['action']) && isset($_GET['action'])
    && $_GET['action'] == 'add' && $_GET['id_mission'] == "") 
{
    if (!empty($_POST) && isset($_POST)) 
    {
        $idMission = $_POST['id_mission'];
        $titreMission = $_POST['titre_mission'];
        $descriptionMission = $_POST['description_mission'];
        $imageMission = is_null($_POST['image_mission']) ? 'NULL' : $_POST['image_mission'];;
        //$paysMission = $_POST['pays_mission'];
        $dateDebut = $_POST['date_mission'];
        $newDate = new DateTime($dateDebut);
        $duree = $_POST['duree_mission'];
        $dateAjout = new DateTime(time());
        $idPays = $_POST['id_pays'];
        $idEtablissement = is_null($_POST['id_etablissement']) ? 'NULL' : $_POST['id_etablissement'];
        $idTypeActivite = $_POST['id_type_activite'];

        $mission = new Mission;

        $mission->setIdMission($idMission)
                ->setTitreMission($titreMission)
                ->setDescriptionMission($descriptionMission)
                ->setImageMission($imageMission)
                ->setDateDebutMission($dateDebut)
                ->setDuree($duree)
                ->setDateAjout($dateAjout)
                ->setIdPays($idPays)
                ->setEtablissement($etablissement)
                ->setIdTypeActivite($idTypeActivite);

        $newAdd = new MissionMySqliDAO;
        $newAdd::addMission($mission);
    }
}


/************************** MODIFIE MISSION ***************************/
if(!empty($_GET['action']) && isset($_GET['action']) 
    && $_GET['action'] == 'update' && isset($_GET['id_mission']))
{
    if(!empty($_POST) && isset($_POST))
    {
        $idMission = $_GET['id_mission'];
        $titreMission = $_POST['titre_mission'];
        $descriptionMission = $_POST['desccription_mission'];
        $imageMission = $_POST['image_mission'];
        $dateDebut = $_POST['date_mission'];
        $newDate = new DateTime($dateDebut);
        $duree = $_POST['duree_mission'];
        $dateAjout = new DateTime(time());
        $idPays = $_POST['id_pays'];
        $idEtablissement = $_POST['id_etablissement'];
        $idTypeActivite = $_POST['id_type_activite'];

        $mission = new Mission();
        $mission->setIdMission($idMission)
                ->setTitreMission($titreMission)
                ->setDescriptionMission($descriptionMission)
                ->setImageMission($imageMission)
                ->setDateDebutMission($dateDebut)
                ->setDuree($duree)
                ->setDateAjout($dateAjout)
                ->setIdPays($idPays)
                ->setEtablissement($etablissement)
                ->setIdTypeActivite($idTypeActivite);

        $newUpdate = new MissionMySqliDAO;
        $newUpdate::addMission($mission,$idmission);
    }
}


/**************************************** SUPPRIME MISSION ************************/
elseif (isset($_GET['action']) && $_GET['action'] == 'delete') 
{
    if (!empty($_GET['id_mission'])) 
    {              
        MissionMysqliDAO::deleteEmploye($_GET['id_mission']);  
    }
}