<?php


class TypeActivite{

    private $id_type_activite;
    private $type_activite;

    public function __toString(){
        $this->id_type_activite;
        $this->typeActivite;
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
    public function setIdTypeActivite(int $id_type_activite):self
    {
        $this->id_type_activite = $id_type_activite;

        return $this;
    }

    /**
     * Get the value of typeActivite
     */ 
    public function getTypeActivite():string
    {
        return $this->type_activite;
    }

    /**
     * Set the value of typeActivite
     *
     * @return  self
     */ 
    public function setTypeActivite(string $type_activite):self
    {
        $this->type_activite = $type_activite;

        return $this;
    }
}