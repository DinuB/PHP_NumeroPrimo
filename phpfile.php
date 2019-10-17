<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Numero Primo</title>
    <link rel="stylesheet" href="style.css">

  </head>

  <body>

    <div class="box">

    <?php

         $n = isset($_GET["tab"])?$_GET["tab"]:1;
         echo "<h3 class='resp'> Valor Escolido $n</h3>";


         echo "<p class='resp'>Valores Multiplos: ";

         $c = 0;

         for ($i = 1; $i <= $n; $i++) {
          if ($n % $i == 0) {
            $c++;
            echo "$i ";
          }
        }

        echo "</p>";

        echo "<p class='resp'> Total de multiplos: $c </p>";


        if ($c <= 2) {
          echo "<p class='primo resp'>&Eacute; PRIMO! </p> ";
        } else {
          echo "<p class='nprimo resp'>NAO &Eacute; PRIMO! </p> ";
        }

        ?>

       <br>
       <br>
       <a class="btn" href="javascript:history.go(-1)"> Voltar </a>
    </div>
  </body>
</html>
