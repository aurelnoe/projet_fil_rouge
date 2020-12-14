<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Avis.php");
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");


class AvisDAO extends BddConnect 
{
    //probablement mettre une fonction IsAdmin

     /******************* FONCTION AJOUTER UN AVIS/COMMENTAIRE *****************************/

     public function add(object $avis)
    {   
        try {

            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

           
            $getAuteur = $avis->getAuteur();
            $getTemoignage = $avis->getTemoignage();
            $getDateCommentaire = $avis->getDateCommentaire()->format('Y-m-d'); 
            $getIdUtilisateur = $avis->getIdUtilisateur();
            $getIdArticle = $avis->getIdArticle();
            

            $query = "INSERT INTO blog VALUES (NULL,:auteur,:temoignage,:dateCommentaire,
                                                    :idUtilisateur,:idArticle)";            
            $stmt = $db->prepare($query); 
            
            $stmt->bindParam(':auteur', $getAuteur);           
            $stmt->bindParam(':temoignage', $getTemoignage);
            $stmt->bindParam(':dateCommentaire', $getDateCommentaire);
            $stmt->bindParam(':idUtilisateur', $getIdUtilisateur);
            $stmt->bindParam(':idArticle', $getIdArticle);

            $stmt->execute();

            $db = null;
            $stmt = null;           
        } 
        catch (PDOException $e){
            echo 'Echec de la connexion : '.$e->getMessage();
        }         
    }


    /******************* FONCTION MODIFIER UN ARTICLE *****************************/

    public function update(object $avis)
    {   
        try {

            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $getIdAvis = $avis->getIdAvis();
            $getAuteur = $avis->getAuteur();
            $getTemoignage = $avis->getTemoignage();
            $getDateCommentaire = $avis->getDateCommentaire()->format('Y-m-d'); 
            $getIdUtilisateur = $avis->getIdUtilisateur();
            $getIdArticle = $avis->getIdArticle();
            

            $query = "UPDATE avis 
            SET auteur = :auteur,
                temoignage = :temoignage,
                dateCommentaire = :dateCommentaire,
                idUtilisateur = :idUtilisateur,
                idArticle = :idArticle
            WHERE idAvis = :idAvis";    

            $stmt = $db->prepare($query); 

            $stmt->bindParam(':idAvis', $getIdAvis);
            $stmt->bindParam(':auteur', $getAuteur);           
            $stmt->bindParam(':temoignage', $getTemoignage);
            $stmt->bindParam(':dateCommentaire', $getDateCommentaire);
            $stmt->bindParam(':idUtilisateur', $getIdUtilisateur);
            $stmt->bindParam(':idArticle', $getIdArticle);
            

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

     public function delete($idAvis)
     {
         try 
         {
             $newConnect = new BddConnect();
             $db = $newConnect->connexion();
 
             $query = "DELETE FROM avis WHERE idAvis = :idAvis";
             $stmt = $db->prepare($query);
             $stmt->bindParam(":idAvis", $idAvis);
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
 
             $query = 'SELECT * FROM avis';
             $stmt = $db->prepare($query);
             $stmt->execute();
             $avis = $stmt->fetchAll(PDO::FETCH_CLASS,'Avis');
 
             $db = null;
             $stmt = null;
             
             return $avis;
         } 
         catch (PDOException $e) {
             print "Erreur !: " . $e->getMessage() . "<br/>";
             die();
         }
     }
}
 