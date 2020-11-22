<?php

include_once("../../Services/ServiceMission.php");

if (isset($_GET['action'])) 
{

    if ($_GET['action'] == 'update') 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newMission = new ServiceMission();
        $mission = $newMission->searchById($_GET['id_mission']);
        
        $title = 'Modification de la mission';
        $titleBtn = 'Modifier la mission';
        $action = 'update';

        //echo formulairesMission($title,$mission,$titleBtn,$action);
        //die;
    } 
    elseif ($_GET['action'] == 'add') {
        $title = "Ajout d'une mission";
        $titleBtn = 'ajouter la mission';
        $action = 'add';
        //echo formulairesMission($title,$affiche,$titleBtn,$action);
        //die;
    }
}