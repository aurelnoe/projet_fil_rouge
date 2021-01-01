<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceEtablissement.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceUtilisateur.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");
include_once("../../Presentation/PresentationEtablissement.php");

if (!empty($_GET) && isset($_GET['action'])) 
{
    $newUser = new ServiceUtilisateur();
    $newPays = new ServicePays(); 
    if ($_GET['action'] == 'update' && isset($_GET['idEtablissement'])) 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newEtablissement = new ServiceEtablissement();
        $etablissement = $newEtablissement->searchById($_GET['idEtablissement']);
        //var_dump($etablissement);
        $title = "Modification d'un établissement";
        $titleBtn = "Modifier l'établissement";
        $action = 'updateEtablissement';
        $idEtablissement = $_GET['idEtablissement'];
        $allPays = $newPays->searchAll();

        echo formulairesEtablissement($title,$etablissement,$idEtablissement,null,$allPays,$titleBtn,$action);
        die;
    } 
    else if ($_GET['action'] == 'add') {
        $title = "Ajout d'un établissement";
        $titleBtn = "ajouter l'établissement";
        $action = 'addEtablissement';
        $utilisateur = $newUser->searchUserbyMail($_GET['mail']);
        $idUtilisateur = $utilisateur->getIdUtilisateur();
        $allPays = $newPays->searchAll();
        echo formulairesEtablissement($title,null,null,$idUtilisateur,$allPays,$titleBtn,$action);
        die;
    }
}

?>