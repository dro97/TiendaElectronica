<!DOCTYPE html>
<html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>

      <link rel="stylesheet" href="css/styleBoton.css">

      <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleBoton.css">
    </head>
<body>
     <div class="container">
         <button id="button" class="cerrar">Cerrar Sesion</button></div>
<table class="rwd-table">
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
<td ><?php echo $row['id'];?></td>
<td ><?php echo $row['nombre'];?></td>
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
<script>
   var x=0,y=0;
$( "button.cerrar" ).click(function() {
  location.href="cerrarsesion.php";
  /*$( "form.alta" ).toggle("slow");
    $( "button.boton" ).hide(500);
    $( "button.button" ).hide(500);
     $( "button.ocultar" ).show(500);
      //$( "p.modificar" ).hide();
x=1;*/
});
    </script>
</body>

</html>
