<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Services/ServiceUtilisateur.php");
include_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Presentation/PresentationUtilisateur.php");
include_once(PATH_BASE . "/Presentation/PresentationAccueil.php");
include_once(PATH_BASE . "/Presentation/PresentationEtablissement.php");

/************************** AJOUT UTILISATEUR ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
    $_POST = array_map('htmlentities', $_POST);

    $service = new ServiceUtilisateur();

    if ($_GET['action'] == 'add')
    {
        if (!empty($_POST) && isset($_POST)) 
        {         
            $nomUtil = utf8_decode($_POST['nomUtil']);
            $prenomUtil = $_POST['prenomUtil'];           
            $adresseUtil = $_POST['adresseUtil'];
            $codePostalUtil = $_POST['codePostalUtil'];
            $villeUtil = $_POST['villeUtil'];
            $mailUtil = $_POST['mailUtil'];
            $telUtil = $_POST['telUtil'];
            $passwordUtil = $_POST['passwordUtil'];
            $dateInscriptionUtil = date("Y-m-d");
            $idRole = $_POST['idRole'];
            $idPays = $_POST['idPays'];
            
            $utilisateur = new Utilisateur();

            $utilisateur->setNomUtil($nomUtil)
                         ->setPrenomUtil($prenomUtil)
                         ->setAdresseUtil($adresseUtil)
                         ->setCodePostalUtil($codePostalUtil)
                         ->setVilleUtil($villeUtil)
                         ->setMailUtil($mailUtil)
                         ->setTelUtil($telUtil)
                         ->setPasswordUtil($passwordUtil)
                         ->setDateInscriptionUtil($dateInscriptionUtil)
                         ->setIdRole($idRole)
                         ->setIdPays($idPays);

            $service->add($utilisateur);

            if ($idRole==1) {     //Particulier
                header("location: ../../index.php");
                die;
            }
            elseif($idRole==2) {  //Professionnel
                
                // header("location: Controller/EtablissementsController/formulaireEtablissementController.php?action=add&mail=$mailUtil");
                // die;
                $title = "Ajout d'un établissement";
                $titleBtn = "Ajouter l'établissement";
                $action = 'addEtablissement';
                $newPays = new ServicePays();
                $allPays = $newPays->searchAll();
                $user = $service->searchUserbyMail($mailUtil);
                $idUtil = $user->getIdUtilisateur();
                
                $_SESSION['idRole'] = $idRole;
                $_SESSION['mailUtil'] = $mailUtil;
                $_SESSION['idUtil'] = $idUtil;

                if ($idRole == 1) {
                    $role = 'particulier';
                }
                elseif ($idRole == 2 ) {
                    $role = 'professionnel';
                }
                elseif ($idRole == 3 ) {
                    $role = 'admin';
                }
                $_SESSION['role'] = $role;

                $professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';
                
                if ($professionnel) 
                {
                    echo formulairesEtablissement($title,null,null,$idUtil,$allPays,$titleBtn,$action);
                    die;           
                }
                else {
                    header("Location: ../../index.php");
                    die;
                }
            }
        }
    }

    /************************** MODIFIER UN UTILISATEUR ***************************/
    else if($_GET['action'] == 'update' && isset($_GET['idUtilisateur']))
    {
        if(!empty($_POST) && isset($_POST))
        {
            $idUtilisateur = $_POST['idUtilisateur'];
            $nomUtil = $_POST['nomUtil'];
            $prenomUtile = $_POST['prenomUtil'];           
            $adresseUtil = $_POST['adresseUtil'];
            $codePostalUtil = $_POST['codePostalUtil'];
            $villeUtil = $_POST['villeUtil'];
            $mailUtil = $_POST['mailUtil'];
            $telUtil = $_POST['telUtil'];
            $passwordUtil = $_POST['passwordUtil'];
            $dateInscriptionUtil = $_POST['dateInscrption'];
            $idRole = $_POST['idRole'];
            $idPays = $_POST['idPays'];

            $utilisateur = new Utilisateur();
            $utilisatueur->setIdUtilisateur($utilisateur)
                         ->setNomUtil($nomUtil)
                         ->setPrenomUtil($prenomUtil)
                         ->setAdresseUtil($adresseUtil)
                         ->setCodePostalUtil($codePostalUtil)
                         ->setVilleUtil($villeUtil)
                         ->setMailUtil($mailUtil)
                         ->setTelUtil($telUtil)
                         ->setPasswordUtil($passwordUtil)
                         ->setDateInscriptionUtil($dateInscriptionUtil)
                         ->setIdRoleUtil($idRoleUtil)
                         ->setIdPaysUtil($idPaysUtil);

            $service->update($utilisateur);

            //echo detailsCompte();
            header("location: ../../index.php");
            die;
        }
    }
    /**************************************** SUPPRIME UTILISATEUR ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idUtilisateur'])) 
        {      
            $service->delete($_GET['idUtilisateur']);

            header("location: ../../index.php");
            die;
        }
    }
    elseif ($_GET['action'] == 'connexion') 
    {      
        try 
        {
            $objectUser = $service->searchUserbyMail($_POST['mailUtil']);
            $password = $_POST['password'];
            if (!empty($objectUser) && password_verify($password,$objectUser->getPasswordUtil()))
            {
                $_SESSION['mailUtil'] = $_POST['mailUtil'];
                $_SESSION['idUtil'] = $objectUser->getIdUtilisateur();
                
                $idRole = $objectUser->getIdRole();
                if ($idRole == 1) {
                    $role = 'particulier';
                }
                elseif ($idRole == 2 ) {
                    $role = 'professionnel';
                }
                elseif ($idRole == 3 ) {
                    $role = 'admin';
                }
                $_SESSION['role'] = $role;

                // $professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';
                // $admin = isset($_SESSION['mailUtil']) && isset($_SESSION['idRole']) && $_SESSION['role'] == 'admin';  

                header("Location: ../../index.php");
                die;
            }
            else {
                echo connexion();
            die;
            }
        } 
        catch (PDOException $se) {
            echo connexion($se->getMessage(),$se->getCode());
            die;
        }
    }
}