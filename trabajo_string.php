<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
<style>
	

	.resaltar{
		color:#F00;
		font-weight: bold;	
	}
	
	
</style>
	
</head>

<body>
	
<?php
	
	echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";
	
	echo "<br>";
	
	echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
	
	
	$variable1="Casa";
	$variable2="CASA";
	
	$resultado=strcmp($variable1,$variable2); //Devuelve 1 si no son iguales, 0 si son iguales. Esta funcion tiene en cuanta las mayusculas y minusculas.
	
	echo "<br>El resultado es: " . $resultado;
	
	$resultado=strcasecmp($variable1,$variable2);  //Devuelve 1 si no son iguales, 0 si son iguales. Esta funcion ignora las mayusculas y minuscuals.
	
	echo "<br>El resultado es: " . $resultado;
	
	if ($resultado){
		echo "<br>No coincide.";
	}else{
		echo "<br>Coincide";
	}
	
?>
	
</body>
</html>