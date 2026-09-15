<!DOCTYPE html>
<html>
<head>
    <title>fichiers</title>
</head>
<body>
<center>
    <h1> Exercice Fichiers PHP </h1>
    <form method="post">
        Entrer le nom de la source :<br>
        <input type="text" name="nomS"><br>
        Entrer le nom de la destination :<br>
        <input type="text" name="nomD"><br>
        <input type="submit" name="CopierColler" value="CopierColler">
    </form>
    <?php
if (isset($_POST['CopierColler'])){
    $nomS = $_POST['nomS'];
    $nomD = $_POST['nomD'];
    $fs = fopen($nomS, "r");
	$fd = fopen($nomD, "w");
	while ( ! feof($fs)){
		$car = fgetc($fs);
		fputc($car, $fd);
	}
	fclose($fd);
	fclose($fd);
}
    ?>
</center>
</body>
</html>