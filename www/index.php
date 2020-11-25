<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Idioma</title>
    <meta charset="UTF-8">
  </head>
  <body> 

       
    <?php
      if($_GET["lang"]=="gal")
              {
                    echo "<h1>Benvidos donas e cabaleiros</h1>";
              }
      if($_GET["lang"]=="en")
              {
                    echo "<h1>Welcome ladies&gentlemen</h1>";
              }
      ?>
  </body>
</html>