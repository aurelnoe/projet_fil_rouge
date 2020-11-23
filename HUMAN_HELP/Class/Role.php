<?php

class Role
{
    private $idRole;
    private $nomRole;

    public function __toString()
    {
        return
        $this->idRole;
        $this->nomRole;
    }
    /**
     * Get the value of idRole
     */ 
    public function getIdRole():int
    {
        return $this->idRole;
    }

    /**
     * Set the value of idRole
     *
     * @return  self
     */ 
    public function setIdRole(int $idRole):self
    {
        $this->idRole = $idRole;

        return $this;
    }

    /**
     * Get the value of nomRole
     */ 
    public function getNomRole():string
    {
        return $this->nomRole;
    }

    /**
     * Set the value of nomRole
     *
     * @return  self
     */ 
    public function setNomRole(string $nomRole):self
    {
        $this->nomRole = $nomRole;

        return $this;
    }
}