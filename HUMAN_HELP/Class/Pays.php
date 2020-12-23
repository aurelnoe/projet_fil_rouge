<?php

class Pays
{
    private $idPays;
    private $nomPays;
    private $continent;
    
    public function __toString()
    {
        return
        $this->idPays .
        $this->nomPays .
        $this->continent;
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
    public function setIdPays($idPays):self
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get the value of monPays
     */ 
    public function getNomPays():string
    {
        return $this->nomPays;
    }

    /**
     * Set the value of monPays
     *
     * @return  self
     */ 
    public function setMonPays($nomPays):self
    {
        $this->monPays = $nomPays;

        return $this;
    }

    /**
     * Get the value of continent
     */ 
    public function getContinent():string
    {
        return $this->continent;
    }

    /**
     * Set the value of continent
     *
     * @return  self
     */ 
    public function setContinent($continent):self
    {
        $this->continent = $continent;

        return $this;
    }
}


    




















?>
