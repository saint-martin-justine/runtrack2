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

      for ($i = 1; $i <= 100; $i++) {
        switch($i){
          case ((($i % 3) == 0) && (($i % 5) == 0)):
            echo "FizzBuzz <br>";
            break;
          case (($i % 3) == 0):
            echo "Fizz <br>";
            break;
          case (($i % 5) == 0):
            echo "Buzz <br>";
            break;
          
          default:
            echo $i . "<br>";
            break;
        }
      }
      ?>
</body>
</html>