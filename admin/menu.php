<?php

if( ! isset( $_SESSION["admin"] ) ){
    include("login_admin.php");
    die();//esto corta la ejecucion de php
}
?>

<style>
.menu-container{
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    margin: 2em 0px;
    border-bottom: 1px solid #fff;
    gap: 1em;
}

.menu-link{
    border: 1px solid #fff;
    border-radius: 10px 10px 0px 0px;
    padding: 1em;
    color: #fff;
    text-align: center;
}

.menu-link a{
    display: block;
    color: #fff;
    text-decoration: none;
    font-size: 1.2em;
    font-weight: bold;
}

</style>

<div style="margin-left: 1em; margin-top: .5em">
    <a href="http://localhost:4200/">Volver a la carpeta cliente</a>
    <h1>
        Bienvenido a la administracion de la tienda de discos
    </h1>
</div>
    

<div class="menu-container">
    <div class="menu-link"><a href="nuevo_producto.php">Nuevo Producto 🆕</a></div>
    <div class="menu-link"><a href="gestionar_productos.php">Gestionar Discos 💿</a></div>
    <div class="menu-link"><a href="gestionar_pedidos.php">Gestionar Pedidos 🚚</a>   </div>
</div>