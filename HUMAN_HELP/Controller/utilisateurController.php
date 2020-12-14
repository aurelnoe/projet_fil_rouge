<?php
require("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceUtilisateur.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Presentation/PresentationUtilisateur.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Presentation/PresentationAccueil.php");

/************************** AJOUT UTILISATEUR ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
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

            $newAdd = new ServiceUtilisateur();
            $newAdd->add($utilisateur);

            header("location: ../index.php");
            die;
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

            $newAdd = new ServiceUtilisateur();
            $newAdd->update($utilisateur);

            //echo detailsCompte();
            header("location: ../index.php");
            die;
        }
    }
    /**************************************** SUPPRIME UTILISATEUR ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idUtilisateur'])) 
        {      
            $delete = new ServiceUtilisateur();
            $delete->delete($_GET['idUtilisateur']);

            header("location: ../index.php");
            die;
        }
    }
    elseif ($_GET['action'] == 'connexion') 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //$objectUser = ServiceUtilisateur::searchUserbyUserName($userName);
        if (!empty($objectUser) && password_verify($password,$objectUser->getPasswordUtil()))
        {
            $_SESSION['email']=$email;
            $_SESSION['profil']=$objectUser->getProfil();
            $admin = isset($_SESSION['idRole']) && $_SESSION['idRole'] == '3';  
        }
        header("location: ../index.php");
        die;
    }
}

