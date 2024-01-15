<?php session_start(); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
		font-family: "Roboto", sans-serif;
		color: #fff;
		margin: 0;
		padding: 0;
		background-color: #121212;
		box-sizing: border-box;
	}
	#pasos_container {
	width: 80%;
	border: 1px solid #252525;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	max-width: 1000px;
	margin: 1em auto;
	padding: 1.5em;
	background-color: #151515;
	display: flex;
	flex-direction: column;
	gap: 1.5em;
}

.pasos_input {
	padding: 0.7em;
	border-radius: 5px;
	border: 1px solid #252525;
	background-color: #151515;
	color: white;
	margin-top: 0.5em;
}

.pasos_holder {
	display: flex;
	flex-direction: column;
	justify-content: center;
	margin: 0px;
}
.pasos_holder_checkbox {
	display: flex;
	flex-direction: row;
	align-items: center;
	margin: 0px;
}

.errorIndicator {
	color: red;
}

.pasos-button {
	width: 100%;
	background-color: lightblue;
	border: none;
	border-radius: 5px;
	padding: 0.5em;
	font-weight: bold;
	font-size: 1.2em;
	cursor: pointer;
	height: 2.5em;
}

	</style>
</head>
<body>
	
	<?php include("menu.php") ?>

	<div style="margin: 1em">
		<p>Introduce los datos del nuevo disco:</p>
		<form action="registrar_producto.php" method="post" enctype="multipart/form-data" >
		
			<div class="pasos_container">
				<span>Nombre:</span>
				<input class="pasos_input" type="text" name="nombre" minlength="2" maxlength="20"  required/> <br>
			</div>
		
			<div class="pasos_container">
				<span>Artista:</span>
				<input class="pasos_input" type="text" name="artista" minlength="1" maxlength="30" required/> <br>
			</div>
		
			<div class="pasos_container">
				<span>Precio:</span>
				<input class="pasos_input" type="number" step=".01" name="precio"  required/> <br>
			</div>
			<div class="pasos_container">
				<span>Genero:</span>
				<input class="pasos_input" type="text" name="genero" minlength="2" maxlength="20" required/> <br>
			</div>
			<div class="pasos_container">
				<span>Fecha:</span>
				<input class="pasos_input" type="date" name="fecha" required /> <br>
			</div>
		
			<div class="pasos_container">
				<span>Portada:</span>
				<input class="pasos_input" type="file" name="portada" required/>
			</div>
			<br>
			<input class="pasos-button" type="submit" value="Registrar Disco"/>
		</form>
	</div>

</body>
</html>

