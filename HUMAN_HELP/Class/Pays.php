<?php

class Pays
{
    private $id_pays;
    private $mon_pays;
    private $continent;
    
    public function __toString(){
        $this->id_pays;
        $this->mon_pays;
        $this->continent;
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
