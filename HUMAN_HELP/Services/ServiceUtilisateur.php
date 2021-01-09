<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/DAO/UtilisateurDAO.php");
include_once(PATH_BASE . "/Exceptions/DAOException.php");
include_once(PATH_BASE . "/Exceptions/ServiceException.php");

class ServiceUtilisateur 
{
    private $utilisateurDAO;

    public function __construct()
    {
        return $this->utilisateurDAO = new UtilisateurDAO();
    }

    public function add($utilisateur)
    {
        try {
            $hash = password_hash($utilisateur->getPasswordUtil(), PASSWORD_DEFAULT);
            $utilisateur->setPasswordUtil($hash);
            return $this->utilisateurDAO->add($utilisateur);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }       
    }

    public function update($utilisateur)
    {
        try {
            return $this->utilisateurDAO->update($utilisateur);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }    
    }

    public function delete($idUtilisateur)
    {
        try {
            $this->utilisateurDAO->delete($idUtilisateur);
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }       
    }

    public function searchAll()
    {
        try {
            return $this->utilisateurDAO->searchAll();
        } 
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }   
    }

    /************ PAGE DETAIL Utilisateur *********/
    public function searchById($idUtilisateur)
    {
        try 
        {          
            return $this->utilisateurDAO->searchById($idUtilisateur);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }
    }

    /************ CONNECTION *********/
    public function searchUserbyMail($email)
    {
        try 
        {          
            return $this->utilisateurDAO->searchUserbyMail($email);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }
    }

    /**
     * Get the value of UtilisateurDAO
     */ 
    public function getUtilisateurDAO()
    {
        return $this->utilisateurDAO;
    }

    /**
     * Set the value of UtilisateurDAO
     *
     * @return  self
     */ 
    public function setUtilisateurDAO($utilisateurDAO)
    {
        $this->utilisateurDAO = $utilisateurDAO;

        return $this;
    }
}