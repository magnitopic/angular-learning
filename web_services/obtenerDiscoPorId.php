<?php

require "../librerias_php/setup_red_bean.php";

$id = $_GET['id'];

$disco = R::getRow('select * from disco where id = ?', [$id]);

echo json_encode($disco);