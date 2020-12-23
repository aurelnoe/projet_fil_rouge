<?php


class TypeActivite{

    private $idTypeActivite;
    private $typeActivite;

    public function __toString()
    {
        return
        $this->idTypeActivite .
        $this->typeActivite;
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

    /**
     * Get the value of typeActivite
     */ 
    public function getTypeActivite():string
    {
        return $this->typeActivite;
    }

    /**
     * Set the value of typeActivite
     *
     * @return  self
     */ 
    public function setTypeActivite(string $typeActivite):self
    {
        $this->typeActivite = $typeActivite;

        return $this;
    }
}