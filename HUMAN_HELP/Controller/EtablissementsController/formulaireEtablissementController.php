<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
session_start();
include_once(PATH_BASE . "/Services/ServiceEtablissement.php");
include_once(PATH_BASE . "/Services/ServiceUtilisateur.php");
include_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Presentation/PresentationEtablissement.php");

if (!empty($_GET) && isset($_GET['action'])) 
{
    $newUser = new ServiceUtilisateur();
    $newPays = new ServicePays();

    if ($_GET['action'] == 'update' && isset($_GET['idEtablissement'])) 
    {  
        try {
            $newEtablissement = new ServiceEtablissement();
            $etablissement = $newEtablissement->searchById($_GET['idEtablissement']);
            
            $title = "Modification d'un établissement";
            $titleBtn = "Modifier l'établissement";
            $action = 'updateEtablissement';
            $idEtablissement = $_GET['idEtablissement'];
            $allPays = $newPays->searchAll();
    
            echo formulairesEtablissement($title,$etablissement,$idEtablissement,null,$allPays,$titleBtn,$action);
            die; 
        } 
        catch (ServiceException $se) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } 
    // else if ($_GET['action'] == 'add')  //DEPLACE DANS UTILISATEURCONTROLLER
    // {
        
    //     $title = "Ajout d'un établissement";
    //     $titleBtn = "ajouter l'établissement";
    //     $action = 'addEtablissement';
    //     $utilisateur = $newUser->searchUserbyMail($_GET['mail']);
    //     $idUtilisateur = $utilisateur->getIdUtilisateur();
    //     $allPays = $newPays->searchAll();
        
    //     $_SESSION['role'] = 'Professionnel';
    //     $_SESSION['mailUtil'] = $_GET['mail'];
    //     $_SESSION['idUtil'] = $idUtilisateur;

    //     $professionnel = isset($_SESSION['mailUtil']) && isset($_SESSION['idUtil']) && $_SESSION['role'] == 'professionnel';
        
    //     if ($professionnel) 
    //     {
    //         echo formulairesEtablissement($title,null,null,$idUtilisateur,$allPays,$titleBtn,$action);
    //         die;           
    //     }
    //     else {
    //         header("Location: ../index.php");
    //         die;
    //     }
        
    // }
}

?>