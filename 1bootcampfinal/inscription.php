<?php 
require_once('connexion.php');
require_once('user_is_connected.php');
	 
	$msg="";
	if (isset($_POST['btnValider'])){
		//var_dump($_FILES); die();
		if(is_empty($_POST)==0 && is_empty($_FILES['image'])==0) {

			$img=$_FILES['image'];

			if ($img['type']=="image/png" || $img['type']=="image/jpeg" || $img['type']=="image/gif" || $img['type']=="image/jpg") {

				if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {

					$sql= "INSERT INTO codeuses (nom,prenoms,date_naissance,image,specialisation,email,mdp,description)
					 VALUES ('".($_POST['nom'])."',
					 		'".($_POST['prenoms'])."',
					 		'".($_POST['date_naissance'])."',
					 		'".($_FILES['image']['name'])."',
					 		'".($_POST['specialisation'])."',
					 		'".($_POST['email'])."',
					 		'".(md5($_POST['mdp']))."',
					 		'".($_POST['description'])."')";
					$result=mysqli_query($link,$sql);

					if ($result) {
						$msg='Insertion reussie';
						header('Location:pageconnexion.php'); die();
					}else{
						$msg=mysqli_error($link);
					}
				}
			}else{
				$msg='Veuillez choisir une image';
			}
		}else{
			$msg='Veuillez remplir tous les champs';
		}
		//var_dump(); die();
	}
$title="Inscription";
require_once('menu.php');
 ?>
<nav class="navbar navbar1-default">
<div class="container">
	<div class="row">
		<div class="col-lg-6">
	<form method="POST" class="form-group" enctype="multipart/form-data">
		<fieldset><legend style="color:blue ;"><h2>Inscription</h2></legend>
			<div class="form-group">
				<?php if(!empty($msg)):?>
				<div class="alert alert-info alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  						<span aria-hidden="true">&times;</span></button>
  					<strong>Message! </strong><?= $msg ?>
				</div>
				<?php endif; ?>
			</div>
	<label class="control-label">Nom</label><br>
	<input type="text" name="nom" class="form-control">
	<label class="control-label">Prenoms</label><br>
	<input type="text" name="prenoms" class="form-control">
	<label class="control-label">Date_naissance</label><br>
	<input type="text" name="date_naissance" class="form-control">
	<label class="control-label">Photo Profil</label><br>
	<input type="file" name="image" class="form-control">
	<label class="control-label"> Specialisation</label><br>
	<input type="text" name="specialisation" class="form-control">
	<label class="control-label" class="form-control">Email</label><br>
	<input type="email" name="email" class="form-control">
	<label class="control-label" class="form-control">Password</label><br>
	<input type="Password" name="mdp" class="form-control">
	<label class="control-label" class="form-control">Description</label><br>
	<input type="text" name="description" class="form-control"><br>
	 <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
		</fieldset>
	</form></div>
	<div class="col-lg-3 col-offset-3"></div>
	<br><br><br>
	<div class="col-lg-3 ">
		<img src="img/2017-11-25-17-42-40-417.jpg" class="avatar-moyen">
	</div>
</div>
</div>
</nav>
<?php require_once('footer.php');?>