<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Utilisateur.php");

function connexion(){

    $db = new PDO("mysql:host=localhost;dbname=human_helps",'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
class UtilisateurDAO
{
    //*************FONCTION AJOUTER UN UTILISATEUR*********************/
    public function add(Utilisateur $utilisateur)
    {
        try
        {
            $db = connexion();

            //  $getIdUtilisateur = $utilisateur->getIdUtilisateur();
             $getNomUtil = $utilisateur->getNomUtil();
             $getPrenomUtile = $utilisateur->getPrenomUtil();           
             $getAdresseUtil = $utilisateur->getAdresseUtil();
             $getCodePostalUtil = $utilisateur->getCodePostalUtil();
             $getVilleUtil = $utilisateur->getVilleUtil();
             $getMailUtil = $utilisateur->getMailUtil();
             $getTelUtil = $utilisateur->getTelUtil();
             $getPasswordUtil = $utilisateur->getPasswordUtil();
             $getDateInscriptionUtil = $utilisateur->getDateInscriptionUtil()->format('y-m-d');
             $getIdRole = $utilisateur->getIdRole();
             $getIdPays = $utilisateur->getIdPays();

             $query ="INSERT INTO utilisateur VALUES (:nomUtil,:prenomUtil,:adresseUtil,:codePostalUtil,
                                                    :villeUtil,:mailUtil,:telUtil,:passwordUtil,
                                                    :dateInscriptionUtil,:idRole,:idPays)";

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
             
             $stmt->execute();

             $db = null;
             $stmt = null;
        }
        catch (PDOException $e){
            echo 'echec de la connexion : '.$e->getMessage();
        }
    }


//********************FONCTION MODIDIER UN UTILISATEUR************************ */

public function update(Utilisateur $utilisateur){

        try
        {
            $db = connexion();

            $getIdUtilisateur = $utilisateur->getIdUtilisateur();
            $getNomUtil = $utilisateur->getNomUtil();
            $getPrenomUtile = $utilisateur->getPrenomUtil();           
            $getAdresseUtil = $utilisateur->getAdresseUtil();
            $getCodePostalUtil = $utilisateur->getCodePostalUtil();
            $getVilleUtil = $utilisateur->getVilleUtil();
            $getMailUtil = $utilisateur->getMailUtil();
            $getTelUtil = $utilisateur->getTelUtil();
            $getPasswordUtil = $utilisateur->getPasswordUtil();
            $getDateInscriptionUtil = $utilisateur->getDateInscrptionUtil()->format('y-m-d');
            $getIdRole = $utilisateur->getIdRole();
            $getIdPays = $utilisateur->getIdPays();

            $query ="UPDATE utilisateur  
            SET idUtilisateur = :idUtilisateur,
                nomUtil = :nomUtil,
                prenomUtil = :prenomUtil,
                adresseUtil = :adresseUtil,
                codePostalUtil = :codePostalUtil,
                villeUtil = :villeUtil,
                mailUtil = :mailUtil,
                telUtil = :telUtil,
                passwordUtil = :passwordUtil,
                dateInscriptionUtil = :dateInscriptionUtil,
                idRole = :idRole,
                idPays = idPays
            WHERE idUtilisateur = idUtilisateur";

            $stmt = $db->prepare($query);

            $stmt->bindParam(':idUtilisateur', $getIdUtilisateur);
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
        $db = connexion();

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

public function searchAll()
{
    try
    {
        $db = connexion();

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
            $db = connexion();

            $query = "SELECT * FROM utilisateur WHERE idUtilisateur = :idUtilisateur";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":idUtilisateur", $idUtilisateur);
            $stmt->execute();
            $utilisateur = $stmt->fetchAll(PDO::FETCH_CLASS,'utilisateur');

            return $utilistauer[0];
        }
        catch (PDOException $e) {
            print "erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}