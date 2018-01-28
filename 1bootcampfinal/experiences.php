 <?php require_once('connexion.php');
$msg=[];
$exp=experienceById($_SESSION['id']);
//var_dump($exp); die();
if (isset($_POST['btnValider'])){
	if (!empty($_POST['titreposte']) && !empty($_POST['datedebut']) && !empty($_POST['datefin']) && !empty($_POST['entreprise'])) {
	   $sql= "INSERT INTO experiences (titreposte,datedebut,datefin,entreprise,id_codeuse)
				VALUES ('".($_POST['titreposte'])."',
				'".($_POST['datedebut'])."',
				'".($_POST['datefin'])."',
				'".($_POST['entreprise'])."',
				'".($_POST['id_codeuse'])."')";
		$result=mysqli_query($link,$sql);
		if ($result) {
			$msg='Insertion reussie';
		}else{
			$msg=mysqli_error($link);
		}
	}else{
		$msg="Veuillez remplir tous les champs";
	}
}
$title="Experiences codeuse ";
require_once('menu.php');
?>
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<ol>
				<h5>
					<a href="modifierpp.php">Modifierprofil</a><br><br><br>
					<a href="creationcv.php">Creer cv</a><br><br><br>
					<a href="cv.php">Afficher votre cv</a><br><br><br>
					<a href="experiences.php">Ajouter experience</a><br><br><br>
					<a href="diplomes.php">Ajouter diplome</a><br><br><br>
					<a href="centresinteret.php">Ajouter centres interets</a>
				</h5>
			</ol>
		</div>
		<div class="col-lg-2 col-offset-2"></div>
		<div class="col-lg-7">
			<form method="POST" class="form-group">
			<fieldset><legend>AJOUTER EXPERIENCES</legend>
				<div class="form-group">
				<?php if(!empty($msg)):?>
				<div class="alert alert-info alert-dismissible" role="alert">
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  					<strong>Message! </strong><?= $msg ?>
				</div>
				<?php endif; ?>
				</div>
				<label class="control-label">Titre poste</label><br>
					<input type="text" name="titreposte" class="form-control">
				<label class="control-label">Date début</label><br>
					<input type="text" name="datedebut" class="form-control">
				<label class="control-label">Date fin</label><br>
					<input type="text" name="datefin" class="form-control">
				<label class="control-label">Entreprise</label><br>
				<input type="text" name="entreprise" class="form-control">
				<input type="hidden" name="id_codeuse" value="<?= $_SESSION['id']?>">
				<br>
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
					<th>titreposte</th>
					<th>datedebut</th>
					<th>datefin</th>
					<th>entreprise</th>
				</tr>
			</thead>
			<tbody>
					<?php 
						$n=1;
						foreach($exp as $data)
								{ ?>
						<tr>
							<td> <?= $n; ?> </td>
							<td><?= strtoupper($data['titreposte']); ?></td>
							<td><?= $data['datedebut']; ?></td>
							<td><?= $data['datefin']; ?></td>
							<td><?= strtoupper($data['entreprise']); ?></td>
							<td></td>
						</tr>
						<?php $n++;
					} ?>
			</tbody>
		</table>

		</div>
</div>
<?php require_once('footer.php');?>