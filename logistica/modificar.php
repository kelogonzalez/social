<?php
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);

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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>

			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="direccion" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Articulo</label>
					<div class="col-sm-10">
						<input type="articulo" class="form-control" id="articulo" name="articulo" placeholder="Articulo" value="<?php echo $row['articulo']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="cantidad" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" value="<?php echo $row['cantidad']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Fecha de Salida</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechasalida" name="fechasalida" placeholder="Fecha Salida" value="<?php echo $row['fechasalida']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Fecha de Recepcción</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechaentrega" name="fechaentrega" placeholder="Fecha Recepcion" value="<?php echo $row['fechaentrega']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Observaciones</label>
					<div class="col-sm-10">
						<input type="observaciones" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones" value="<?php echo $row['observaciones']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
