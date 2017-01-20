<?php
include('header.php');
?>



<div class="profile_header">
	<div class="profile_header-content">
		<div  class=avatar_pp>
			<img src="img/avatar.png" width="100" height="100">
		</div>
		<div class=users_name>
			<h2 class="username"> <?php echo $_SESSION['pseudo']; ?> </h2>
			<p class="name"> <?php echo $_SESSION['prenom']; ?> </p>
		</div>
	</div>
</div>





<?php
include('footer.php');
?>