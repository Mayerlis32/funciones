<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Operaciones.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php
      function operaciones($n1, $n2, $operacion){
        $resultado=0;
        if ($operacion == "suma") {
          $resultado = $n1 + $n2;
        }else if ($operacion == "resta") {
          $resultado = $n1 - $n2;
        }else if ($operacion == "multiplicar") {
          $resultado = $n1 * $n2;
        }else if ($operacion == "division") {
          $resultado = $n1 / $n2;
        }else if ($operacion == "potencia") {
          $resultado=pow($n1, $n2);
        }else if ($operacion == "raizn1") {
          $resultado = sqrt($n1);
        }else if ($operacion == "raizn2") {
          $resultado = sqrt($n2);
        }
        return $resultado;
      }
      
       ?>

    </div>

  </body>
</html>
