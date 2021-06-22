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
					<label for="solicitante" class="col-sm-2 control-label">Solicitante</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="solicitante" name="solicitante" placeholder="Solicitante" required>
					</div>
				</div>

				<div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">Cédula</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="cedula" name="cedula" placeholder="Cedula" required>
					</div>
				</div>

				<div class="form-group">
					<label for="edad" class="col-sm-2 control-label">Edad</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="edad" name="edad" placeholder="Edad">
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Teléfono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
					</div>
				</div>
				<div class="form-group">
					<label for="coordinador" class="col-sm-2 control-label">Coordinador</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="coordinador" name="coordinador" placeholder="Coordinador" required>
					</div>
				</div>
				<div class="form-group">
					<label for="sector" class="col-sm-2 control-label">Sector</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sector" name="sector" placeholder="sector" required>
					</div>
				</div>

							<div class="form-group">
					<label for="tipoayuda" class="col-sm-2 control-label">Tipo de Ayuda</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipoayuda" name="tipoayuda">
							<option value="SILLA DE RUEDAS">SILLA DE RUEDAS</option>
							<option value="BASTON">BASTON</option>
							<option value="CAMA">CAMA</option>
							<option value="PAÑALES">PAÑALES</option>
							<option value="COLCHON">COLCHON</option>
							<option value="ANDADOR">ANDADOR</option>
							<option value="ANDADOR DE RUEDAS">ANDADOR DE RUEDAS</option>
							<option value="BASTON DE 4 PUNTAS">BASTON DE 4 PUNTAS</option>
							<option value="CAMINADORA">CAMINADORA</option>
							<option value="CARRITO">CARRITO</option>
							<option value="CARRITO PET">CARRITO PET</option>
							<option value="COCINA">COCINA</option>
							<option value="COCINETA">COCINETA</option>
							<option value="CILINDRO">CILINDRO</option>
							<option value="SABANAS">SABANAS</option>
							<option value="NEVERA">NEVERA</option>
							<option value="LICUADORA">LICUADORA</option>
							<option value="MULETAS">MULETAS</option>
							<option value="PROTESIS">PROTESIS</option>
							<option value="KIT ALIMENTO">KIT ALIMENTO</option>
							<option value="KIT BIOSEGURIDAD">KIT BIOSEGURIDAD</option>
							<option value="KIT MEDICINA">KIT MEDICINA</option>
							<option value="VARIOS">VARIOS</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="cantentregadas" class="col-sm-2 control-label">Cantidades Entregadas</label>
					<div class="col-sm-2">
						<input type="number" class="form-control" id="cantentregadas" name="cantentregadas" placeholder="Cantidades Entregadas">
					</div>
				</div>
				<div class="form-group">
					<label for="stock" class="col-sm-2 control-label">Stock</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" required>
					</div>
				</div>
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha de Ingreso</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" required>
					</div>
				</div>
				<div class="form-group">
					<label for="estado" class="col-sm-2 control-label">Estado</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" required>
					</div>
				</div>
				<div class="form-group">
					<label for="fechaentrega" class="col-sm-2 control-label">Fecha de Entrega</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fechaentrega" name="fechaentrega" placeholder="Fecha de Entrega" required>
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
