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

				

			</div>


		</nav>

	</header>

	<div class="form">

		

		<div class="tab-content">
			<div id="signup">   
				<h1>Sign Up for Free</h1>

				<form action="/" method="post">

					<div class="top-row">
						<div class="field-wrap">


							<input  name="Nom" type="text" required autocomplete="on" placeholder="Nom" />
						</div>

						<div class="field-wrap">
							<label>
								Last Name<span class="req">*</span>
							</label>
							<input  name="Prénom" type="text" required autocomplete="on" placeholder="Prénom" />						</div>
						</div>

						<div class="field-wrap">
							<label>
								Email Address<span class="req">*</span>
							</label>
							<input name="Mail" type="email"required autocomplete="off" placeholder="Mail"/>
						</div>

						<div class="field-wrap">
							<label>
								Set A Password<span class="req">*</span>
							</label>
							<input name="Mot de passe" placeholder="Mot de passe" type="password"required autocomplete="off"/>
						</div>

						<button type="submit" class="button button-block"/>Créer mon compte</button>

					</form>

				</div>

				<div id="login">   
					<h1>Welcome Back!</h1>

					<form action="/" method="post">

						<div class="field-wrap">
							<label>
								Email Address<span class="req">*</span>
							</label>
							<input type="email"required autocomplete="off"/>
						</div>

						<div class="field-wrap">
							<label>
								Password<span class="req">*</span>
							</label>
							<input type="password"required autocomplete="off"/>
						</div>

						<p class="forgot"><a href="#">Forgot Password?</a></p>

						<button class="button button-block"/>Log In</button>

					</form>

				</div>

			</div><!-- tab-content -->

</div> <!-- /form -->