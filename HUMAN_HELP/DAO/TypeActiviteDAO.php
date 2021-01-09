<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Class/TypeActivite.php");
include_once(PATH_BASE . "/Class/BddConnect.php");
require_once(PATH_BASE . "/Exceptions/DAOException.php");

class TypeActiviteDAO extends BddConnect 
{
    public function searchAll()
    {
        try 
        {
        $newConnect = new BddConnect();
        $db = $newConnect->connexion();

            $query = 'SELECT * FROM type_activite';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $typesActivites = $stmt->fetchAll(PDO::FETCH_CLASS,'TypeActivite');

            $db = null;
            $stmt = null;
            
            return $typesActivites;
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    public function searchById($idTypeActivite)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT * FROM type_activite WHERE idTypeActivite = :idTypeActivite";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idTypeActivite", $idTypeActivite);
            $stmt->execute();       

            $typeActivite = $stmt->fetchAll(PDO::FETCH_CLASS,'TypeActivite');

            return $typeActivite[0];
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    public function searchNameById($idTypeActivite)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT typeActivite FROM type_activite WHERE idTypeActivite = :idTypeActivite";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idTypeActivite", $idTypeActivite);
            $stmt->execute();       

            $typeActivite = $stmt->fetchAll(PDO::FETCH_CLASS,'TypeActivite');

            return $typeActivite[0];
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