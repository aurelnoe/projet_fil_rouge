<?php

class Mission 
{
    private $id_mission;
    private $titre_mission;
    private $description_mission;
    private $type_formation;
    private $image_mission;
    private $date_debut;
    private $duree;
    private $date_ajout;
    public $id_pays;
    public $id_etablissement;
    public $id_type_activite;
    
    public function __toString(){
        return
        $this->id_mission;
        $this->titre_mission;
        $this->description_mission;
        $this->type_formation;
        $this->image_mission;
        $this->date_debut;
        $this->duree;
        $this->date_ajout;
        $this->id_pays;
        $this->id_etablissement;
        $this->id_type_activite;
    }

    /**
     * Get the value of idMission
     */ 
    public function getIdMission():?int
    {
        return $this->id_mission;
    }

    /**
     * Set the value of id_mission
     *
     * @return  self
     */ 
    public function setIdMission(?int $idMission)
    {
        $this->id_mission = $idMission;

        return $this;
    }

    /**
     * Get the value of titreMission
     */ 
    public function getTitreMission():string
    {
        return $this->titre_mission;
    }

    /**
     * Set the value of titreMission
     *
     * @return  self
     */ 
    public function setTitreMission(string $titreMission):self
    {
        $this->titre_mission = $titreMission;

        return $this;
    }

    /**
     * Get the value of descriptionMission
     */ 
    public function getDescriptionMission():string
    {
            return $this->description_mission;
    }

    /**
    * Set the value of descriptionMission
    *
    * @return  self
    */ 
    public function setDescriptionMission(string $descriptionMission):self
    {
        $this->description_mission = $descriptionMission;

        return $this;
    }

    /**
     * Get the value of typeFormation
     */ 
    public function getTypeFormation():?int
    {
        return $this->type_formation;
    }

    /**
     * Set the value of typeFormation
     *
     * @return  self
     */ 
    public function setTypeFormation(?int $typeFormation):self
    {
        $this->type_formation = $typeFormation;

        return $this;
    }

    /**
     * Get the value of imageMission
     */ 
    public function getImageMission():?string
    {
        return $this->image_mission;
    }

    /**
     * Set the value of imageMission
     *
     * @return  self
     */ 
    public function setImageMission(?string $imageMission):self
    {
        $this->image_mission = $imageMission;

        return $this;
    }

    /**
     * Get the value of dateDebut
     */ 
    public function getDateDebut():?DateTime
    {
        return $this->date_debut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut(?DateTime $dateDebut):self
    {
        $this->date_debut = $dateDebut;

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
        return $this->date_ajout;
    }

    /**
     * Set the value of dateAjout
     *
     * @return  self
     */ 
    public function setDateAjout(DateTime $dateAjout):self
    {
        $this->date_ajout = $dateAjout;

        return $this;
    }

    /**
     * Get the value of idPays
     */ 
    public function getIdPays():int
    {
        return $this->id_pays;
    }

    /**
     * Set the value of idPays
     *
     * @return  self
     */ 
    public function setIdPays(int $idPays):self
    {
        $this->id_pays = $idPays;

        return $this;
    }

    /**
     * Get the value of idEtablissement
     */ 
    public function getIdEtablissement():int
    {
        return $this->id_etablissement;
    }

    /**
     * Set the value of idEtablissement
     *
     * @return  self
     */ 
    public function setIdEtablissement($idEtablissement):self
    {
        $this->id_etablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get the value of idTypeActivite
     */ 
    public function getIdTypeActivite():int
    {
        return $this->id_type_activite;
    }

    /**
     * Set the value of idTypeActivite
     *
     * @return  self
     */ 
    public function setIdTypeActivite(int $idTypeActivite):self
    {
        $this->id_type_activite = $idTypeActivite;

        return $this;
    }
}