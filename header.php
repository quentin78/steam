<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Steam V2 </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/java.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-static-top animated" style="margin-bottom: 0px; padding-bottom: 15px;border-bottom: 1px solid;border-color: rgba(255,255,255,.3);">
			<div class="container">
				<div class="navbar-header" style=" padding-top: 15px; ">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="margin-top: 20px;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php"><img alt="Brand" src="img/logo.png" width="120"></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul id="page1" class="nav navbar-nav navbar-right" style="padding-top: 15px;">
						<li><p style=" font-size:15px;color: rgba(255,255,255,.6); margin-left: 10px; margin-right: 10px;padding-top: 15px;">Bienvenue <?php echo $_SESSION['pseudo']; ?> </p>
						
						<li>
						<form action="deconnexion.php">
							<input id="dec" type="submit" value="Déconnexion" class="btn btn-danger" style=" width: 126px; height: 50px; margin-left: 10px; margin-right: 10px;">
						</form>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
<nav role="custom-dropdown">
    <input type="checkbox" id="button">
    <label for="button" onclick></label>
    
    <ul>
        <li><a href="jeux.php">Store</a></li>
        <li><a href="bibliotheque.php">Bibliothèque</a></li>
        <li><a href="#">Communauté</a></li>
        <li><a href="compte.php">Mon compte</a></li>
        <li><a href="dashboard.php">Accueil</a></li>
    </ul>
</nav>
	</header>