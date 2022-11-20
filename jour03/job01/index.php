<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
         $yes = [200,204,173,98,171,404,459];
         for($i = 0; isset($yes[$i]); $i++){
          if ($yes%2 == 0)
         echo " $yes[$i] est pair <br/>" ;
         else
         echo "$yes[$i] est impair <br/>";
         }
          
        ?>   
    </body>
</html>