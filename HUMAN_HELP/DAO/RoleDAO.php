<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
require_once(PATH_BASE . "/Class/Role.php");
require_once(PATH_BASE . "/Class/BddConnect.php");
require_once(PATH_BASE . "/Exceptions/DAOException.php");

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