<?php

include_once("C:/xampp/htdocs/HUMAN_HELP/Modele/MissionMysqliDAO.php");
if(!empty($_GET) && isset($_GET['id_mission']))
{
    $mission = MissionMysqliDAO::searchMissionById($_GET['id_mission']);
}
// echo'<pre>';
// var_dump($mission);
// echo '</pre>';