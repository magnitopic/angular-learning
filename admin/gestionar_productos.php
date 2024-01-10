<?php

require "../librerias_php/setup_red_bean.php";

if (isset($_GET["idBorrar"]))
{
	R::exec("delete from discos where id = ?", [$_GET["idBorrar"]]);

	unlink("../imagenes/" . $_GET["idBorrar"] . ".jpg");
}

//pedir los discos con read bean para listarlos:
$discos = R::getAll("select * from discos");

require("listar_discos.php");
