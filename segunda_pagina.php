<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	$nombre="Juan";   // esto es una variable de tipo string
	
	$nombre="Pedro";   //reasingno la variable
	
	$edad=21;
	
	print "El nombre de usuario es " . $nombre;   //se concatena con un punto
	
	// o bien se puede hacer de esta forma
	
	print "<br>El nombre de usuario es $nombre";
	
	print '<br>El nombre de usuario es $nombre';   //al poner comillas simple, no reconoce las variables
	
	echo "<br>El nombre es: $nombre";
	
	echo "<br>El nombre es: " . $nombre . ", edad: " . $edad;
	
	print "<br>";
	
	echo $nombre,$edad;   //solo 'echo' nos permite hacer eso, 'print' no lo admite.
	
	// 'print' es una funcion y 'echo' es una expresion
	
	
 	
?>
	
</body>
</html>