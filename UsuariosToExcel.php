<!DOCTYPE html>
<html>
<body>
     <a href="cerrarsesion.php">Cerrar Sesion</a>
<table>
  <tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Correo</th>
<th>Operaciones</th>
<th>Operaciones</th>
</tr>
  <?php


include("conexion.php");
include("seguridad.php");
header('Content-type: application/vnd.ms-excel; charset=UTF-8');
header('Content-Disposition:form-data;filename=usuarios.xls');
    header('Pragma: no cache');
    header('Expires: 0');
$query="SELECT * FROM usuario";
$result=$conexion->query($query);
  while($row = mysqli_fetch_array($result))
{?>

  <tr>
<td><?php echo $row['nombre'];?></td>
<td><?php echo $row['apellido'];?></td>
<td><?php echo $row['direccion'];?></td>
<td><?php echo $row['telefono'];?></td>
<td><?php echo $row['email'];?></td>

<td><a href="modificar.php?id=<?php echo $row['nombre'];?>">Modificar</a></td>
<td><a href="eliminar.php?id=<?php echo $row['nombre'];?>">Eliminar</a></td>
</tr>
<?php
}
 ?>
</table>
<a href="MenuPrincipal.php">Regresar</a>

</body>

</html>
