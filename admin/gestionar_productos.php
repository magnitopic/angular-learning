<?php

require "../librerias_php/setup_red_bean.php";

//pedir los discos con read bean para listarlos:
$discos = R::getAll("select * from disco");

require("listar_discos.php");
