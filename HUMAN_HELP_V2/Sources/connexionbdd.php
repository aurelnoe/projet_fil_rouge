<?php
	$serveur = "localhost";
	$login = "root";
	$pass = "";
	$bddname = ""; //human_help

	//Il faut sécuriser la connexion :

	function securisation (&$donnees){
		$donnees = trim($donnees);  				// Supprime les espaces et autres caracteres non valides
		$donnees = stripslashes($donnees);			// Les doubles antislashs ( \\ ) sont réduits à un seul antislash ( \ )
		$donnees = strip_tags($donnees);			// Supprime les balises HTML et PHP d'une chaîne
		return $donnees;
	}

	try{
		$connexion = new PDO("mysql:host=$serveur;dbname=$bddname",$login, $pass);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo 'Connexion à la base de données réussie';

		$requete = $connexion->prepare(		//On prépare la requete
			"INSERT INTO Visiteurs(name,firstname)
			VALUES(:name,:firstname)"   //on prépare les marqueurs pour ensuite les liers
			);
		$requete->bindParam(':name', $nom);    //on lie la variable $nom avec le marqueur ":nom" grace à bindParam
		$requete->bindParam(':firstname', $prenom);

	//ensuite on n'a plus qu'a insérer des entrées et a exécuter ()dans la réalité ,c'est l'utilisateur qui ente les données): / Les données sont sécurisées
		$nom = securisation($_POST['name']);
		$prenom = securisation($_POST['firstname']);
		$requete->execute();
	}

	catch(PDOException $e){
		echo 'Echec de la connexion : '.$e->getMessage();
	}

?>