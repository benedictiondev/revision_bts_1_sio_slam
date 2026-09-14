<!DOCTYPE html>
<html>
<head>
	<title>Equation </title>
</head>
<body>

<center>
		<h1> Exercice Equation </h1>
		<form method="post" >
			Premier Coeff : <br> 
			<input type="text" name="a"> <br>
			Deuxieme Coeff : <br> 
			<input type="text" name="b"> <br>
			<input type="submit" name="Resoudre" value="Resoudre">
		</form>
		<?php
			if(isset($_POST["Resoudre"])){
				$a = $_POST['a'];
				$b = $_POST['b'];
                if ($a==0){
		            if ($b==0){
		            printf("Ens. solutions est R");
}else{
                     printf("Ens. solution est vide");
}
}else{
		    $x = -$b/$a;
    		        printf("Ens. solutions est : %f" , $x);
	
}
}
		?>

</center>

</body>
</html>