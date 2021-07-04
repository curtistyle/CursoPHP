<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
	
	$nombre="Juan";
	
	$edad=12;
	
	function dameNombre(){
		
		global $nombre;
		
		$nombre="El nombre es: " . $nombre;
	}
	
    include("datos_otros.php");
	
	dameNombre();
	
	
	echo $nombre;
	
	echo "<br>";
	
	echo $edad;
	
	
?>
	
</body>
</html>