<?php require_once("db/connexion.inc.php");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="ckeditor/ckeditor.js"></script>
    <meta charset="utf-8">
    <title>Tester du editor</title>
  </head>
  <body>
    <form class="" action="articles.php" method="post">


      <textarea name="editor" id="editor" class="ckeditor" rows="10" cols="80">
        <?php
          try{
            $stmt = $connexion->prepare('SELECT * FROM tabarticles WHERE idarticle=3');
            $stmt->execute();
            while($ligne=$stmt->fetch(PDO::FETCH_OBJ)){
              echo $ligne->content;
            }
          }catch (Exception $e){
        		echo $e;
        	 }
        	 finally {
        		unset($connexion);
        		unset($stmt);

        	 }

        ?>

      </textarea>
      <input type="submit" value="Soumettre">
    </form>

    <!--<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>-->
  </body>
</html>
