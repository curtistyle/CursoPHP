<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>	

	
<?php
	
	if (isset($_POST["enviando"])){   //isset comprueba si el boton 'enviar' se ha pulsado
		
		$usuario=$_POST["nombre_usuario"];   //$_POST es una variable super global.
		$edad=$_POST["edad_usuario"];
		
		if ($usuario=="Juan" && $edad>=18){
			echo "<p class='valido'>Puedes entrar</p>";
		}else{
			echo "<p class='no_validado'>No puedes entrar</p>";
		}
	}
	
?>
	
</body>
</html>