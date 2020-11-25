<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/DAO/TypeActiviteDAO.php");

class ServiceTypeActivite 
{
    private $TypeActiviteDAO;

    public function __construct()
    {
        return $this->TypeActiviteDAO = new TypeActiviteDAO();
    }

    public function searchAll()
    {
        return $this->TypeActiviteDAO->searchAll();
    }

    /**
     * Get the value of TypeActiviteDAO
     */ 
    public function getTypeActiviteDAO()
    {
        return $this->TypeActiviteDAO;
    }

    /**
     * Set the value of TypeActiviteDAO
     *
     * @return  self
     */ 
    public function setTypeActiviteDAO($TypeActiviteDAO)
    {
        $this->TypeActiviteDAO = $TypeActiviteDAO;

        return $this;
    }
}