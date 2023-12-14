<?php

require "../librerias_php/setup_red_bean.php";

$discos = R::getAll('select * from disco');
echo(json_encode($discos));


