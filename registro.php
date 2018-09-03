
<?php
/*
   // process form
$servername = "localhost:3306";
$database = "prueba";
$username = "root";
$password = "Dxdiego1#";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
    echo "Conexion con base de datos COMPLETA!!!!";*/
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

$sql = "INSERT INTO usuario  (nombre, apellido, direccion,telefono,email)
VALUES ('$_POST[nombre]', '$_POST[apellido]', '$_POST[direccion]','$_POST[telefono]','$_POST[email]')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo '<script language="javascript">alert("Usuario Guardado");</script>';
echo "<script> location.href='index.html' </script>";
$conn->close();


?>
