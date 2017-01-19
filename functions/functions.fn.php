<?php
function userConnection(PDO $db, $mail, $pass){
		if(!empty($mail) && !empty($pass)){
			//Requête SQL
			$sql = "SELECT * FROM utilisateur WHERE mail = :mail AND pass = :pass LIMIT 1";

			$req = $db->prepare($sql);
			$req->execute(array(
				':mail' => $mail,
				':pass' => $pass
			));

			$result = $req->fetch(PDO::FETCH_ASSOC);

			//Si le fetch réussi, alors un résultat a été retourné donc le couple mail / pass est correct
			if($result == true){
				
				//on définit la SESSION
				$_SESSION['id'] = $result['id'];
				$_SESSION['username'] = $result['username'];
				$_SESSION['mail'] = $result['mail'];
				$_SESSION['created_at'] = $result['created_at'];
				$_SESSION['image'] = $result['picture'];

				return true;
			}else{
				return false;
			}
		}else{

			return false;
		}
	}

	/*1.3!listMusics
		return :
			array of results
		$db -> 				database object
	*/

function userRegistration(PDO $db, $pseudo, $nom, $prenom, $mail, $pass ) {
		
		
		if ( !empty($pseudo) AND !empty($nom) AND !empty($prenom) AND !empty($mail) AND !empty($pass) ) {
			$sql= " INSERT INTO users (pseudo, nom, prenom, mail, pass) 
				 VALUES (:pseudo, :nom, :prenom, :mail, :pass)";
 
			$req = $db->prepare($sql);
			$req->execute( array(
				'pseudo' => $pseudo,
				'nom' => $nom,
				'prenom' => $prenom,
				'mail' => $mail,
				'pass' => $pass

				));

			return true;

		} else {
			return false;
		}


	}

function tweetAdd(PDO $db, $contents ) {

		if ( !empty($contents) ) {

			$sql= " INSERT INTO tweet (contents) 
					 VALUES (:contents)";

			$req = $db->prepare($sql);
			$req->execute( array(
				'contents' => $contents
 
				));

			return true;

		} else {

			return false;
		}

}

function tweetRead(PDO $db) {

		$sql = " SELECT * FROM tweet";

			$req = $db->prepare($sql);
			$req->execute();

		$result = $req->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

function singleTweet(PDO $db, $id){
	$sql = 'SELECT * FROM tweet WHERE id = :id';
	$req = $db->prepare($sql);
	$req->execute(array("id" => $id));
	$result = $req->fetch(PDO::FETCH_ASSOC);

	return $result;
}

function tweetEdit(PDO $db, $contents, $id) {

				if ( !empty($contents) ) {

					$sql = " UPDATE tweet
							 SET contents = :contents 
							 WHERE id= :id";

					$req = $db->prepare($sql);
					$req->execute( array(
						'contents' => $contents,
						'id' => $id

						));

					return true;

				} else {

					return false;

			} 
		}

function tweetDelete(PDO $db, $id){

		$sql = "DELETE FROM tweet WHERE id = :id";

			$req = $db->prepare($sql);
			$req->execute(array('id' => $id));
			
		$result = $req->fetch(PDO::FETCH_ASSOC);

	return $result;
}


?>