<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Class/Pays.php");
require_once(PATH_BASE . "/Class/BddConnect.php");
require_once(PATH_BASE . "/Exceptions/DAOException.php");

class PaysDAO extends BddConnect
{
    //*************FONCTION AJOUTER UN PAYS*********************/

    public function add(object $pays)
    {   
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            //  $getIdPays = $pays->getIdPays();
             $getNomPays = $pays->getNomPays();
             $getContinent = $pays->getContinent();           

             $query ="INSERT INTO pays VALUES (NULL,:nomPays,:continent)";

             $stmt = $db->prepare($query);

             $stmt->bindParam(':idPays', $getIdPays);
             $stmt->bindParam(':nomPays', $getNomPays);
             $stmt->bindParam(':continent', $getContinent);
             
             $stmt->execute();
        }
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }


    //********************FONCTION MODIDIER PAYS************************ */

    public function update(object $pays)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

             $getIdPays = $pays->getIdPays();
             $getNomPays = $pays->getNomPays();
             $getContinent = $pays->getContinent();

             $query ="UPDATE pays  
             SET idPays = :idPays,
                 nomPays = :nomPays,
                 continent = :continent,";

             $stmt = $db->prepare($query);

             $stmt->bindParam(':idPays', $getIdPays);
             $stmt->bindParam(':nomPays', $getNomPays);
             $stmt->bindParam(':continent', $getContinent);
        }
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    //*********************FONCTION SUPPRIMER PAYS**************** */

    public function delete($idPays)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "DELETE FROM pays WHERE idPays = :idPays";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idPays", $idPays);
            $stmt->execute();
        }
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }


    //*********************FONCTION CHERCHER TOUT LES PAYS**************** */

    public function searchAll()
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = 'SELECT * FROM pays';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $pays = $stmt->fetchAll(PDO::FETCH_CLASS,'Pays');
                
            return $pays;
        }
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    //*********************FONCTION CHERCHER PAYS PAR ID**************** */

    public function searchById($idPays)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "SELECT * FROM pays WHERE idPays = :idPays";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idPays", $idPays);
            $stmt->execute();

            $pays = $stmt->fetchAll(PDO::FETCH_CLASS,'Pays');

            return $pays[0];
        }
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    public function searchNameById($idPays)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "SELECT nomPays FROM pays WHERE idPays = :idPays";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idPays", $idPays);
            $stmt->execute();

            $pays = $stmt->fetchAll(PDO::FETCH_CLASS,'Pays');

            return $pays[0];
        }
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    public function searchIdByName($namePays)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "SELECT * FROM pays WHERE nomPays = :nomPays";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":nomPays", $namePays);
            $stmt->execute();

            $pays = $stmt->fetchAll(PDO::FETCH_CLASS,'Pays');
            var_dump($pays);
            return $pays;
        }
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    public function searchContinentById($idPays)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "SELECT continent FROM pays WHERE idPays = :idPays";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idPays", $idPays);
            $stmt->execute();

            $pays = $stmt->fetchAll(PDO::FETCH_CLASS,'Pays');

            return $pays[0];
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