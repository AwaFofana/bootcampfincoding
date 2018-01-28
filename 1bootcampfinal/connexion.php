<?php
if (empty($_SESSION)) {
session_start();
}

//Variables base donnees
$host="localhost";//nom de l'hote
$user="root";//nom d'utilisateur de la db
$mdp="";//mot de passe
$db="db_cvs";//lien de connexon a la db

//Connexion
$link=mysqli_connect($host,$user,$mdp,$db);
//mysqli_select_db($link,$db);

if (mysqli_connect_error()) { //si erreurde connexion
	die('Erreur Survenue '); //Arret du script 
}
//mysqli_set_charset($link,"utf8"); //Formatage en utf8
//mysqli_close($link); //Fermerture connexion 

//Nos Fonctions

 function is_empty($data,$btnvalider="btnValider"){
 	foreach ($data as $k => $v) {
 		$v= trim($v);
 		if($k!=$btnvalider && $k!="error") {
 			if(empty($v)) {
 				return 1; 
 			}
 		}	
 	}
 	return 0;
 }
 function is_connected(){
 	if (!empty($_SESSION['id']) && !empty($_SESSION['username'])) {
		return 1;
	}
 }
  function redirect($page){
 	header('Location:'.trim($page).'.php');die();
 }
  function listesCodeuses(){
    global $link;
    $sql = "SELECT * FROM codeuses";
    $codeuses=[];
    $result=mysqli_query($link,$sql);
    while ($data = mysqli_fetch_array($result)){
    	$codeuses[]=$data;
    }
    return $codeuses;
}
 function codeuseById($id){
    global $link;
    $sql = "SELECT * FROM codeuses 
                WHERE id_codeuse=$id";
    $result=mysqli_query($link,$sql);
	$data = mysqli_fetch_array($result);

    return $data ;
}
function experienceById($id){
    global $link;
    $sql = "SELECT * FROM experiences 
                WHERE id_codeuse=$id";
     $exp=[];
    $result=mysqli_query($link,$sql);
    while ($data = mysqli_fetch_array($result)){
    	$exp[]=$data;
    }
    return $exp;
}
function diplomeById($id){
    global $link;
    $sql = "SELECT * FROM diplomes 
                WHERE id_codeuse=$id";
     $dip=[];
    $result=mysqli_query($link,$sql);
    while ($data = mysqli_fetch_array($result)){
    	$dip[]=$data;
    }
    return $dip;
}
function interetById($id){
    global $link;
    $sql = "SELECT * FROM interets 
                WHERE id_codeuse=$id";
     $interet=[];
    $result=mysqli_query($link,$sql);
    while ($data = mysqli_fetch_array($result)){
    	$interet[]=$data;
    }
    return $interet;
}

?>
