<?php session_start();

/******************************** 
	 DATABASE & FUNCTIONS 
********************************/
require('config/config.php');
require('functions/functions.fn.php');
/********************************
			PROCESS
********************************/
if(isset($_POST['mail']) && isset($_POST['pass'])){
	if(!empty($_POST['mail']) && !empty($_POST['pass'])){
		$hashh = md5($_POST['pass']);
		$userc = userConnection($db, $_POST['mail'], $hashh);
		if ($userc){
			header('Location: dashboard.php');
		}
		else{
			$error = "Identifiants Incorrects !";
		}
		
	}else{
		$error = 'Champs requis !';
	}
}
/******************************** 
			VIEW 
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';
