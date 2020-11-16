<?php

class Blog
{
    private $id_article;
    private $titre_article;
    private $description_article;
    private $date_article;
    private $date_ajout_article;
    private $image_article;
   
  
    public function __toString(){
        $this->id_article;
        $this->titre_article;
        $this->description_article;
        $this->date_article;
        $this->date_ajout_article;
        $this->image_article;
    }

    

    /**
     * Get the value of idArticle
     */ 
    public function getIdArticle():int
    {
        return $this->id_article;
    }

    /**
     * Set the value of idArticle
     *
     * @return  self
     */ 
    public function setIdArticle(int $id_article):self
    {
        $this->id_article = $id_article;

        return $this;
    }

    /**
     * Get the value of titreArticle
     */ 
    public function getTitreArticle():string
    {
        return $this->titre_article;
    }

    /**
     * Set the value of titreArticle
     *
     * @return  self
     */ 
    public function setTitreArticle(string $titre_article):self
    {
        $this->titre_article = $titre_article;

        return $this;
    }

    /**
     * Get the value of descriptionArticle
     */ 
    public function getDescriptionArticle():string
    {
        return $this->description_article;
    }

    /**
     * Set the value of descriptionArticle
     *
     * @return  self
     */ 
    public function setDescriptionArticle(string $description_article):self
    {
        $this->description_article = $description_article;

        return $this;
    }

    /**
     * Get the value of dateArticle
     */ 
    public function getDateArticle():DateTime
    {
        return $this->date_article;
    }

    /**
     * Set the value of dateArticle
     *
     * @return  self
     */ 
    public function setDateArticle(DateTime $date_article):self
    {
        $this->date_article = $date_article;

        return $this;
    }

    /**
     * Get the value of dateAjout
     */ 
    public function getDateAjout():DateTime
    {
        return $this->date_ajout_article;
    }

    /**
     * Set the value of dateAjout
     *
     * @return  self
     */ 
    public function setDateAjout(DateTime $date_ajout_article):self
    {
        $this->date_ajout_article = $date_ajout_article;

        return $this;
    }

    /**
     * Get the value of imageArticle
     */ 
    public function getImageArticle():string
    {
        return $this->image_article;
    }

    /**
     * Set the value of imageArticle
     *
     * @return  self
     */ 
    public function setImageArticle(string $image_article):self
    {
        $this->image_article = $image_article;

        return $this;
    }
}