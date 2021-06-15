<?php
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM ayuda WHERE id = '$id'";
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
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']; ?>" required>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

				<div class="form-group">
					<label for="solicitud" class="col-sm-2 control-label">Solicitud</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="solicitud" name="solicitud" placeholder="Solicitud" value="<?php echo $row['solicitud']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="sector" class="col-sm-2 control-label">Sector</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sector" name="sector" placeholder="Sector" value="<?php echo $row['sector']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del Solicitante</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">Cédula</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="cedula" name="cedula" placeholder="cedula" value="<?php echo $row['cedula']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="departamento" class="col-sm-2 control-label">Departamento Encargado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento" value="<?php echo $row['departamento']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="PENDIENTE" <?php if($row['estado']=='PENDIENTE') echo 'selected'; ?>>PENDIENTE</option>
							<option value="APROBADO" <?php if($row['estado']=='APROBADO') echo 'selected'; ?>>APROBADO</option>
							<option value="RECHAZADO" <?php if($row['estado']=='RECHAZADO') echo 'selected'; ?>>RECHAZADO</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="fechaentrega" class="col-sm-2 control-label">Fecha de Entrega</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechaentrega" name="fechaentrega" placeholder="Fecha de Entrega" value="<?php echo $row['fechaentrega']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones" value="<?php echo $row['observaciones']; ?>"  required>
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
