    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tableau</title>
    </head>
    <body>
    <?php 
      // (boolean, entier, chaîne de caractères, nombre à virgule flottante)
      $boolean = true;
      $entier = 10;
      $string = "Hello World";
      $float = 1.5;
    ?>
    
    <table border="1" >
        <thead>
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Boolean</td>
                <td>boolean</td>
                <td><?php echo ((boolval($boolean) ? 'true' : 'false')); ?></td>
            </tr>
            <tr>
                <td>Chaine de caractere</td>
                <td>string</td>
                <td><?php echo $string; ?></td>
            </tr>
            <tr>
                <td>Entier</td>
                <td>integer</td>
                <td><?php echo $entier; ?></td>
            </tr>
            <tr>
                <td>Montant à virgule flottante</td>
                <td>float</td>
                <td><?php echo $float; ?></td>
            </tr>
        </tbody>
    </table>


    </body>
    </html>