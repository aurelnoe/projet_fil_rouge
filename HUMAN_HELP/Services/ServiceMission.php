<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/MissionDAO.php");
//include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");

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
        $this->missionDAO->delete($idMission);
    }

    public function searchAll()
    {
        return $this->missionDAO->searchAll();
    }

    /************ PAGE DETAIL MISSION *********/
    public function searchById($idMission)
    {
        return $this->missionDAO->searchById($idMission);
    }

    /************ PAGE LISTE MISSION PRO ***********/
    public function searchMissionByPro($idEtablissement)
    {
        return $this->missionDAO->searchMissionByPro($idEtablissement);      
    }
    /************ PAGE MISSION PAR TYPE ACTIVITE ***********/
    public function searchMissionByTypeActivite($idTypeActivite)
    {
        return $this->missionDAO->searchMissionByTypeActivite($idTypeActivite);
    }

    public function searchMissionByPays($idPays)
    {
        return $this->missionDAO->searchMissionByPays($idPays);
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