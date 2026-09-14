<!DOCTYPE html>
<html>
<head>
	<title>Rectangle </title>
</head>
<body>

<center>
		<h1> Exercice Rectangle </h1>
		<form method="post" >
			Longueur : <br> 
			<input type="text" name="lg"> <br>
			Largeur : <br> 
			<input type="text" name="lr"> <br>
			<input type="submit" name="Calculer" value="Calculer">
		</form>
		<?php
			if(isset($_POST["Calculer"])){
				$lg = $_POST['lg'];
				$lr = $_POST['lr'];

				$s = $lg * $lr;
				$p = 2 * ($lg + $lr);

				printf(" <br> La surface est de: %f", $s);
				printf(" <br> Le périmètre est de: %f", $p);
			}
		?>

</center>

</body>
</html>