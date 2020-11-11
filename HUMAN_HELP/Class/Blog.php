<?php

class Blog
{
    private $idArticle;
    private $titreArticle;
    private $descriptionArticle;
    private $dateArticle;
    private $dateAjout;
    private $imageArticle;
   
  
    public function __toString(){
        $this->idArticle;
        $this->titreArticle;
        $this->descriptionArticle;
        $this->dateArticle;
        $this->dateAjout;
        $this->imageArticle;
    }

    

    /**
     * Get the value of idArticle
     */ 
    public function getIdArticle():int
    {
        return $this->idArticle;
    }

    /**
     * Set the value of idArticle
     *
     * @return  self
     */ 
    public function setIdArticle(int $idArticle):self
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get the value of titreArticle
     */ 
    public function getTitreArticle():string
    {
        return $this->titreArticle;
    }

    /**
     * Set the value of titreArticle
     *
     * @return  self
     */ 
    public function setTitreArticle(string $titreArticle):self
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    /**
     * Get the value of descriptionArticle
     */ 
    public function getDescriptionArticle():string
    {
        return $this->descriptionArticle;
    }

    /**
     * Set the value of descriptionArticle
     *
     * @return  self
     */ 
    public function setDescriptionArticle(string $descriptionArticle):self
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    /**
     * Get the value of dateArticle
     */ 
    public function getDateArticle():DateTime
    {
        return $this->dateArticle;
    }

    /**
     * Set the value of dateArticle
     *
     * @return  self
     */ 
    public function setDateArticle(DateTime $dateArticle):self
    {
        $this->dateArticle = $dateArticle;

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
     * Get the value of imageArticle
     */ 
    public function getImageArticle():string
    {
        return $this->imageArticle;
    }

    /**
     * Set the value of imageArticle
     *
     * @return  self
     */ 
    public function setImageArticle(string $imageArticle):self
    {
        $this->imageArticle = $imageArticle;

        return $this;
    }
}