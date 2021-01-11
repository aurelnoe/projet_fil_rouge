<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/DAO/BlogDAO.php");
include_once(PATH_BASE . "/Exceptions/DAOException.php");

class ServiceBlog 
{
    private $BlogDAO;

    public function __construct()
    {
        return $this->BlogDAO = new BlogDAO();
    }

    /************ PAGE liste/article BLOG *********/
    public function add($article)
    {
        try{
            return $this->BlogDAO->add($article);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
    }

    public function update($article)
    {
        try{
            return $this->BlogDAO->update($article);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }  
        
    }

    public function delete($idArticle)
    {
        try{
            $this->BlogDAO->delete($idArticle);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }
    }

    public function searchAll()
    {
        return $this->BlogDAO->searchAll();
    }

    /************ PAGE DETAIL BLOG *********/
    public function searchById($idArticle)
    {
        try{
            return $this->BlogDAO->searchById($idArticle);
        }
        catch (DAOException $de) {
            throw new ServiceException($de->getMessage(),$de->getCode());
        }
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