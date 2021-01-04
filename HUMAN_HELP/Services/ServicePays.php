<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/PaysDAO.php");

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
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }

    /************ Chercher Nom par ID*********/
    public function searchNameById($idPays)
    {
        try 
        {          
            return $this->paysDAO->searchNameById($idPays);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }
    /************ Chercher ID par NOM*********/
    public function searchIdByName($namePays)
    {
        try 
        {          
            return $this->paysDAO->searchNameById($namePays);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        } 
    }
    /************ Chercher continent par ID*********/
    public function searchContinentById($idPays)
    {
        try 
        {          
            return $this->paysDAO->searchContinentById($idPays);
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