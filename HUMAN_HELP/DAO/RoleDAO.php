<?php

include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Role.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");

class RoleDAO extends BddConnect 
{
    /**************** CHERCHE LES ROLES ***************/
    public function searchAll()
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = 'SELECT * FROM role';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $roles = $stmt->fetchAll(PDO::FETCH_CLASS,'Role');

            $db = null;
            $stmt = null;
            
            return $roles;
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}