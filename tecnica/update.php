<?php

	require 'conexion.php';

	$id = $_POST['id'];
	$fecha = $_POST['fecha'];
	$solicitud = $_POST['solicitud'];
	$sector = $_POST['sector'];
	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$departamento = $_POST['departamento'];
	$estado = $_POST['estado'];
	$fechaentrega = $_POST['fechaentrega'];
	$telefono = $_POST['telefono'];
	$observaciones = $_POST['observaciones'];

	$sql = "UPDATE ayuda SET fecha='$fecha', solicitud='$solicitud', sector='$sector', nombre='$nombre', cedula='$cedula', departamento='$departamento', estado='$estado', fechaentrega='$fechaentrega', telefono='$telefono',observaciones='$observaciones' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);

?>

<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>

				<a href="index.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
