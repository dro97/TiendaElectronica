<?php

$servername = "localhost:3306";
$username = "root";
$password = "Dxdiego1";
$dbname = "tiendaelect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="UPDATE usuario  SET nombre='$_POST[nombre]', apellido='$_POST[apellido]', direccion='$_POST[direccion]',telefono='$_POST[telefono]',email='$_POST[email]' WHERE nombre='$_POST[nombre]'";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 echo "<script>alert('Exito al modificar');</script>";
echo "<script> location.href='index.html' </script>";
$conn->close();


?>
