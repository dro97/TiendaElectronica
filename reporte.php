 <?php
$servername = "localhost:3306";
$database = "tiendaelect";
$username = "root";
$password = "Dxdiego1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Conexion con base de datos COMPLETA!!!!";
$result = mysqli_query($conn,"SELECT * FROM usuario");
echo "<table>";

echo "<th>Nombre</th>";
echo "<th>Apellido</th>"  ;
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
 echo "<td>" . $row['apellido'] . "</td>";
echo "<td>" . $row['nombre'] . "</td>";
  echo "</tr>";


}

echo "</table>";
mysqli_close($conn);

?>
