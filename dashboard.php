<?php
include('header.php');
include('config/config.php');
include('functions/functions.fn.php');
?>



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

	<h1>Top 12 des jeux 2016 </h1>
 
	<div class="container">

			<div class="rows text-center">

				<?php $read = gamesread($db); ?>

				<?php foreach($read as $games){ ?>

						

							<div class="col-md-3">

								<?php echo '<a href="afficher.php?id='.$games['id'].'">';?>
								<?php echo '<img class="img2" src="'.$games['photo'].'" title="" alt="" width="150">';?><br>
								<?php echo '</a>' ?>
								<h5><?php echo $games['nom'];?></h5>
								<p><?php echo $games['description'];?></p>

							</div>

						

				<?php
				}
				?>

			</div>
	</div>
	
	
<?php
include('footer.php');
?>
