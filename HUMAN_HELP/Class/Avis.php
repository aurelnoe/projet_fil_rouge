<?php

class Avis
{
    private $id_avis ;
    private $auteur;
    private $temoignage;
    private $date_commentaire;
    private $id_utilisateur;
    private $id_blog;
  
    public function __toString(){
        $this->id_avis;
        $this->auteur;
        $this->temoignage;
        $this->date_commentaire;
        $this->id_utilisateur;
        $this->id_blog;
    }

    /**
     * Get the value of idAvis
     */ 
    public function getIdAvis():int
    {
        return $this->id_avis ;
    }

    /**
     * Set the value of idAvis
     *
     * @return  self
     */ 
    public function setIdAvis(int $id_avis ):self
    {
        $this->id_avis= $id_avis ;

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
        return $this->date_commentaire;
    }

    /**
     * Set the value of dateCommentaire
     *
     * @return  self
     */ 
    public function setDateCommentaire(DateTime $date_commentaire)
    {
        $this->date_commentaire = $date_commentaire;

        return $this;
    }

    /**
     * Get the value of idUtilisateur
     */ 
    public function getIdUtilisateur():int
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of idUtilisateur
     *
     * @return  self
     */ 
    public function setIdUtilisateur(int $id_utilisateur):self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of idBlog
     */ 
    public function getIdBlog():int
    {
        return $this->id_blog;
    }

    /**
     * Set the value of idBlog
     *
     * @return  self
     */ 
    public function setIdBlog(int $id_blog):self
    {
        $this->id_blog = $id_blog;

        return $this;
    }
}