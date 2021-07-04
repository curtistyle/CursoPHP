<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php  //primer bloque de php

	function dameDatos(){   //declaracion de una funcion
		echo "Este es el mensaje del interior de la funcion<br>";
	}
	
?>
	
<?php //segundo bloque de php
	
	include ("proporciona_datos.php");   //include se utiliza para incluir funciones de otros archivos php
	
	echo "Este es el primer mensaje <br>";
	
	mostrarBienvenida();
	
	echo "Este es el segundo mensaje <br>";
	
	dameDatos();   //llamada a la funcion
	
	echo "Fin";
	
?>

</body>
</html>