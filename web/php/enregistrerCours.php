<?php
require_once("../db/connexion.inc.php");
$typecours=$_POST['typecours'];
echo $typecours;
// $res=$_POST['res'];
// $cat=$_POST['cat'];
// $duree=$_POST['duree'];
// $prix=$_POST['prix'];
// $lienFilm=$_POST['lienFilm'];
// $dossier="../pochettes/";
// $nomPochette=sha1($titre.time());
// $pochette="avatar.jpg";
// if($_FILES['pochette']['tmp_name']!==""){
// 	//Upload de la photo
// 	$tmp = $_FILES['pochette']['tmp_name'];
// 	$fichier= $_FILES['pochette']['name'];
// 	$extension=strrchr($fichier,'.');
// 	@move_uploaded_file($tmp,$dossier.$nomPochette.$extension);
// 	// Enlever le fichier temporaire chargé
// 	@unlink($tmp); //effacer le fichier temporaire
// 	$pochette=$nomPochette.$extension;
// }
// $requete="INSERT INTO films VALUES(0,?,?,?,?,?,?,?)";
// $stmt = $connexion->prepare($requete);
// $stmt->execute(array($titre,$res,$cat,$duree,$prix,$pochette,$lienFilm));
// echo "Film ". $connexion->lastInsertId()." bien enregistre";
// unset($connexion);
// unset($stmt);
?>
<!-- <br><br><a href="lister.php">Retour a accueil</a> -->
<?php
// require_once("../html/footer.html");
 ?>
