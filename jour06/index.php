<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    if (isset($_GET['style'])){
        if ($_GET['style'] == "style1"){
            echo "<link rel='stylesheet' href='css/style1.css'>";
        }elseif($_GET['style'] == "style2"){
            echo "<link rel='stylesheet' href='css/style2.css'>";
        }elseif($_GET['style'] == "style3"){
            echo "<link rel='stylesheet' href='css/style3.css'>";
        }
    }
    ?>
    <title>Jour06</title>
</head>
<body>
    <form method="get" class="form-example">
    <div class="form-example">
        <select name="style" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
    </div>
    <div class="submit">
        <input type="submit" value="Envoyer !">
    </div>
    </form>

    
</body>
</html>