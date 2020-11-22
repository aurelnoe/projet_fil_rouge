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
        return $this->missionDAO->add($mission);
    }

    public function update($mission)
    {
        return $this->missionDAO->update($mission);
    }

    public function delete($id_mission)
    {
        $this->missionDAO->delete($id_mission);
    }

    public function searchAll()
    {
        return $this->missionDAO->searchAll();
    }

    /************ PAGE DETAIL MISSION *********/
    public function searchById($id_mission)
    {
        return $this->missionDAO->searchById($id_mission);
    }

    /************ PAGE LISTE MISSION PRO ***********/
    public function searchMissionByPro($id_etablissement)
    {
        return $this->missionDAO->searchMissionByPro($id_etablissement);      
    }

    public function searchMissionByTypActivite($id_type_activite)
    {
        return $this->missionDAO->searchMissionByTypActivite($id_type_activite);
    }

    public function searchMissionByPays($id_pays)
    {
        return $this->missionDAO->searchMissionByPays($id_pays);
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