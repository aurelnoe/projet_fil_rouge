<?php

class Mission 
{
    private $idAvis;
    private $auteurAvis;
    private $temoignageAvis;
    private $dateCommentaire;
    private $idUtilisateur;
    private $idMission;
    private $idAuteur;
    private $idBlog;
  
    public function __toString(){
        $this->idAvis;
        $this->auteurAvis;
        $this->temoignageAvis;
        $this->dateCommentaire;
        $this->idUtilisateur;
        $this->idMission;
        $this->idAuteur;
        $this->idBlog;
    }


    /**
     * Get the value of idAvis
     */ 
    public function getIdAvis()
    {
        return $this->idAvis;
    }

    /**
     * Set the value of idAvis
     *
     * @return  self
     */ 
    public function setIdAvis($idAvis)
    {
        $this->idAvis = $idAvis;

        return $this;
    }

    /**
     * Get the value of auteurAvis
     */ 
    public function getAuteurAvis()
    {
        return $this->auteurAvis;
    }

    /**
     * Set the value of auteurAvis
     *
     * @return  self
     */ 
    public function setAuteurAvis($auteurAvis)
    {
        $this->auteurAvis = $auteurAvis;

        return $this;
    }

    /**
     * Get the value of temoignageAvis
     */ 
    public function getTemoignageAvis()
    {
        return $this->temoignageAvis;
    }

    /**
     * Set the value of temoignageAvis
     *
     * @return  self
     */ 
    public function setTemoignageAvis($temoignageAvis)
    {
        $this->temoignageAvis = $temoignageAvis;

        return $this;
    }

    /**
     * Get the value of dateCommentaire
     */ 
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set the value of dateCommentaire
     *
     * @return  self
     */ 
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get the value of idUtilisateur
     */ 
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set the value of idUtilisateur
     *
     * @return  self
     */ 
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get the value of idMission
     */ 
    public function getIdMission()
    {
        return $this->idMission;
    }

    /**
     * Set the value of idMission
     *
     * @return  self
     */ 
    public function setIdMission($idMission)
    {
        $this->idMission = $idMission;

        return $this;
    }

    /**
     * Get the value of idAuteur
     */ 
    public function getIdAuteur()
    {
        return $this->idAuteur;
    }

    /**
     * Set the value of idAuteur
     *
     * @return  self
     */ 
    public function setIdAuteur($idAuteur)
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    /**
     * Get the value of idBlog
     */ 
    public function getIdBlog()
    {
        return $this->idBlog;
    }

    /**
     * Set the value of idBlog
     *
     * @return  self
     */ 
    public function setIdBlog($idBlog)
    {
        $this->idBlog = $idBlog;

        return $this;
    }
}