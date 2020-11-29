<?php
include_once("C:/xampp/htdocs/HUMAN_HELP/Class/Pays.php");

function connexion(){

    $db = new PDO("mysql:host=localhost;dbname=human_helps",'root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}
class paysDAO
{
    //*************FONCTION AJOUTER UN PAYS*********************/

    public function add(object $pays)

        try{

            $db = connexion();

            //  $getIdPays = $pays->getIdPays();
             $getNomPays = $pays->getNomPays();
             $getContinent = $pays->getContinent();           

             $query ="INSERT INTO pays VALUES (NULL,:id_pays,:nom_pays,:continent)";

             $stmt = $db->prepare($query);

             $stmt->bindParam(':id_pays', $getIdPays);
             $stmt->bindParam(':nom_pays', $getNomPays);
             $stmt->bindParam(':continent', $getContinent);
             
             $stmt->execute();

             $db = null;
             $stmt = null;
        }
        catch (PDOException $e){
            echo 'echec de la connexion : '.$e->getMessage();
        }
    }


//********************FONCTION MODIDIER PAYS************************ */

public function update(object $pays)

        try{

            $db = connexion();

            //  $getIdPays = $pays->getIdPays();
             $getNomPays = $pays->getNomPays();
             $getContinent = $pays->getContinent();

             $query ="UPDATE pays  
             SET id_pays = :id_pays,
                 nom_pays = :nom_pays,
                 continent = :continent,";

             $stmt = $db->prepare($query);

             $stmt->bindParam(':id_pays', $getIdPays);
             $stmt->bindParam(':nom_pays', $getNomPays);
             $stmt->bindParam(':continent', $getContinent);

             $db = null;
             $stmt = null;
        }
        catch (PDOException $e){
            echo 'echec de la connexion : '.$e->getMessage();
        }
}

//*********************FONCTION SUPPRIMER PAYS**************** */

public function delete($getIdPays)
{
    try
    {
        $db = connexion();

        $query = "DELETE FROM pays WHERE id_pays = :id_pays";
        $stmt = $db->prepare($query);
        $stmt->bindParam(":id_pays", $idPays);
        $stmt->execute();

        $db = null;
        $stmt = null;
    }
    catch (PDOException $e){
        print "Erreur !: " . $e->getMessage(). "<br/>";
        die();
    }
}


//*********************FONCTION CHERCHER TOUT LES PAYS**************** */

public function searchAll()
{
    try
    {
        $db = connexion();

        $query = 'SELECT * FROM Pays';
        $stmt = $db->prepare($query);
        $stmt->execute();
        $pays = $stmt->fetchAll(PDO::FETCH_CLASS,'Pays');
 
             $db = null;
             $stmt = null;
             
             return $pays;
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

//*********************FONCTION CHERCHER PAYS PAR ID**************** */

    public function searchById($idPAYS);
    {
        try
        {
            $db = connexion();

            $query = "SELECT * FROM pays WHERE id_pays = :id_pays";
            $stmt = $db->prepare($query);
            $stmt->bindParam(":id_pays", $id_pays);
            $stmt->execute();

            $pays = $stmt->fetchAll(PDO::FETCH_CLASS,'pays');

            return $pays[0];
        }
        catch (PDOException $e) {
            print "erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}