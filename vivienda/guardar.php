<?php

	require 'conexion.php';

	$nombre = $_POST['nombre'];
	$cedula = $_POST['cedula'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];
	$observaciones = $_POST['observaciones'];

	$sql = "INSERT INTO clientes (nombre, cedula, direccion, telefono, observaciones) VALUES ('$nombre', '$cedula','$direccion', '$telefono', '$observaciones')";
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
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>

					<a href="index.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
