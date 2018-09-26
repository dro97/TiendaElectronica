<?php
include("conexion.php");
$nombre=$_POST['nombreProveedor'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$idEmpresa=$_POST['idEmpresa'];

$query="INSERT INTO proveedor (nombreProveedor, apellido,correo,idEmpresa,) VALUES ('$nombre','$apellido','$correo','$idEmpresa')";
  $result=$conexion->query($query);
  echo '<script language="javascript">alert("Componente Guardado");</script>';
  echo "<script> location.href='altaDistribuidor.php' </script>";

?>