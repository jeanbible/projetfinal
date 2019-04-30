
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
        This is my textarea to be replaced with CKEditor.
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
