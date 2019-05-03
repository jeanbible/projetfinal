
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="ckeditor/ckeditor.js"></script>
    <meta charset="utf-8">
    <title>Tester du editor</title>
  </head>
  <body>
    <form class="" action="articles.php" method="post">
      <textarea name="editor1" id="editor1" rows="10" cols="80">
        Yoyo
      </textarea>
      <input type="submit" value="Soumettre">
    </form>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1', {
        //uiColor: '#AADC6E',
        language: 'fr',
        height: 200,
        width: 500,
        toolbarGroups: ([
      		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
      		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
      		{ name: 'forms', groups: [ 'forms' ] },
      		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
      		{ name: 'colors', groups: [ 'colors' ] },
      		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
      		'/',
      		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
      		{ name: 'links', groups: [ 'links' ] },
      		{ name: 'insert', groups: [ 'insert' ] },
      		'/',
      		{ name: 'styles', groups: [ 'styles' ] },
      		{ name: 'tools', groups: [ 'tools' ] },
      		{ name: 'others', groups: [ 'others' ] },
      		{ name: 'about', groups: [ 'about' ] }
      	]),
        removeButtons: 'Save,Cut,Copy,Paste,Replace,Checkbox,Form,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Subscript,Superscript,Strike,RemoveFormat,CopyFormatting,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Anchor,Flash,Smiley,PageBreak,Iframe,Styles,Format,Font,FontSize,BGColor,ShowBlocks,About,NewPage,Print,Preview,Templates,Scayt,Blockquote,Outdent,Indent,CreateDiv,HorizontalRule,Maximize,PasteFromWord,PasteText,Find,SelectAll'
        });
        //CKEDITOR.replace( 'editor1' );
    </script>
  </body>
</html>
