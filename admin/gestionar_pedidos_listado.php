<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
	<?php include("menu.php"); ?>
<div>
	pedidos realizado en la tienda con Angular
</div>

<?php
$idPedido = 0;
$idPedidoAnterior = 0;
foreach($pedidos as $pedido){
	$idPedido = $pedido["id"];
?>
<!-- Esto es php -->
	<?php if($idPedido != $idPedidoAnterior){ ?>
	<div style="margin: 10px">
		Nombre destinatario: <?php echo $pedido["nombre"]; ?><br>
		Dirección de envío: <?php echo $pedido["direccion"]; ?><br>
		Numero de tarjeta: <?php echo $pedido["tarjeta"]; ?><br>
	</div>

	<div style="margin: 10px">
		productos del pedido: 
	</div>
	<?php } ?>
	<hr>
	<div style="margin: 10px">
		Nombre: <?php echo $pedido["nombre"]; ?><br>
		Artista: <?php echo $pedido["artista"]; ?><br>
		Precio: <?php echo $pedido["precio"]; ?><br>
		Cantidad: <?php echo $pedido["cantidad"]; ?><br>
	</div>
<?php
	$idPedidoAnterior = $idPedido;
}
?>
</body>
</html>