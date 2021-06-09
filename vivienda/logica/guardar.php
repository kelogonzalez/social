<?php
 require 'conexion.php';

 $nombre  = $_POST['nombre'];
 $cedula  = $_POST['cedula'];
 $direccion  = $_POST['direccion'];
 $telefono  = $_POST['telefono'];
 $observaciones  = $_POST['observaciones'];

$insertar = "INSERT INTO clientes VALUES ('$nombre','$cedula','$direccion','$telefono','$observaciones') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}






?>
