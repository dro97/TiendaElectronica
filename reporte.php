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
<a href="UsuariosToExcel.php">Excel</a>
 <a href="UsuariosCSV.php">CSV</a>

 <div>
            <form class="form-horizontal" action="UsuariosCSV.php" method="post" name="upload_excel"
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>
                   </div>
            </form>
 </div>

</body>

</html>
