<?php 
	if (empty($_SESSION['id']) && empty($_SESSION['username'])) {
		header('Location:pageconnexion.php');die();
	}
 ?>