<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="post">
      <input type="text" name="1" value="1" />
     <button type="submit" name="deepalee">
        Click me!
      </button>
    </form>
  </body>
</html>

<?php
  if(isset($_POST['deepalee']))
  {
    foreach($_POST as $name => $content) { // Most people refer to $key => $value
      echo "The HTML name: $name <br>";
      echo "The content of it: $content <br>";
   }
   $postnames = array_keys($_POST);
   print_r($postnames[0]);
  }
?>



[
  0: [
    36: image
    ]  
]