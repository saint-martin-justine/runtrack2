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
        $countVoyelle = 0;
        $countConsonne = 0;
        $voyelle = "aeiouyAEIOUY";
        $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
        for ($i = 0; isset($str[$i]); $i++){
            for ($j = 0; isset($voyelle[$j]); $j++){
                if ($str[$i] == $voyelle[$j]){
                    $countVoyelle ++ ;
                }
            }
        }
    ?>
    <table border="1" >
        <thead>
            <tr>
                <th>consonne</th>
                <th>voyelle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $countConsonne?></td>
                <td><?php echo $countVoyelle?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>