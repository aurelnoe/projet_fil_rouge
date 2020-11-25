<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/BlogDAO.php");

class ServiceBlog 
{
    private $BlogDAO;

    public function __construct()
    {
        return $this->BlogDAO = new BlogDAO();
    }

    public function add($article)
    {
        return $this->BlogDAO->add($article);
    }

    public function update($article)
    {
        return $this->BlogDAO->update($article);
    }

    public function delete($idArticle)
    {
        $this->BlogDAO->delete($idArticle);
    }

    public function searchAll()
    {
        return $this->BlogDAO->searchAll();
    }

    /************ PAGE DETAIL BLOG *********/
    public function searchById($idArticle)
    {
        return $this->BlogDAO->searchById($idArticle);
    }

    /**
     * Get the value of BlogDAO
     */ 
    public function getBlogDAO()
    {
        return $this->BlogDAO;
    }

    /**
     * Set the value of BlogDAO
     *
     * @return  self
     */ 
    public function setBlogDAO($BlogDAO)
    {
        $this->BlogDAO = $BlogDAO;

        return $this;
    }
}