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
    public function getIdAvis():int
    {
        return $this->idAvis;
    }

    /**
     * Set the value of idAvis
     *
     * @return  self
     */ 
    public function setIdAvis(int $idAvis):self
    {
        $this->idAvis = $idAvis;

        return $this;
    }

    /**
     * Get the value of auteurAvis
     */ 
    public function getAuteurAvis():string
    {
        return $this->auteurAvis;
    }

    /**
     * Set the value of auteurAvis
     *
     * @return  self
     */ 
    public function setAuteurAvis(string $auteurAvis):self
    {
        $this->auteurAvis = $auteurAvis;

        return $this;
    }

    /**
     * Get the value of temoignageAvis
     */ 
    public function getTemoignageAvis():string
    {
        return $this->temoignageAvis;
    }

    /**
     * Set the value of temoignageAvis
     *
     * @return  self
     */ 
    public function setTemoignageAvis(string $temoignageAvis):self
    {
        $this->temoignageAvis = $temoignageAvis;

        return $this;
    }

    /**
     * Get the value of dateCommentaire
     */ 
    public function getDateCommentaire():DateTime
    {
        return $this->dateCommentaire;
    }

    /**
     * Set the value of dateCommentaire
     *
     * @return  self
     */ 
    public function setDateCommentaire(DateTime $dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get the value of idUtilisateur
     */ 
    public function getIdUtilisateur():int
    {
        return $this->idUtilisateur;
    }

    /**
     * Set the value of idUtilisateur
     *
     * @return  self
     */ 
    public function setIdUtilisateur(int $idUtilisateur):self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get the value of idMission
     */ 
    public function getIdMission():int
    {
        return $this->idMission;
    }

    /**
     * Set the value of idMission
     *
     * @return  self
     */ 
    public function setIdMission(int $idMission):self
    {
        $this->idMission = $idMission;

        return $this;
    }

    /**
     * Get the value of idAuteur
     */ 
    public function getIdAuteur():int
    {
        return $this->idAuteur;
    }

    /**
     * Set the value of idAuteur
     *
     * @return  self
     */ 
    public function setIdAuteur(int $idAuteur):self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    /**
     * Get the value of idBlog
     */ 
    public function getIdBlog():int
    {
        return $this->idBlog;
    }

    /**
     * Set the value of idBlog
     *
     * @return  self
     */ 
    public function setIdBlog(int $idBlog):self
    {
        $this->idBlog = $idBlog;

        return $this;
    }
}