<?php
function enregistrerCours(){
  require_once("../db/connexion.inc.php");
  $typecours=$_POST['typecours'];
  $titrecours=$_POST['titrecours'];
  $description=$_POST['description'];
  $prerequis=$_POST['prerequis'];
  $dossier="../uploads/";
  $nomPochette=sha1($titrecours.time());
  $logocours="avatar.jpg";
  if($_FILES['logocours']['tmp_name']!==""){
  	//Upload de la photo
  	$tmp = $_FILES['logocours']['tmp_name'];
  	$fichier= $_FILES['logocours']['name'];
  	$extension=strrchr($fichier,'.');
  	@move_uploaded_file($tmp,$dossier.$nomPochette.$extension);
  	// Enlever le fichier temporaire chargé
  	@unlink($tmp); //effacer le fichier temporaire
  	$logocours=$nomPochette.$extension;
  }
  $requete="INSERT INTO tabcours VALUES(0,?,?,?,?,?)";
  $stmt = $connexion->prepare($requete);
  $stmt->execute(array($titrecours,$description,$prerequis,$typecours,$logocours));
  $message="Cours ". $connexion->lastInsertId()." bien enregistré";
  unset($connexion);
  unset($stmt);
  echo $message;
}
//controleur Admin
$action=$_POST['action'];
switch($action){
	case 'enregCours':
		enregistrerCours();
	break;
}
?>
