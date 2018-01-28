<?php require_once('connexion.php');
$msg=[];
$title="Acceuil - Bootcamp Final";
$listes=listesCodeuses();
//var_dump($listes) ;//die();
require_once('menu.php');
          ?>
<div class="container">
  <?php foreach ($listes  as $data):?>
  <div class="row">
   <br>
   <div class="col-lg-1 col-offset-1"></div>
   <div class="col-lg-3">
        <img src="upload/<?=$data['image'] ?>" class="img-responsive img-circle">
        <h2 style="text-align: center"> <?=ucfirst($data['nom'])?> <?=ucfirst($data['prenoms'])?></h2>
    </div>
    <br><br><br><br>
    <div class="col-lg-4">
        <h2 style="text-align: center;"><?= strtoupper($data['specialisation']); ?> <br> <?= ucfirst($data['description']); ?></h2>
    </div>
     <br><br><br><br>
    <div class="col-lg-3">
        <a class="btn btn-danger btn-xs" href="cv.php?id=<?=$data['id_codeuse']?>">
        Consulter CV
      <i class="glyphicon glyphicon-eye-open"></i>
      </a>
    </div>
    <div class="col-lg-1 col-offset-1"></div>
    </div>
  <?php endforeach;?>
</div>
<?php require_once('footer.php');?>