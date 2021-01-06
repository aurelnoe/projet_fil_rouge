<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/TypeActiviteDAO.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Exceptions/DAOException.php");

class ServiceTypeActivite 
{
    private $TypeActiviteDAO;

    public function __construct()
    {
        return $this->TypeActiviteDAO = new TypeActiviteDAO();
    }

    /************ Chercher tous les types d'activités*********/
    public function searchAll()
    {
        try 
        {
            return $this->TypeActiviteDAO->searchAll();          
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        } 
    }

    /************ Chercher par ID*********/
    public function searchById($idTypeActivite)
    {
        try 
        {          
            return $this->TypeActiviteDAO->searchById($idTypeActivite);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        } 
    }

    /************ Chercher par ID*********/
    public function searchNameById($idTypeActivite)
    {
        try 
        {          
            return $this->TypeActiviteDAO->searchNameById($idTypeActivite);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        } 
    }


    /**
     * Get the value of TypeActiviteDAO
     */ 
    public function getTypeActiviteDAO()
    {
        return $this->TypeActiviteDAO;
    }

    /**
     * Set the value of TypeActiviteDAO
     *
     * @return  self
     */ 
    public function setTypeActiviteDAO($TypeActiviteDAO)
    {
        $this->TypeActiviteDAO = $TypeActiviteDAO;

        return $this;
    }
}