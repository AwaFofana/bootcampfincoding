  <?php include('connexion.php');	 
$msg="";
$interet=interetById($_SESSION['id']);
if (isset($_POST['btnValider'])){
			if (!empty($_POST['descriptionint'])) {
			$sql= "INSERT INTO interets (descriptionint,id_codeuse)
				 VALUES ('".($_POST['descriptionint'])."','".($_POST['id_codeuse'])."')";
				$result=mysqli_query($link,$sql);
				if ($result) {
					$msg='Insertion reussie';
					redirect('centresinteret');
				}else{
					$msg=mysqli_error($link);
				}	
			}		
}
$title="Centres Interets codeuse";
include('menu.php');
 ?>
                <div class="container">

	<div class="col-lg-3">
		<ol><h4>
			<a href="modifierpp.php">Modifierprofil</a><br><br>
			<a href="creationcv.php">Creer cv</a><br><br>
			<a href="cv.php">Afficher votre cv</a><br><br>
			<a href="experiences.php">Ajouter experience</a><br><br>
			<a href="diplomes.php">Ajouter diplome</a><br><br>
			<a href="centresinteret.php">Ajouter centres interets</a><br></h4>
		</ol>
	</div>
	<div class="col-lg-2 col-offset-2"></div>
	<div class="col-lg-7">
		<div class="col-lg-7">
	<form method="POST" class="form-group">
		<fieldset><legend>Ajouter Centres interets</legend>
		<div class="form-group">
			<?php if(!empty($msg)):?>
			<div class="alert alert-info alert-dismissible" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  					<span aria-hidden="true">&times;</span></button>
  				<strong>Message! </strong><?= $msg ?>
			</div>
			<?php endif; ?>
		</div>
	<label class="control-label">DescriptionCI</label><br>
	<input type="text" name="descriptionint" class="form-control">
	<input type="hidden" name="id_codeuse" value="<?= $_SESSION['id']?>">
    <br>
	<button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
	</fieldset>

	</div>
</div>
<div class="row">
				<table class="table" >
					<thead>
						<tr>
							<th>Numero</th>
							<th>decriptionint</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							foreach($interet as $data)
								{ ?>
							<tr>
								<td> <?= $n; ?> </td>
								<td><?= strtoupper($data['descriptionint']); ?></td>
							</tr>
							<?php $n++;
						} ?>
					</tbody>
				</table>

			</div>
<?php require_once('footer.php');?>