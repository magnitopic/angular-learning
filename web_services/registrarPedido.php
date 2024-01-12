<?php
session_start();
require "../librerias_php/setup_red_bean.php";

$pedidoRecibido = json_decode( file_get_contents("php://input") );

$pedido = R::dispense("pedidos");
$pedido->nombre = $pedidoRecibido->nombre;
$pedido->email = $pedidoRecibido->email;
$pedido->direccion = $pedidoRecibido->direccion;
$pedido->tarjeta = $pedidoRecibido->tarjeta;
$pedido->telefono = $pedidoRecibido->telefono;
$pedido->caducidad = $pedidoRecibido->caducidad;
$pedido->cvv = $pedidoRecibido->cvv;
$id_pedido = R::store($pedido);


// registro los productos del carrito asociándolos a la id del pedido registrado
// y después borro el carrito

foreach( $_SESSION["carrito"] as $pc ){
    $producto_carrito = R::dispense("productopedido");
    $producto_carrito->id_pedido = $id_pedido;
    $producto_carrito->id_producto = $pc[0];
    $producto_carrito->cantidad = $pc[1];
    R::store($producto_carrito);
}

//vaciar el carrito
$_SESSION["carrito"] = array();

echo json_encode("ok");