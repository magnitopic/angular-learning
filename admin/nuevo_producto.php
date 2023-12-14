<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php include("menu.html") ?>

	introduce los datos del nuevo disco:

	<form action="registrar_producto.php" method="post" enctype="multipart/form-data" >
		
		Nombre: <input type="text" name="nombre" /> <br>
		
		Artista: <input type="text" name="artista" /> <br>
		
		precio: <input type="number" step=".01" name="precio" /> <br>

		genero: <input type="text" name="genero" /> <br>

		fecha: <input type="date" name="fecha" /> <br>
			
		portada: <input type="file" name="portada"/>
		<br>	
		<input type="submit" value="REGISTRAR LIBRO"/>
	</form>	

</body>
</html>

