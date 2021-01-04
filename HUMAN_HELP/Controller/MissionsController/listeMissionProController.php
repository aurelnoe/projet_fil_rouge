<?php
session_start();

include_once("../../Services/ServiceMission.php");
include_once("../../Services/ServicePays.php");
include_once("../../Services/ServiceEtablissement.php");
include_once("../../Services/ServiceUtilisateur.php");
include_once("../../Services/serviceTypeActivite.php");
include_once("../../Presentation/PresentationMission.php");

$_POST = array_map('htmlentities', $_POST);

$serviceMission = new ServiceMission();   
$serviceEtablissement = new ServiceEtablissement();
$serviceUtilisateur = new ServiceUtilisateur();
$mission = new Mission();
$etablissement = new Etablissement();

if(!empty($_GET['action']) && isset($_GET['action']))
{
    if (!empty($_POST) && isset($_POST)) 
    {  
        /************************** AJOUTER UNE MISSION ***************************/
        if ($_GET['action'] == 'add')
        {
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

            $serviceMission->add($mission);       
        }  

        /**************************************** AJOUTER UN ETABLISSEMENT ************************/
        elseif ($_GET['action'] == 'addEtablissement') 
        {    
            $denomination = utf8_decode($_POST['denomination']);
            $adresseEtablissement = $_POST['adresseEtablissement'];
            $villeEtablissement = $_POST['villeEtablissement'];
            $codePostalEtablissement = $_POST['codePostalEtablissement'];
            $mailEtablissement = $_POST['mailEtablissement'];
            $telEtablissement = $_POST['telEtablissement'];
            $dateAjoutEtablissement = date("Y-m-d"); 
            $idUtilisateur = $_POST['idUtilisateur'];
            //$idTypeActivite = $_POST['idTypeActivite'];
            $idPays = $_POST['idPays'];
    
            $etablissement->setDenomination($denomination)
                            ->setAdresseEtablissement($adresseEtablissement)
                            ->setVilleEtablissement($villeEtablissement)
                            ->setCodePostalEtablissement($codePostalEtablissement)
                            ->setMailEtablissement($mailEtablissement)
                            ->setTelEtablissement($telEtablissement)
                            ->setDateAjoutEtablissement($dateAjoutEtablissement)
                            ->setIdUtilisateur($idUtilisateur)
                            //->setIdTypeActivite($idTypeActivite)
                            ->setIdPays($idPays);
    
            $serviceEtablissement->add($etablissement);
        }
        /**************************************** MODIFIER UN ETABLISSEMENT ************************/
        elseif ($_GET['action'] == 'updateEtablissement') 
        {
            $idEtablissement = $_POST['idEtablissement'];
            $denomination = utf8_decode($_POST['denomination']);
            $adresseEtablissement = $_POST['adresseEtablissement'];
            $villeEtablissement = $_POST['villeEtablissement'];
            $codePostalEtablissement = $_POST['codePostalEtablissement'];
            $mailEtablissement = $_POST['mailEtablissement'];
            $telEtablissement = $_POST['telEtablissement'];
            $dateAjoutEtablissement = date("Y-m-d"); 
            $idUtilisateur = $_POST['idUtilisateur'];
            //$idTypeActivite = $_POST['idTypeActivite'];
            $idPays = $_POST['idPays'];

            $etablissement->setIdEtablissement($idEtablissement)
                          ->setDenomination($denomination)
                          ->setAdresseEtablissement($adresseEtablissement)
                          ->setVilleEtablissement($villeEtablissement)
                          ->setCodePostalEtablissement($codePostalEtablissement)
                          ->setMailEtablissement($mailEtablissement)
                          ->setTelEtablissement($telEtablissement)
                          ->setDateAjoutEtablissement($dateAjoutEtablissement)
                          ->setIdUtilisateur($idUtilisateur)
                          //->setIdTypeActivite($idTypeActivite)
                          ->setIdPays($idPays);

            $serviceEtablissement->update($etablissement);//,$idEtablissement
        }
    }
    /**************************************** SUPPRIMER UNE MISSION ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idMission'])) 
        {           
            $serviceMission->delete($_GET['idMission']);  
        }
    }
}

$newTypeActivite = new ServiceTypeActivite();
$newPays = new ServicePays();

$etablissementPro = $serviceEtablissement->searchEtablissementByIdUtilisateur($_SESSION['idUtil']);

$utilisateur = $serviceUtilisateur->searchById($_SESSION['idUtil']);
    
$etablissement = $serviceEtablissement->searchEtablissementByIdUtilisateur($_SESSION['idUtil']);

$missions = $serviceMission->searchMissionByPro($etablissement->getIdEtablissement());

echo listeMissionsPro($missions,$newTypeActivite,$newPays,$etablissementPro,$utilisateur);



