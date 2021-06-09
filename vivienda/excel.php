<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
$conexion=mysqli_connect('localhost','root','','vivienda');
 ?>
 <table class="table" border = "1">
   <tr>
     <th scope="col">Nombres y Apellidos</td>
    <th scope="col">C&eacute;dula</td>
     <th scope="col">Direcci&oacute;n</td>
     <th scope="col">Tel&eacute;fono</td>
     <th scope="col">Observaciones</td>
   </tr>

   <?php
   $sql="SELECT * from clientes";
   $result=mysqli_query($conexion,$sql);

   while($mostrar=mysqli_fetch_array($result)){
    ?>

   <tr>
     <td><?php echo $mostrar['nombre'] ?></td>
     <td><?php echo $mostrar['cedula'] ?></td>
     <td><?php echo $mostrar['direccion'] ?></td>
     <td><?php echo $mostrar['telefono'] ?></td>
     <td><?php echo $mostrar['observaciones'] ?></td>
   </tr>
 <?php
 }
  ?>
 </table>
