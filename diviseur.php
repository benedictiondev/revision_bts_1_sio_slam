<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diviseurs</title>
</head>
<body>
    <center>
        <h1>Exerccice Diviseurs</h1>
    <form method="post">Donner un nombre entier
        <input type="text" name="nb">
    <input type="submit" name="Afficher" id="Afficher" value="Afficher">
    
    </form>
    <?php
    if(isset($_POST['Afficher'])){
        $nb = $_POST['nb'];
        for ($div=1; $div<=$nb; $div++){
            if ($nb % $div ==0){
                printf("%d est un diviseur.", $div);
            }
        }
    }
    ?>
</body>
</html>