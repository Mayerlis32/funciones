<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validacion de caracteres.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <h3>Funcion que valide si el caracter introducido es un numero y muestre por pantalla el resultado </h3>
    <form class="" action="siete.php" method="post">
      <label >Ingrese letras o numeros:</label>
      <input type="text" name="a" value=""required>
      <input type="submit" name="" value="Enviar">
    </form>
    <hr>
    <?php
    include_once 'llamada_siete.php';
    echo numero($n1=$_POST['a']);
     ?>

    </div>

  </body>
</html>
