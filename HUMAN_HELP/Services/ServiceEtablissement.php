<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/EtablissementDAO.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Exceptions/DAOException.php");

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
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }      
    }

    public function update($etablissement)
    {
        try {
            return $this->etablissementDAO->update($etablissement);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }     
    }

    public function delete($idEtablissement)
    {
        try {
            $this->etablissementDAO->delete($idEtablissement);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }       
    }

    public function searchAll()
    {
        try {
            return $this->etablissementDAO->searchAll();
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
    }

    /************ PAGE DETAIL Etablissement *********/
    public function searchById($idEtablissement)
    {
        try {
            return $this->etablissementDAO->searchById($idEtablissement);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }        
    }

    public function searchNameById($idEtablissement)
    {
        try {
            return $this->etablissementDAO->searchNameById($idEtablissement);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }        
    }

    public function searchEtablissementByIdUtilisateur($idUtilisateur)
    {
        try {
            return $this->etablissementDAO->searchEtablissementByIdUtilisateur($idUtilisateur);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }        
    }
}