<?php
require("C:/xampp/htdocs/HUMAN_HELP/Class/Etablissement.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");

class EtablissementDAO 
{
    public function add(Etablissement $etablissement)
    {
        try {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion(); 

            $getDenomination = $etablissement->getDenomination();
            $getAdresseEtablissement = $etablissement->getAdresseEtablissement();
            $getVilleEtablissement = $etablissement->getVilleEtablissement();
            $getCodePostalEtablissement = $etablissement->getCodePostalEtablissement();
            $getMailEtablissement = $etablissement->getMailEtablissement();
            $getTelEtablissement = $etablissement->getTelEtablissement();
            $getDateAjoutEtablissement = $etablissement->getDateAjoutEtablissement()->format('Y-m-d');
            $getIdUtilisateur = $etablissement->getIdUtilisateur();
            $getIdPays = $etablissement->getIdPays();

            $query = "INSERT INTO etablissement VALUES (NULL,:denomination,:adresseEtablissement,:villeEtablissement,
                                                    :codePostalEtablissement,:mailEtablissement,:telEtablissement,
                                                    :dateAjoutEtablissement,:idUtilisateur,NULL,:idPays)";            
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':denomination', $getDenomination);           
            $stmt->bindParam(':adresseEtablissement', $getAdresseEtablissement);
            $stmt->bindParam(':villeEtablissement', $getVilleEtablissement);
            $stmt->bindParam(':codePostalEtablissement', $getCodePostalEtablissement);
            $stmt->bindParam(':mailEtablissement', $getMailEtablissement);
            $stmt->bindParam(':telEtablissement', $getTelEtablissement);
            $stmt->bindParam(':dateAjoutEtablissement', $getDateAjoutEtablissement);
            $stmt->bindParam(':idUtilisateur', $getIdUtilisateur);
            $stmt->bindParam(':idPays', $getIdPays);

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

    public function update(Etablissement $etablissement)
    { 
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion(); 

            $getIdEtablissement = $etablissement->getIdEtablissement();
            $getDenomination = $etablissement->getDenomination();
            $getAdresseEtablissement = $etablissement->getAdresseEtablissement();
            $getVilleEtablissement = $etablissement->getVilleEtablissement();
            $getCodePostalEtablissement = $etablissement->getCodePostalEtablissement();
            $getMailEtablissement = $etablissement->getMailEtablissement();
            $getTelEtablissement = $etablissement->getTelEtablissement();
            $getDateAjoutEtablissement = $etablissement->getDateAjoutEtablissement()->format('Y-m-d');
            $getIdUtilisateur = $etablissement->getIdUtilisateur();
            //$getIdTypeActivite = $etablissement->getIdTypeActivite();
            $getIdPays = $etablissement->getIdPays();
            
            $query = "UPDATE etablissement 
                        SET denomination = :denomination,
                            adresseEtablissement = :adresseEtablissement,
                            villeEtablissement = :villeEtablissement,
                            codePostalEtablissement = :codePostalEtablissement,
                            mailEtablissement = :mailEtablissement,
                            telEtablissement = :telEtablissement,
                            dateAjoutEtablissement = :dateAjoutEtablissement,
                            idUtilisateur = :idUtilisateur,
                            idPays = :idPays
                        WHERE idEtablissement = :idEtablissement";  

            $stmt = $db->prepare($query);

            $stmt->bindParam(':denomination', $getDenomination);           
            $stmt->bindParam(':adresseEtablissement', $getAdresseEtablissement);
            $stmt->bindParam(':villeEtablissement', $getVilleEtablissement);
            $stmt->bindParam(':codePostalEtablissement', $getCodePostalEtablissement);
            $stmt->bindParam(':mailEtablissement', $getMailEtablissement);
            $stmt->bindParam(':telEtablissement', $getTelEtablissement);
            $stmt->bindParam(':dateAjoutEtablissement', $getDateAjoutEtablissement);
            $stmt->bindParam(':idUtilisateur', $getIdUtilisateur);
            $stmt->bindParam(':idPays', $getIdPays);
            $stmt->bindParam(':idEtablissement', $getIdEtablissement);

            $stmt->execute();
        }
        catch (PDOException $e){
            throw new PDOException($e->getMessage(),$e->getCode());
            die;
        } 
        finally{
            $db = null;
            $stmt = null;  
        }
    }

    /******************* DELETE MISSION*****************************/

    public function delete($idEtablissement)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "DELETE FROM etablissement WHERE idEtablissement = :idEtablissement";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idEtablissement", $idEtablissement);
            $stmt->execute();

            $db = null;
            $stmt = null;
        } 
        catch (PDOException $e){
            throw new PDOException($e->getMessage(),$e->getCode());
            die;
        } 
        finally{
            $db = null;
            $stmt = null;  
        }        
    }

    public function searchById($idEtablissement)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT * FROM etablissement WHERE idEtablissement = :idEtablissement";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idEtablissement",$idEtablissement);
            $stmt->execute();       

            $etablissement = $stmt->fetchAll(PDO::FETCH_CLASS,'Etablissement');////MYSQLI FETCH ARRAY

            return $etablissement[0];
        } 
        catch (PDOException $e){
            throw new PDOException($e->getMessage(),$e->getCode());
            die;
        } 
        finally{
            $db = null;
            $stmt = null;  
        }
    }

    public function searchAll()
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = 'SELECT * FROM etablissement';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $etablissements = $stmt->fetchAll(PDO::FETCH_CLASS,'Etablissement');
            
            return $etablissements;
        } 
        catch (PDOException $e){
            throw new PDOException($e->getMessage(),$e->getCode());
            die;
        } 
        finally{
            $db = null;
            $stmt = null;  
        }
    }
}