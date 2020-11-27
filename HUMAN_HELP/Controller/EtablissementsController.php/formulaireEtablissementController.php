<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceEtablissement.php");

if (isset($_GET['action'])) 
{

    if ($_GET['action'] == 'update') 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newMission = new ServiceMission();
        $mission = $newMission->searchById($_GET['idEtablissement']);
        
        $title = "Modification d'un établissement";
        $titleBtn = "Modifier l'établissement";
        $action = 'update';
        $idEtablissement = $_GET['idEtablissement'];

        //echo formulairesEtablissement($title,$etablissement,$titleBtn,$action);
        //die;
    } 
    elseif ($_GET['action'] == 'add') {
        $title = "Ajout d'un établissement";
        $titleBtn = "ajouter l'établissement";
        $action = 'add';
        //echo formulairesEtablissement($title,$affiche,$titleBtn,$action);
        //die;
    }
}

?>