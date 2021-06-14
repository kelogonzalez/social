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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>

			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" required>
					</div>
				</div>

				<div class="form-group">
					<label for="solicitud" class="col-sm-2 control-label">Solicitud</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="solicitud" name="solicitud" placeholder="Solicitud" required>
					</div>
				</div>

				<div class="form-group">
					<label for="sector" class="col-sm-2 control-label">Sector</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sector" name="sector" placeholder="Sector">
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del Solicitante</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				<div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">Cédula</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cédula" required>
					</div>
				</div>
				<div class="form-group">
					<label for="departamento" class="col-sm-2 control-label">Departamento Encargado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="departamento" name="departamento" placeholder="Departamento" required>
					</div>
				</div>

							<div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado" name="estado">
							<option value="PENDIENTE">PENDIENTE</option>
							<option value="APROBADO">APROBADO</option>
							<option value="RECHAZADO">RECHAZADO</option>
						</select>
					</div>
				</div>



				<div class="form-group">
					<label for="fechaentrega" class="col-sm-2 control-label">Fecha de Entrega</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="fechaentrega" name="fechaentrega" placeholder="Fecha de Entrega">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
					</div>
				</div>


				<div class="form-group">
					<label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones">
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
