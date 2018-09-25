<?php
include("conexion.php");

$id=$_REQUEST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$sql = "UPDATE usuario set nombre='$nombre', apellido='$apellido', direccion='$direccion',telefono='$telefono',email='$email' WHERE nombre='$id'";
$result=$conexion->query($sql);
if ($result) {
    header("Location: reporte.php");

} else {
    echo "Modificacion no exitosa";
}
?>
