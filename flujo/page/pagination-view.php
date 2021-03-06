<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php require_once "pagination-controller.php"; ?>
<?php $page = (isset($_GET["page"])) ? $_GET["page"] : 1; ?>
<?php Pagination::config($page, 5, "clientes", null , 10); ?>
<?php $data = Pagination::data(); ?>
<?php $active = ""; ?>
<?php if ($data["error"]): header("location: ruta/error.php"); endif;?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Reporte de Logistica</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="main-container">
		<h1 class="title-table">REPORTE DE LOGISTICA</h1>
		<table class="table">
			<thead>
				<tr>
					<th>Nombre y Apellidos</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Articulo</th>
					<th>Cantidad</th>
					<th>Fecha de Salida</th>
					<th>Fecha de Recepción</th>
					<th>Observaciones</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach (Pagination::show_rows("nombre") as $row): ?>
		    	<tr>
			        <td><?php echo $row["nombre"]; ?></td>
			        <td><?php echo $row["direccion"]; ?></td>
							<td><?php echo $row["telefono"]; ?></td>
							<td><?php echo $row["articulo"]; ?></td>
			        <td><?php echo $row["cantidad"]; ?></td>
							<td><?php echo $row["fechasalida"]; ?></td>
							<td><?php echo $row["fechaentrega"]; ?></td>
							<td><?php echo $row["observaciones"]; ?></td>
		    	</tr>
		    	<?php endforeach; ?>
			</tbody>
		</table>

		<nav>
		  	<ul class="pagination">
		  		<?php if ($data["actual-section"] != 1): ?>
		    		<li><a href="pagination-view.php?page=1">Inicio</a></li>
		    		<li><a href="pagination-view.php?page=<?php echo $data['previous']; ?>">&laquo;</a></li>
				<?php endif; ?>

				<?php for ($i = $data["section-start"]; $i <= $data["section-end"]; $i++): ?>
				<?php if ($i > $data["total-pages"]): break; endif; ?>
				<?php $active = ($i == $data["this-page"]) ? "active" : ""; ?>
			    	<li class="<?php echo $active; ?>">
					<a href="pagination-view.php?page=<?php echo $i; ?>">
						<?php echo $i; ?>
					</a>
			    	</li>
			    	<?php endfor; ?>

				<?php if ($data["actual-section"] != $data["total-sections"]): ?>
			    	<li><a href="pagination-view.php?page=<?php echo $data['next']; ?>">&raquo;</a></li>
			    	<li><a href="pagination-view.php?page=<?php echo $data['total-pages']; ?>">Final</a></li>
		    		<?php endif; ?>
		  	</ul>
		</nav>
		<a href="../excel.php" class="btn btn-success btn-lg btn-block" >Descargar Excel</a>
		<a href="../index.html" class="btn btn-warning btn-lg btn-block" >Regresar</a>
	</div>
</body>
</html>
