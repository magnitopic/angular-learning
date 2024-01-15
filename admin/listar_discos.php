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

.card {
	position: relative;
	border-radius: 10px;
	border: 1px solid #252525;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	margin: 20px;
	padding: 20px;
	width: 15em;
	background-color: #151515;
	color: white;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	transition: all 0.3s ease-in-out;
	cursor: pointer;
}
.card p {
	align-items: start;
	text-overflow: ellipsis;
	overflow: hidden;
	white-space: nowrap;
	min-width: 4em;
}
.card img {
	width: 14em;
	border-radius: 10px;
	height: auto;
	z-index: 2;
}
.card:hover {
	background-color: #252525;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}
.card:hover .card-disk {
	display: inline;
	z-index: 1;
}

.card-info {
	width: 100%;
}

.card-title {
	font-size: 1.5em;
	font-weight: bold;
}

.card-price {
	font-size: 1.2em;
	font-weight: bold;
	color: #00ff00;
	margin: 0px;
}

.card-bottom {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin-top: 20px;
	flex-direction: row;
}

.card-album {
	display: flex;
	align-items: center;
	justify-content: start;
}
.card-album p {
	margin: 0px;
}
.card-album p:nth-child(2) {
	margin: 0px 10px 0px 10px;
	min-width: 0.5em;
}

.card-disk {
	display: none;
	height: 12em;
	width: auto;
	position: absolute;
	top: 1.2em;
	right: 0;
	transition: all 0.5s ease-in-out;
}

.enlace_comprar_listado_principal {
	border: none;
	background-color: #ffd814;
	color: black;
	padding: 10px;
	border-radius: 5px;
	font-weight: bold;
	cursor: pointer;
	font-size: 0.9em;
}

#search_form {
	display: flex;
	flex-direction: column;
	margin: 2em 0px;
}

#nombre_buscador {
	margin: 0 auto;
	width: 80%;
	padding: 1em 10px;
	max-width: 1000px;
	font-size: 1.3em;
	border-radius: 5px;
}

details {
	border: 1px solid #ccc;
	padding: 1em;
	border-radius: 5px;
	width: 80%;
	margin: 2em auto;
	max-width: 1000px;
}

summary {
	cursor: pointer;
	font-weight: bold;
}

#filters-container {
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	padding: 2em 0px 1em 0px;
	gap: 2em;
}

#filters-price-container {
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

#filters-price-container input {
	width: 100%;
}

#filters-price-container p {
	margin: 0;
}


#container {
	display: flex;
	justify-content: space-around;
	align-items: center;
	flex-direction: row;
	flex-wrap: wrap;
}
    </style>
</head>
<body>

<?php include("menu.php"); ?>
<div style="margin: 1em">
    <p>Listado de discos de la tienda:</p>
    <div style="display: flex; flex-align: row; flex-wrap: wrap;">
        <?php
        foreach($discos as $disco){
            ?>
            <div style="margin: 10px;">
                <div class="card">
                    <img src="../imagenes/<?php echo $disco["id"]; ?>.jpg" alt="albumCover" />
                    <img src="../imagenes/disk.webp" alt="disk" class="card-disk" />
                    <div class="card-info">
                        <p class="card-title"><?php echo $disco["nombre"]; ?></p>
                    <div class="card-album">
                        <p><?php echo $disco["artista"]; ?></p>
                        <p>•</p>
                        <p><?php echo $disco["genero"]; ?></p>
                    </div>
                    <div class="card-bottom">
                        <p class="card-price"><?php echo $disco["precio"]; ?> €</p>
                    </div>
                </div>
            </div>
            <a onclick="return confirm('¿Confirmar?')" href="?idBorrar=<?= $disco["id"]?>">Borrar producto</a>
        </div>
        <?php
        }
        if( count($discos) == 0 )
        {
            ?>
            <h4>No hay discos en la tienda</h4>
            <?php
        }
        ?>
    </div>
    
</div>
</body>
</html>