<?php
include('header.php');
include('config/config.php');
include('functions/functions.fn.php');
?>

<script>
$(document).ready(function(){
    $(".btn-action").click(function(){
    	$(".caté0").addClass("invisible");
    	$(".caté2").addClass("invisible");
        $(".caté1").removeClass("invisible");
    });
});

$(document).ready(function(){
    $(".btn-aventure").click(function(){
    	$(".caté0").addClass("invisible");
    	$(".caté1").addClass("invisible");
        $(".caté2").removeClass("invisible");
    });
});

$(document).ready(function(){
    $(".btn-all").click(function(){
    	$(".caté1").addClass("invisible");
    	$(".caté2").addClass("invisible");
        $(".caté0").removeClass("invisible");
    });
});

</script>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="container">
				<div class="row">
       				 <div class="col-md-6">
    					<h2>Rechercher un jeu</h2>
            			<div id="custom-search-input">
               				 <div class="input-group col-md-12">
                   				 <input type="text" class="form-control input-lg" placeholder="rechercher" />
                   				 <span class="input-group-btn">
                      				  <button class="btn btn-danger btn-lg" type="button">
                        		      <i class="glyphicon glyphicon-search"></i>
                      				  </button>
                   				 </span>
               			 	</div>
            			</div>
       				 </div>
       				 <div class="col-md-2">
       				 </div>
       				 <div class="col-md-4">
       				 	<h2>Catégories</h2>
       				 	<button class="btn btn-danger btn-all">Tout</button>
       				 	<button class="btn btn-danger btn-action">Action</button>
       				 	<button class="btn btn-danger btn-aventure">Aventure</button>
       				 </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">


			<div class="rows text-center" style="margin-top: 100px;">

				<div class="caté0"> 
				<?php

				$category = 0;
				
				$read = gamesread($db);

				?>

				<?php foreach($read as $games){ ?>

						

							<div class="col-md-3">

								<?php echo '<img class="img2" src="'.$games['photo'].'" title="" alt="" width="150">';?><br>
								<h5><?php echo $games['nom'];?></h5>

							</div>
							<div class="col-md-4">
								<ul>
									<li><p style="font-size: 15px;"><?php echo $games['description'];?></p></li>
								</ul>
							</div>
							<div class="col-md-5">
							<button class="btn btn-danger" style="margin-bottom: 10px;">Ajouter au panier</button><br>
							<?php echo '<a href="afficher.php?id='.$games['id'].'">';?>
							<button class="btn btn-danger">En savoir plus</button>
							<?php echo '</a>' ?>
							</div>
							<hr style="text-align: center;width: 1000px;">

				<?php
				}
				?>
				</div>
				<?php

				$category = 0;
				
				$read = gamesreadcat2($db, $category);

				?>

				<div class="caté1 invisible" >
				<?php foreach($read as $games){ ?>

						

							<div class="col-md-3">

								<?php echo '<img class="img2" src="'.$games['photo'].'" title="" alt="" width="150">';?><br>
								<h5><?php echo $games['nom'];?></h5>

							</div>
							<div class="col-md-4">
								<ul>
									<li><p style="font-size: 15px;"><?php echo $games['description'];?></p></li>
								</ul>
							</div>
							<div class="col-md-5">
							<button class="btn btn-danger" style="margin-bottom: 10px;">Ajouter au panier</button><br>
							<?php echo '<a href="afficher.php?id='.$games['id'].'">';?>
							<button class="btn btn-danger">En savoir plus</button>
							<?php echo '</a>' ?>
							</div>
							<hr style="text-align: center;width: 1000px;">

				<?php
				}
				?>
				</div>

				<div class="caté2 invisible">
				<?php

				$category = 0;

				$read = gamesreadcat1($db, $category);

				?>

				<?php foreach($read as $games){ ?>

						

							<div class="col-md-3">

								<?php echo '<img class="img2" src="'.$games['photo'].'" title="" alt="" width="150">';?><br>
								<h5><?php echo $games['nom'];?></h5>

							</div>
							<div class="col-md-4">
								<ul>
									<li><p style="font-size: 15px;"><?php echo $games['description'];?></p></li>
								</ul>
							</div>
							<div class="col-md-5">
							<button class="btn btn-danger" style="margin-bottom: 10px;">Ajouter au panier</button><br>
							<?php echo '<a href="afficher.php?id='.$games['id'].'">';?>
							<button class="btn btn-danger">En savoir plus</button>
							<?php echo '</a>' ?>
							</div>
							<hr style="text-align: center;width: 1000px;">

				<?php
				}
				?>
				</div>
			</div>
	</div>
<?php
include('footer.php');
?>
