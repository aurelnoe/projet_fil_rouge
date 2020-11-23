<?php

class Pays
{
    private $idPays;
    private $mon_pays;
    private $continent;
    
    public function __toString(){
        $this->idPays;
        $this->mon_pays;
        $this->continent;
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
    public function setidPays($idPays):self
    {
        $this->idPays = $idPays;

        return $this;
    }

    /**
     * Get the value of mon_pays
     */ 
    public function getMon_pays():string
    {
        return $this->mon_pays;
    }

    /**
     * Set the value of mon_pays
     *
     * @return  self
     */ 
    public function setMon_pays($mon_pays):self
    {
        $this->mon_pays = $mon_pays;

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
