<?php
require_once("../db/connexion.inc.php");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$naissance=$_POST['naissance'];
$paswd=$_POST['paswd'];
$type="M";
$user=$_POST['email'];


//insertion dans la table tabmembres
$requete="INSERT INTO tabmembres VALUES(0,?,?,?,?,?,?,?)";
$stmt = $connexion->prepare($requete);
$stmt->execute(array($nom,$prenom,$email,$naissance,$phone,$sexe,$type));
echo "Membre ". $connexion->lastInsertId()." bien enregistré";
$lastId=$connexion->lastInsertId();
//insertion dans la table tabconnexion
$requete2="INSERT INTO tabconnexion VALUES(?,?,?)";
$stmt2 = $connexion->prepare($requete2);
$stmt2->execute(array($lastId,$user,$paswd));

unset($connexion);
unset($stmt);
unset($stmt2);
?>
