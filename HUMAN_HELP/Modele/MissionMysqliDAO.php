<?php

include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Mission.php");

function connexion(){
    $db = new mysqli('localhost','root','','human_helps');
    return $db;
}

class MissionMySqliDAO
{
    public static function isAdmin($sessionProfil)
    {
        $admin = false;
        if ( $sessionProfil=='admin') {
            return $admin = true;
        }
    }

    /******************* AJOUTE MISSION *****************************/

    public static function addMission(Mission $mission)
    {   
        $db = connexion(); 

        //$getIdMission = $mission->getIdMission();
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

        $query = "INSERT INTO mission VALUES (NULL,?,?,?,?,?,?,?,?,?,?)";            
        $stmt = $db->prepare($query); 
        
        $stmt->bind_param("ssissssiii",$getTitreMission,$getDescriptionMission,$getTypeFormation,$getImageMission,
                                        $getDateDebut,$getDuree,
                                        $getDateAjout,$getIdPays,$getIdEtablissement,$getIdTypeActivite);
        //$stmt->execute();
        var_dump($stmt->execute(),$db->error);
        $db->close();  
    }

    /******************* MODIFIE MISSION *****************************/

    public static function updateMission(Mission $mission)
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
                    SET titre_mission = ?,
                        descripition_mission = ?,
                        type_formation = ?,
                        image_mission = ?,
                        date_debut = ?,
                        duree = ?,
                        date_ajout = ?,
                        id_pays = ?,
                        id_etablissement = ?,
                        id_type_activite = ?
                    WHERE id_mission = ?";  

        $stmt = $db->prepare($query);
        $stmt->bind_param("ssissisiiii",$getTitreMission,$getDescriptionMission,$getTypeFormation,$getImageMission,
                                        $getDateDebut,$getDuree,$getDateAjout,$getIdPays,
                                        $getIdEtablissement,$getIdTypeActivite,$getIdMission);
        $stmt->execute();

        //*VERIF REQUETE SQL
        if ($stmt->execute()) {
            ?><script>alert("Modif mission ok");</script><?php
        } else {
            ?><script>alert("Erreur lors de la modifcation de la mission");</script><?php
        }

        $db->close();
    }

    /******************* DELETE MISSION*****************************/

    public static function deleteMission($idMission)
    {
        $db = connexion();

        $query = "DELETE FROM mission WHERE id_mission = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $idMission);
        $stmt->execute();
        
        $db->close(); 
    }

    /**************** CHERCHE TOUTES LES MISSIONS ***************/
    public static function searchAllMissions()
    {
        $query = 'SELECT * FROM mission';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $rs = $stmt->get_result();
        $missions = $rs->fetch_all(MYSQLI_ASSOC);
        
        $rs->free(); 
        $db->close();  
        
        return $missions;
    }

    /**************** CHERCHE UNE MISSION ***********************/
    public static function searchMissionById($getIdMission)
    {
        $db = connexion();
        
        $query = "SELECT * FROM mission WHERE id_mission = ?";   
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $getNoEmploye);
        $stmt->execute();       
        $rs = $stmt->get_result();
        $employe = $rs->fetch_array(MYSQLI_ASSOC);
        
        $rs->free(); 
        $db->close();    
        
        return $employe;
    }

    /**************** CHERCHE TOUTES LES MISSIONS D'UN PRO *******/
    public static function searchMissionByPro($id_etablissement)
    {
        $db = connexion();
        
        $query = "SELECT * FROM mission WHERE id_etablissement = ?";

        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $id_etablissement);
        $stmt->execute();       
        $rs = $stmt->get_result();
        $missions = $rs->fetch_all(MYSQLI_ASSOC);
               
        $rs->free(); 
        $db->close();
        
        $allMissionsPro = array();
        $i = 1;
        foreach ($missions as $mission) 
        {
            $newDateDebut = new DateTime($mission['date_debut']);
            $newDateAjout = new DateTime($mission['date_ajout']);
            $newMission = new Mission();
            $newMission->setIdMission($mission['id_mission'])
                       ->setTitreMission($mission['titre_mission'])
                       ->setDescriptionMission($mission['description_mission'])
                       ->setTypeFormation($mission['type_formation'])
                       ->setImageMission($mission['image_mission'])
                       ->setDateDebut($newDateDebut)
                       ->setDuree($mission['duree'])
                       ->setDateAjout($newDateAjout)
                       ->setIdPays($mission['id_pays'])
                       ->setIdEtablissement($mission['id_etablissement'])
                       ->setIdTypeActivite($mission['id_type_activite']);
            $allMissionsPro[$i] = $newMission;
            $i++;
        } 
                      
        return $allMissionsPro;

    }
}
?>