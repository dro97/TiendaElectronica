<!DOCTYPE html>
<html>
<body>
     <a href="cerrarsesion.php">Cerrar Sesion</a>
<table>
  <tr>
<th>IdComponente</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>Precio</th>
<th>Existencias</th>
 <th>Id_Proveedor</th>
<th>IdProveedor</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Correo</th>
<th>IdEmpresa</th>
</tr>
  <?php


include("conexion.php");
include("seguridad.php");

$query="SELECT * FROM componentes CROSS JOIN proveedor";
$result=$conexion->query($query);
  while($row = mysqli_fetch_array($result))
{?>

  <tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['nombre'];?></td>
<td><?php echo $row['descripcion'];?></td>
<td><?php echo $row['precio'];?></td>
<td><?php echo $row['existencias'];?></td>
<td><?php echo $row['idProveedor'];?></td>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['nombre'];?></td>
<td><?php echo $row['apellido'];?></td>
<td><?php echo $row['correo'];?></td>
 <td><?php echo $row['idEmpresa'];?></td>
</tr>
<?php
}
 ?>
</table>
<a href="MenuPrincipal.php">Regresar</a>
<a href="UsuariosToExcel.php">Excel</a>
 <a href="UsuariosCSV.php">CSV</a>

 <div>
            <form class="form-horizontal" action="exportarCrossJoin.php" method="post" name="upload_excel"
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
