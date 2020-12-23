<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/PaysDAO.php");

class ServicePays 
{
    private $paysDAO;

    public function __construct()
    {
        return $this->paysDAO = new PaysDAO();
    }

    /************ Chercher tous les types d'activités*********/
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
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
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