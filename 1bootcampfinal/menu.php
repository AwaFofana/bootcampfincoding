<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title><?= (!empty($title)) ? $title : 'Bootcamp Final'; ?> </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #CCC;"> 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container-fluid">
            <div class="navbar navbar-left">
                <a class="navbar-brand" href="index.php">Sheisthecode Cv</a><br> 
            </div>

            <div class="navbar navbar-right">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="propos.php">A Propos</a>
                    </li>
                    <?php if(is_connected()):?>
                    <li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
                            <?= ucfirst($_SESSION['username']) ;?>
						<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
                            <li><a href="dashboard.php">MON PROFIL</a></li>
							<li><a href="creationcv.php">CREER CV</a></li>
							<li><a href="experiences.php">EXPERIENCES</a></li>
							<li><a href="diplomes.php">DIPLOMES</a></li>
							<li><a href="centresinteret.php">CENTRESINTERETS</a></li>
                            <li><a class="btn btn-danger btn-xs" href="logout.php">SE DECONNECTER</a></li>
						</ul>
					</li>
                    <?php else: ?>
                        <li> <a href="inscription.php">S'Inscrire</a> </li>
                        <li> <a href="pageconnexion.php">Se Connecter</a> </li>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
</nav>
<br><br><br><br><br> 