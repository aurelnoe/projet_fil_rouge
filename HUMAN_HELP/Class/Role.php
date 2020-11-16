<?php

class Role
{
    private $id_role;
    private $nom_role;

    public function __toString()
    {
        return
        $this->id_role;
        $this->nom_role;
    }
    /**
     * Get the value of idRole
     */ 
    public function getIdRole():int
    {
        return $this->id_role;
    }

    /**
     * Set the value of idRole
     *
     * @return  self
     */ 
    public function setIdRole(int $idRole):self
    {
        $this->id_role = $idRole;

        return $this;
    }

    /**
     * Get the value of nomRole
     */ 
    public function getNomRole():string
    {
        return $this->nom_role;
    }

    /**
     * Set the value of nomRole
     *
     * @return  self
     */ 
    public function setNomRole(string $nomRole):self
    {
        $this->nom_role = $nomRole;

        return $this;
    }
}