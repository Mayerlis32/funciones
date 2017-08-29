<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validacion de caracteres.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php
      function numero($n1){
        if ($_POST) {
          if (is_numeric($n1)) {
            echo "El $n1 es un numero ";
          }
          else {
            echo "La  $n1 no es un numero ";
          }
        }
      }
       ?>

    </div>

  </body>
</html>
