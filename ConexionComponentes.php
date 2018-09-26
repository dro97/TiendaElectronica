<?php
include("conexion.php");
$nombre=$_POST['nombreComponentes'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$existencias=$_POST['existencias'];
$idProveedor=$_POST['idProveedor'];

$query="INSERT INTO componentes (nombreComponentes, descripcion,precio,existencias,idProveedor) VALUES ('$nombre','$descripcion','$precio','$existencias','$idProveedor')";
  $result=$conexion->query($query);
  echo '<script language="javascript">alert("Componente Guardado");</script>';
  echo "<script> location.href='altaComponentes.php' </script>";

?>