<?php

require "../librerias_php/setup_red_bean.php";

$sql = "SELECT p.id, p.nombre, p.direccion, p.tarjeta, p.email, d.nombre, d.artista, d.precio, pp.cantidad FROM discos as d, pedidos as p, productopedido as pp WHERE p.id = pp.id_pedido and d.id = pp.id_producto ORDER by p.id desc";

$pedidos = R::getAll($sql);

require("gestionar_pedidos_listado.php");
