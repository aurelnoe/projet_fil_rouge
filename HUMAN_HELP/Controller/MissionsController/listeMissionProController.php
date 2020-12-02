<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceEtablissement.php");
include_once("../../Presentation/PresentationMission.php");

if(!empty($_GET['action']) && isset($_GET['action']))
{
    if (!empty($_POST) && isset($_POST)) 
    {
        /************************** AJOUTER UNE MISSION ***************************/
        if ($_GET['action'] == 'add')
        {
            $titreMission = utf8_decode(htmlentities($_POST['titreMission']));
            $descriptionMission = htmlentities($_POST['descriptionMission']);
            $typeFormation = htmlentities($_POST['typeFormation']);
            $imageMission = is_null($_POST['imageMission']) ? 'NULL' : htmlentities($_POST['imageMission']);
            $dateDebut = htmlentities($_POST['dateDebut']);
            $duree = htmlentities($_POST['duree']);
            $dateAjout = date("Y-m-d"); //TypeError: Return value of Mission::setDateAjout() must be an instance of Mission, instance of DateTime returned -> Mission.php on line 188
            $idPays = htmlentities($_POST['idPays']);
            $idEtablissement = htmlentities($_POST['idEtablissement']);
            $idTypeActivite = htmlentities($_POST['idTypeActivite']);

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
        /************************** MODIFIE MISSION ***************************/
        else if($_GET['action'] == 'update' && isset($_POST['idMission']))
        {         
            $idMission = htmlentities($_POST['idMission']);
            $titreMission = htmlentities($_POST['titreMission']);
            $descriptionMission = htmlentities($_POST['descriptionMission']);
            $typeFormation = htmlentities($_POST['typeFormation']);
            $imageMission = is_null($_POST['imageMission']) ? 'NULL' : htmlentities($_POST['imageMission']);
            $dateDebut = htmlentities($_POST['dateDebut']);
            $duree = htmlentities($_POST['duree']);
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
        /**************************************** AJOUTER UN ETABLISSEMENT ************************/
        elseif ($_GET['action'] == 'addEtablissement') 
        {    
            $denomination = utf8_decode(htmlentities($_POST['denomination']));
            $adresseEtablissement = htmlentities($_POST['adresseEtablissement']);
            $villeEtablissement = htmlentities($_POST['villeEtablissement']);
            $codePostalEtablissement = htmlentities($_POST['codePostalEtablissement']);
            $mailEtablissement = htmlentities($_POST['mailEtablissement']);
            $telEtablissement = htmlentities($_POST['telEtablissement']);
            $dateAjoutEtablissement = date("Y-m-d"); 
            $idUtilisateur = htmlentities($_POST['idUtilisateur']);
            //$idTypeActivite = $_POST['idTypeActivite'];
            $idPays = htmlentities($_POST['idPays']);
    
            $etablissement = new Etablissement();
    
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
    
            $newAdd = new ServiceEtablissement();
            $newAdd->add($etablissement);
        }
        /**************************************** MODIFIER UN ETABLISSEMENT ************************/
        elseif ($_GET['action'] == 'updateEtablissement') 
        {
            $idEtablissement = htmlentities($_POST['idEtablissement']);
            $denomination = utf8_decode(htmlentities($_POST['denomination']));
            $adresseEtablissement = htmlentities($_POST['adresseEtablissement']);
            $villeEtablissement = htmlentities($_POST['villeEtablissement']);
            $codePostalEtablissement = htmlentities($_POST['codePostalEtablissement']);
            $mailEtablissement = htmlentities($_POST['mailEtablissement']);
            $telEtablissement = htmlentities($_POST['telEtablissement']);
            $dateAjoutEtablissement = date("Y-m-d"); 
            $idUtilisateur = htmlentities($_POST['idUtilisateur']);
            //$idTypeActivite = $_POST['idTypeActivite'];
            $idPays = htmlentities($_POST['idPays']);

            $etablissement = new Etablissement();
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

            $newUpdate = new ServiceEtablissement();
            $newUpdate->update($etablissement);//,$idEtablissement
        }
    }
    /**************************************** SUPPRIMER UNE MISSION ************************/
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

echo listeMissionsPro($missions);


