<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/DAO/AvisDAO.php");

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
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }                 
    }

    public function update($avis)
    {
        try {
            return $this->avisDAO->update($avis);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }            
    }

    public function delete($idAvis)
    {
        try {
            $this->avisDAO->delete($idAvis);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }           
    }

    public function searchAll()
    {
        try {
            return $this->avisDAO->searchAll();
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }         
    }
    public function searchById($idAvis)
    {
        try 
        {          
            return $this->avisDAO->searchById($idAvis);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }       
    }
    public function searchByIdArticle($idBlog)
    {
        try 
        {          
            return $this->avisDAO->searchByIdArticle($idBlog);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
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