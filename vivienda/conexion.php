<?php

	$mysqli = new mysqli('localhost', 'root', '', 'vivienda');

	if($mysqli->connect_error){

		die('Error en la conexion' . $mysqli->connect_error);

	}
?>
