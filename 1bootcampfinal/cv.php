<?php
require_once('connexion.php');	 
$title="CURRICULUM VITAE";
require_once('menu.php');
?>
  <div class="container">

  	<br>
  	<h1 style="text-align: center;"> CURRICULUM VITAE</h1>
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
           
  			<div class="row">
                		<div class="col-lg-4">
                		<h4>Nee le 	27/12/1995</h4><br>
                		<h4>abobo</h4><br>
                		  <h4>77414534</h4> <br>
                		  <h4>celibataire sans enfant</h4>
            </div>
                	     <div class="col-lg-2 col-offset-2"></div>
                	
                		<div class="col-lg-2">
                        
                			 <img src="img/2017-12-20-10-40-16-410.jpg" class="avatar-grand">
                		</div>
                	</div>
                	<div class="row">
                			<div class="col-lg-10">
                				<h3>EXPERIENCES</h3>
                				<ol>
                            	<li>STAND AMBASSADOR A YOOMEE CI </li>
                            	<li>STAGIARE SHEISTHECODE</li>
                            	
                              </ol>
                			
                			  <h3>DIPLOMES</h3>
                             <ol>
                             <li> ABIDJAN – CÔTE D’IVOIRE 2016-2017 : Licence3 option Systèmes et Applications Groupe ASTC PLATEAU</li>

 							<li>	ABIDJAN – CÔTE D’IVOIRE  2016-2017 : BTS option IDA(Admissible au BTS)  Groupe ASTC PLATEAU </li>

								<li>ABIDJAN – CÔTE D’IVOIRE 2014-2015 : BACCALAUREAT série D </li>
							</ol>
                            <h3>CENTRES INTERETS</h3>
                            <ol>
                            	<li>LECTURE</li>
                            	<li>VOYAGE</li>
                            	<li>BENEVOLAT</li>
                              </ol>
                		</div>
                	</div>
  	</div>
  </div>
<?php require_once('footer.php');?>