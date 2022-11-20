<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="GET" class="form-example">
        <div class="form-example">
            <label for="nombre">Entrer un nombre: </label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Envoyer !">
        </div>
    </form>

    <?php 
        if (isset($_GET['nombre'])){
            if (($_GET['nombre'] % 2 ) == 0 ){
                echo "Le chiffre " .$_GET['nombre'] . " est pair";
            }else{
                echo "Le chiffre " .$_GET['nombre'] . " est impair";
            }
        }
        ?>
   
</body>
</html>