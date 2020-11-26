<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Blog.php");

function connexion(){

    $db = new PDO("mysql:host=localhost;dbname=human_helps",'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
class UtilisateurDAO
{
    //*************FONCTION AJOUTER UN UTILISATEUR*********************/

    public function add(object $utilisateur)

        try{

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
             $getDateInscriptionUtil = $utilisateur->getDateInscrptionUtil()->format('y-m-d');
             $getIdRole = $utilisateur->getIdRole();
             $getIdPays = $utilisateur->getIdPays();

             $query ="INSERT INTO utilisateur VALUES (NULL,:id_utilisateur,:nom_util,:prenom_util,:adresse_util,:code_postal_util,:
             ville_util,:mail_util,:tel_util,:password_util,:date_inscription_util,:id_role,:id_pays)";

             $stmt = $db->prepare($query);

             $stmt->bindParam(':nom_util', $getNomUtil);
             $stmt->bindParam(':prenom_util', $getPrenomUtil);
             $stmt->bindParam(':adresse_util', $getAdresseUtil);
             $stmt->bindParam(':code_postal_util', $getCodePostalUtil);
             $stmt->bindParam(':ville_utiil', $getVilleUtil);
             $stmt->bindParam(':mail_util', $getMailUtil);
             $stmt->bindParam(':tel_util', $getTelUtil);
             $stmt->bindParam(':password_util', $getPasswordUtil);
             $stmt->bindParam(':date_inscription_util', $getDateInscriptionUtil);
             $stmt->bindParam(':id_role', $getIdRole);
             $stmt->bindParam(':id_pays', $getIdPays);
             
             $stmt->execute();

             $db = null;
             $stmt = null;
        }
        catch (PDOException $e){
            echo 'echec de la connexion : '.$e->getMessage();
        }
    }


//********************FONCTION MODIDIER UN UTILISATEUR************************ */

public function update(object $utilisateur)

        try{

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
             $getDateInscriptionUtil = $utilisateur->getDateInscrptionUtil()->format('y-m-d');
             $getIdRole = $utilisateur->getIdRole();
             $getIdPays = $utilisateur->getIdPays();

             $query ="UPDATE utilisateur  
             SET id_utilisateur = :id_utilisateur,
                 nom_util = :nom_util,
                 prenom_util = :prenom_util,
                 adresse_util = :adresse_util,
                 code_postal_util = :code_postal_util,
                 ville_util = :ville_util,
                 mail_util = :mail_util,
                 tel_util = :tel_util,
                 password_util = :password_util,
                 date_inscription_util = :date_inscription_util,
                 id_role = :id_role,
                 id_pays = id_pays
             WHERE id_utilisateur = id_utilisateur";

             $stmt = $db->prepare($query);

             $stmt->bindParam(':nom_util', $getNomUtil);
             $stmt->bindParam(':prenom_util', $getPrenomUtil);
             $stmt->bindParam(':adresse_util', $getAdresseUtil);
             $stmt->bindParam(':code_postal_util', $getCodePostalUtil);
             $stmt->bindParam(':ville_utiil', $getVilleUtil);
             $stmt->bindParam(':mail_util', $getMailUtil);
             $stmt->bindParam(':tel_util', $getTelUtil);
             $stmt->bindParam(':password_util', $getPasswordUtil);
             $stmt->bindParam(':date_inscription_util', $getDateInscriptionUtil);
             $stmt->bindParam(':id_role', $getIdRole);
             $stmt->bindParam(':id_pays', $getIdPays);

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

        $query = "DELETE FROM utilisateur WHERE id_utilisateur = :id_utilisateur";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":id_utilisateur", $idUtilisateur);
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
        $utilisateur = $stmt->fetchAll(PDO::FETCH_CLASS,'Blog');
 
             $db = null;
             $stmt = null;
             
             return $articles;
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

//*********************FONCTION CHERCHER UTILISATEUR PAR ID**************** */

    public function searchById($idUtilisateur);
    {
        try
        {
            $db = connexion();

            $query = "SELECT * FROM utilisateur WHERE id_utilisateur = :id_utilisateur";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":id_utilisateur", $id_utilisateur);
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