<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/MissionDAO.php");

class ServiceMission 
{
    private $missionDAO;

    public function __construct()
    {
        return $this->missionDAO = new MissionDAO();
    }

    public function add($mission)
    {
        try {
            return $this->missionDAO->add($mission);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }      
    }

    public function update($mission)
    {
        try {
            return $this->missionDAO->update($mission);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }     
    }

    public function delete($idMission)
    {
        try {
            $this->missionDAO->delete($idMission);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }        
    }

    public function searchAll()
    {
        try {
            return $this->missionDAO->searchAll();
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }    
    }

    /************ PAGE DETAIL MISSION *********/
    public function searchById($idMission)
    {
        try 
        {          
            return $this->missionDAO->searchById($idMission);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }

    /************ PAGE LISTE MISSION PRO ***********/
    public function searchMissionByPro($idEtablissement)
    {
        try {
            return $this->missionDAO->searchMissionByPro($idEtablissement);      
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }  
    }
    /************ PAGE MISSION PAR TYPE ACTIVITE ***********/
    public function searchMissionByTypeActivite($idTypeActivite)
    {
        try {
            return $this->missionDAO->searchMissionByTypeActivite($idTypeActivite);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }

    public function searchMissionByPays($idPays)
    {
        try {
            return $this->missionDAO->searchMissionByPays($idPays);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }

    public function searchMissionByTypeFormation($typeFormation)
    {
        try {
            return $this->missionDAO->searchMissionByTypeFormation($typeFormation);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }

    /**
     * Get the value of missionDAO
     */ 
    public function getMissionDAO()
    {
        return $this->missionDAO;
    }

    /**
     * Set the value of missionDAO
     *
     * @return  self
     */ 
    public function setMissionDAO($missionDAO)
    {
        $this->missionDAO = $missionDAO;

        return $this;
    }
}