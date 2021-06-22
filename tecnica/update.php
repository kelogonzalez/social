<?php

	require 'conexion.php';

	$id = $_POST['id'];
	$solicitante = $_POST['solicitante'];
	$cedula = $_POST['cedula'];
	$edad = $_POST['edad'];
	$telefono = $_POST['telefono'];
	$coordinador = $_POST['coordinador'];
	$sector = $_POST['sector'];
	$tipoayuda = $_POST['tipoayuda'];
	$cantentregadas = $_POST['cantentregadas'];
	$fecha = $_POST['fecha'];
	$estado = $_POST['estado'];
	$fechaentrega = $_POST['fechaentrega'];
	$observaciones = $_POST['observaciones'];

	$sql = "UPDATE tecnica SET solicitante='$solicitante', cedula='$cedula', edad='$edad', telefono='$telefono', coordinador='$coordinador', sector='$sector', tipoayuda='$tipoayuda', cantentregadas='$cantentregadas', fecha='$fecha', estado='$estado', fechaentrega='$fechaentrega', observaciones='$observaciones' WHERE id = '$id'";
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
