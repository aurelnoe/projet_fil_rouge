<?php

class Utilisateur
{
    private $id_utilisateur;
    private $nom_util;
    private $prenom_util;
    private $adresse_util;
    private $code_postal_util;
    private $ville_util;
    private $mail_util;
    private $tel_util;
    private $password_util;
    private $date_inscription_util;
    private $id_role;
    private $id_pays;
    
    public function __toString(){
        $this->id_utilisateur;
        $this->nom_util;
        $this->prenom_util;
        $this->adresse_util;
        $this->code_postal_util;
        $this->ville_util;
        $this->mail_util;
        $this->tel_util;
        $this->password_util;
        $this->id_role;
        $this->id_pays;
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
    public function setId_utilisateur($id_utilisateur):self
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of prenom_util
     */ 
    public function getPrenom_util():string
    {
        return $this->prenom_util;
    }

    /**
     * Set the value of prenom_util
     *
     * @return  self
     */ 
    public function setPrenom_util($prenom_util):self
    {
        $this->prenom_util = $prenom_util;

        return $this;
    }

    /**
     * Get the value of prenom_util
     */ 
    public function getPrenom_util():string
    {
        return $this->prenom_util;
    }

    /**
     * Set the value of prenom_util
     *
     * @return  self
     */ 
    public function setPrenom_util($prenom_util):self
    {
        $this->prenom_util = $prenom_util;

        return $this;
    }

    /**
     * Get the value of adresse_util
     */ 
    public function getAdresse_util():string
    {
        return $this->adresse_util;
    }

    /**
     * Set the value of adresse_util
     *
     * @return  self
     */ 
    public function setAdresse_util($adresse_util):self
    {
        $this->adresse_util = $adresse_util;

        return $this;
    }

    /**
     * Get the value of code_postal_util
     */ 
    public function getCode_postal_util():int
    {
        return $this->code_postal_util;
    }

    /**
     * Set the value of code_postal_util
     *
     * @return  self
     */ 
    public function setCode_postal_util($code_postal_util):self
    {
        $this->code_postal_util = $code_postal_util;

        return $this;
    }

    /**
     * Get the value of ville_util
     */ 
    public function getVille_util():string
    {
        return $this->ville_util;
    }

    /**
     * Set the value of ville_util
     *
     * @return  self
     */ 
    public function setVille_util($ville_util):self
    {
        $this->ville_util = $ville_util;

        return $this;
    }

    /**
     * Get the value of mail_util
     */ 
    public function getMail_util():string
    {
        return $this->mail_util;
    }

    /**
     * Set the value of mail_util
     *
     * @return  self
     */ 
    public function setMail_util($mail_util):self
    {
        $this->mail_util = $mail_util;

        return $this;
    }

    /**
     * Get the value of tel_util
     */ 
    public function getTel_util():int
    {
        return $this->tel_util;
    }

    /**
     * Set the value of tel_util
     *
     * @return  self
     */ 
    public function setTel_util($tel_util):self
    {
        $this->tel_util = $tel_util;

        return $this;
    }

    /**
     * Get the value of password_util
     */ 
    public function getPassword_util():string
    {
        return $this->password_util;
    }

    /**
     * Set the value of password_util
     *
     * @return  self
     */ 
    public function setPassword_util($password_util):self
    {
        $this->password_util = $password_util;

        return $this;
    }

    /**
     * Get the value of date_inscription_util
     */ 
    public function getDate_inscription_util():dateTime
    {
        return $this->date_inscription_util;
    }

    /**
     * Set the value of date_inscription_util
     *
     * @return  self
     */ 
    public function setDate_inscription_util($date_inscription_util):self
    {
        $this->date_inscription_util = $date_inscription_util;

        return $this;
    }

    /**
     * Get the value of id_role
     */ 
    public function getId_role():int
    {
        return $this->id_role;
    }

    /**
     * Set the value of id_role
     *
     * @return  self
     */ 
    public function setId_role($id_role):self
    {
        $this->id_role = $id_role;

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
    public function setId_pays($id_pays):self
    {
        $this->id_pays = $id_pays;

        return $this;
    }
}


?>