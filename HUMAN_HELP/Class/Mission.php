<?php

class Mission 
{
    private $idMission;
    private $titreMission;
    private $descriptionMission;
    private $imageMission;
    private $paysMission;
    private $dateDebut;
    private $duree;
    private $dateAjout;
    private $idPays;
    private $idProfessionnel;
    private $idTypeActivite;
    
    public function __toString(){
        $this->idMission;
        $this->titreMission;
        $this->descriptionMission;
        $this->imageMission;
        $this->paysMission;
        $this->dateDebut;
        $this->duree;
        $this->dateAjout;
        $this->idPays;
        $this->idProfessionnel;
        $this->idTypeActivite;
       
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
     * Get the value of titreMission
     */ 
    public function getTitreMission():string
    {
        return $this->titreMission;
    }

    /**
     * Set the value of titreMission
     *
     * @return  self
     */ 
    public function setTitreMission(string $titreMission):self
    {
        $this->titreMission = $titreMission;

        return $this;
    }

    /**
     * Get the value of descriptionMission
     */ 
    public function getDescriptionMission():string
    {
            return $this->descriptionMission;
    }

    /**
     * Set the value of descriptionMission
     *
     * @return  self
     */ 
    public function setDescriptionMission(string $descriptionMission):self
    {
            $this->descriptionMission = $descriptionMission;

            return $this;
    }

    /**
     * Get the value of imageMission
     */ 
    public function getImageMission():string
    {
        return $this->imageMission;
    }

    /**
     * Set the value of imageMission
     *
     * @return  self
     */ 
    public function setImageMission(string $imageMission):self
    {
        $this->imageMission = $imageMission;

        return $this;
    }

    /**
     * Get the value of paysMission
     */ 
    public function getPaysMission():string
    {
        return $this->paysMission;
    }

    /**
     * Set the value of paysMission
     *
     * @return  self
     */ 
    public function setPaysMission(string $paysMission):self
    {
        $this->paysMission = $paysMission;

        return $this;
    }

    /**
     * Get the value of dateDebut
     */ 
    public function getDateDebut():DateTime
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut(DateTime $dateDebut):self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree():?int
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree(?int $duree):self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of dateAjout
     */ 
    public function getDateAjout():DateTime
    {
        return $this->dateAjout;
    }

    /**
     * Set the value of dateAjout
     *
     * @return  self
     */ 
    public function setDateAjout(DateTime $dateAjout):self
    {
        $this->dateAjout = $dateAjout;

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

    /**
     * Get the value of idProfessionnel
     */ 
    public function getIdProfessionnel():int
    {
        return $this->idProfessionnel;
    }

    /**
     * Set the value of idProfessionnel
     *
     * @return  self
     */ 
    public function setIdProfessionnel(int $idProfessionnel):self
    {
        $this->idProfessionnel = $idProfessionnel;

        return $this;
    }

    /**
     * Get the value of idTypeActivite
     */ 
    public function getIdTypeActivite():int 
    {
        return $this->idTypeActivite;
    }

    /**
     * Set the value of idTypeActivite
     *
     * @return  self
     */ 
    public function setIdTypeActivite(int $idTypeActivite):self
    {
        $this->idTypeActivite = $idTypeActivite;

        return $this;
    }
}