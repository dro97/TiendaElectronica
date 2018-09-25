<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$query="INSERT INTO usuario (nombre, apellido,direccion,telefono,email) VALUES ('$nombre','$apellido','$direccion','$telefono','$email')";
  $result=$conexion->query($query);
  echo '<script language="javascript">alert("Usuario Guardado");</script>';
  echo "<script> location.href='index.html' </script>";

?>
