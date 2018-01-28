<?php
include('connexion.php');
include('user_is_not_connected.php');
$title="Tableau de bord codeuse";
$infocodeuse = codeuseById($_SESSION['id']);
//var_dump($infocodeuse);die();
include('menu.php');
?>
 
                <div class="container">
                	<div class="row">
                		<div class="col-lg-2">
                			<ol>
								<h4><a href="modifierpp.php">Modifierprofil</a><br><br><br>
								<a href="creationcv.php">Creer cv</a><br><br><br>
								<a href="#">Afficher votre cv</a><br><br><br>
								<a href="experiences.php">Ajouter experience</a><br><br><br>
								<a href="diplomes.php">Ajouter diplome</a><br><br><br>
								<a href="centresinteret.php">Ajouter centres interets</a></h4>
					       </ol>
                		</div>
                		<div class="col-lg-2 col-offset-2"></div>
                		<div class="col-lg-2">
                          <h4><?=ucfirst($infocodeuse['nom'])?> <?=ucfirst($infocodeuse['prenoms'])?></h4>
                		  <h4>Nee le <?=$infocodeuse['date_naissance'] ?></h4>
                          <h4><?=$infocodeuse['email'] ?></h4>
                          <h4><?=ucfirst($infocodeuse['specialisation']) ?></h4>
                          <p class="muted"><?=ucfirst($infocodeuse['description']) ?></p>
                	     </div>
                	     <div class="col-lg-2 col-offset-2"></div>
                		<div class="col-lg-2">

                			RESUME CODEUSE<br>
                              <h3>MES DIPLOMES</h3>
                              <h3>MES EXPERIENCES</h3>
                              <h3>MES CENTRES DINTERETS</h3>
                              
                		</div>
                		 <div class="col-lg-2 col-offset-2"></div>
                		<div class="col-lg-2">
                			<img src="upload/<?=$infocodeuse['image'] ?>" class="img-responsive img-circle">
                		</div>
                	</div>
                	<div class="row"></div>
                </div> 
<?php require_once('footer.php');?>