<?php 

class Etablissement {

    private $id_etablissement;
    private $denomination;
    private $adresse_etablissement;
    private $ville_etablissement;
    private $code_postal_etablissement;
    private $mail_etablissement;
    private $tel_etablissement;
    private $date_ajout_etablissement;
    private $id_utilisateur;           
    private $id_type_activite;          
    private $id_pays;
    
    public function __toString(){
        return
        $this->id_etablissement;
        $this->denomination;
        $this->adresse_etablissement;
        $this->adresse_etablissement;
        $this->ville_etablissement;
        $this->code_postal_etablissement;
        $this->mail_etablissement;
        $this->tel_etablissement;
        $this->date_ajout_etablissement;
        $this->id_utilisateur;
        $this->id_type_activite;
        $this->id_pays;      
    }


    /**
     * Get the value of id_etablissement
     */ 
    public function getId_etablissement():int
    {
        return $this->id_etablissement;
    }

    /**
     * Set the value of id_etablissement
     *
     * @return  self
     */ 
    public function setId_etablissement(int $id_etablissement):self
    {
        $this->id_etablissement = $id_etablissement;

        return $this;
    }

    /**
     * Get the value of denomination
     */ 
    public function getDenomination():string
    {
        return $this->denomination;
    }

    /**
     * Set the value of denomination
     *
     * @return  self
     */ 
    public function setDenomination(string $denomination):self
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get the value of adresse_etablissement
     */ 
    public function getAdresse_etablissement():string
    {
        return $this->adresse_etablissement;
    }

    /**
     * Set the value of adresse_etablissement
     *
     * @return  self
     */ 
    public function setAdresse_etablissement(string $adresse_etablissement):self
    {
        $this->adresse_etablissement = $adresse_etablissement;

        return $this;
    }

    /**
     * Get the value of ville_etablissement
     */ 
    public function getVille_etablissement():string
    {
        return $this->ville_etablissement;
    }

    /**
     * Set the value of ville_etablissement
     *
     * @return  self
     */ 
    public function setVille_etablissement(string $ville_etablissement):self
    {
        $this->ville_etablissement = $ville_etablissement;

        return $this;
    }

    /**
     * Get the value of code_postal_etablissement
     */ 
    public function getCode_postal_etablissement():int
    {
        return $this->code_postal_etablissement;
    }

    /**
     * Set the value of code_postal_etablissement
     *
     * @return  self
     */ 
    public function setCode_postal_etablissement(int $code_postal_etablissement):self
    {
        $this->code_postal_etablissement = $code_postal_etablissement;

        return $this;
    }

    /**
     * Get the value of mail_etablissement
     */ 
    public function getMail_etablissement():string
    {
        return $this->mail_etablissement;
    }

    /**
     * Set the value of mail_etablissement
     *
     * @return  self
     */ 
    public function setMail_etablissement(string $mail_etablissement):self
    {
        $this->mail_etablissement = $mail_etablissement;

        return $this;
    }

    /**
     * Get the value of tel_etablissement
     */ 
    public function getTel_etablissement():int
    {
        return $this->tel_etablissement;
    }

    /**
     * Set the value of tel_etablissement
     *
     * @return  self
     */ 
    public function setTel_etablissement(int $tel_etablissement):self
    {
        $this->tel_etablissement = $tel_etablissement;

        return $this;
    }

    /**
     * Get the value of date_ajout_etablissement
     */ 
    public function getDate_ajout_etablissement():DateTime
    {
        return $this->date_ajout_etablissement;
    }

    /**
     * Set the value of date_ajout_etablissement
     *
     * @return  self
     */ 
    public function setDate_ajout_etablissement(DateTime $date_ajout_etablissement):self
    {
        $this->date_ajout_etablissement = $date_ajout_etablissement;

        return $this;
    }

    /**
     * Get the value of id_utilisateur
     */ 
    public function getId_utilisateur():int 
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */ 
    public function setId_utilisateur(int $id_utilisateur):self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of id_type_activite
     */ 
    public function getId_type_activite():int
    {
        return $this->id_type_activite;
    }

    /**
     * Set the value of id_type_activite
     *
     * @return  self
     */ 
    public function setId_type_activite(int $id_type_activite):self
    {
        $this->id_type_activite = $id_type_activite;

        return $this;
    }

    /**
     * Get the value of id_pays
     */ 
    public function getId_pays():int
    {
        return $this->id_pays;
    }

    /**
     * Set the value of id_pays
     *
     * @return  self
     */ 
    public function setId_pays(int $id_pays):self
    {
        $this->id_pays = $id_pays;

        return $this;
    }
}