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
            if ($i == 42){
              echo "<b><u>" . $i . "</b></u>";
              echo "<br>";
            }else{
              echo $i;
              echo "<br>";
            }
            $i ++; 
        }
        
        
      ?>
</body>
</html>