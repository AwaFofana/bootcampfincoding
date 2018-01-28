<?php require_once('connexion.php');
     require_once('user_is_connected.php');
	$msg="";
	if (isset($_POST['btnValider'])){
		//var_dump($_POST);die();
		if(is_empty($_POST)==0){
			$email = $_POST['email'];
			$mdp = md5($_POST['mdp']);
			$sql= "SELECT * FROM codeuses WHERE email ='$email' AND mdp ='$mdp'";
			$result=mysqli_query($link,$sql);
			$data = mysqli_fetch_array($result);
			if ($data) {
				session_start();
				$_SESSION['id']=$data['id_codeuse'];
				$_SESSION['username']=$data['nom']." ".$data['prenoms'];
				$_SESSION['usermail']=$data['email'];
				$_SESSION['photo']=$data['image'];
				//var_dump($data);die();
				header('Location:dashboard.php'); die();
			}else{
				$msg="Email ou Mot de passe incorrect";
			}
		}else{
				$msg="Veuillez remplir tous les champs";
		}
	
	}
$title="Connexion codeuse";
include('menu.php');
 ?>
<nav class="navbar navbar1-default">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<form class="col-md-4" method="POST">
			<fieldset>
				<legend style="color:blue ;">Connexion</legend>
					<div class="form-group">
					<?php if(!empty($msg)):?>
					<div class="alert alert-warning alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  						<span aria-hidden="true">&times;</span></button>
  					<strong>Message! </strong><?= $msg ?>
					</div>
					<?php endif; ?>
			</div>
					<div class="form-group ">
						<label class="control-label" for="login">Email:</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group ">
						<label class="control-label" for="mdp">Mot De Passe:</label>
						<input type="password" name="mdp" class="form-control">
					</div>
				 <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
				</fieldset>
    </form>
	</div>
    </div>
	</div>
</nav>
<?php require_once('footer.php');?>