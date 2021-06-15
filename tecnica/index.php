


<?php
	require 'conexion.php';

	$where = "";

	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM tecnica $where";
	$resultado = $mysqli->query($sql);

?>
<html lang="es">
<title>Ayudas Técnicas ⚙️ </title>
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
				<style>
    h2 { color: #FF0000; }
  </style>
				<h2 style="text-align:center">Ayudas Técnicas ⚙️</h2>

			</div>

			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro 📃</a>
				<a href="/social/home.php" class="btn btn-warning">Regresar 👈</a>

				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar 🔍" class="btn btn-info" />
				</form>
			</div>

<a href="excel.php" class="btn btn-success btn-lg btn-block" >Descargar Excel 📊</a>
			<br>

			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Solicitante</th>
							<th>Cédula</th>
							<th>Edad</th>
							<th>Teléfono</th>
							<th>Coordinador</th>
							<th>Sector</th>
							<th>Tipo de Ayuda</th>
							<th>Cantidades Entregadas</th>
							<th>Stock</th>
							<th>Fecha de Ingreso</th>
							<th>Estado</th>
							<th>Fecha de Entrega</th>
							<th>Observaciones</th>
						</tr>
					</thead>

					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>

							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['solicitante']; ?></td>
								<td><?php echo $row['cedula']; ?></td>
								<td><?php echo $row['edad']; ?></td>
								<td><?php echo $row['telefono']; ?></td>
								<td><?php echo $row['coordinador']; ?></td>
								<td><?php echo $row['sector']; ?></td>
								<td><?php echo $row['tipoayuda']; ?></td>
								<td><?php echo $row['cantentregadas']; ?></td>
								<td><?php echo $row['stock']; ?></td>
								<td><?php echo $row['fecha']; ?></td>
								<td><?php echo $row['estado']; ?></td>
								<td><?php echo $row['fechaentrega']; ?></td>
								<td><?php echo $row['observaciones']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>

					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>

	</body>
</html>
