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
        if (isset($_POST['name'])){
            ?>
            <table border=1>
                <thead>
                    <tr>
                        <th>Argument</th>
                        <th>Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php 
                           foreach($_POST as $argument => $valeur){
                                echo "<tr><td>" . $argument . "</td>" . "<td>" . $valeur . "</td></tr>";
                            }
                        ?>
                   
                </tbody>
        </table>
        <?php
        }
        ?>
   
</body>
</html>