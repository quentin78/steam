<?php
include('header.php');
include('config/config.php');
include('functions/functions.fn.php');
?>

<?php
	$id = $_GET['id'];

	$result = singlegames($db, $id);
?>

<?php
	echo '<img class="img2" src="'.$result['photo'].'" title="" alt="" width="150">'.'</br>';
	echo $result['nom']; 
?>

<?php
include('footer.php');
?>