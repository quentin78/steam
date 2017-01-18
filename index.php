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
		<nav class="navbar navbar-default navbar-static-top animated" style="margin-bottom: 0px; padding-bottom: 15px;">
			<div class="container">
				<div class="navbar-header" style=" padding-top: 15px; ">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="margin-top: 20px;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img alt="Brand" src="img/logo.png" width="120">
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul id="page1" class="nav navbar-nav navbar-right" style="padding-top: 15px;">
						<li><a href="inscription.php" type="button" class="btn btn-primary" style=" width: 126px; height: 50px; margin-left: 10px; margin-right: 10px;">S'inscrire</a></li>
						<li><a type="button" class="btn btn-primary" role="button" data-toggle="modal" data-target="#login-modal" style=" width: 126px; height: 50px; margin-left: 10px; margin-right: 10px;">Connexion</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- BEGIN # MODAL LOGIN -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-dialog" style="margin-top: 15%;">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img-circle" id="img_logo" src="img/logo.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>

				<!-- Begin # DIV Form -->
				<div id="div-forms">

					<!-- Begin # Login Form -->
					<form id="login-form" action="connexion.php" method="post" >
						<div class="modal-body">
							<div id="div-login-msg" >
								<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right" style="margin-bottom: 15px;"></div>
								<span id="text-login-msg">Se connecter à Steam V2.</span>
							</div>
							<input style="margin-bottom: 15px;" id="login_username" class="form-control" type="text" placeholder="Entrez votre identifiant." required name="pseudo">
							<input id="login_password" class="form-control" type="password" placeholder="Entrez votre mot de passe." required name="pass">

						</div>
						<div class="modal-footer">
							<div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Connexion</button>
							</div>
						</div>
					</form>

					<h5 class="text-center"> Vous n'avez pas de compte ? <a href=""> S'inscrire </a> </h5>
					<!-- End # Login Form -->

				</div>
				<!-- End # DIV Form -->

			</div>
		</div>
	</div>
	<!-- END # MODAL LOGIN -->


	<div class="slider-container">

		<div class="slider-control left inactive"></div>
		<div class="slider-control right"></div>
		<ul class="slider-pagi"></ul>
		<div class="slider">

			<div class="slide slide-0 active">
				<div class="slide__bg"></div>
				<div class="slide__content">
					<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
						<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
					</svg>
					<div class="slide__text" style="">
						<h2 class="slide__text-heading">Battlefield 1</h2>
						<p class="slide__text-desc">Battlefield 1 vous ramène au temps de la Première Guerre mondiale, où les nouvelles technologies et les conflits mondiaux ont marqué les débuts de la guerre moderne. Participez à chaque bataille, contrôlez des véhicules gigantesques et exécutez des manœuvres qui changeront le cours du combat. Le monde entier est en guerre. Découvrez ce qui se trouve au-delà des tranchées.</p>
					</div>
				</div>
			</div>

			<div class="slide slide-1 ">
				<div class="slide__bg"></div>
				<div class="slide__content">
					<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
						<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
					</svg>
					<div class="slide__text" style="">
						<h2 class="slide__text-heading">Grand Theft Auto V</h2>
						<p class="slide__text-desc">Grand Theft Auto V pour PC exploitera pleinement les capacités des PC pour intégrer de nombreuses améliorations : résolution supérieure, graphismes plus détaillés, trafic plus dense, profondeur de champ accrue, IA améliorée, nouveaux animaux, effets climatiques et animations de dégâts avancées pour une expérience de jeu vraiment exceptionnelle.</p>
					</div>
				</div>
			</div>

			<div class="slide slide-2">
				<div class="slide__bg"></div>
				<div class="slide__content">
					<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
						<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
					</svg>
					<div class="slide__text" style="">
						<h2 class="slide__text-heading">Steep</h2>
						<p class="slide__text-desc">Parcourez un immense monde ouvert inspiré des Alpes et de l’Alaska, où la poudreuse est toujours bonne et la piste infinie. Défiez et domptez les sommets les plus épiques en ski, wingsuit, snowboard ou encore en parapente. Lancez-vous seul ou aux côtés d’autres joueurs. Enregistrez et partagez vos figures les plus éblouissantes. Laissez vos amis suivre vos traces, réalisez des figures incroyables et revivez vos chutes les plus épiques.</p>
					</div>
				</div>
			</div>

			<div class="slide slide-3">
				<div class="slide__bg"></div>
				<div class="slide__content">
					<svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
						<path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
					</svg>
					<div class="slide__text" style="">
						<h2 class="slide__text-heading">Resident Evil 7</h2>
						<p class="slide__text-desc">Le danger et l'isolement menacent derrière les murs vétustes d'une ferme abandonnée d'Amérique du Sud. "7" marque le renouveau du jeu de survie et propose une perspective inédite pour le joueur avec la "vue isolée". Portée par le moteur RE, l'horreur atteint de nouveaux sommets de réalisme.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

