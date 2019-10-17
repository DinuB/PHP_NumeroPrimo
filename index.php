<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Numero Primo</title>
    <link rel="stylesheet" href="style.css">
    
  </head>

  <body>


    <form class="box" action="phpfile.php" method="get">

      <h3 class="title">Números Primos</h3>

      <span class="inputTitle">Escolhe um Valor:</span>
      <select name="tab">
        <?php
          for ($i=1; $i <= 10 ; $i++) {
            echo "<option value='$i'>$i</option>";
          }
        ?>
      </select>

      <input class="btn" type="submit" value="Calcular">

    </form>

    </div>
  </body>
</html>
