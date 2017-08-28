<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saludo.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php
      function saludar( $saludo){
        $saludo=0;
        if ($saludo == "Saludo") {
          $saludo = "Hola Bienvenidos";
        }
        return $saludo;
        }
       ?>

    </div>

  </body>
</html>
