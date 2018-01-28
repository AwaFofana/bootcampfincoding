	<?php include('connexion.php');
	 
	$msg="";
	if (isset($_POST['btnValider'])){
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {
			$sql= "INSERT INTO article (titre, description, image, id_categorie)
			 VALUES ('".($_POST['nom'])."',
			 		'".($_POST['prenoms'])."',
			 		'".($_POST['date_naissance'])."',
			 		  '".($_FILES['image']['name'])."',
			 		  '".($_POST['specialisation'])."',
			 		  '".($_POST['email'])."',
			 		  '".($_POST['mdp'])."',
			 		  '".($_POST['description'])."')";
			$result=mysqli_query($link,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
		}

	}
$title="Creer CV";
include('menu.php');
 ?>

<div class="container" class="navbar1-default">
	          <br><br><br><br><br><br>
                <div class="container" style="background-color: #FFCCFF;">

	<div class="col-lg-2">
		<ol>
			<h5><a href="modifierpp.php">Modifierprofil</a><br><br><br>
			<a href="creationcv.php">Creer cv</a><br><br><br>
			<a href="cv.php">Afficher votre cv</a><br><br><br>
			<a href="experiences.php">Ajouter experience</a><br><br><br>
			<a href="diplomes.php">Ajouter diplome</a><br><br><br>
			<a href="centresinteret.php">Ajouter centres interets</a></h5>
		</ol>
	</div>
	<div class="col-lg-2 col-offset-2"></div>
	<div class="col-lg-8">
		<div class="col-lg-8">
			<form method="POST">
				<fieldset><legend>CREER CV</legend></fieldset>
	     <label>FACEBOOK</label>
	     <input type="text" name="facebook" class="form-control">
	     <label>TWITTER</label>
	     <input type="text" name="twitter" class="form-control">
	     <label>GITHUB</label>
	     <input type="text" name="github" class="form-control">
         <input type="submit" name="btnvalider" class="btn-primary" value="Ajouter" >
        </fieldset>
		</form>
</div>
</div>
<?php require_once('footer.php');?>