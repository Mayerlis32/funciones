<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero par o impar.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <h3>Funcion que muestre por pantalla si el numero es par o impar</h3>
    <form class="" action="seis.php" method="post">
      <label >Numero:</label>
      <input type="number" name="a" value=""required>
      <input type="submit" name="" value="Enviar">
    </form>
    <hr>
    
    <?php
    include_once 'llamada_seis.php';
    echo par($n1=$_POST['a']);
     ?>

    </div>

  </body>
</html>
