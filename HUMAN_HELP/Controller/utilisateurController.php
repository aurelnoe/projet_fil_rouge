<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceUtilisateur.php");



/************************** AJOUT UTILISATEUR ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
    if ($_GET['action'] == 'add')
    {
        if (!empty($_POST) && isset($_POST)) 
        {
            $nomUtil = utf8_decode($_POST['nomUtil']);
            $prenomUtile = $_POST['prenomUtil'];           
            $adresseUtil = $_POST['adresseUtil'];
            $codePostalUtil = $_POST['codePostalUtil'];
            $villeUtil = $_POST['villeUtil'];
            $mailUtil = $_POST['mailUtil'];
            $telUtil = $_POST['telUtil'];
            $passwordUtil = $_POST['passwordUtil'];
            $dateInscriptionUtil = $_POST['dateInscription'];
            $idRole = $_POST['idRole'];
            $idPays = $_POST['idPays'];

            $utilisateur = new Utilisateur();

            $utilisatueur->setNomUtil($nomUtil)
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
            $newAdd->add($utilisateur);

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
        }
    }
    /**************************************** SUPPRIME UTILISATEUR ************************/
    elseif ($_GET['action'] == 'delete') 
    {
        if (!empty($_GET['idUtilisateur'])) 
        {      
            $delete = new ServiceUtilisateur();
            $delete->delete($_GET['idUtilisateur']);
        }
    }
}

