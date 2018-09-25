<?php
//include database configuration file
include 'conexion.php';
$query="SELECT * FROM componentes CROSS JOIN proveedor";
$result = mysqli_query($conexion, $query);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('id', 'nombre', 'descripcion','precio', 'existencias','idProveedor','id','nombre','apellido','correo','idEmpresa'));
while($row=mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}
fclose($output);

?>
