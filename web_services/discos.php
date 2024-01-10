<?php

require "../librerias_php/setup_red_bean.php";

$discos = R::getAll('select * from discos');
echo(json_encode($discos));


