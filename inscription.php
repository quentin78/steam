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
								    		<li><a type="button" class="btn btn-primary" style=" width: 126px; height: 50px; margin-left: 10px; margin-right: 10px;">S'inscrire</a></li>
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