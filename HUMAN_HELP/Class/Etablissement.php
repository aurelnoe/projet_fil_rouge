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
    private $idTypeActivite;          
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
        $this->idTypeActivite;
        $this->idPays;      
    }


    /**
     * Get the value of idEtablissement
     */ 
    public function getidEtablissement():int
    {
        return $this->idEtablissement;
    }

    /**
     * Set the value of idEtablissement
     *
     * @return  self
     */ 
    public function setidEtablissement(int $idEtablissement):self
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
    public function getadresseEtablissement():string
    {
        return $this->adresseEtablissement;
    }

    /**
     * Set the value of adresseEtablissement
     *
     * @return  self
     */ 
    public function setadresseEtablissement(string $adresseEtablissement):self
    {
        $this->adresseEtablissement = $adresseEtablissement;

        return $this;
    }

    /**
     * Get the value of villeEtablissement
     */ 
    public function getvilleEtablissement():string
    {
        return $this->villeEtablissement;
    }

    /**
     * Set the value of villeEtablissement
     *
     * @return  self
     */ 
    public function setvilleEtablissement(string $villeEtablissement):self
    {
        $this->villeEtablissement = $villeEtablissement;

        return $this;
    }

    /**
     * Get the value of codePostalEtablissement
     */ 
    public function getcodePostalEtablissement():int
    {
        return $this->codePostalEtablissement;
    }

    /**
     * Set the value of codePostalEtablissement
     *
     * @return  self
     */ 
    public function setcodePostalEtablissement(int $codePostalEtablissement):self
    {
        $this->codePostalEtablissement = $codePostalEtablissement;

        return $this;
    }

    /**
     * Get the value of mailEtablissement
     */ 
    public function getmailEtablissement():string
    {
        return $this->mailEtablissement;
    }

    /**
     * Set the value of mailEtablissement
     *
     * @return  self
     */ 
    public function setmailEtablissement(string $mailEtablissement):self
    {
        $this->mailEtablissement = $mailEtablissement;

        return $this;
    }

    /**
     * Get the value of telEtablissement
     */ 
    public function gettelEtablissement():int
    {
        return $this->telEtablissement;
    }

    /**
     * Set the value of telEtablissement
     *
     * @return  self
     */ 
    public function settelEtablissement(int $telEtablissement):self
    {
        $this->telEtablissement = $telEtablissement;

        return $this;
    }

    /**
     * Get the value of dateAjoutEtablissement     */ 
    public function getdateAjoutEtablissement():DateTime
    {
        return $this->dateAjoutEtablissement;
    }

    /**
     * Set the value of dateAjoutEtablissement     *
     * @return  self
     */ 
    public function setdateAjoutEtablissement(DateTime $dateAjoutEtablissement):self
    {
        $this->dateAjoutEtablissement = $dateAjoutEtablissement;

        return $this;
    }

    /**
     * Get the value of idUtilisateur
     */ 
    public function getidUtilisateur():int 
    {
        return $this->idUtilisateur;
    }

    /**
     * Set the value of idUtilisateur
     *
     * @return  self
     */ 
    public function setidUtilisateur(int $idUtilisateur):self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get the value of idTypeActivite
     */ 
    public function getidTypeActivite():int
    {
        return $this->idTypeActivite;
    }

    /**
     * Set the value of idTypeActivite
     *
     * @return  self
     */ 
    public function setidTypeActivite(int $idTypeActivite):self
    {
        $this->idTypeActivite = $idTypeActivite;

        return $this;
    }

    /**
     * Get the value of idPays
     */ 
    public function getidPays():int
    {
        return $this->idPays;
    }

    /**
     * Set the value of idPays
     *
     * @return  self
     */ 
    public function setidPays(int $idPays):self
    {
        $this->idPays = $idPays;

        return $this;
    }
}