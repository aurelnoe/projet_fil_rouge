<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/UtilisateurDAO.php");
//include_once("C:/xampp/htdocs/HUMAN_HELP/Services/ServicePays.php");

class ServiceUtilisateur 
{
    private $utilisateurDAO;

    public function __construct()
    {
        return $this->utilisateurDAO = new UtilisateurDAO();
    }

    public function add($utilisateur)
    {
        // try {
            $hash = password_hash($utilisateur->getPasswordUtil(), PASSWORD_DEFAULT);
            $utilisateur->setPasswordUtil($hash);
            return $this->utilisateurDAO->add($utilisateur);
        // } 
        // catch (PDOException $e) {
        //     throw new PDOException($e->getMessage(),$e->getCode());
        // }      
    }

    public function update($utilisateur)
    {
        try {
            return $this->utilisateurDAO->update($utilisateur);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }     
    }

    public function delete($idUtilisateur)
    {
        try {
            $this->utilisateurDAO->delete($idUtilisateur);
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }        
    }

    public function searchAll()
    {
        try {
            return $this->utilisateurDAO->searchAll();
        } 
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }    
    }

    /************ PAGE DETAIL Utilisateur *********/
    public function searchById($idUtilisateur)
    {
        try 
        {          
            return $this->utilisateurDAO->searchById($idUtilisateur);
        }
        catch (PDOException $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
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