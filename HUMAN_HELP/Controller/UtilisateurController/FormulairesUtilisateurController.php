<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Services/ServiceUtilisateur.php");
include_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Exceptions/ServiceException.php");
include_once(PATH_BASE . "/Presentation/PresentationAccueil.php");
include_once(PATH_BASE . "/Presentation/PresentationUtilisateur.php");

$_GET = array_map('htmlentities',$_GET); 
$_COOKIE = array_map('htmlentities',$_COOKIE);
$_REQUEST = array_map('htmlentities',$_REQUEST);
$_POST = array_map('htmlentities',$_POST);

/************************** AJOUT UTILISATEUR ***************************/
if(!empty($_GET['action']) && isset($_GET['action']))
{
    $newPays = new ServicePays();
    
    if ($_GET['action'] == 'formAjout')
    {
        try {
            $allPays = $newPays->searchAll();
            echo formulairesUtilisateur('Inscrivez vous','','Ajouter','add',$allPays);
            die;       
        } 
        catch (ServiceException $se) {
            $allPays = $newPays->searchAll();
            echo formulairesUtilisateur('Inscrivez vous','','Ajouter','add',$allPays,$se->getCode());
            die;
        }
    }
    elseif ($_GET['action'] == 'formModif')
    {   
        try {
            $allPays = $newPays->searchAll();
            $service = new ServiceUtilisateur();
            $utilisateur = $service->searchById($_GET('idUtilisateur'));
    
            echo formulairesUtilisateur('Modifier',$utilisateur,'Modifier','update',$allPays);
            die;
        } 
        catch (ServiceException $se) {
            $allPays = $newPays->searchAll();
            $service = new ServiceUtilisateur();
            $utilisateur = $service->searchById($_GET('idUtilisateur'));
    
            echo formulairesUtilisateur('Modifier',$utilisateur,'Modifier','update',$allPays,$se->getCode());
            die;
        }
    }
    elseif ($_GET['action'] == 'connexion') 
    {
        try {
            echo connexion();
            die;
        }
        catch (ServiceException $se) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    elseif ($_GET['action'] == 'modifMdp') {
        try {
            echo modifMotDePasse();
            die;
        }
        catch (ServiceException $se) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}

