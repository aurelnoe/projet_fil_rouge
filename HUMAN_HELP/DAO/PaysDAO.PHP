<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Pays.php");
require("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");

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
            throw new PDOException($e->getMessage(),$e->getCode());
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
            throw new PDOException($e->getMessage(),$e->getCode());
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
            throw new PDOException($e->getMessage(),$e->getCode());
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
            throw new PDOException($e->getMessage(),$e->getCode());
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
            throw new PDOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }
}