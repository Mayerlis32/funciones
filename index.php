<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php
        function operaciones($n1, $n2, $operacion){
          $resultado=0;
          if ($operacion == "Sumar") {
            $resultado = $n1 + $n2;
          }else if($operacion == "Restar"){
            $resultado = $n1 - $n2;
          }else if($operacion == "Multiplicar"){
            $resultado = $n1 * $n2;
          }
        
          return $resultado;
        }
        /*echo operaciones(15, 8 "Restar");*/
       ?>

    </div>

  </body>
</html>
