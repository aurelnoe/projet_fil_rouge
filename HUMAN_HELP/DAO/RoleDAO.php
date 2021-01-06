<?php
require_once("C:/xampp/htdocs/HUMAN_HELP/Class/Role.php");
require_once("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");
require_once("C:/xampp/htdocs/HUMAN_HELP/Exceptions/DAOException.php");

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
            
            return $roles;
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    /**************** CHERCHE UN ROLE ***********************/
    public function searchById($idRole)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT * FROM Role WHERE idRole = :idRole";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idRole", $idRole);
            $stmt->execute();       

            $role = $stmt->fetchAll(PDO::FETCH_CLASS,'Role');////MYSQLI FETCH ARRAY

            return $role[0];
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }
}