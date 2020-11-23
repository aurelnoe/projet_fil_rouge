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
        return $this->missionDAO->add($mission);
    }

    public function update($mission)
    {
        return $this->missionDAO->update($mission);
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
    public function searchMissionByTypActivite($idTypeActivite)
    {
        return $this->missionDAO->searchMissionByTypActivite($idTypeActivite);
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