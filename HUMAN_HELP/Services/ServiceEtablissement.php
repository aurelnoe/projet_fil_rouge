<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/DAO/EtablissementDAO.php");
include_once(PATH_BASE . "/Exceptions/DAOException.php");

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