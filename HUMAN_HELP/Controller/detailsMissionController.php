<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServiceMission.php");

if(!empty($_GET) && isset($_GET['idMission']))
{
    $service = new ServiceMission(); 
    $mission = $service->searchById($_GET['idMission']);
}
// echo'<pre>';
// var_dump($mission);
// echo '</pre>';
