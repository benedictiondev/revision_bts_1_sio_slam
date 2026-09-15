<!DOCTYPE html>
<html>
<head>
    <title>Diviseurs Proc</title>
</head>
<body>
<center>
    <h1> Exercice Diviseurs avec Procédure</h1>
    <form method="post">
        Donner un nombre entier : 
        <br>
        <input type="text" name="nb"> 
        <br>
        <input type="submit" name="Afficher" value="Afficher">
    </form>
    <?php
    function liste_diviseurs ($nb){
        for ($i=1; $i<=$nb; $i++){
            if($nb%$i==0){
            printf("%d est un diviseur<br>",$i);
            }
        }
    }
    if(isset($_POST['Afficher'])){
        $nb = $_POST['nb']; 
        //appel de la procédure 
        liste_diviseurs($nb);
    }

    ?>
</center>
</body>
</html>