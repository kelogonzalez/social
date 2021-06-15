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
				<h3 style="text-align:center">NUEVO REGISTRO DE STOCK</h3>
			</div>

			<form class="form-horizontal" method="POST" action="guardarstock.php" autocomplete="off">
				<div class="form-group">
					<label for="articulo" class="col-sm-2 control-label">Articulo</label>
					<div class="col-sm-2">
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
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
