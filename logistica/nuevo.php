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
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">Dirección</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>
				<div class="form-group">
					<label for="articulo" class="col-sm-2 control-label">Articulo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="articulo" name="articulo" placeholder="Articulo" required>
					</div>
				</div>
				<div class="form-group">
					<label for="cantidad" class="col-sm-2 control-label">Cantidad</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
					</div>
				</div>
				<div class="form-group">
					<label for="fechasalida" class="col-sm-2 control-label">Fecha de Salida</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechasalida" name="fechasalida" placeholder="Fecha Salida" required>
					</div>
				</div>

				<div class="form-group">
					<label for="fechaentrega" class="col-sm-2 control-label">Fecha de Recepción</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechaentrega" name="fechaentrega" placeholder="Fecha Recepción" required>
					</div>
				</div>
				<div class="form-group">
					<label for="observaciones" class="col-sm-2 control-label">Observaciones</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones" required>
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
