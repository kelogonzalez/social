<?php

	require 'conexion.php';

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

	$sql = "INSERT INTO ayuda (fecha, solicitud, sector, nombre, cedula, departamento, estado, fechaentrega, telefono, observaciones) VALUES ('$fecha', '$solicitud', '$sector', '$nombre', '$cedula', '$departamento', '$estado','$fechaentrega', '$telefono','$observaciones')";
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
