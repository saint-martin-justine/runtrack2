<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Afficher variable</title>
    </head>
    <body>
      <?php 

        $i = 0;

        while ($i <= 100) {
          switch ($i) {
            case ($i <= 20):
              echo "<i>" . $i . "</i>";
              echo "<br>";
              break;
            case (($i <= 21) && ($i <= 25)):
              echo  $i;
              echo "<br>";
              break;
            case (($i >= 25) && ($i <= 50)):
              if ($i == 42){
                echo "La Plateforme_";
                echo "<br>";
              }else{
                echo "<u>" . $i . "</u>";
                echo "<br>";
              }
              
              break;
            default:
              echo $i;
              echo "<br>";
              break;
            }
          $i ++;
        }
      ?>
</body>
</html>