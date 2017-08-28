<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Temperaturas.</title>
  </head>
  <body>
    <div class="container col-12 col-md-8 col-9">

      <?php
        function tempe($celcius, $tem){
          if ($_POST) {
            $r=0;

            if ($tem == "Fahrenheit") {
              $r=($celcius*1.8)+32;
            }
            else {
              $r=$celcius+273.15;
            }
          }
        //  return $r;
        }



       ?>

    </div>

  </body>
</html>
