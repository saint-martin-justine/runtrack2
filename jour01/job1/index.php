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
        $str = " LaPlateforme ";
        $str2 = "Vive ";
        $str3 = " !";

        echo $str . "<br>";
        echo ($str2 . $str . $str3);
        //  pour faire la valeur + la nouvelle valeur c'est +=
        echo "<br>";
        $val = 6;
        echo $val;
        echo "<br>";
        $val += 4;
        echo $val;
        //var_dump affiche le contenue d'une variable
        echo "<br>";
        $myBool = true;
        var_dump($myBool);
        echo "<br>";
        $myBool = false;
        var_dump($myBool);
        echo "<br>";
        
        
      ?>
    </body>
    </html>