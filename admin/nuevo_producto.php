<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php include("menu.php") ?>

	introduce los datos del nuevo disco:

	<form action="registrar_producto.php" method="post" enctype="multipart/form-data" >
		
		Nombre: <input type="text" name="nombre" minlength="2" maxlength="20" /> <br>
		
		Artista: <input type="text" name="artista" minlength="1" maxlength="30"/> <br>
		
		precio: <input type="number" step=".01" name="precio" /> <br>

		genero: <input type="text" name="genero" minlength="2" maxlength="20"/> <br>

		fecha: <input type="date" name="fecha" /> <br>
			
		portada: <input type="file" name="portada"/>
		<br>	
		<input type="submit" value="Registrar Disco"/>
	</form>	

</body>
</html>

