<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/TypeActivite.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");


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
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
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
            $stmt->bindParam(":ididTypeActivite", $idTypeActivite);
            $stmt->execute();       

            $typeActivite = $stmt->fetchAll(PDO::FETCH_CLASS,'TypeActivite');////MYSQLI FETCH ARRAY
            //varDump($mission);

            return $typeActivite[0];
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