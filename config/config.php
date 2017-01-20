<?php

$host = "localhost";
$db_name = "steam";
$user = "root";
$pass = "";

try {
	$db = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}

catch (EXCEPTION $e){
	echo 'ERREUR:' .$e->getMessage().'<br>';
	echo 'N°:'.$e->getCode();
	
}
?>