<?php
//include database configuration file
include 'conexion.php';
$query = "SELECT * FROM usuario ORDER BY nombre DESC";
$result = mysqli_query($conexion, $query);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('nombre', 'apellido', 'direccion','telefono', 'email'));
while($row=mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}
fclose($output);

?>
