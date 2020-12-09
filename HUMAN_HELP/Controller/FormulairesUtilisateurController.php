<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceUtilisateur.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Presentation/PresentationAccueil.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Presentation/PresentationUtilisateur.php");



/************************** AJOUT UTILISATEUR ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
    if ($_GET['action'] == 'formAjout')
    {
        echo formulairesUtilisateur('Inscrivez vous','','Ajouter','add');
        die;      
    }
    elseif ($_GET['action'] == 'formModif')
    {
            $service = new ServiceUtilisateur();
            $utilisateur = $service->searchById($_GET('idUtilisateur'));
            echo formulairesUtilisateur('Inscrivez vous',$utilisateur,'Modifier','update');
            die;
    }
    elseif ($_GET['action'] == 'connexion') 
    {
        echo connexion();
        die;
    }
    elseif ($_GET['action'] == 'modifMdp') {
        echo modifMotDePasse();
        die;
    }
}

