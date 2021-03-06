<?php
include_once($_SERVER['DOCUMENT_ROOT']."/HUMAN_HELP/config.php");
include_once(PATH_BASE . "/Class/Blog.php");
include_once(PATH_BASE . "/Class/BddConnect.php");
require_once(PATH_BASE . "/Exceptions/DAOException.php");

class BlogDAO extends BddConnect 
{
    //probablement mettre une fonction IsAdmin

     /******************* FONCTION AJOUTER UN ARTICLE *****************************/

     public function add(Blog $article)
    {   
        try {

            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            //$getIdArticle = $artcile->getIdArticle();
            $getTitreArticle = $article->getTitreArticle();
            $getDescriptionArticle = $article->getDescriptionArticle();
            $getDateArticle = $article->getDateArticle()->format('Y-m-d'); 
            $getDateAjout = $article->getDateAjout()->format('Y-m-d');
            $getImageArticle = $article->getImageArticle();
            

            $query = "INSERT INTO blog VALUES (NULL,:titreArticle,:descriptionArticle,:dateArticle,:dateAjoutArticle,
                                                    :imageArticle)";            
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':titreArticle', $getTitreArticle);           
            $stmt->bindParam(':descriptionArticle', $getDescriptionArticle);
            $stmt->bindParam(':dateArticle', $getDateArticle);
            $stmt->bindParam(':dateAjoutArticle', $getDateAjout);
            $stmt->bindParam(':imageArticle', $getImageArticle);

            $stmt->execute();
           
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }    
        finally{
            $db = null;
            $stmt = null;   
        }          
    }


    /******************* FONCTION MODIFIER UN ARTICLE *****************************/

    public function update(Blog $article)
    {   
        try {

            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $getIdArticle = $article->getIdArticle();
            $getTitreArticle = $article->getTitreArticle();
            $getDescriptionArticle = $article->getDescriptionArticle();
            $getDateArticle = $article->getDateArticle()->format('Y-m-d'); 
            $getDateAjout = $article->getDateAjout()->format('Y-m-d');
            $getImageArticle = $article->getImageArticle();
            

            $query = "UPDATE blog 
            SET titreArticle = :titreArticle,
                descriptionArticle = :descriptionArticle,
                dateArticle = :dateArticle,
                dateAjoutArticle = :dateAjoutArticle,
                imageArticle = :imageArticle
            WHERE idArticle = :idArticle";    

            $stmt = $db->prepare($query); 

            $stmt->bindParam(':idArticle', $getIdArticle);
            $stmt->bindParam(':titreArticle', $getTitreArticle);           
            $stmt->bindParam(':descriptionArticle', $getDescriptionArticle);
            $stmt->bindParam(':dateArticle', $getDateArticle);
            $stmt->bindParam(':dateAjoutArticle', $getDateAjout);
            $stmt->bindParam(':imageArticle', $getImageArticle);
            

            $stmt->execute();

                    
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

     /******************* FONCTION SUPPRIMER UN ARTICLE*****************************/

     public function delete($idArticle)
     {
         try 
         {
             $newConnect = new BddConnect();
             $db = $newConnect->connexion();
 
             $query = "DELETE FROM blog WHERE idArticle = :idArticle";
             $stmt = $db->prepare($query);
             $stmt->bindParam(":idArticle", $idArticle);
             $stmt->execute();
 
         } 
         catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }    
     }

     /**************** FONCTION CHERCHER TOUS LES ARTICLES ***********************/

     public function searchAll()
     {
         try 
         {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
 
             $query = 'SELECT * FROM blog';
             $stmt = $db->prepare($query);
             $stmt->execute();
             $articles = $stmt->fetchAll(PDO::FETCH_CLASS,'Blog');
 
             $db = null;
             $stmt = null;
             
             return $articles;
         } 
         catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
     }
 
     /**************** FONCTION CHERCHER UN ARTICLE PAR ID ***********************/
    public function searchById($idArticle)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            $query = "SELECT * FROM blog WHERE idArticle = :idArticle";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idArticle", $idArticle);
            $stmt->execute();       

            $article = $stmt->fetchAll(PDO::FETCH_CLASS,'Blog');////MYSQLI FETCH ARRAY
            //var_dump($article);

            return $article[0];
        } 
        catch (PDOException $e){
            throw new DAOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }
 
}
