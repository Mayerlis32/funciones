<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Temperaturas.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">
      <form name="Temperaturas" action="llamada_cinco.php" method="post">
        <h3>CONVERTIR TEMPERATURAS DE CELCIUS A FAHRENHEIT Y KELVIN.</h3>
        Ingrese temperatura en grados Celcius: <input type="text" name="celcius" value="">
        <label for="">Temperaturas</label>
        <select class="" name="tem">
          <option value="">Seleccione.</option>
          <option value="Fahrenheit">Fahrenheit</option>
          <option value="Kelvin">Kelvin</option>
        </select>
        <input type="submit" name="" value="Convertir">
        <hr>
        <?php
         include_once 'llamada_cinco.php';
         echo tempe($celcius=$_POST['celcius'],$tem=$_POST['tem']);
         ?>

        </form>

      </form>

    </div>

  </body>
</html>
