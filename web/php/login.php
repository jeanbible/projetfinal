
 <?php
   session_start();
   require_once("../db/connexion.inc.php");
   $user=$_POST['user'];
   $paswd=$_POST['paswd'];
   $requette="SELECT *FROM tabconnexion  WHERE user = '".$user."' AND paswd = '".$paswd."'";

   try{
      $stmt = $connexion->prepare($requette);
      $stmt->execute();
      $ligne=$stmt->fetch(PDO::FETCH_OBJ);
      }catch (Exception $e){
       echo "Probleme pour lister";
      }finally {
       unset($stmt);
     }
     if (isset($ligne->idmem)== false) {
       echo"Mauvais usager ou mot de passe";
     }else{
        $requette2="SELECT *FROM tabmembres WHERE idmem = '".($ligne->idmem)."'";
        try{
           $stmt2 = $connexion->prepare($requette2);
           $stmt2->execute();
           $ligne2=$stmt2->fetch(PDO::FETCH_OBJ);
           }catch (Exception $e){
            echo "Probleme pour lister";
           }finally {
            unset($connexion);
            unset($stmt2);
           }
           $_SESSION['prenom'] = ($ligne2->prenom);
           $_SESSION['idmem'] = ($ligne->idmem);
           header ('location: ../index.php');
      }

  ?>
