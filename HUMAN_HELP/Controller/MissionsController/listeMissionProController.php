<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Services/ServiceMission.php");
include_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Services/ServiceEtablissement.php");
include_once(PATH_BASE . "/Services/ServiceUtilisateur.php");
include_once(PATH_BASE . "/Services/serviceTypeActivite.php");
include_once(PATH_BASE . "/Exceptions/ServiceException.php");
include_once(PATH_BASE . "/Presentation/PresentationMission.php");
$_GET = array_map('htmlentities',$_GET); 
$_COOKIE = array_map('htmlentities',$_COOKIE);
$_REQUEST = array_map('htmlentities',$_REQUEST);
$_POST = array_map('htmlentities',$_POST);

$mission = new Mission();
$etablissement = new Etablissement();
$serviceMission = new ServiceMission();   
$serviceEtablissement = new ServiceEtablissement();
$serviceUtilisateur = new ServiceUtilisateur();
$serviceTypeActivite = new ServiceTypeActivite();
$servicePays = new ServicePays();

$professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';

if(!empty($_GET['action']) && isset($_GET['action']) && $professionnel)
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
            try {
                $serviceMission->add($mission);        
            } 
            catch (ServiceException $se) {
                if ($professionnel) 
                {
                    $utilisateur = $serviceUtilisateur->searchById($_SESSION['idUtil']);
                    
                    $etablissement = $serviceEtablissement->searchEtablissementByIdUtilisateur($_SESSION['idUtil']);
                    
                    $missions = $serviceMission->searchMissionByPro($etablissement->getIdEtablissement());
                    
                    echo listeMissionsPro($missions,$serviceTypeActivite,$servicePays,$etablissement,$utilisateur,$se->getCode());
                    die;           
                }
                else {
                    header("Location: ../../index.php");
                    die;
                }
            }
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
            try {
                $serviceEtablissement->add($etablissement);            
            }
            catch (ServiceException $se) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
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
                          ->setIdPays($idPays);
            try {
                $serviceEtablissement->update($etablissement);   
                
                $utilisateur = $serviceUtilisateur->searchById($_SESSION['idUtil']);
                
                $etablissement = $serviceEtablissement->searchEtablissementByIdUtilisateur($_SESSION['idUtil']);
                
                $missions = $serviceMission->searchMissionByPro($etablissement->getIdEtablissement());
                
                echo listeMissionsPro($missions,$serviceTypeActivite,$servicePays,$etablissement,$utilisateur);
                die;            
            }
            catch (ServiceException $se) {
                if ($professionnel) 
                {
                    $utilisateur = $serviceUtilisateur->searchById($_SESSION['idUtil']);
                    
                    $etablissement = $serviceEtablissement->searchEtablissementByIdUtilisateur($_SESSION['idUtil']);
                    
                    $missions = $serviceMission->searchMissionByPro($etablissement->getIdEtablissement());
                    
                    echo listeMissionsPro($missions,$serviceTypeActivite,$servicePays,$etablissement,$utilisateur,$se->getCode());
                    die;           
                }
                else {
                    header("Location: ../../index.php");
                    die;
                }
            }
        }
    }
    /**************************************** SUPPRIMER UNE MISSION ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idMission'])) 
        {   
            try {
                $serviceMission->delete($_GET['idMission']);              
            }
            catch (ServiceException $se) {
                if ($professionnel) 
                {
                    $utilisateur = $serviceUtilisateur->searchById($_SESSION['idUtil']);
                    
                    $etablissement = $serviceEtablissement->searchEtablissementByIdUtilisateur($_SESSION['idUtil']);
                    
                    $missions = $serviceMission->searchMissionByPro($etablissement->getIdEtablissement());
                    
                    echo listeMissionsPro($missions,$serviceTypeActivite,$servicePays,$etablissement,$utilisateur,$se->getCode());
                    die;           
                }
                else {
                    header("Location: ../../index.php");
                    die;
                }
            }        
        }
    }
}

if ($professionnel) 
{
    try {
        $utilisateur = $serviceUtilisateur->searchById($_SESSION['idUtil']);
        
        $etablissement = $serviceEtablissement->searchEtablissementByIdUtilisateur($_SESSION['idUtil']);
        
        $missions = $serviceMission->searchMissionByPro($etablissement->getIdEtablissement());
        
        echo listeMissionsPro($missions,$serviceTypeActivite,$servicePays,$etablissement,$utilisateur);
        die;           
    } catch (ServiceException $se) {
        $medecines = $serviceMission->searchMissionByTypeActivite(1);
        $donations = $serviceMission->searchMissionByTypeActivite(2);
        $enseignements = $serviceMission->searchMissionByTypeActivite(3);
        $constructions = $serviceMission->searchMissionByTypeActivite(4);
        $traductions = $serviceMission->searchMissionByTypeActivite(5);
        
        $professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';
        
        echo listeMissions($medecines,$donations,$enseignements,$constructions,$traductions,$serviceTypeActivite,$servicePays,$professionnel,$se->getCode());
    }
}
else {
    header("Location: ../../index.php");
    die;
}

