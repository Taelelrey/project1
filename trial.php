<?php
include_once'tags.html';
// include'worldbuilding.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="ckeditor/ckeditor.js"></script>
  <title>Document</title>
</head>
<body>
  <form action="send_data.php" method="POST">
    <textarea name="editor1" id="editor1" cols="80" rows="10">

    </textarea>
    <script>
      CKEDITOR.replace('editor1');
      var data = CKEDITOR.instances.editor1.getData();
    </script>
    <button type="submit" name="save">Save</button>
  </form>

  <div id='template' class="template"></div>
</body>
</html>
