<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/EtablissementDAO.php");

class ServiceEtablissement 
{
    private $etablissementDAO;

    public function __construct()
    {
        return $this->etablissementDAO = new EtablissementDAO();
    }

    public function add($etablissement)
    {
        try {
            return $this->etablissementDAO->add($etablissement);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }      
    }

    public function update($etablissement)
    {
        try {
            return $this->etablissementDAO->update($etablissement);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }     
    }

    public function delete($idEtablissement)
    {
        try {
            $this->etablissementDAO->delete($idEtablissement);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }       
    }

    public function searchAll()
    {
        try {
            return $this->etablissementDAO->searchAll();
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }  
    }

    /************ PAGE DETAIL Etablissement *********/
    public function searchById($idEtablissement)
    {
        try {
            return $this->etablissementDAO->searchById($idEtablissement);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }        
    }

    public function searchNameById($idEtablissement)
    {
        try {
            return $this->etablissementDAO->searchNameById($idEtablissement);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }        
    }
}