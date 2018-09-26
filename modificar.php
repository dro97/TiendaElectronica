<!DOCTYPE html>
 <meta charset="UTF-8">
<html>
<title="Modificar">
    </title>
<body>

    <?php
  $id=$_REQUEST['id'];
  include("conexion.php");
  $query="SELECT * FROM usuario where nombre='$id'";
  $result=$conexion->query($query);
  $row = mysqli_fetch_array($result);
  ?>


<form class="alta"   method="post" action="modificar_reporte.php?id=<?php echo $row['nombre'];?>">



<center>  <p>Nombre   :<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br></p>
<p>Apellido  :<input type="text" required name="apellido" value="<?php echo $row['apellido']; ?>"><br> </p>
<p>Dirección:<input type="text" required name="direccion" value="<?php echo $row['direccion']; ?>"><br></p>
<p>Teléfono :<input type="text" required name="telefono" value="<?php echo $row['telefono']; ?>"><br></p>
<p>E-mail   :<input type="text" required name="email" value="<?php echo $row['email']; ?>"><br></p>
<input class="Boton" type="Submit" name="enviar" value="Aceptar información"></center>
</form>

</body>
</html>
