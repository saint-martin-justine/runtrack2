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
        while ($i <= 1337) {
            switch ($i) {
              case 26:
                break;
              case 37:
                break;
              case 88:
                break;
              case 1111:
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