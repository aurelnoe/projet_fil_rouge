<?php
require("C:/xampp/htdocs/HUMAN_HELP/Class/Utilisateur.php");
require("C:/xampp/htdocs/HUMAN_HELP/Class/BddConnect.php");

class UtilisateurDAO extends BddConnect
{
    //*************FONCTION AJOUTER UN UTILISATEUR*********************/
    public function add(Utilisateur $utilisateur)
    {
        try 
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();
            
            
             $getNomUtil = $utilisateur->getNomUtil();
             $getPrenomUtil = $utilisateur->getPrenomUtil();           
             $getAdresseUtil = $utilisateur->getAdresseUtil();
             $getCodePostalUtil = $utilisateur->getCodePostalUtil();
             $getVilleUtil = $utilisateur->getVilleUtil();
             $getMailUtil = $utilisateur->getMailUtil();
             $getTelUtil = $utilisateur->getTelUtil();
             $getPasswordUtil = $utilisateur->getPasswordUtil();
             $getDateInscriptionUtil = $utilisateur->getDateInscriptionUtil()->format('Y-m-d');
             $getIdRole = $utilisateur->getIdRole();
             $getIdPays = $utilisateur->getIdPays();
             
             $query ="INSERT INTO utilisateur VALUES (NULL,:nomUtil,:prenomUtil,:adresseUtil,:codePostalUtil,
                                                    :villeUtil,:mailUtil,:telUtil,:passwordUtil,
                                                    :dateInscriptionUtil,:idRole,:idPays)";

             $stmt = $db->prepare($query);

             $stmt->bindParam(':nomUtil', $getNomUtil);
             $stmt->bindParam(':prenomUtil', $getPrenomUtil);
             $stmt->bindParam(':adresseUtil', $getAdresseUtil);
             $stmt->bindParam(':codePostalUtil', $getCodePostalUtil);
             $stmt->bindParam(':villeUtil', $getVilleUtil);
             $stmt->bindParam(':mailUtil', $getMailUtil);
             $stmt->bindParam(':telUtil', $getTelUtil);
             $stmt->bindParam(':passwordUtil', $getPasswordUtil);
             $stmt->bindParam(':dateInscriptionUtil', $getDateInscriptionUtil);
             $stmt->bindParam(':idRole', $getIdRole);
             $stmt->bindParam(':idPays', $getIdPays);
             
             $stmt->execute();

             $db = null;
             $stmt = null;
        }
        catch (PDOException $e){
            var_dump($utilisateur);
            throw new PDOException($e->getMessage(),$e->getCode());
        }  
        finally{
            $db = null;
            $stmt = null;   
        }
    }

    //********************FONCTION MODIDIER UN UTILISATEUR************************ */

    public function update(Utilisateur $utilisateur){

            try
            {
                $newConnect = new BddConnect();
                $db = $newConnect->connexion();

                $getIdUtilisateur = $utilisateur->getIdUtilisateur();
                $getNomUtil = $utilisateur->getNomUtil();
                $getPrenomUtil = $utilisateur->getPrenomUtil();           
                $getAdresseUtil = $utilisateur->getAdresseUtil();
                $getCodePostalUtil = $utilisateur->getCodePostalUtil();
                $getVilleUtil = $utilisateur->getVilleUtil();
                $getMailUtil = $utilisateur->getMailUtil();
                $getTelUtil = $utilisateur->getTelUtil();
                $getPasswordUtil = $utilisateur->getPasswordUtil();
                $getDateInscriptionUtil = $utilisateur->getDateInscriptionUtil()->format('Y-m-d');
                $getIdRole = $utilisateur->getIdRole();
                $getIdPays = $utilisateur->getIdPays();

                $query ="UPDATE utilisateur  
                SET nomUtil = :nomUtil,
                    prenomUtil = :prenomUtil,
                    adresseUtil = :adresseUtil,
                    codePostalUtil = :codePostalUtil,
                    villeUtil = :villeUtil,
                    mailUtil = :mailUtil,
                    telUtil = :telUtil,
                    passwordUtil = :passwordUtil,
                    dateInscriptionUtil = :dateInscriptionUtil,
                    idRole = :idRole,
                    idPays = :idPays
                WHERE idUtilisateur = :idUtilisateur";

                $stmt = $db->prepare($query);

                $stmt->bindParam(':nomUtil', $getNomUtil);
                $stmt->bindParam(':prenomUtil', $getPrenomUtil);
                $stmt->bindParam(':adresseUtil', $getAdresseUtil);
                $stmt->bindParam(':codePostalUtil', $getCodePostalUtil);
                $stmt->bindParam(':villeUtiil', $getVilleUtil);
                $stmt->bindParam(':mailUtil', $getMailUtil);
                $stmt->bindParam(':telUtil', $getTelUtil);
                $stmt->bindParam(':passwordUtil', $getPasswordUtil);
                $stmt->bindParam(':dateInscriptionUtil', $getDateInscriptionUtil);
                $stmt->bindParam(':idRole', $getIdRole);
                $stmt->bindParam(':idPays', $getIdPays);
                $stmt->bindParam(':idUtilisateur', $getIdUtilisateur);

                $db = null;
                $stmt = null;
            }
            catch (PDOException $e){
                echo 'echec de la connexion : '.$e->getMessage();
            }
    }

    //*********************FONCTION SUPPRIMER UTILISATEUR**************** */

    public function delete($idUtilisateur)
    {
        try
        {
            $newConnect = new BddConnect();
                $db = $newConnect->connexion();

            $query = "DELETE FROM utilisateur WHERE idUtilisateur = :idUtilisateur";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idUtilisateur", $idUtilisateur);
            $stmt->execute();

            $db = null;
            $stmt = null;
        }
        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage(). "<br/>";
            die();
        }
    }


    //*********************FONCTION CHERCHER TOUT LES UTILISATEURS**************** */

    public function searchAll():array
    {
        try
        {
            $newConnect = new BddConnect();
                $db = $newConnect->connexion();

            $query = 'SELECT * FROM utilisateur';
            $stmt = $db->prepare($query);
            $stmt->execute();
            $utilisateurs = $stmt->fetchAll(PDO::FETCH_CLASS,'Utilisateur');
    
            $db = null;
            $stmt = null;
            
            return $utilisateurs;
        }
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    //*********************FONCTION CHERCHER UTILISATEUR PAR ID**************** */
    public function searchById($idUtilisateur)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "SELECT * FROM utilisateur WHERE idUtilisateur = :idUtilisateur";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idUtilisateur", $idUtilisateur);
            $stmt->execute();
            $utilisateur = $stmt->fetchAll(PDO::FETCH_CLASS,'Utilisateur');

            return $utilisateur[0];
        }
        catch (PDOException $e) {
            print "erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    //*********************FONCTION CHERCHER UTILISATEUR PAR ID**************** */
    public function searchUserbyMail($mailUtil)
    {
        try
        {
            $newConnect = new BddConnect();
            $db = $newConnect->connexion();

            $query = "SELECT * FROM utilisateur WHERE mailUtil = :mailUtil";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":mailUtil", $mailUtil);
            $stmt->execute();
            $utilisateur = $stmt->fetchAll(PDO::FETCH_CLASS,'Utilisateur');
            if (!($utilisateur)) {
                throw new PDOException("Veuillez saisir un identifiant ou un mot de passe correct",1081);
            }
            return $utilisateur[0];
        }
        catch (mysqli_sql_exception $e) {
            throw new PDOException($e->getMessage(),$e->getCode());
        }
    }
}