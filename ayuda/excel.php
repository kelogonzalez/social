<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=archivo.xls");
$conexion=mysqli_connect('localhost','root','','logistica');
 ?>
 <table class="table" border = "1">
   <tr>
     <th scope="col">Fecha</td>
     <th scope="col">Solicitud</td>
     <th scope="col">Sector</td>
     <th scope="col">Nombre del Solicitante</td>
     <th scope="col">Cedula</td>
     <th scope="col">Departamento Encargado</td>
     <th scope="col">Estado</td>
     <th scope="col">Fecha de Entrega</td>
       <th scope="col">Telefono</td>
     <th scope="col">Observaciones</td>
   </tr>


   <?php
   $sql="SELECT * from ayuda";
   $result=mysqli_query($conexion,$sql);

   while($mostrar=mysqli_fetch_array($result)){
    ?>

   <tr>
     <td><?php echo $mostrar['fecha'] ?></td>
     <td><?php echo $mostrar['solicitud'] ?></td>
     <td><?php echo $mostrar['sector'] ?></td>
     <td><?php echo $mostrar['nombre'] ?></td>
     <td><?php echo $mostrar['cedula'] ?></td>
     <td><?php echo $mostrar['departamento'] ?></td>
     <td><?php echo $mostrar['estado'] ?></td>
     <td><?php echo $mostrar['fechaentrega'] ?></td>
     <td><?php echo $mostrar['telefono'] ?></td>
     <td><?php echo $mostrar['observaciones'] ?></td>
   </tr>
 <?php
 }
  ?>
</table>
