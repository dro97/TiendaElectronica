<!DOCTYPE html>
<html>
<head>
    <title>Reporte de Usuarios</title>
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
<body background="css/electronica.jpg">
    <div class="container">
  <button id="button" class="cerrar">Cerrar Sesion</button>
</div>
<table class="rwd-table">
  <tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Direccion</th>
<th>Telefono</th>
 <th>Email</th>
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
<td data-th="Nombre"><?php echo $row['nombre'];?></td>
<td data-th="Apellido"><?php echo $row['apellido'];?></td>
<td data-th="Direccion"><?php echo $row['direccion'];?></td>
<td data-th="Telefono"><?php echo $row['telefono'];?></td>
<td data-th="Email"><?php echo $row['email'];?></td>

<td><a href="modificar.php?id=<?php echo $row['nombre'];?>">Modificar</a></td>
<td><a href="eliminar.php?id=<?php echo $row['nombre'];?>">Eliminar</a></td>
</tr>
<?php
}
 ?>
</table>

 <div class="Export">
            <form class="form-horizontal" action="UsuariosCSV.php" method="post" name="upload_excel"
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success" value="export to excel"/>
                            </div>

                   </div>
            </form>
 </div>
    <button id="button" class="regresar">Menu Anterior</button>
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
    $( "button.regresar" ).click(function() {
  location.href="MenuComponentes.php";
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
