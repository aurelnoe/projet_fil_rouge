<?php

class Mission 
{
    private $idAvis;
    private $auteurAvis;
    private $temoignageAvis;
    private $dateCommentaire;
  
    public function __toString(){
        $this->idAvis;
        $this->auteurAvis;
        $this->temoignageAvis;
        $this->dateCommentaire;
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
}