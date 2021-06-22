<title>Modificar Registro</title>

<?php
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM tecnica WHERE id = '$id'";
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
					<label for="solicitante" class="col-sm-2 control-label">Solicitante</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="solicitante" name="solicitante" placeholder="solicitante" value="<?php echo $row['solicitante']; ?>" required>
					</div>
				</div>

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

				<div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">Cedula</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cedula" name="cedula" placeholder="cedula" value="<?php echo $row['cedula']; ?>"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="edad" class="col-sm-2 control-label">Edad</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="edad" name="edad" placeholder="edad" value="<?php echo $row['edad']; ?>" >
					</div>
				</div>
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">Coordinador</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="coordinador" name="coordinador" placeholder="coordinador" value="<?php echo $row['coordinador']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="departamento" class="col-sm-2 control-label">Sector</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="sector" name="sector" placeholder="Sector" value="<?php echo $row['sector']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="tipoayuda" class="col-sm-2 control-label">Tipo de Ayuda</label>
					<div class="col-sm-10">
						<select class="form-control" id="tipoayuda" name="tipoayuda">
							<option value="SILLA DE RUEDAS" <?php if($row['tipoayuda']=='SILLA DE RUEDAS') echo 'selected'; ?>>SILLA DE RUEDAS</option>
							<option value="BASTON" <?php if($row['tipoayuda']=='BASTON') echo 'selected'; ?>>BASTON</option>
							<option value="CAMA" <?php if($row['tipoayuda']=='CAMA') echo 'selected'; ?>>CAMA</option>
							<option value="PAÑALES" <?php if($row['tipoayuda']=='PAÑALES') echo 'selected'; ?>>PAÑALES</option>
							<option value="COLCHON" <?php if($row['tipoayuda']=='COLCHON') echo 'selected'; ?>>COLCHON</option>
							<option value="ANDADOR" <?php if($row['tipoayuda']=='ANDADOR') echo 'selected'; ?>>ANDADOR</option>
							<option value="ANDADOR DE RUEDAS" <?php if($row['tipoayuda']=='ANDADOR DE RUEDAS') echo 'selected'; ?>>ANDADOR DE RUEDAS</option>
							<option value="BASTON DE 4 PUNTAS" <?php if($row['tipoayuda']=='BASTON DE 4 PUNTAS') echo 'selected'; ?>>BASTON DE 4 PUNTAS</option>
							<option value="CAMINADORA" <?php if($row['tipoayuda']=='CAMINADORA') echo 'selected'; ?>>CAMINADORA</option>
							<option value="CARRITO" <?php if($row['tipoayuda']=='CARRITO') echo 'selected'; ?>>CARRITO</option>
							<option value="CARRITO PET" <?php if($row['tipoayuda']=='CARRITO PET') echo 'selected'; ?>>CARRITO PET</option>
							<option value="COCINA" <?php if($row['tipoayuda']=='PAÑALES') echo 'selected'; ?>>PAÑALES</option>
							<option value="COCINETA" <?php if($row['tipoayuda']=='COCINETA') echo 'selected'; ?>>COCINETA</option>
							<option value="CILINDRO" <?php if($row['tipoayuda']=='CILINDRO') echo 'selected'; ?>>CILINDRO</option>
							<option value="SABANAS" <?php if($row['tipoayuda']=='SABANAS') echo 'selected'; ?>>SABANAS</option>
							<option value="NEVERA" <?php if($row['tipoayuda']=='NEVERA') echo 'selected'; ?>>NEVERA</option>
							<option value="LICUADORA" <?php if($row['tipoayuda']=='LICUADORA') echo 'selected'; ?>>LICUADORA</option>
							<option value="MULETAS" <?php if($row['tipoayuda']=='MULETAS') echo 'selected'; ?>>MULETAS</option>
							<option value="PROTESIS" <?php if($row['tipoayuda']=='PROTESIS') echo 'selected'; ?>>PROTESIS</option>
							<option value="KIT ALIMENTO" <?php if($row['tipoayuda']=='KIT ALIMENTO') echo 'selected'; ?>>KIT ALIMENTO</option>
							<option value="KIT BIOSEGURIDAD" <?php if($row['tipoayuda']=='KIT BIOSEGURIDAD') echo 'selected'; ?>>KIT BIOSEGURIDAD</option>
							<option value="KIT MEDICINA" <?php if($row['tipoayuda']=='KIT MEDICINA') echo 'selected'; ?>>KIT MEDICINA</option>
							<option value="VARIOS" <?php if($row['tipoayuda']=='VARIOS') echo 'selected'; ?>>VARIOS</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="cantentregadas" class="col-sm-2 control-label">Cantidades Entregadas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cantentregadas" name="cantentregadas" placeholder="Cantidades Entregadas" value="<?php echo $row['cantentregadas']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']; ?>"  required>
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
