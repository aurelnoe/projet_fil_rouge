<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceEtablissement.php");

if (!empty($_GET) && isset($_GET['action'])) 
{
    if ($_GET['action'] == 'update' && isset($_GET['idEtablissement'])) 
    {  
        // if (isset($_SESSION['profil']) && $_SESSION['profil']=='utilisateur') {
        //     header('Location: ../../index.php');
        // }
        $newEtablissement = new ServiceEtablissement();
        $etablissement = $newEtablissement->searchById($_GET['idEtablissement']);
        var_dump($etablissement);
        $title = "Modification d'un établissement";
        $titleBtn = "Modifier l'établissement";
        $action = 'updateEtablissement';
        $idEtablissement = $_GET['idEtablissement'];

        //echo formulairesEtablissement($title,$etablissement,$titleBtn,$action);
        //die;
    } 
    else if ($_GET['action'] == 'add') {
        $title = "Ajout d'un établissement";
        $titleBtn = "ajouter l'établissement";
        $action = 'addEtablissement';
        //echo formulairesEtablissement($title,$affiche,$titleBtn,$action);
        //die;
    }
}

?>