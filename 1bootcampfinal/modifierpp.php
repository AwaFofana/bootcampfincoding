<?php
require_once('connexion.php');
$title="Modification profil codeuse";
require_once('menu.php');?>
<nav class="navbar navbar1-default">
<div class="container">
    <div class="row">
        <div class="col-lg-3">
        <ol>
            <h5><a href="modifierpp.php">Modi fierprofil</a><br><br><br>
            <a href="creationcv.php">Creer cv</a><br><br><br>
            <a href="cv.php">Afficher votre cv</a><br><br><br>
            <a href="experiences.php">Ajouter experience</a><br><br><br>
            <a href="diplomes.php">Ajouter diplome</a><br><br><br>
            <a href="centresinteret.php">Ajouter centres interets</a></h5>
        </ol>
    </div>
    <div class="col-lg-3 col-offset-3"></div>
        <div class="col-lg-6">
    <form method="POST" class="form-group">
        <fieldset><legend style="color:blue ;"><h2>MODIFICATION_PROFIL</h2></legend>
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
    <a href="dashboard.php" class="btn btn-default" >Valider</a>
        </fieldset>
    </form></div></div>
</div>
</nav>
<?php require_once('footer.php');?>