<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cuadrado de un numero.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php
      function cuadrado($base, $exponente, $elevado){
        $elevado=0;
        if ($elevado == "Elevar") {
          $elevado=pow($base, $exponente);
        }
        return $elevado;
      }
       ?>

    </div>

  </body>
</html>
