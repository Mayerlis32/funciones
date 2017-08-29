<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero par o impar.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php

      function par($n1){
        if ($_POST) {
          if ($n1%2==0) {
            echo "El numero $n1 es par";
          }
          else {
            echo "El numero $n1 es impar";
          }
        }
      }

     ?>

    </div>


  </body>
</html>
