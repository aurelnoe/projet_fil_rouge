<?php 

class BddConnect {

    public function connexion(){
        //$db = new mysqli('localhost','root','','human_helps');
        $db = new PDO("mysql:host=localhost;dbname=human_helps",'root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}