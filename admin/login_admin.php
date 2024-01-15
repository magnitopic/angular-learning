<style>
	body {
        font-family: "Roboto", sans-serif;
        color: #fff;
        margin: 0;
        padding: 0;
        background-color: #121212;
        box-sizing: border-box;
    }

	.container
	{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	form{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	form button{
		margin-top: 1em;
		background-color: #252525;
		color: #fff;
		border: none;
		padding: 1em;
		border-radius: 10px;
	}
	form button:hover{
		background-color: #454545;
	}
</style>

<?php
session_start();
if (isset($_POST["pass"]) && $_POST["pass"]=="123")
{
	$_SESSION["admin"] = "ok";
	header("Location: gestionar_productos.php");
}
?>

<div class="container">
	<h1>Administración de la tienda 🛠️</h1>
	<form method="post">
		
		<span>Contraseña:</span><br>
		<input type="password" name="pass" maxlength="3" /> <br>
			
		<button>Acceder</button>
	</form>
</div>