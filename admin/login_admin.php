<?php
session_start();
if (isset($_POST["pass"]) && $_POST["pass"]=="123")
{
	$_SESSION["admin"] = "ok";
	header("Location: gestionar_productos.php");
}
?>

<div>
	introduce la contraseña de administrador:

</div>

<form method="post">
	
	contraseña: <input type="password" name="pass" /> <br>
		
	<input type="submit" value="LOGIN"/>
</form>