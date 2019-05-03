<?php
  $loginNav="";
  if ($_SERVER['PHP_SELF']=="/_h19/pfinal/projetfinal/web/index.php") {
    if (isset($_SESSION['type']) == false) {
?>
    <ul>
      <li><a href="php/connexion.php">Connexion</a></li>
      <li><a href="php/signup.php">Inscription</a></li>
    </ul>
  <?php
    }
    else if ($_SESSION['type'] == "M") {
  ?>
      <ul>
      <li><a href="php/deconnexion.php">Deconnexion</a></li>
      <li><a href="signup.html"><?php echo $_SESSION['prenom']?></a></li>
      </ul>
  <?php
    }
    else if ($_SESSION['type'] == "A") {
  ?>
      <ul>
        <li><a href="php/deconnexion.php">Deconnexion</a></li>
        <li><a href="signup.html"><?php echo $_SESSION['prenom']?></a></li>
      </ul>
  <?php
    }
  }else{
    if (isset($_SESSION['type']) == false) {
  ?>
      <ul>
        <li><a href="connexion.php">Connexion</a></li>
        <li><a href="signup.php">Inscription</a></li>
      </ul>
  <?php
    }
    else if ($_SESSION['type'] == "M") {
  ?>
      <ul>
        <li><a href="deconnexion.php">Deconnexion</a></li>
        <li><a href="signup.html"><?php echo $_SESSION['prenom']?></a></li>
      </ul>
  <?php
    }
    else if ($_SESSION['type'] == "A") {
  ?>
      <ul>";
        <li><a href="deconnexion.php">Deconnexion</a></li>
        <li><a href="signup.html"><?php echo $_SESSION['prenom']?></a></li>
      </ul>
  <?php
    }
  }

 ?>
