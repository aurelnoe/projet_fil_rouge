<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/AvisDAO.php");


class ServiceAvis 
{
    private $avisDAO;

    public function __construct()
    {
        return $this->avisDAO = new AvisDAO();
    }

    public function add($avis)
    {
        try {
            return $this->avisDAO->add($avis);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }      
    }

    public function update($avis)
    {
        try {
            return $this->avisDAO->update($avis);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }     
    }

    public function delete($idAvis)
    {
        try {
            $this->avisDAO->delete($idAvis);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }        
    }

    public function searchAll()
    {
        try {
            return $this->avisDAO->searchAll();
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }    
    }
    public function searchById($idAvis)
    {
        try 
        {          
            return $this->avisDAO->searchById($idAvis);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }

    /**
     * Get the value of avisDAO
     */ 
    public function getAvisDAO()
    {
        return $this->avisDAO;
    }

    /**
     * Set the value of avisDAO
     *
     * @return  self
     */ 
    public function setAvisDAO($avisDAO)
    {
        $this->avisDAO = $avisDAO;

        return $this;
    }
}