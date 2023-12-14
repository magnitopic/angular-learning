<?php
//recibe el form de nuevo_producto.php y lo registra en bd

require "../librerias_php/setup_red_bean.php";

$disco = R::dispense("discos");

$disco->nombre = $_POST["nombre"];
$disco->artista = $_POST["artista"];
$disco->precio = $_POST["precio"];
$disco->genero = $_POST["genero"];
$disco->fecha = $_POST["fecha"];

$id = R::store($disco);
move_uploaded_file($_FILES["portada"]["tmp_name"], "../imagenes/$id.jpg");

include("registro_ok.php");