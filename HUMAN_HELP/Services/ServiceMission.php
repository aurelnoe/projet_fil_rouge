<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/MissionDAO.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Exceptions/DAOException.php");

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
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }      
    }

    public function update($mission)
    {
        try {
            return $this->missionDAO->update($mission);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }     
    }

    public function delete($idMission)
    {
        try {
            $this->missionDAO->delete($idMission);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }        
    }

    public function searchAll()
    {
        try {
            return $this->missionDAO->searchAll();
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }    
    }

    /************ PAGE DETAIL MISSION *********/
    public function searchById($idMission)
    {
        try 
        {          
            return $this->missionDAO->searchById($idMission);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        } 
    }

    /************ PAGE LISTE MISSION PRO ***********/
    public function searchMissionByPro($idEtablissement)
    {
        try {
            return $this->missionDAO->searchMissionByPro($idEtablissement);      
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
    }
    /************ PAGE MISSION PAR TYPE ACTIVITE ***********/
    public function searchMissionByTypeActivite($idTypeActivite)
    {
        try {
            return $this->missionDAO->searchMissionByTypeActivite($idTypeActivite);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        } 
    }

    public function searchMissionByPays($idPays)
    {
        try {
            return $this->missionDAO->searchMissionByPays($idPays);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        } 
    }

    public function searchMissionByTypeFormation($typeFormation)
    {
        try {
            return $this->missionDAO->searchMissionByTypeFormation($typeFormation);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
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