<?php

//Va contenir toute les variables utile pour l'application

define('PATH_BASE',$_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/");

function nameRole($idRole): string
{
    if ($idRole == 1) {
        $role = 'particulier';
    }
    elseif ($idRole == 2 ) {
        $role = 'professionnel';
    }
    elseif ($idRole == 3 ) {
        $role = 'admin';
    }
    return $role;
}