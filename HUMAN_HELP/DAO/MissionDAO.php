<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Class/Mission.php");
include_once(PATH_BASE . "/Class/BddConnect.php");
require_once(PATH_BASE . "/Exceptions/DAOException.php");

class MissionDAO extends BddConnect
{
    /******************* AJOUTE MISSION *****************************/
    public function add(Mission $mission)
    {   
        try {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion(); 

            $getTitreMission = $mission->getTitreMission();
            $getDescriptionMission = $mission->getDescriptionMission();
            $getTypeFormation = $mission->getTypeFormation();
            $getImageMission = $mission->getImageMission();
            $getDateDebut = $mission->getDateDebut()->format('Y-m-d');
            $getDuree = $mission->getDuree();
            $getDateAjout = $mission->getDateAjout()->format('Y-m-d');
            $getIdPays = $mission->getIdPays();
            $getIdEtablissement = $mission->getIdEtablissement();
            $getIdTypeActivite = $mission->getIdTypeActivite();

            $query = "INSERT INTO mission VALUES (NULL,:titreMission,:descriptionMission,:typeFormation,:imageMission,
                                                    :dateDebut,:duree,:dateAjout,:idPays,:idEtablissement,:idTypeActivite)"; //           
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':titreMission', $getTitreMission);           
            $stmt->bindParam(':descriptionMission', $getDescriptionMission);
            $stmt->bindParam(':typeFormation', $getTypeFormation);
            $stmt->bindParam(':imageMission', $getImageMission);
            $stmt->bindParam(':dateDebut', $getDateDebut);
            $stmt->bindParam(':duree', $getDuree);
            $stmt->bindParam(':dateAjout', $getDateAjout);
            $stmt->bindParam(':idPays', $getIdPays);
            $stmt->bindParam(':idEtablissement', $getIdEtablissement);
            $stmt->bindParam(':idTypeActivite', $getIdTypeActivite);

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

    /******************* MODIFIE MISSION *****************************/

    public function update(Mission $mission)
    { 
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion(); 

            $getIdMission = $mission->getIdMission();
            $getTitreMission = $mission->getTitreMission();
            $getDescriptionMission = $mission->getDescriptionMission();       
            $getTypeFormation = $mission->getTypeFormation();
            $getImageMission = $mission->getImageMission();
            $getDateDebut = $mission->getDateDebut()->format('Y-m-d');
            $getDuree = $mission->getDuree();
            $getDateAjout = $mission->getDateAjout()->format('Y-m-d');
            $getIdPays = $mission->getIdPays();
            $getIdEtablissement = $mission->getIdEtablissement();
            $getIdTypeActivite = $mission->getIdTypeActivite();
            //varDump($idMission);
            $query = "UPDATE mission 
                        SET titreMission = :titreMission,
                            descriptionMission = :descriptionMission,
                            typeFormation = :typeFormation,
                            imageMission = :imageMission,
                            dateDebut = :dateDebut,
                            duree = :duree,
                            dateAjout = :dateAjout,
                            idPays = :idPays,
                            idEtablissement = :idEtablissement,
                            idTypeActivite = :idTypeActivite
                        WHERE idMission = :idMission";  

            $stmt = $db->prepare($query);

            $stmt->bindParam(':titreMission', $getTitreMission);           
            $stmt->bindParam(':descriptionMission', $getDescriptionMission);
            $stmt->bindParam(':typeFormation', $getTypeFormation);
            $stmt->bindParam(':imageMission', $getImageMission);
            $stmt->bindParam(':dateDebut', $getDateDebut);
            $stmt->bindParam(':duree', $getDuree);
            $stmt->bindParam(':dateAjout', $getDateAjout);
            $stmt->bindParam(':idPays', $getIdPays);
            $stmt->bindParam(':idEtablissement', $getIdEtablissement);
            $stmt->bindParam(':idTypeActivite', $getIdTypeActivite);
            $stmt->bindParam(':idMission', $getIdMission);

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

    /******************* DELETE MISSION*****************************/

    public function delete($idMission)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "DELETE FROM mission WHERE idMission = :idMission";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idMission", $idMission);
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

    /**************** CHERCHE TOUTES LES MISSIONS ***************/
    public function searchAll()
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = 'SELECT * FROM mission';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');
            if (empty($missions)) {
                throw new DAOException("Aucune mission n'a été trouvé dans la base de données", 9998);
            }
            return $missions;
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    /**************** CHERCHE UNE MISSION ***********************/
    public function searchById($idMission)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT * FROM mission WHERE idMission = :idMission";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idMission", $idMission);
            $stmt->execute();       

            $mission = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');////MYSQLI FETCH ARRAY
            //varDump($mission);
            if (empty($mission[0])) {
                throw new DAOException("La mission n'a pas été trouvé dans la base de données",9999);
            }
            return $mission[0];
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    /**************** CHERCHE TOUTES LES MISSIONS D'UN PRO *****OK**/
    public function searchMissionByPro($idEtablissement)
    {
        try {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
        
            $query = "SELECT * FROM mission WHERE idEtablissement = :idEtablissement";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':idEtablissement', $idEtablissement);
            $stmt->execute();  

            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');
                                  
            return $missions;
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }       
    }

/**************** CHERCHE TOUTES LES MISSIONS PAR TYPE D'ACTIVITE *******/
    public function searchMissionByTypeActivite($idTypeActivite){
        try {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
        
            $query = "SELECT * FROM mission WHERE idTypeActivite = :idTypeActivite";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idTypeActivite", $idTypeActivite);
            $stmt->execute();       

            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');
                                        
            return $missions;
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }       
    }


/**************** CHERCHE TOUTES LES MISSIONS PAR PAYS *******/
    public function searchMissionByPays( $idPays){
        try{
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT * FROM mission WHERE idPays = :idPays";

            $stmt = $db->prepare($query);
            $stmt->bindParam(":idPays", $idPays);
            $stmt->execute();       

            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');
                    
            return $missions;
        }       
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    public function searchMissionByTypeFormation(int $typeFormation){
        try{
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT * FROM mission WHERE typeFormation = :typeFormation";

            $stmt = $db->prepare($query);
            $stmt->bindParam(":typeFormation", $typeFormation);
            $stmt->execute();       

            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');
                    
            return $missions;
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

?>