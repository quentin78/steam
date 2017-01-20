<?php 
include('header.php');
include('config/config.php');
include('functions/functions.fn.php');
?>


<?php 

$id=$_GET['id'];
$result=singlegames($db,$id);

   
?> 
 



<div class="container" style="padding: 100px 0 100px 0;">
	<div class="row">
		<div class="col-md-4" style="margin-top: 100px;">
			<?php echo '<img class="img2" src="'.$result['photo'].'" title="" alt="" width="150">'?>
		</div>
		<div class="col-md-6" style="margin-top: 20px;"><h1 style="font-size: 30px;">
		<?php
			  echo $result['nom'];?></h1><p style="font-size: 20px;color: black;">Description : <?php
  			  echo $result['description'];?></p><p style="font-size: 20px;color: black;">Age Minimum :<h4> <?php
    		  echo $result['age']; ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12" style="text-align: center;margin-bottom: 30px;">
			<iframe width="800" height="500"
		      src="<?php echo $result['video']; ?>">
</iframe>
		</div>
	</div>
</div>


<?php 

include('footer.php');

