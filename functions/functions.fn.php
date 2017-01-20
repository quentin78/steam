<?php
function userConnect(PDO $db, $pseudo, $pass){
	
		$sql ="SELECT *
		FROM users
		WHERE pseudo = :pseudo 
		AND pass = :pass";

	$req = $db->prepare($sql);
	$req->execute(array(
	'pseudo' => $pseudo,
	'pass' => $pass
	));

	$result = $req->fetch(PDO::FETCH_ASSOC);

	if($result == true){
		$_SESSION['id'] = $result['id'];
		$_SESSION['nom'] = $result['nom'];
		$_SESSION['pseudo'] = $result['pseudo'];
		$_SESSION['prenom'] = $result['prenom'];

		return true;
	}else {
		return false;
	}
}


function userRegistration(PDO $db, $nom, $prenom, $naissance, $adresse, $ville, $telephone, $mail, $pseudo, $pass ) {
		
		
		if ( !empty($nom) AND !empty($prenom) AND !empty($naissance) AND !empty($adresse) AND !empty($ville) AND !empty($telephone) AND !empty($mail) AND !empty($pseudo) AND !empty($pass) ) {
			$sql= " INSERT INTO users (nom, prenom, naissance, adresse, ville, telephone, mail, pseudo, pass) 
				 VALUES (:nom, :prenom, :naissance, :adresse, :ville, :telephone, :mail, :pseudo, :pass)";
 
			$req = $db->prepare($sql);
			$req->execute( array(
				'nom' => $nom,
				'prenom' => $prenom,
				'naissance' => $naissance,
				'adresse' => $adresse,
				'ville' => $ville,
				'telephone' => $telephone,
				'mail' => $mail,
				'pseudo' => $pseudo,
				'pass' => $pass

				));

			return true;

		} else {
			return false;
		}


	}

function gamesread(PDO $db) {

		$sql = " SELECT * FROM games";

			$req = $db->prepare($sql);
			$req->execute();

		$result = $req->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

function singlegames(PDO $db, $id){
	$sql = 'SELECT * FROM games WHERE id = :id';
	$req = $db->prepare($sql);
	$req->execute(array("id" => $id));
	$result = $req->fetch(PDO::FETCH_ASSOC);

	return $result;
}


?>