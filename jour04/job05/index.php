<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" class="form-example">
        <div class="form-example">
            <label for="username">Entrer votre pseudonyme: </label>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-example">
            <label for="password">Entrer votre mot de passe: </label>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Envoyer !">
        </div>
    </form>

    <?php 
        if ((isset($_POST['username'])) && (isset($_POST['password']))){
            if (($_POST['username'] == "John") && ($_POST['password'] == "Rambo")){
                echo "C'est pas ma guerre";
            }else {
                echo "Votre pire cauchemar";
            }
        }
        ?>
   
</body>
</html>