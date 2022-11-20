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
            <label for="name">Enter your name: </label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-example">
            <label for="email">Enter your email: </label>
            <input type="text" name="email" id="email" required>
        </div>
        <div class="form-example">
            <input type="submit" value="Subscribe!">
        </div>
    </form>

    <?php 
       if(isset($_POST['name']) && isset($_POST['email'])) {
        $count = 0;
        foreach($_POST as $value){
            $count ++;
        }
        echo "Le nombre d’argument POST envoyé est : ". $count;
       }
    ?>
</body>
</html>