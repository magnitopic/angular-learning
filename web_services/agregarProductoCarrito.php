<?php
// si queremos usar la sesión la siguiente instrucción debe ser la primera en este archivo
session_start();
// para obtener la información mandada por post a este php:

$jsonRecibido = json_decode(file_get_contents("php://input"));

if (!isset($_SESSION['carrito'])) {
	$_SESSION['carrito'] = array();
}

$productoCarrito_en_session = false;

foreach ($_SESSION['carrito'] as $producto) {
	if ($producto[0] == $jsonRecibido->id) {
		$productoCarrito_en_session = true;
		$producto[1] += $jsonRecibido->cantidad;
	}
}

if (!$productoCarrito_en_session){
	array_push($_SESSION['carrito'], array($jsonRecibido->id, $jsonRecibido->cantidad));
}

echo json_encode("ok");