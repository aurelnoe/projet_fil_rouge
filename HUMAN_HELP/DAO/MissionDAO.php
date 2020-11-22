<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Mission.php");

function connexion(){

    $db = new PDO("mysql:host=localhost;dbname=human_helps",'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

class MissionDAO
{
    public function isAdmin($sessionProfil)
    {
        $admin = false;
        if ( $sessionProfil=='admin') {
            return $admin = true;
        }
    }

    /******************* AJOUTE MISSION *****************************/

    public function add(Mission $mission)
    {   
        try {
            $db = connexion(); 

            //$getIdMission = $mission->getIdMission();
            $getTitreMission = $mission->getTitreMission();
            $getDescriptionMission = $mission->getDescriptionMission();
            $getTypeFormation = $mission->getTypeFormation();
            $getImageMission = $mission->getImageMission();
            $getDateDebut = $mission->getDateDebut()->format('Y-m-d');
            $getDuree = $mission->getDuree();
            $getDateAjout = $mission->getDateAjout()->format('Y-m-d');
            //var_dump($getDateAjout);
            $getIdPays = $mission->getIdPays();
            $getIdEtablissement = $mission->getIdEtablissement();
            $getIdTypeActivite = $mission->getIdTypeActivite();

            $query = "INSERT INTO mission VALUES (NULL,:titre_mission,:description_mission,:type_formation,:image_mission,
                                                    :date_debut,:duree,:date_ajout,:id_pays,:id_etablissement,:id_type_activite)"; //           
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':titre_mission', $getTitreMission);           
            $stmt->bindParam(':description_mission', $getDescriptionMission);
            $stmt->bindParam(':type_formation', $getTypeFormation);
            $stmt->bindParam(':image_mission', $getImageMission);
            $stmt->bindParam(':date_debut', $getDateDebut);
            $stmt->bindParam(':duree', $getDuree);
            $stmt->bindParam(':date_ajout', $getDateAjout);
            $stmt->bindParam(':id_pays', $getIdPays);
            $stmt->bindParam(':id_etablissement', $getIdEtablissement);
            $stmt->bindParam(':id_type_activite', $getIdTypeActivite);

            $stmt->execute();

            $db = null;
            $stmt = null;           
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }         
    }

    /******************* MODIFIE MISSION *****************************/

    public function update(Mission $mission)
    { 
        try 
        {
            $db = connexion(); 

            $getIdMission = $mission->getIdMission();
            $getTitreMission = $mission->getTitreMission();
            $getDescriptionMission = $mission->getDescriptionMission();       
            $getTypeFormation = $mission->getTypeFormation();
            $getImageMission = $mission->getImageMission();
            $getPaysMission = $mission->getPaysMission();
            $getDateDebut = $mission->getDateDebut()->format('Y-m-d');
            $getDuree = $mission->getDuree();
            $getDateAjout = $mission->getDateAjout();
            $getIdPays = $mission->getIdPays();
            $getIdEtablissement = $mission->getIdEtablissement();
            $getIdTypeActivite = $mission->getIdTypeActivite();
            //var_dump($idMission);
            $query = "UPDATE mission 
                        SET titre_mission = :titre_mission,
                            descripition_mission = :description_mission,
                            type_formation = :type_formation,
                            image_mission = :image_mission,
                            date_debut = :date_debut,
                            duree = :duree,
                            date_ajout = :date_ajout,
                            id_pays = :id_pays,
                            id_etablissement = ,
                            id_type_activite = :id_etablissement
                        WHERE id_mission = :id_type_activite";  

            $stmt = $db->prepare($query);

            $stmt->bindParam(':titre_mission', $getTitreMission);           
            $stmt->bindParam(':description_mission', $getDescriptionMission);
            $stmt->bindParam(':type_formation', $getTypeFormation);
            $stmt->bindParam(':image_mission', $getImageMission);
            $stmt->bindParam(':date_debut', $getDateDebut);
            $stmt->bindParam(':duree', $getDuree);
            $stmt->bindParam(':date_ajout', $getDateAjout);
            $stmt->bindParam(':id_pays', $getIdPays);
            $stmt->bindParam(':id_etablissement', $getIdEtablissement);
            $stmt->bindParam(':id_type_activite', $getIdTypeActivite);

            $stmt->execute();

            $db = null;
            $stmt = null;
        }
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }
    }

    /******************* DELETE MISSION*****************************/

    public function delete($idMission)
    {
        try 
        {
            $db = connexion();

            $query = "DELETE FROM mission WHERE id_mission = :id_mission";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":id_mission", $idMission);
            $stmt->execute();

            $db = null;
            $stmt = null;
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }        
    }

    /**************** CHERCHE TOUTES LES MISSIONS ***************/
    public function searchAll()
    {
        try 
        {
            $db = connexion();

            $query = 'SELECT * FROM mission';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');

            $db = null;
            $stmt = null;
            
            return $missions;
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    /**************** CHERCHE UNE MISSION ***********************/
    public function searchById($id_mission)
    {
        try 
        {
            $db = connexion();
            
            $query = "SELECT * FROM mission WHERE id_mission = :id_mission";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":id_mission", $id_mission);
            $stmt->execute();       

            $mission = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');////MYSQLI FETCH ARRAY
            //var_dump($mission);

            return $mission[0];
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    /**************** CHERCHE TOUTES LES MISSIONS D'UN PRO *****OK**/
    public function searchMissionByPro($id_etablissement)
    {
        try {
            $db = connexion();
        
            $query = "SELECT * FROM mission WHERE id_etablissement = :id_etablissement";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':id_etablissement', $id_etablissement);
            $stmt->execute();  

            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');
            //var_dump($missions);
            $db = null;
            $stmt = null;
                                  
            return $missions;
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }       
    }

/**************** CHERCHE TOUTES LES MISSIONS PAR TYPE D'ACTIVITE *******/
    public function searchMissionByTypActivite($id_type_activite){
        try {
            $db = connexion();
        
            $query = "SELECT * FROM mission WHERE id_type_activite = :id_type_activite";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":id_type_activite", $id_type_activite);
            $stmt->execute();       

            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');

            $db = null;
            $stmt = null;
                                        
            return $missions;
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }       
    }

/**************** CHERCHE TOUTES LES MISSIONS PAR PAYS *******/
    public function searchMissionByPays($id_pays){
        try{
            $db = connexion();
            
            $query = "SELECT * FROM mission WHERE id_pays = :id_pays";

            $stmt = $db->prepare($query);
            $stmt->bind_param(":id_pays", $id_pays);
            $stmt->execute();       

            $missions = $stmt->fetchAll(PDO::FETCH_CLASS,'Mission');

            $db = null;
            $stmt = null;
                    
            return $missions;
        }       
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }
    }
}

?>