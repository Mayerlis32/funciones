<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero par o impar.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <form action="llamada_seis.php" method="post">
        <h3>FUNCION QUE MUESTRE POR PANTALLA SI UN NUMERO ES PAR O IMPAR.</h3>

        <?php
        /*function par($n1){
          if ($_POST) {
            if ($n1%2==0) {
              echo "El numero $n1 es Par.";
            }
            else {
              echo "El numero $n1 es Impar.";
            }
          }
        }*/
        function par($n1, $pi){
          $pi=0;
          if ($pi == "par") {
            $pi=($n1%2==0);
          }
          return $pi;
        }
         ?>

    </div>

  </body>
</html>
