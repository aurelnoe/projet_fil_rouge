<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Blog.php");

function connexion(){

    $db = new PDO("mysql:host=localhost;dbname=human_helps",'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}


class BlogDAO
{
    //probablement mettre une fonction IsAdmin

     /******************* FONCTION AJOUTER UN ARTICLE *****************************/

     public function add(object $article)
    {   
        try {

            $db = connexion(); 

            //$getIdArticle = $artcile->getIdArticle();
            $getTitreArticle = $article->getTitreArticle();
            $getDescriptionArticle = $article->getDescriptionArticle();
            $getDateArticle = $article->getDateArticle()->format('Y-m-d'); 
            $getDateAjout = $article->getDateAjout()->format('Y-m-d');
            $getImageArticle = $article->getImageArticle();
            

            $query = "INSERT INTO blog VALUES (NULL,:titre_article,:description_article,:date_article,:date_ajout_article,
                                                    :image_article)";            
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':titre_article', $getTitreArticle);           
            $stmt->bindParam(':description_article', $getDescriptionArticle);
            $stmt->bindParam(':date_article', $getDateArticle);
            $stmt->bindParam(':date_ajout_article', $getDateAjout);
            $stmt->bindParam(':image_article', $getImageArticle);

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

            $db = connexion(); 

            //$getIdArticle = $artcile->getIdArticle();
            $getTitreArticle = $article->getTitreArticle();
            $getDescriptionArticle = $article->getDescriptionArticle();
            $getDateArticle = $article->getDateArticle()->format('Y-m-d'); 
            $getDateAjout = $article->getDateAjout()->format('Y-m-d');
            $getImageArticle = $article->getImageArticle();
            

            $query = "UPDATE blog 
            SET titre_article = :titre_article,
                descripition_article = :description_article,
                date_article = :date_article,
                date_ajout_article = :date_ajout_article,
                image_article = :image_article
            WHERE id_article = :id_article";    

            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':titre_article', $getTitreArticle);           
            $stmt->bindParam(':description_article', $getDescriptionArticle);
            $stmt->bindParam(':date_article', $getDateArticle);
            $stmt->bindParam(':date_ajout_article', $getDateAjout);
            $stmt->bindParam(':image_article', $getImageArticle);

            $stmt->execute();

            $db = null;
            $stmt = null;           
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }         
    }

     /******************* FONCTION SUPPRIMER UN ARTICLE*****************************/

     public function delete($idArticle)
     {
         try 
         {
             $db = connexion();
 
             $query = "DELETE FROM blog WHERE id_article = :id_article";
             $stmt = $db->prepare($query);
             $stmt->bindParam(":id_article", $idArticle);
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
             $db = connexion();
 
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
    public function searchById($id_article)
    {
        try 
        {
            $db = connexion();
            
            $query = "SELECT * FROM blog WHERE id_article = :id_article";   
            $stmt = $db->prepare($query);
            $stmt->bindParam(":id_article", $id_article);
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
