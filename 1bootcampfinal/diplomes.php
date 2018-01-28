 <?php include('connexion.php');
$msg="";
$dip=diplomeById($_SESSION['id']);
//var_dump($dip) ;die();
if (isset($_POST['btnValider'])){

	//var_dump($_POST);die();
	if (!empty($_POST['anneeobtention']) && !empty($_POST['libelle']) && !empty($_POST['ecole']) && !empty($_POST['id_codeuse'])) {
		$sql= "INSERT INTO diplomes(anneeobtention,libelle,ecole,id_codeuse)
			 VALUES ('".($_POST['anneeobtention'])."',
			'".($_POST['libelle'])."',
			'".($_POST['ecole'])."',
			'".($_POST['id_codeuse'])."')";
			$result=mysqli_query($link,$sql);
		if ($result) {
			$msg='Insertion reussie';
			redirect('diplomes');
		}else{
			$msg=mysqli_error($link);
		}
	}else{
		$msg="Veuillez remplir tous les champs";
	}
	
}
$title="Diplomes codeuse";
include('menu.php');
?>
<div class="container">

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
				<fieldset><legend>Ajouter Diplome</legend></fieldset>
				<div class="form-group">
				<?php if(!empty($msg)):?>
				<div class="alert alert-info alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  					<strong>Message! </strong><?= $msg ?>
				</div>
				<?php endif; ?>
				</div>
	     <label>Annee obtention</label>
	     <input type="text" name="anneeobtention" class="form-control">
	     <label>Libelle</label>
	     <input type="text" name="libelle" class="form-control">
	     <label>Ecole</label>
	     <input type="text" name="ecole" class="form-control"><br>
	     <input type="hidden" name="id_codeuse" value="<?=$_SESSION['id']?>">
         <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
        </fieldset>
		</form>
	</div>
</div>
<div class="row">
				<table class="table" >
					<thead>
						<tr>
							<th>Numero</th>
							<th>Année obtention</th>
							<th>Libelle</th>
							<th>Ecole</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							foreach($dip as $data)
								{ ?>
							<tr>
								<td> <?= $n; ?> </td>
								<td><?= $data['anneeobtention']; ?></td>
								<td><?= strtoupper($data['libelle']); ?></td>
								<td><?= strtoupper($data['ecole']); ?></td>
							</tr>
							<?php $n++;
						} ?>
					</tbody>
				</table>

			</div>
</div>
<?php require_once('footer.php');?>