<?php

class Avis
{
    private $idAvis ;
    private $auteur;
    private $temoignage;
    private $dateCommentaire;
    private $idUtilisateur;
    private $idBlog;
  
    public function __toString(){
        $this->idAvis;
        $this->auteur;
        $this->temoignage;
        $this->dateCommentaire;
        $this->idUtilisateur;
        $this->idBlog;
    }

    /**
     * Get the value of idAvis
     */ 
    public function getIdAvis():int
    {
        return $this->idAvis ;
    }

    /**
     * Set the value of idAvis
     *
     * @return  self
     */ 
    public function setIdAvis(int $idAvis ):self
    {
        $this->idAvis= $idAvis ;

        return $this;
    }

    /**
     * Get the value of auteurAvis
     */ 
    public function getAuteur():string
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteurAvis
     *
     * @return  self
     */ 
    public function setAuteur(string $auteur):self
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of temoignage
     */ 
    public function gettemoignage():string
    {
        return $this->temoignage;
    }

    /**
     * Set the value of temoignage
     *
     * @return  self
     */ 
    public function settemoignage(string $temoignage):self
    {
        $this->temoignage = $temoignage;

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