<!DOCTYPE html>
<html>
<head>
    <title>tableau</title>
</head>
<body>
<center>
    <h1> Exercice tableau Prix </h1>
    <form method="post">
        Entrer les prix (;) : <br> 
        <input type="text" name="tab"> <br>
        <input type="submit" name="Calculer" value="Calculer">
    </form>
<?php
if (isset($_POST['Calculer'])){
    $tab = explode(";", $_POST['tab']);
    $prixMoyen = 0; 
    $prixMin = $tab[0]; 
    $prixMax = $tab[0];
    for ($i = 0; $i < count($tab) ; $i++){
        if ($tab[$i] < $prixMin) {
            $prixMin = $tab[$i];
        }
        if ($tab[$i] > $prixMax) {
            $prixMax = $tab[$i];
        }
        $prixMoyen = $prixMoyen + $tab[$i];
    }
    $prixMoyen = $prixMoyen / count($tab) ;
    printf ("<br>Le prix moyen est : %f", $prixMoyen);
    printf ("<br>Prix Max :%f et prix Min : %f", $prixMax, $prixMin);
}
?>
</center>
</body>
</html>