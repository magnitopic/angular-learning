<?php
session_start();
if (isset($_SESSION["carrito"])) {
	require "../librerias_php/setup_red_bean.php";
	$ids = array();
	$cantidades = array();
	foreach ($_SESSION["carrito"] as $elemento){
		array_push($ids, $elemento[0]);
		array_push($cantidades, $elemento[1]);
	}
	$ids_sql = implode(",", $ids);
	$sql = "SELECT * FROM discos WHERE id IN ($ids_sql)";
	$discos = R::getAll($sql);
	$respuesta = array();
	for ($i=0; $i < count($discos); $i++) { 
		array_push($respuesta, array(
			"disco" => $discos[$i],
			"cantidad" => $cantidades[$i]
		));
	}

	echo json_encode($respuesta);
}else{
	echo json_encode(array());
}
