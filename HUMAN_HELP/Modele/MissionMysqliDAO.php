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

        $getIdMission = $mission->getIdMission();
        $getTitreMission = $mission->getTitreMission();
        $getDescriptionMission = $mission->getDescriptionMission();
        $getTypeFormation = $mission->getTypeFormation();
        $getImageMission = $mission->getImageMission();
        $getDateDebut = $mission->getDateDebut()->format('Y-m-d');
        $getDuree = $mission->getDuree();
        $getDateAjout = $mission->getDateAjout();//->format('Y-m-d')
        $getIdPays = getIdPays();
        $getIdEtablissement = getIdEtablissement();
        $getIdTypeActivite = getIdTypeActivite();

        $query = "INSERT INTO employes VALUES (?,?,?,?,?,?,?,?,?,?,?)";            
        $stmt = $db->prepare($query); 
        $stmt->bind_param("ississssisiii",$getIdMission,$getTitreMission,$getDescriptionMission,$getTypeFormation,$getImageMission,
                                        $getDateDebut,$getDuree,
                                        $getDateAjout,$getIdPays,$getIdEtablissement,$getIdTypeActivite);
        $stmt->execute();

        $db->close();  
    }

    /******************* MODIFIE MISSION *****************************/

    public static function updateMission(Mission $mission, $idMission)
    { 
        $db = connexion(); 

        //$getIdMission = $mission->getIdMission();
        $getTitreMission = $mission->getTitreMission();
        $getDescriptionMission = $mission->getDescriptionMission();       
        $getTypeFormation = $mission->getTypeFormation();
        $getImageMission = $mission->getImageMission();
        $getPaysMission = $mission->getEmbauche();
        $getDateDebut = $mission->getDateDebut()->format('Y-m-d');
        $getDuree = $mission->getDuree();
        $getDateAjout = $mission->getDateAjout();
        $getIdPays = $mission->getIdPays();
        $getIdEtablissement = $mission->getIdEtablisse();
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
                                        $getIdEtablissement,$getIdTypeActivite,$idMission);
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
        
        $query = "SELECT * FROM employes WHERE no_employe = ?";   
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
    public static function searchMissionByPro()
    {}
}