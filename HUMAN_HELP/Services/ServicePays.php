<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/DAO/PaysDAO.php");
include_once(PATH_BASE . "/Exceptions/DAOException.php");

class ServicePays 
{
    private $paysDAO;

    public function __construct()
    {
        return $this->paysDAO = new PaysDAO();
    }

    /************ Chercher tous les pays*********/
    public function searchAll()
    {
        return $this->paysDAO->searchAll();
    }

    /************ Chercher par ID*********/
    public function searchById($idPays)
    {
        try 
        {          
            return $this->paysDAO->searchById($idPays);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
    }

    /************ Chercher Nom par ID*********/
    public function searchNameById($idPays)
    {
        try 
        {          
            return $this->paysDAO->searchNameById($idPays);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
    }
    /************ Chercher ID par NOM*********/
    public function searchIdByName($namePays)
    {
        try 
        {          
            return $this->paysDAO->searchNameById($namePays);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
    }
    /************ Chercher continent par ID*********/
    public function searchContinentById($idPays)
    {
        try 
        {          
            return $this->paysDAO->searchContinentById($idPays);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
    }

    /**
     * Get the value of PaysDAO
     */ 
    public function getPaysDAO()
    {
        return $this->paysDAO;
    }

    /**
     * Set the value of PaysDAO
     *
     * @return  self
     */ 
    public function setPaysDAO($paysDAO)
    {
        $this->paysDAO = $paysDAO;

        return $this;
    }
}