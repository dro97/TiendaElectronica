<?php
$conexion=new mysqli("localhost","root","Dxdiego1","tiendaelect");
if($conexion){
  echo "Conexion exitosa";
}
else{
  echo "conexion no exitosa";
}

?>
