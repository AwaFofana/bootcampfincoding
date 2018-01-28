<?php 
	if (!empty($_SESSION['id']) && !empty($_SESSION['username'])) {
		header('Location:dashboard.php');die();
	}
 ?>