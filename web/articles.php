<?php
  require_once("db/connexion.inc.php");

  $contenu = $_POST['editor'];

  $titre = "mon_titre";

  /*echo $contenu;*/
  //$sqlrequest = "INSERT INTO 'tabarticles'('idarticle', 'titre', 'content', 'postdate') VALUES (null, null, :content, null)";
  $req = $connexion->prepare('INSERT INTO tabarticles(titre, content, postdate) VALUES(:titre, :content, :postdate)');
  $req->execute(array(
    'titre' => $titre,
    'content' => $contenu,
    'postdate' => time(),
  ));

?>
