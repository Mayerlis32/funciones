<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Precio Articulo.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php
      function precios($precio1, $precio2, $precio3){
        $promedio = ($precio1+$precio2+$precio3)/3;

        echo "El precio del articulo en el primer establecimiento es: " . $precio1;
        echo "<br /> <br />El precio del articulo en el segundo establecimiento es: " . $precio2;
        echo "<br /> <br />El precio del articulo en el tercer establecimiento es: " . $precio3;
        echo "<br /> <br />El promedio del articulo es: " . $promedio;
      }
      precios($_POST['valor1'], $_POST['valor2'], $_POST['valor3']);
       ?>

    </div>

  </body>
</html>
