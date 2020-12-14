<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Blog.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");


class BlogDAO extends BddConnect 
{
    //probablement mettre une fonction IsAdmin

     /******************* FONCTION AJOUTER UN ARTICLE *****************************/

     public function add(object $article)
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

            $db = null;
            $stmt = null;           
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }         
    }


    /******************* FONCTION MODIFIER UN ARTICLE *****************************/

    public function update(object $article)
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
            echo 'Echec de la connexion : '.$e->getMessage();
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
 
             $db = null;
             $stmt = null;
         } 
         catch (PDOException $e) {
             print "Erreur !: " . $e->getMessage() . "<br/>";
             die();
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
         catch (PDOException $e) {
             print "Erreur !: " . $e->getMessage() . "<br/>";
             die();
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
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
 
}
