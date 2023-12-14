<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include("menu.html"); ?>
<div>
    Listado de discos de la tienda:
</div>
    <?php
    foreach($discos as $disco){
    ?>
        <div style="margin: 10px;">
            nombre:  <?= $disco["nombre"] ?> <br>
            artista:  <?= $disco["artista"] ?> <br>
            genero:  <?= $disco["genero"] ?> <br>
            fecha:  <?= $disco["fecha"] ?> <br>
            precio:  <?= $disco["precio"] ?> <br>
            portada: <img src="../imagenes/<?= $disco["id"]?>.jpg" height="120"/>
        </div>
    <?php
    }//end foreach discos
    ?>

</body>
</html>