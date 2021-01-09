<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Services/ServicePays.php");
include_once(PATH_BASE . "/Services/serviceTypeActivite.php");

$newPays = new ServicePays();
$allPays = $newPays->searchAll();

$newTypeActivite = new ServiceTypeActivite();
$allTypeActivite = $newTypeActivite->searchAll();

