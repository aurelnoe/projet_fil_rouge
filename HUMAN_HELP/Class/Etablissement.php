<?php 

class Etablissement {

    private $idEtablissement;
    private $denomination;
    private $adresseEtablissement;
    private $villeEtablissement;
    private $codePostalEtablissement;
    private $mailEtablissement;
    private $telEtablissement;
    private $dateAjoutEtablissement;
    private $idUtilisateur;           
    //private $idTypeActivite;          
    private $idPays;
    
    public function __toString(){
        return
        $this->idEtablissement;
        $this->denomination;
        $this->adresseEtablissement;
        $this->adresseEtablissement;
        $this->villeEtablissement;
        $this->codePostalEtablissement;
        $this->mailEtablissement;
        $this->telEtablissement;
        $this->dateAjoutEtablissement;
        $this->idUtilisateur;
        $this->idPays;      
    }


    /**
     * Get the value of idEtablissement
     */ 
    public function getIdEtablissement():int
    {
        return $this->idEtablissement;
    }

    /**
     * Set the value of idEtablissement
     *
     * @return  self
     */ 
    public function setIdEtablissement(int $idEtablissement):self
    {
        $this->idEtablissement = $idEtablissement;

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
     * Get the value of adresseEtablissement
     */ 
    public function getAdresseEtablissement():string
    {
        return $this->adresseEtablissement;
    }

    /**
     * Set the value of adresseEtablissement
     *
     * @return  self
     */ 
    public function setAdresseEtablissement(string $adresseEtablissement):self
    {
        $this->adresseEtablissement = $adresseEtablissement;

        return $this;
    }

    /**
     * Get the value of villeEtablissement
     */ 
    public function getVilleEtablissement():string
    {
        return $this->villeEtablissement;
    }

    /**
     * Set the value of villeEtablissement
     *
     * @return  self
     */ 
    public function setVilleEtablissement(string $villeEtablissement):self
    {
        $this->villeEtablissement = $villeEtablissement;

        return $this;
    }

    /**
     * Get the value of codePostalEtablissement
     */ 
    public function getCodePostalEtablissement():int
    {
        return $this->codePostalEtablissement;
    }

    /**
     * Set the value of codePostalEtablissement
     *
     * @return  self
     */ 
    public function setCodePostalEtablissement(int $codePostalEtablissement):self
    {
        $this->codePostalEtablissement = $codePostalEtablissement;

        return $this;
    }

    /**
     * Get the value of mailEtablissement
     */ 
    public function getMailEtablissement():string
    {
        return $this->mailEtablissement;
    }

    /**
     * Set the value of mailEtablissement
     *
     * @return  self
     */ 
    public function setMailEtablissement(string $mailEtablissement):self
    {
        $this->mailEtablissement = $mailEtablissement;

        return $this;
    }

    /**
     * Get the value of telEtablissement
     */ 
    public function getTelEtablissement():int
    {
        return $this->telEtablissement;
    }

    /**
     * Set the value of telEtablissement
     *
     * @return  self
     */ 
    public function setTelEtablissement(int $telEtablissement):self
    {
        $this->telEtablissement = $telEtablissement;

        return $this;
    }

    /**
     * Get the value of dateAjoutEtablissement     */ 
    public function getDateAjoutEtablissement():DateTime
    {
        return new DateTime($this->dateAjoutEtablissement);
    }

    /**
     * Set the value of dateAjoutEtablissement     *
     * @return  self
     */ 
    public function setDateAjoutEtablissement(string $dateAjoutEtablissement):self
    {
        $this->dateAjoutEtablissement = $dateAjoutEtablissement;

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
     * Get the value of idPays
     */ 
    public function getIdPays():int
    {
        return $this->idPays;
    }

    /**
     * Set the value of idPays
     *
     * @return  self
     */ 
    public function setIdPays(int $idPays):self
    {
        $this->idPays = $idPays;

        return $this;
    }
}