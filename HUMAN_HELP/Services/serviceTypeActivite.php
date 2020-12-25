<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/TypeActiviteDAO.php");

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
        return $this->TypeActiviteDAO->searchAll();
    }

    /************ Chercher par ID*********/
    public function searchById($idTypeActivite)
    {
        try 
        {          
            return $this->TypeActiviteDAO->searchById($idTypeActivite);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }

    /************ Chercher par ID*********/
    public function searchNameById($idTypeActivite)
    {
        try 
        {          
            return $this->TypeActiviteDAO->searchNameById($idTypeActivite);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
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