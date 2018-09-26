<!DOCTYPE html>
 <meta charset="UTF-8">
<html>
<title>Eliminar
    </title>
<body>

    <?php
  $id=$_REQUEST['id'];
  include("conexion.php");
  $query="DELETE FROM usuario where nombre='$id'";
  $result=$conexion->query($query);
  ?>
    <script language="javascript">alert("Usuario Eliminado");</script>';
  <script> location.href='reporte.php' </script>
</body>
</html>