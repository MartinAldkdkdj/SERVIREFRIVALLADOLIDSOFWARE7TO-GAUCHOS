<?php
	session_start();

	if(!isset ($_SESSION['id'])){
		header("location: index.php");

	}

	$nombre = $_SESSION['nombre'];
	$tipo_usuario = $_SESSION['tipo_usuario'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
	
	<link rel="stylesheet" href="./css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./css/2.css">
	<link rel="stylesheet" href="./css/estilo.css">
</head>
<body>

	<h3 style="text-align: center;">SISTEMA DE CONTROL DE INVENTARIO Y VENTAS SERVIREFRI VALLADOLID </h3>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" style="color: black;"">SERVIREFRI</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="./principal.php">Productos</a></li>
					<li><a href="./vender.php">Vender</a></li>
					<li><a href="./ventas.php">Ventas</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><?php echo $nombre;?></a></li>
					
					<li><a href="logout.php"> Cerrar Sesion</a></li>
				</ul>
			</div>
		</div>
	</nav>



	

	<div class="container">
		<div class="row">