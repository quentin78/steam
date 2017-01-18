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
        <li><a href="#">Jeux</a></li>
        <li><a href="#">Bibliothèque</a></li>
        <li><a href="#">Communauté</a></li>
        <li><a href="#">Messages</a></li>
        <li><a href="#">Plus</a></li>
    </ul>
</nav>
	</header>



	<h1>Les jeux du mois</h1>
	<!-- ==================================== 
	Contenedor Slider 
	=======================================-->
	<section id="slider" class="container1">
		<ul class="slider-wrapper">
		<li class="current-slide">
			<img src="img/bf1.jpg" title="" alt="">

			<div class="caption">
				<h2 class="slider-title">Battelfield 1 </h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, placeat est. Alias illo hic quo nobis, aspernatur iste ut voluptate.</p>
			</div>
		</li>

		<li>
			<img src="img/Rust.jpg" title="" alt="">

			<div class="caption">
				<h2 class="slider-title">Rsut</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo iusto placeat aliquid tempore harum, similique!</p>
			</div>
		</li>

		<li>
			<img src="img/steep.jpg" title="" alt="">

			<div class="caption">
				<h2 class="slider-title">Steep</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dicta laudantium voluptatem minima! Dolorum tempore dolores excepturi omnis provident. Commodi quis aperiam maiores, dolore a perferendis!</p>
			</div>
		</li>

		<li>
			<img src="img/gta.jpg" title="" alt="">

			<div class="caption">
				<h2 class="slider-title">GTA V</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolore dignissimos laudantium.</p>
			</div>
		</li>
		</ul>
		<!-- Sombras -->
		<div class="slider-shadow"></div>
		
		<!-- Controles de Navegacion -->
		<ul id="control-buttons" class="control-buttons"></ul>
	</section>
	
	
	<!-- Imagenes Copyright -->
	<p class="authors">
		Las imagenes usadas en esta demostracíon no son de mi propiedad. <a href="https://www.flickr.com/photos/flickr/galleries/72157645330786244/">Autores de las Imagenes</a>
	</p>

